<?php
	if( !(isset( $_GET['Enclosure'] )) )
		$_GET['Enclosure']='ogg';
	
	switch( $_GET['Enclosure'] ){
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