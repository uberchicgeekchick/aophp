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
	
	
	
	$GLOBALS['ClassSeparator'] = ( ( ((float)phpversion()) >= 5.3 ) ? ":" : "_" );
	$GLOBALS['AppName']="speakingOUT";
	
	
	
	function __autoload($Class) {
		global $AppName, $AOPHPsPath, $ClassSeparator;
	
		if(!(
			($AOPHP_Path=preg_replace( (sprintf( "/^(%s|AOPHP)[%s]{2}/", $AppName, $ClassSeparator )), "", $Class))
		))
			return false;
		
		$Object=sprintf("./AOPHP/%s%s/%s.class.php", $ClassSeparator, $ClassSeparator, (preg_replace( (sprintf( "/[%s]{2}/", $ClassSeparator )), "/", $AOPHP_Path)) );
		
		if(!( (file_exists($Object)) && (is_readable($Object)) ))
			return false;
		
		return require_once($Object);
	}//end '__autoload' function
	
	function __find_method_define($Class, $Method){
		global $AppName, $ClassSeparator;
	
		if(!(
			($AOPHP_Path=preg_replace( (sprintf( "/^(%s|AOPHP)[%s]{2}/", $AppName, $ClassSeparator )), "", $Class))
		))
			return false;
		
		$MethodsDefination=sprintf("./AOPHP/Methods/%s/%s.method.php", (preg_replace( (sprintf( "/[%s]{2}/", $ClassSeparator )), "/", $AOPHP_Path)), $Method );
		
		if(!( (file_exists($MethodsDefination)) && (is_readable($MethodsDefination)) ))
			return sprintf("./AOPHP/null.php");
		return $MethodsDefination;
		
	}//__load_method
?>