<?php
		require_once("./blocs/formats/{$this->format}/logo.php");
		
		require_once("./blocs/formats/{$this->format}/content.php");
		
		print("		<div class='left_sides_blocs'>\n" );
		require_once("./blocs/links/projects.php");
		require_once("./blocs/links/me_online.php");
		require_once("./blocs/links/CodingChicas.php");
		require_once("./blocs/widgets/podiobooks.com.php");
		require_once("./blocs/links/podroll.php");
		require_once("./blocs/links/GeekChic.php");
		print("		</div>\n");
		
		print("		<div class='right_sides_blocs'>");
		require_once("./blocs/links/episodes.php");
		require_once("./blocs/links/copyright.php");
		require_once("./blocs/widgets/MyTweets.php");
		require_once("./blocs/widgets/MyBlogLog.php");
		print("		</div>");
		
		
		require_once("./blocs/support/openSuSE.php");
		require_once("./blocs/support/paypal.php");
?>
