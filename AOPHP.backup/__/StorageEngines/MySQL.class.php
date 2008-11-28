<?php
	class AOPHP__StorageEngines__MySQL extends AOPHP__StorageEngines{
		public $socket;
		private $database;
		
		public function __constuct($URI,$Database,$Username,$Password){
			if(!(
				($this->Socket=mysql_connect($URI, $Username, $Password, TRUE))
				&&
				(mysql_select_db($Database))
			))
				return new Exception( (AOPHP::Language::Translate( (sprintf("MySQL connection failed.")) )) );
		}
	}//AOPHP__StorageEngines__MySQL
?>