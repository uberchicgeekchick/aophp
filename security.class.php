<?php
	/*
		(c) 2007-Present Katy G. B. <uberChicGeekChick@openSUSE.en>
		Writen by a disabled uberChick.  i have Generalized Dystonia.
		
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
	//namespace aophp;
	
	class aophp__security {
		
		public $data;
		public $query_string;
		
		function __construct() {
			
			if( ! (
				(isSet($_SERVER['QUERY_STRING']))
					&&
				(count($_GET))
			) ) {
				unset($_GET);
				$this->validate_query_string();
				$_GET=$this->correct( "GET" );
			}
			
			$this->data=array(
				'get' => &$_GET,
				'post' => &$_POST,
				'cookies' => &$_COOKIE
			);
			
		}//end '__construct' method.
		
		private function validate_query_string() {
			/* This sets $this->query_string from $_SERVER['REQUEST_URI'].
			 * after validating that only values requested from views, blocs, &etc are included.
			 */
			
			// TODO: Needs cleaned.
			$this->query_string=$_SERVER['REQUEST_URI'];
		}//end method: validate_query_string();
		
		private function correct( $method = "GET" ) {
			switch( $method ) {
				case "GET":
					if( ! (
						(isset($_SERVER['QUERY_STRING']))
							&&
						($_SERVER['QUERY_STRING'])
					) )
						return array();
						
					$new = explode( "&", ( $_SERVER['QUERY_STRING'] . "&" ) );
				break;
				
				case "POST":
				break;
				
				case "COOKIE":
				break;
				
				default:
					return -1;
				break;
			}
			return $this->decode($new);
		}//end 'correct' method
		
		private function decode(&$new) {
			$new_global=array();
			for( $i = 0; $i < ( (count( $new )) - 1 ); $i++ ) {
				$temp=explode("=", $new[$i]);
				$new_global[ ( urldecode( $temp[0] )) ]=urldecode( ( (isset( $tempData[1] )) ?$tempData[1] :"" ) );
			}
			unset($new);
			return $new_global;
			
		}//end 'decode' method
		
		function __destruct() {
		}//end '__destruct' method
	}

?>
