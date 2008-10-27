<?php
	if( !(isset( $_GET['enclosure'] )) )
		$_GET['enclosure']='ogg';
	
	switch( $_GET['enclosure'] ){
		case 'mp3':
			require_once( (sprintf("./blocs/feeds/mp3.rss.php", _AOPHP_CLASS_SEPARATOR_, _AOPHP_CLASS_SEPARATOR_)) );
		break;
		
		case 'hpr':
			require_once( (sprintf("./blocs/feeds/hpr.rss.php", _AOPHP_CLASS_SEPARATOR_, _AOPHP_CLASS_SEPARATOR_)) );
		break;
		
		case 'ogg':
		default:
			require_once( (sprintf("./blocs/feeds/ogg.rss.php", _AOPHP_CLASS_SEPARATOR_, _AOPHP_CLASS_SEPARATOR_)) );
		break;
	}
?>