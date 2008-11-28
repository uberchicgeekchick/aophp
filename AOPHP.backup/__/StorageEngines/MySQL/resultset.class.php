<?php
	/*
		(c) 2007-Present Katy G. B. <uberChicGeekChick@openSUSE.en>
		Writen by a disabled uberChick.  i have Generalized Dystonia.
		
		--------------------------- current RPL disclaimer ------------------------------
		|	a copy of the RPL may be found with this project or online at		|
		|	http://www.technicalpursuit.com/licenses/RPL_1.3.html			|
		---------------------------------------------------------------------------------
		
		Unless explicitly acquired and licensed from Licensor under another license,
    		the contents of this file are subject to the Reciprocal Public License
    		("RPL")
    		Version 1.3, or subsequent versions as allowed by the RPL, and You
    		may not copy or use this file in either source code or executable
    		form, except in compliance with the terms and conditions of the RPL.
		
		All software distributed under the RPL is provided strictly on an "AS
    		IS" basis, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, AND
    		LICENSOR HEREBY DISCLAIMS ALL SUCH WARRANTIES, INCLUDING
    		WITHOUT LIMITATION, ANY WARRANTIES OF MERCHANTABILITY, FITNESS FOR
    		A PARTICULAR PURPOSE, QUIET ENJOYMENT, OR NON-INFRINGEMENT. See the
    		RPL for specific language governing rights and limitations under
    		the RPL.
	*/
	namespace realFriends::db;

	class resultset extends realFriends::db::query {
		public $success;
		public $query;
		public $formattedQuery;
		
		public $result;
		public $purpose;
		
		public $currentRow;
		
		public $primaryKey;
		public $rowsSelected;
		public $colsSelected;
		public $rowsAffected;
		
		function __construct($purpose, $query, $autoFree=false, $showQuery=false) {
			
			$this->clearValues();
			$this->result=null;
			
			parent::__construct($purpose, $query, $showQuery);
			
			if(!($this->success))
				return false;
			
			$this->fetchRow();
			
			$this->detectQueryAndSetRows();
			
			if($autoFree) {
				$this->freeResult(false);
				$this->result=null;
			}
			
		}//end '__construct' method.
		
		private function detectQueryAndSetRows() {
			
			if( (preg_match("/^\s*update/", $this->query)) )
				$this->rowsAffected = mysql_affected_rows($GLOBALS['realFriends']['db']->socket);
			else if( (preg_match("/^\s*(replace|insert)/", $this->query)) )
				$this->primaryKey = mysql_insert_id($GLOBALS['realFriends']['db']->socket);
			else if( (preg_match("/^\s*(select)/", $this->query)) ) {
				$this->rowsSelected = mysql_num_rows($this->resource);
				$this->colsSelected = mysql_num_fields($this->resource);
			}
			
		}//end 'detectQueryAndSetRows' method.
		
		private function clearValues() {
			
			$this->success = false;//not yet
			$this->formattedQuery = null;
			$this->result = null;
			$this->purpose = null;
			$this->query = null;
			
			if(!($this->result))
				$this->result = null;
			else
				$this->freeResult($this->result);
			
			$this->currentRow = null;
			
			$this->primaryKey = null;
			$this->rowsSelected = null;
			$this->colsSelected = null;
			$this->rowsAffected = null;
			
		}//end 'clearValues' method.
		
		public function fetchRow() {
			if(($this->currentRow = mysql_fetch_array($this->result, MYSQL_ASSOC)))
				return $this->currentRow;
				
			mysql_data_seek($this->result, 0);
			return null;
		}//end 'fetchRow' method.
		
		function freeResult() {
			if($this->result)
				mysql_free_result($this->result);
		}//end 'freeResult' method.
		
		function __destruct() {
			$this->freeResult();
		}//end '__destruct' method.
		
	}

?>
