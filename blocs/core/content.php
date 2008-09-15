<?php
		if( !(isset( $_GET['episode'] )) ) $_GET['episode'] = "0002";
		
		print <<<CONTENT_HEADER
		<div class='contents_container'>
			<div class='contents_top'>
				<div class='contents_top_left'>&nbsp;</div><div class='contents_top_middle'>&nbsp;</div><div class='contents_top_right'>&nbsp;</div>
			</div>
			<div class='contents_body_padding_1'>&nbsp;</div>
			<div class='contents_body_output'>
CONTENT_HEADER;
		
		if( (isset($_GET['debug'])) && (require_once("./blocs/debug.php")) )
			break;
		else if( (isset( $_GET['episode'] )) && (file_exists( "./blocs/{$_GET['episode']}.php" )) )
			require_once("./blocs/episodes/{$_GET['episode']}.php");
		else if( (isset( $_GET['about'] )) && (file_exists( "./blocs/{$_GET['about']}.php" )) )
			require_once("./blocs/about/{$_GET['about']}.php");
		else
			require_once("./blocs/about/podcast.php");
		
		print <<<CONTENT_FOOTER
			</div>
			<div class='contents_body_padding_2'>&nbsp;</div>
			<div class='contents_bottom'>
				<div class='contents_bottom_left'>&nbsp;</div><div class='contents_bottom_middle'>&nbsp;</div><div class='contents_bottom_right'>&nbsp;</div>
			</div>
		</div>
CONTENT_FOOTER;
?>