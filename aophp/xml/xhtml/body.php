<?php
		require_once("./aophp/xml/{$this->xml->doctype}/logo.php");
		
		require_once("./aophp/xml/{$this->xml->doctype}/content.php");
		
		print("		<div class='left_sides_blocs'>\n" );
		require_once("./aophp/xml/{$this->xml->doctype}/blocs/about_me/projects.php");
		require_once("./aophp/xml/{$this->xml->doctype}/blocs/about_me/online_profiles.php");
		require_once("./aophp/xml/{$this->xml->doctype}/blocs/links/CodingChicas.php");
		require_once("./aophp/xml/{$this->xml->doctype}/blocs/widgets/podiobooks.com.php");
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
