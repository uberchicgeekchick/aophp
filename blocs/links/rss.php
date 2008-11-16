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
			print <<<BLOC
			<!-- bloc starts -->
			<div class='rss_bloc'>
BLOC;
			$rss_fp=fopen("./blocs/formats/RSS/ogg.rss.php", "r");
			$rss=fread($rss_fp, 3000 );
			fclose($rss_fp);
			
			$rss=preg_replace("/(<\/?)item(>)/i", "$1p$2", $rss );
			$rss=preg_replace("/<title>Expressive\ Programming::([^<]*)<\/title>[^<]*<link>([^<]*)<\/link>/mi", "<a href='$2'>$1</a><br/>", $rss);
			$rss=preg_replace("/<enclosure.*url=[\"']([^\"']*)[\"'][^>]*\/>/mi", "<a href='$1'><img src='./graphics/banners/play_ogg.png' border='0' alt='Download this episode.'/></a>", $rss);
			$rss=preg_replace("/<(guid|description|pubDate)>.*<\/(guid|description|pubDate)>/mi", "", $rss);
			
			print <<<BLOC
					{$rss}
				&nbsp;
			</div>
			<!-- bloc ends -->
			
BLOC;
?>