<?php
	/*
	 * Unless explicitly acquired and licensed from Licensor under another
	 * license, the contents of this file are subject to the Reciprocal Public
	 * License ("RPL") Version 1.5, or subsequent versions as allowed by the RPL,
	 * and You may not copy or use this file in either source code or executable
	 * form, except in compliance with the terms and conditions of the RPL.
	 *
	 * All software distributed under the RPL is provided strictly on an "AS
	 * IS" basis, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, AND
	 * LICENSOR HEREBY DISCLAIMS ALL SUCH WARRANTIES, INCLUDING WITHOUT
	 * LIMITATION, ANY WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
	 * PURPOSE, QUIET ENJOYMENT, OR NON-INFRINGEMENT. See the RPL for specific
	 * language governing rights and limitations under the RPL.
	 */
	
	function __autoload($class) {
		if(!(
			($aophp_path=preg_replace( (sprintf( "/^(%s|aophp)[%s]{2}/", AOPHP_APP_NAME, AOPHP_CLASS_SEPARATOR )), "", $class))
		))
			return false;
		
		$object=sprintf("./%s.class.php", (preg_replace( (sprintf( "/[%s]{2}/", AOPHP_CLASS_SEPARATOR )), "/", $aophp_path)) );
		
		if(!( (file_exists($object)) && (is_readable($object)) ))
			return false;
		
		return require_once($object);
	}//end '__autoload' function
	
?>
