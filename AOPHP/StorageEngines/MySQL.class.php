<?php
	namespace AOPHP::StorageEngine;
	
	class MySQL extends AOPHP::StorageEngine{
		private $Socket;
		
		public function __constuct($URI,$Database,$Username,$Password){
			if(!(
				($this->Socket=mysql_connect($URI, $Username, $Password, TRUE))
				&&
				(mysql_select_db($Database))
			))
				return new Exception( (AOPHP::Language::Translate( (sprintf("MySQL connection failed. ");
		}
	}//end:  class MySQL extends AOPHP::StorageEngine
?>