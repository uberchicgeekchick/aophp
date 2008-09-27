<?php
	function __autoload($Class) {
		static $AppName;
		if(!(isset($AppName)))
			$AppName="speakingOUT";
		
		if(!(
			(preg_replace( (sprintf( "/^(%s)/", $AppName )), "", $Class))
			&&
			(preg_match( "/^(AOPHP[:]{2)/", $Class ))
		))
			return false;
		
		$Object=sprintf("./classes/%s.class.php", (preg_replace( "/[:]{0,2}/", "/", $Class)) );
		if(!( (file_exists($Object)) && (is_readable($Object)) ))
			return false;
		
		return require_once($Object);
	}//end '__autoload' function
?>