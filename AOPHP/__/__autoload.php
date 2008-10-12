<?php
	function __autoload($Class) {
		static $AppName;
		if(!(isset($AppName)))
			$AppName="speakingOUT";
		
		if(!(
			($Class=preg_replace( (sprintf( "/^(%s|AOPHP)[_]{2}/", $AppName )), "", $Class))
		))
			return false;
		
		$Object=sprintf("./AOPHP/__/%s.class.php", (preg_replace( "/[_]{2}/", "/", $Class)) );
		if(!( (file_exists($Object)) && (is_readable($Object)) ))
			return false;
		
		return require_once($Object);
	}//end '__autoload' function
?>
