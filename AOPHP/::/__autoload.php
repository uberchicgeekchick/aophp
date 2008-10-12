<?php
	function __autoload($Class) {
		static $AppName;
		if(!(isset($AppName)))
			$AppName="speakingOUT";
		
		if(!(
			($Class=preg_replace( (sprintf( "/^(%s|AOPHP)[:]{2}/", $AppName )), "", $Class))
		))
			return false;
		
		$Object=sprintf("./AOPHP/::/%s.class.php", (preg_replace( "/[:]{2}/", "/", $Class)) );
		if(!( (file_exists($Object)) && (is_readable($Object)) ))
			return false;
		
		return require_once($Object);
	}//end '__autoload' function
?>
