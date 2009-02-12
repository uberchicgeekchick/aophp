<?php
		require_once("./AOPHP/Formats/{$this->format}/logo.php");
		
		require_once("./AOPHP/Formats/{$this->format}/content.php");
		
		print("		<div class='left_sides_blocs'>\n" );
		require_once("./AOPHP/Formats/{$this->format}/blocs/about_me/projects.php");
		require_once("./AOPHP/Formats/{$this->format}/blocs/about_me/online_profiles.php");
		require_once("./AOPHP/Formats/{$this->format}/blocs/links/CodingChicas.php");
		require_once("./AOPHP/Formats/{$this->format}/blocs/widgets/podiobooks.com.php");
		require_once("./AOPHP/Formats/{$this->format}/blocs/links/podroll.php");
		require_once("./AOPHP/Formats/{$this->format}/blocs/links/GeekChic.php");
		print("		</div>\n");
		
		print("		<div class='right_sides_blocs'>");
		require_once("./AOPHP/Formats/{$this->format}/blocs/widgets/convert_rss.php");
		require_once("./AOPHP/Formats/{$this->format}/blocs/about_me/COPYING.php");
		require_once("./AOPHP/Formats/{$this->format}/blocs/widgets/MyTweets.php");
		require_once("./AOPHP/Formats/{$this->format}/blocs/widgets/MyBlogLog.php");
		print("		</div>");
		
		
		require_once("./AOPHP/Formats/{$this->format}/blocs/support/openSuSE.php");
		require_once("./AOPHP/Formats/{$this->format}/blocs/support/paypal.php");
?>
