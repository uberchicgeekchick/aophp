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

	class socket {
		public $socket;
		public $database;
		
		
		function __construct(array $settings) {
			
			if(!(
				($this->connect($settings['server'], $settings['username'], $settings['password'], $settings['database']))
			))
				$this->connectionFailed();//fatal
			
			$this->database=$settings['database'];
			
		}//end '__construct' method



		private function connect($server, $username, $password, $database) {
			if(!(
				( ($this->socket = mysql_connect( $server, $username, $password )) )
				&&(mysql_select_db( $database, $this->socket ))
			))
				return false;
			
			return true;
			
		}//end 'connect' method



		private function connectionFailed() {
			$this->database=null;
			print(
				"<html><head><title>"
				.$GLOBALS['rFds_realFriends']['settings']['title']
				."</title><style type=\"text/css\">body { text-align:center; color:ff0066; background-color:ffddee; }</style></head><body>"
				.$GLOBALS['rFds_realFriends']['lang']['errors']['db']['connection failed']
				."<br/>"
				.$GLOBALS['rFds_realFriends']['lang']['contact']
			);
			
			if( (
				(isSet($GLOBALS['rFds_realFriends']['debug']))
				&&
				($GLOBALS['rFds_realFriends']['debug'])
			) )
				print(
					"<br/><hr size=\"1\"><br/><strong>"
					. mysql_error($this->socket)
					. " (<em>"
					. mysql_errno($this->socket)
					. "</em>)</strong>"
				);
			
			print( "</body></html>" );
			
			exit(-1);
		}//end 'connectFailed' method
		
		function __destruct() {
			if($this->socket)
				mysql_close($this->socket);
		}//end '__destruct' method
		
	}//end class

?>
