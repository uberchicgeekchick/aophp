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
	
	function __load_method($Class, $Method){
		if(!(
			($AOPHP_Path=preg_replace( (sprintf( "/^(%s|AOPHP)[%s]{2}/", _AOPHP_APP_NAME_, _AOPHP_CLASS_SEPARATOR_ )), "", $Class))
		))
			return false;
		
		$MethodsDefination=sprintf("./AOPHP/Methods/%s/%s.method.php", (preg_replace( (sprintf( "/[%s]{2}/", _AOPHP_CLASS_SEPARATOR_ )), "/", $AOPHP_Path)), $Method );
		
		/*TODO:
		 *	This currently only outputs on error message.
		 *	I need to change it to throw on Exception using AOPHP's ExceptionHandler.
		 *	I also need to make sure that it supports AOPHP's translation output filter.
		 */
		if(!( (file_exists($MethodsDefination)) && (is_readable($MethodsDefination)) ))
			return sprintf("./AOPHP/Methods/null.php");
		//return $MethodsDefination;
		return $MethodsDefination;
		
	}//__load_method
?>