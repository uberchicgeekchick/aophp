<?php
	if( !(isset( $_GET['enclosure'] )) )
		$_GET['enclosure']='ogg';
	
	switch( $_GET['enclosure'] ){
		case 'mp3':
			require_once("./blocs/formats/RSS/mp3.rss.php");
		break;
		
		case 'hpr':
			require_once("./blocs/formats/RSS/hpr.rss.php");
		break;
		
		case 'ogg':
		default:
			require_once("./blocs/formats/RSS/ogg.rss.php");
		break;
	}
?>