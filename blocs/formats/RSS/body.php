<?php
	if( !(isset($_GET['Enclosures'])) )
		if( (isset($_GET['Enclosure'])) )
			$_GET['Enclosures']==$_GET['Enclosure'];
		else
			$_GET['Enclosures']='OGG';
	
	switch( $_GET['Enclosures'] ){
		case 'MP3': case 'hpr': case 'mp3':
			require_once("./blocs/formats/RSS/enclosures/MP3.php");
			break;
		
		case 'HPR': case 'hpr':
			require_once("./blocs/formats/RSS/enclosures/HPR.php");
			break;
		
		case 'OGG': case 'ogg': default:
			require_once("./blocs/formats/RSS/enclosures/OGG.php");
			break;
	}
?>
