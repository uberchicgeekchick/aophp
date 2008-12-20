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
				<div class='rss_header'>
					Downloads<br/>
					| <a href='./?Enclosures=OGG'>OGGs</a> <a href='./?Format=RSS&Enclosures=OGG'><img src='./graphics/rss/mini_rss.png' width='24' height='24' alt='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with high quality OGG episodes.' title='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with high quality OGG episodes.'/></a> |<br/>
					| <a href='./?Enclosures=MP3'>MP3s</a> <a href='./?Format=RSS&Enclosures=MP3'><img src='./graphics/rss/mini_rss.png' width='24' height='24' alt='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with low quality MP3 episodes.' title='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with low quality MP3 episodes.'/></a> |<br/>
					| <a href='./?Enclosures=HPR'>HPR</a> <a href='./?Format=RSS&Enclosures=MP3'><img src='./graphics/rss/mini_rss.png' width='24' height='24' alt='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with medium quality MP3 episodes.&nbsp; Thnx to Hacker Public Radio.' title='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with medium quality MP3 episodes.&nbsp; Thnx to Hacker Public Radio..'/></a>
					|
				</div>
				<div class='rss_inner'>
					<ul class='episodes'>
BLOC;
	
	if(!(isset($_GET['Enclosures'])))
		$_GET['Enclosures']="OGG";
	
	switch($_GET['Enclosures']){
		case "MP3": case "mp3": $enclosure_type="MP3"; break;
		case "HPR": case "hpr": $enclosure_type="HPR"; break;
		case "OGG": case "ogg": default: $enclosure_type="OGG"; break;
	}
	
	if(!(
		(file_exists("./blocs/formats/RSS/enclosures/{$enclosure_type}.php"))
		&&
		($rss_fp=(fopen("./blocs/formats/RSS/enclosures/{$enclosure_type}.php", "r")))
		&&
		($rss=fread($rss_fp, (filesize( "./blocs/formats/RSS/enclosures/{$enclosure_type}.php" )) ))
	))
			$rss="<div class='error'>I was unable to load the specified episodes&#039; feed.</div>";
	else {
		fclose($rss_fp);
		
		$rss=preg_replace("/(<\/?)item(>)/i", "$1li$2", $rss );
		$rss=preg_replace("/<title>Expressive\ Programming::([^<]*)<\/title>[^<]*<link>http:\/\/[^\/]*\/([^<]*)<\/link>/mi", "<a href='$2' title='Downloading Expressive Programming::$1'>$1</a><br/>", $rss);
		$rss=preg_replace("/<enclosure.*url=[\"']([^\"']*)[\"'][^>]*\/>/mi", "<a href='$1'><img class='{$enclosure_type}' src='./graphics/icons/downloads/{$enclosure_type}.png' alt='Download this episode.'/></a>", $rss);
		$rss=preg_replace("/<(guid|description|pubDate)>.*<\/(guid|description|pubDate)>[\t\r\n]*/mi", "", $rss);
	}
	
	print <<<BLOC
					{$rss}
				</div><nobr><div class='rss_footer'>
					RSS 2.0 feeds:<br/>
					|<a href='./?Format=RSS&Enclosures=OGG'>OGG&nbsp;&nbsp;<img src='./graphics/rss/tiny_rss.png' width='16' height='16' alt='Subscribe to Expressive Programming&#039;s RSS 2.0 OGG Feed' title='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with high quality OGG episodes.'/></a>
					|<a href='./?Format=RSS&Enclosures=MP3'>MP3&nbsp;&nbsp;<img src='./graphics/rss/tiny_rss.png' width='16' height='16' alt='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with low quality MP3 episodes.' title='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with low quality MP3 episodes.'/></a>
					|<a href='./?Format=RSS&Enclosures=HPR'>HPR&nbsp;&nbsp;<img src='./graphics/rss/tiny_rss.png' width='16' height='16' alt='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with medium quality MP3 episodes.' title='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with medium quality MP3 episodes.&nbsp; Thnx to Hacker Public Radio.'/></a>|
				</div></nobr>
			</div>
			<!-- bloc ends -->
BLOC;
?>
