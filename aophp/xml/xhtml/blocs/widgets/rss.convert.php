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
					<br/>
					Downloads &amp; Feeds<br/>
					| <a href='./?enclosures=flac'>FLAC</a> <a href='./?xml=atom&enclosures=flac'><img class='xml_atom_enclosures_flac' src='./graphics/feeds/atom_24x24.png' alt='Subscribe to Expressive Programming&#039;s Atom 2.0 feed with very high quality FLAC episodes.' title='Subscribe to Expressive Programming&#039;s Atom 2.0 feed with very high quality FLAC episodes.'/></a> <a href='./?xml=rss&enclosures=flac'><img class='xml_rss_enclosures_flac' src='./graphics/feeds/rss_24x24.png' alt='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with very high quality FLAC episodes.' title='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with very high quality FLAC episodes.'/></a> |<br/>
					| <a href='./?enclosures=ogg'>OGG</a> <a href='./?xml=atom&enclosures=ogg'><img class='xml_atom_enclosures_ogg' src='./graphics/feeds/atom_24x24.png' alt='Subscribe to Expressive Programming&#039;s Atom 2.0 feed with high quality ogg episodes.' title='Subscribe to Expressive Programming&#039;s Atom 2.0 feed with high quality ogg episodes.'/></a> <a href='./?xml=rss&enclosures=ogg'><img class=xml_rss_enclosures_ogg' src='./graphics/feeds/rss_24x24.png' alt='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with high quality OGG episodes.' title='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with high quality OGG episodes.'/></a> |<br/>
				</div>
				<div class='rss_inner'>
					<ul class='episodes'>
BLOC;
	
	if(!(isset($_GET['enclosures'])))
		$_GET['enclosures']="ogg";
	
	$padding="";
	switch($_GET['enclosures']){
		case 'flac': case 'ogg':
			$enclosure_type=$_GET['enclosures'];
			break;
		case "mp3": case "hpr":
			$padding="<div class='AOPHP_load_error'>Expressive Programming is only available in FLAC &amp; OGG Vorbis formats.<br/>On windows or macosx?&nbsp;no worries they&#039;ll both play fine.<ul><lh>Downloads &amp;.info:</lh><li><a href='http://uberChicGeekChick.Com/?Enclosures=FLAC'>Download FLAC Episodes</a></li><li><a href='http://uberChicGeekChick.Com/?Enclosures=OGG'>Download OGG Vorbis Episodes</a></li><li><a href='http://www.xiph.org/dshow/pmwiki.php/Main/Downloads'>Windows OS</a></li><li><a href='http://www.xiph.org/quicktime/'>Mac OS X /  iTunes / Qucktime</a></li></ul></div>";
		default: $enclosure_type="ogg"; break;
	}
	
	if(!(
		(file_exists( ($rss_file=sprintf("./aophp/xml/feeds/rss/enclosures/%s.php", $enclosure_type)) ))
		&&
		($rss_fp=(fopen($rss_file, "r")))
		&&
		($rss=fread($rss_fp, (filesize($rss_file)) ))
	))
			$rss="<div class='error'>I was unable to load the specified episodes&#039; feed.</div>";
	else {
		if( $rss_fp )
			fclose($rss_fp);
		
		$rss=preg_replace("/(<\/?)item(>)/i", "$1li$2", $rss );
		$rss=preg_replace("/<title>Expressive\ Programming::([^<]*)<\/title>[^<]*<link>http:\/\/[^\/]*\/([^<]*)<\/link>/mi", "<br/><a href='$2' title='Downloading Expressive Programming::$1'>$1</a><br/>", $rss);
		$rss=preg_replace("/<enclosure.*url=[\"']([^\"']*)[\"'][^>]*\/>/mi", "<a href='$1'><img class='{$enclosure_type}_download' src='./graphics/icons/downloads/{$enclosure_type}.png' alt='Download this episode.'/></a>", $rss);
		$rss=preg_replace("/<(guid|description|pubDate)>.*<\/(guid|description|pubDate)>[\t\r\n]*/mi", "", $rss);
	}
	
	print <<<BLOC
					{$rss}
				</div><nobr><div class='rss_footer'>
					RSS 2.0 feeds:<br/>
					|<a href='./?Format=RSS&Enclosures=OGG'>OGG&nbsp;&nbsp;<img src='./graphics/feeds/rss_16x16.png' width='16' height='16' alt='Subscribe to Expressive Programming&#039;s RSS 2.0 OGG Feed' title='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with high quality OGG episodes.'/></a>
					|<a href='./?Format=RSS&Enclosures=FLAC'>FLAC&nbsp;&nbsp;<img src='./graphics/feeds/rss_16x16.png' width='16' height='16' alt='Subscribe to Expressive Programming&#039;s RSS 2.0 OGG Feed' title='Subscribe to Expressive Programming&#039;s RSS 2.0 feed with uber high quality FLAC episodes.'/></a>
				</div></nobr>
			</div>
			<!-- bloc ends -->
BLOC;
?>
