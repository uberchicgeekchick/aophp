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
	require_once("./__define.inc.php");
	
	require_once("./__autoload.function.php");
	
	require_once("./exception_handler:default.class.php");
	
	$aophp=new aophp__core( AOPHP_APP_CONFIG );
	
	if( (preg_match("/(\/save\/)/i", $_SERVER['REQUEST_URI'])) ) {
		$aophp->save();
		header(
			"Location:http://{$_SERVER['HTTP_HOST']}/"
			.(preg_replace( "/(\/save\/)/i", "", $aophp->query_string ))
		);
		exit(0);
	}
	
?>
