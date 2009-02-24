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
					| <a href='./?Enclosures=OGG'>OGG</a> <a href='./?Format=RSS&Enclosures=OGG'><img src='./graphics/rss/rss_24x24.png' width='24' height='24' alt='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with high quality OGG episodes.' title='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with high quality OGG episodes.'/></a> |<br/>
					| <a href='./?Enclosures=FLAC'>FLAC</a> <a href='./?Format=RSS&Enclosures=FLAC'><img src='./graphics/rss/rss_24x24.png' width='24' height='24' alt='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with very high quality FLAC episodes.' title='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with very high quality FLAC episodes.'/></a> |<br/>
					|
				</div>
				<div class='rss_inner'>
					<ul class='episodes'>
BLOC;
	
	if(!(isset($_GET['Enclosures'])))
		$_GET['Enclosures']="OGG";
	
	$padding="";
	switch($_GET['Enclosures']){
		case 'FLAC': case 'OGG':
			$enclosure_type=$_GET['Enclosures'];
			break;
		case "MP3": case "mp3": case "HPR": case "hpr":
			$padding="<div class='AOPHP_load_error'>Expressive Programming is only available in FLAC &amp; OGG Vorbis formats.<br/>On windows or macosx?&nbsp;no worries they&#039;ll both play fine.<ul><lh>Downloads &amp;.info:</lh><li><a href='http://uberChicGeekChick.Com/?Enclosures=FLAC'>Download FLAC Episodes</a></li><li><a href='http://uberChicGeekChick.Com/?Enclosures=OGG'>Download OGG Vorbis Episodes</a></li><li><a href='http://www.xiph.org/dshow/pmwiki.php/Main/Downloads'>Windows OS</a></li><li><a href='http://www.xiph.org/quicktime/'>Mac OS X /  iTunes / Qucktime</a></li></ul></div>";
		case "ogg": default: $enclosure_type="OGG"; break;
	}
	
	if(!(
		(file_exists( ($rss_file=sprintf("./AOPHP/XML/RSS/enclosures/%s.RSS.php", $enclosure_type)) ))
		&&
		($rss_fp=(fopen($rss_file, "r")))
		&&
		($rss=fread($rss_fp, (filesize($rss_file)) ))
	))
			$rss="<div class='error'>I was unable to load the specified episodes&#039; feed.</div>";
	else {
		fclose($rss_fp);
		
		$rss=preg_replace("/(<\/?)item(>)/i", "$1li$2", $rss );
		$rss=preg_replace("/<title>Expressive\ Programming::([^<]*)<\/title>[^<]*<link>http:\/\/[^\/]*\/([^<]*)<\/link>/mi", "<br/><a href='$2' title='Downloading Expressive Programming::$1'>$1</a><br/>", $rss);
		$rss=preg_replace("/<enclosure.*url=[\"']([^\"']*)[\"'][^>]*\/>/mi", "<a href='$1'><img class='{$enclosure_type}_Download' src='./graphics/icons/downloads/{$enclosure_type}.png' alt='Download this episode.'/></a>", $rss);
		$rss=preg_replace("/<(guid|description|pubDate)>.*<\/(guid|description|pubDate)>[\t\r\n]*/mi", "", $rss);
	}
	
	print <<<BLOC
					{$rss}
				</div><nobr><div class='rss_footer'>
					RSS 2.0 feeds:<br/>
					|<a href='./?Format=RSS&Enclosures=OGG'>OGG&nbsp;&nbsp;<img src='./graphics/rss/rss_16x16.png' width='16' height='16' alt='Subscribe to Expressive Programming&#039;s RSS 2.0 OGG Feed' title='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with high quality OGG episodes.'/></a>
					|<a href='./?Format=RSS&Enclosures=FLAC'>FLAC&nbsp;&nbsp;<img src='./graphics/rss/rss_16x16.png' width='16' height='16' alt='Subscribe to Expressive Programming&#039;s RSS 2.0 OGG Feed' title='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with uber high quality FLAC episodes.'/></a>
				</div></nobr>
			</div>
			<!-- bloc ends -->
BLOC;
?>
