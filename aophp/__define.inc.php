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
	
	if( !(defined("_AOPHP_APP_NAME_")) )
		define("_AOPHP_APP_NAME_", "speakingOUT");
		
	define("_AOPHP_CLASS_SEPARATOR_", "_");
	
	if( !(defined("_AOPHP_APP_CONFIG_")) )
		if( !(file_exists( (sprintf("./aophp/apps/%s/Configuration.inc.php", _AOPHP_APP_NAME_)) )) )
			define("_AOPHP_APP_CONFIG_", "./aophp/null.php");
		else
			define("_AOPHP_APP_CONFIG_", (sprintf("./aophp/Applications/%s/Configuration.inc.php", _AOPHP_APP_NAME_)) );
	
	if( !(defined("_AOPHP_APP_ABOUT_")) )
		define("_AOPHP_APP_ABOUT_", "Expressive Programming, the podcast.&nbsp; about self expression, art, &amp; freedom through creating &amp; using open source software.");
?>