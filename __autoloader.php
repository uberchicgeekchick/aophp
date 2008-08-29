<?php
	function __autoload($className) {
		if(!( (preg_match("/^(uberChicGeekChick::)/", $className)) ))
			return false;
		
		$classPath="./classes/"
					.(preg_replace("/[:]{2}/", "/",
						( (preg_replace("/^(uberChicGeekChick::)/", "", $className)) )
					)
					.".class.php"
				);
		if(!(
			(file_exists($classPath))
			&&
			(is_readable($classPath))
		))
			return false;
		
		return require_once($classPath);
	}//end '__autoload' function
?>