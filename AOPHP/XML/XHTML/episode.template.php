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
			<h1>Expessive Programming</h1>
			<h2>Episode {$episode}: {$title}</h2>
			Please rate &amp; review this episode on [<a href='http://www.archive.org/details/ExpressiveProgramming-{$episode}-ByUberchick'>Internet Archive</a>]<br/>
			<div class='internet_archive_mp3_player'>
				<embed src='http://www.archive.org/flow/FlowPlayerLight.swf' allowfullscreen='true' allowscriptaccess='always' quality='high' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' bgcolor='ffffff' flashvars='config={&quot;controlBarBackgroundColor&quot;:&quot;0x000000&quot;,&quot;loop&quot;:false,&quot;baseURL&quot;:&quot;http://www.archive.org/download/&quot;,&quot;showVolumeSlider&quot;:true,&quot;controlBarGloss&quot;:&quot;high&quot;,&quot;playList&quot;:[{&quot;url&quot;:&quot;ExpressiveProgramming-{$episode}-ByUberchick/{$title}_64kb.mp3&quot;}],&quot;showPlayListButtons&quot;:true,&quot;usePlayOverlay&quot;:false,&quot;menuItems&quot;:[false,false,false,false,true,true,false],&quot;initialScale&quot;:&quot;scale&quot;,&quot;autoPlay&quot;:false,&quot;autoBuffering&quot;:false,&quot;showMenu&quot;:false,&quot;showMuteVolumeButton&quot;:true,&quot;showFullScreenButton&quot;:false}' height='28px' width='350px'/>
			</div>
			<p>
				
			</p>
			<ul>
				<lh>Links mentioned in this episode:</lh>
				<li><a href='http://www.raydium.org/'>Raydium: 3-D Game Engine</a></li>
				<li><a href='http://libSDL.org/'>SDL</a></li>
				<li><a href='http://www.paulgraham.com/artistsship.html'>Paul Graham&#039;s: &quot;The Other Half of Artists Ship&quot;</a></li>
			</ul>
			<div class='episode_dls'>
				Download this episode:<br/>
				| <a href='http://www.archive.org/download/ExpressiveProgramming-0005-ByUberchick/Escapism_and_Resources.ogg'><img src='./graphics/banners/play_ogg.png' class='ogg_vorbis_download' alt='Download this episode.'/></a> | <a href='http://www.archive.org/download/ExpressiveProgramming-0005-ByUberchick/Escapism_and_Resources_64kb.mp3'><img src='./graphics/banners/drm_free_mp3.png' class='drm_free_mp3_download' alt='Download this episode.'/></a> |
			</div>
BLOC;
?>
