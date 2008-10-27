<?php
		require_once("./blocs/formats/{$this->format}/logo.php");
		
		require_once("./blocs/formats/{$this->format}/menu.php");
		
		require_once("./blocs/formats/{$this->format}/content.php");
		
		print("		<div class='left_sides_blocs'>\n" );
		require_once("./blocs/links/projects.php");
		require_once("./blocs/links/me_online.php");
		require_once("./blocs/links/CodingChicas.php");
		require_once("./blocs/links/GeekChic.php");
		require_once("./blocs/links/podroll.php");
		print("		</div>\n");
		
		
		require_once("./blocs/support/openSuSE.php");
		require_once("./blocs/support/paypal.php");
?>
