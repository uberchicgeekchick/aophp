<?php
		print <<<CONTENT_HEADER
		<div class='contents_container'>
			<div class='contents_top'>
				<div class='contents_top_left'>&nbsp;</div><div class='contents_top_middle'>&nbsp;</div><div class='contents_top_right'>&nbsp;</div>
			</div>
			<div class='contents_body_padding_1'>&nbsp;</div>
			<div class='contents_body_output'>
CONTENT_HEADER;
		
		if( (isset($_GET['debug'])) && (require_once("./blocs/debug.php")) ) return 0;
		
		require_once("./blocs/episodes/0001.php");
		
		print <<<CONTENT_FOOTER
			</div>
			<div class='contents_body_padding_2'>&nbsp;</div>
			<div class='contents_bottom'>
				<div class='contents_bottom_left'>&nbsp;</div><div class='contents_bottom_middle'>&nbsp;</div><div class='contents_bottom_right'>&nbsp;</div>
			</div>
		</div>
CONTENT_FOOTER;
?>