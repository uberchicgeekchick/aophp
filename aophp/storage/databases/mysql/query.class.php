<?php
	/*
		(c) 2007-Present Katy G. B. <uberChicGeekChick@openSUSE.en>
		Writen by a disabled uberChick.  i have Generalized Dystonia.
		
		--------------------------- current RPL disclaimer ------------------------------
		|	a opy of the RPL may be found with this project or online at		|
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

	class query {
		const KEYWORDS = "|select|insert|replace|update|set|from|left join|inner|outer|on|where|and|order by|or|where|limit";
		
		public $success;
		public $query;
		public $formattedQuery;
		
		public $purpose;		
		public $result;
		
		
		
		
		function __construct($purpose, $query, $showQuery=false) {
			
			$this->clearValues();
			
			$this->purpose = $purpose;
			$this->query = $query;
			$this->formatQuery();
			
			if($showQuery)
				print("<center>\n"
					."		<table align='center'><tr><td>\n"
					."			{$GLOBALS['rFds_realFriends']['lang']['errors']['db']['running query']}\n"
					."		</td></tr><tr><td class='mysql_error'>\n"
					."			{$this->formattedQuery}\n"
					."	</td></tr></table>\n"
					."</center>"
				);
			
			if(!(
				($this->result=(mysql_query($this->query, $GLOBALS['rFds_realFriends']['db']->socket)))
			))
				return $this->queryFailed($showQuery);
			
			$this->success = true;
			
		}//end '__construct' method
		
		
		
		
		private function clearValues() {
			
			$this->success = false;//not yet
			$this->formattedQuery = null;
			$this->result = null;
			$this->purpose = null;
			$this->query = null;
			
		}//end 'clearValues' method.
		
		
		
		
		private function queryFailed($showQuery) {
			
			print( "<center class='mysql_error'>\n"
				."	{$GLOBALS['rFds_realFriends']['settings']['title']} {$GLOBALS['rFds_realFriends']['lang']['oops']} {$this->purpose}.<br/>\n"
				."	{$GLOBALS['rFds_realFriends']['lang']['contact']}\n"
				."</center>\n"
			);
			
			if(!($showQuery))
				return false;
			
			print("<table align='center'><tr><td class='mysql_error'>\n\t"
				.$GLOBALS['rFds_realFriends']['lang']['errors']['db']['running query']
				."</td></tr><tr><td class='mysql_error'>\n\t"
				.$this->formattedQuery
				."\n</td></tr><tr><td class='mysql_error'>\n\t"
				.(mysql_error($GLOBALS['rFds_realFriends']['db']->socket))
				." ("
				.(mysql_errno($GLOBALS['rFds_realFriends']['db']->socket))
				.")\n"
				."</td></tr></table>\n"
			);
			
			return false;
			
		}//end 'queryFailed' method
		
		private function formatQuery() {
			$this->formattedQuery = preg_replace("/[\n\r]/", "<br/>", preg_replace("/\t/", "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", preg_replace("/(\(".$this::KEYWORDS."\))/i", "<span style='color:#cc0066;'>$1</span>", $this->query)));
		}//end 'formatQuery' method
		
		
		
		
		function __destruct() {
		}//end '__destruct' method
		
	}

?>
