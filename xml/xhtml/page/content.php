<?php
	/*
	 * Unless explicitly acquired and licensed from Licensor under another
	 * license, the contents of this file are subject to the Reciprocal Public
	 * License ("RPL") Version 1.5, or subsequent versions as allowed by the RPL,
	 * and You may not copy or use this file in either source code or executable
	 * form, except in compliance with the terms and conditions of the RPL.
	 *
	 * All software distributed under the RPL is provided strictly on an "AS
	 * IS" basis, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, AND
	 * LICENSOR HEREBY DISCLAIMS ALL SUCH WARRANTIES, INCLUDING WITHOUT
	 * LIMITATION, ANY WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
	 * PURPOSE, QUIET ENJOYMENT, OR NON-INFRINGEMENT. See the RPL for specific
	 * language governing rights and limitations under the RPL.
	 */
	
	print <<<CONTENT_HEADER
		<div class='contents_container'>
			<div class='contents_top'>
				<div class='contents_top_left'>&nbsp;</div><div class='contents_top_middle'>&nbsp;</div><div class='contents_top_right'>&nbsp;</div>
			</div>
			<div class='contents_body_padding_1'>&nbsp;</div>
			<div class='contents_body_output'>
				<!-- Begins displaying: {$this->xml->content_uri} -->
CONTENT_HEADER;
	
	require_once( $this->xml->content_uri );
	
	require_once( "./xml/{$this->xml->doctype}/page/hugs_and_bye.php" );
	
	print <<<CONTENT_FOOTER
				<!-- Ends displaying: {$this->xml->content_uri} -->
			</div>
			<div class='contents_body_padding_2'>&nbsp;</div>
			<div class='contents_bottom'>
				<div class='contents_body_padding_1'>&nbsp;</div><div class='contents_bottom_middle'>
CONTENT_FOOTER;
	
	require_once( "./xml/{$this->xml->doctype}/page/disqus.php" );
	
	print <<<CONTENT_FOOTER
				</div>
			<div class='contents_body_padding_2'>&nbsp;</div>
			</div><div class='contents_bottom'>
				<div class='contents_bottom_left'>&nbsp;</div><div class='contents_bottom_middle'>&nbsp;</div><div class='contents_bottom_right'>&nbsp;</div>
			</div>
		</div>
CONTENT_FOOTER;
?>
