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
	
	if( !(defined("_AOPHP_CLASS_SEPARATOR_")) )
		define("_AOPHP_CLASS_SEPARATOR_", ( ( ( (float)phpversion() ) >= 5.3 ) ? ":" : "_" ) );
	
	if( !(defined("_AOPHP_APP_NAME_")) )
		define("_AOPHP_APP_NAME_", "speakingOUT");
	
	if( !(defined("_AOPHP_APP_CONFIG_")) )
		if( !(file_exists( (sprintf("./AOPHP/Applications/%s/Configuration.inc.php", _AOPHP_APP_NAME_)) )) )
			define("_AOPHP_APP_CONFIG_", "./AOPHP/null.php");
		else
			define("_AOPHP_APP_CONFIG_", (sprintf("./AOPHP/Applications/%s/Configuration.inc.php", _AOPHP_APP_NAME_)) );
	
	if( !(defined("_AOPHP_APP_ABOUT_")) )
		define("_AOPHP_APP_ABOUT_", "Expressive Programming, the podcast.&nbsp; about self expression, art, &amp; freedom through creating &amp; using open source software.");
	
	if( !(isset($_GET['Format'])) )
		define("_AOPHP_FORMAT_", "XHTML");
	else
		switch($_GET['Format']){
			case 'RSS':
			case 'XHTML':
				define("_AOPHP_FORMAT_", $_GET['Format']);
				break;
			
			default;
				define("_AOPHP_FORMAT_", "XHTML");
				break;
		}
?>