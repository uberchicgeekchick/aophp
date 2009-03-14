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
	
	require_once("./aophp/xml/{$this->xml->doctype}/page/logo.php");
	
	require_once("./aophp/xml/{$this->xml->doctype}/page/menu.php");
	
	require_once("./aophp/xml/{$this->xml->doctype}/page/content.php");
	
	print("		<div class='left_sides_blocs'>\n" );
	require_once("./aophp/xml/{$this->xml->doctype}/blocs/about_me/projects.php");
	require_once("./aophp/xml/{$this->xml->doctype}/blocs/about_me/online_profiles.php");
	require_once("./aophp/xml/{$this->xml->doctype}/blocs/links/CodingChicas.php");
	require_once("./aophp/xml/{$this->xml->doctype}/blocs/links/podroll.php");
	require_once("./aophp/xml/{$this->xml->doctype}/blocs/links/GeekChic.php");
	print("		</div>\n");
	
	print("		<div class='right_sides_blocs'>");
	require_once("./aophp/xml/{$this->xml->doctype}/blocs/widgets/rss.convert.php");
	require_once("./aophp/xml/{$this->xml->doctype}/blocs/about_me/COPYING.php");
	require_once("./aophp/xml/{$this->xml->doctype}/blocs/widgets/MyTweets.php");
	require_once("./aophp/xml/{$this->xml->doctype}/blocs/widgets/MyBlogLog.php");
	print("		</div>");
	
	require_once("./aophp/xml/{$this->xml->doctype}/blocs/support/openSuSE.php");
	require_once("./aophp/xml/{$this->xml->doctype}/blocs/support/paypal.php");
?>
