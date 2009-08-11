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
	$projects=array(
		'get2gnow'=>array(
			'github'=>array(
				'version'=>"#00EEEDa06",
				'commit'=>"02c5590c559506e90a73cc3eb6031f6c28d8781af",
			),
			'cli.gs'=>'get2gnow.release',
		),
	);
	print <<<BLOC
			<!-- bloc starts -->
			<div class='bloc'>
				<div class='bloc_title'>
					My other projects
				</div>
				<div class='bloc_content'>
					<ul class='my_projects'>
						<lh>~My Websites~</lh>
						<li class='my_websites'><a href='http://Dystonia-DREAMS.Org/'>Dystonia-DREAMS.Org</a></li>
						<li class='my_websites'><a href='http://uberChicks.Net/'>uberChicks.Net</a> <!--&ndash; <a href='javascript:show_info("uberChicks_Net");' id='uberChicks_Net_About_Link'>[&darr;]</a>--></li>
					</ul><br/>
					<ul class='my_projects_list'>
						<lh>~My GNOME Apps~</lh>
						<ul class='my_projects'>
							<li class='my_projects'><a href='./?projects=alacast'>Alacast</a></li>
							<ul class='github_releases'>
								<li class='github_repo'><a href='https://www.github.com/uberchicgeekchick/alacast/tree/master'>master repo</a></li>
								<ul class='my_projects'>
									<li class='my_projects'><a href='./?projects=alacast#DOWNLOAD'>All Versions</li>
								</ul>
							</ul>
						</ul>
						<ul class='my_projects'>
							<ul class='github_releases'>
BLOC;
	$prev_doc=$this->doc;
	$prev_uri=$this->uri;
	$this->uri='./apps/oss-canvas';
	$this->doc="get2gnow";
	
	if(file_exists("{$this->uri}/projects/{$this->doc}.php"))
		require("{$this->uri}/projects/{$this->doc}.php");
	
	/*print( include("./apps/oss-canvas/docs/DOWNLOADS/core.php") );*/
	$this->uri=$prev_uri;
	$this->doc=$prev_doc;
	
	print <<<BLOC
								<li class='github_repo'><a href='https://www.github.com/uberchicgeekchick/get2gnow/tree/master'>master repo</li>
								<li class="github_release"><span style="color:#999999; background-color#{$projects['get2gnow']['github']['version']};"><a href="http://github.com/uberchicgeekchick/get2gnow/tree/{$projects['get2gnow']['github']['commit']}">{$projects['get2gnow']['github']['version']}</a></span></li>
								<ul class='my_projects'>
									<lh>ScreenShots</lh>
BLOC;
	print( include("./apps/oss-canvas/docs/SCREENSHOTS/get2gnow.php") );
	
	print <<<BLOC
								</ul>
								<li class='github_release'><a href='http://cli.gs/{$projects['get2gnow']['cli.gs']}'>latest stable release[short link]</a></li>
								<li class="github_release"><span style="color:#999999; background-color:#0000DDaC4;"><a href="http://github.com/uberchicgeekchick/get2gnow/tree/2153cc59673836859000652727bd78e99f5f5806">release #0000DDaC4</a></span></li>
								<ul class='my_projects'>
									<li class='my_projects'><a href='./?projects=get2gnow#DOWNLOAD'>All Versions</li>
								</ul>
							</ul>
						</ul>
						<ul class='my_projects'>
							<li class='my_projects'><a href='./?projects=connectED'>connectED</a></li>
							<ul class='github_releases'>
								<li class='github_repo'><a href='https://www.github.com/uberchicgeekchick/connectED/tree/master'>master repo</a></li>
								<li class='github_release'><a href='http://cli.gs/connected.release'>version 1.0.1.2</a></li>
								<ul class='my_projects'>
									<li class='my_projects'><a href='./?projects=connectED#DOWNLOAD'>All Versions</li>
								</ul>
							</ul>
						</ul>
					</ul><br/>
					<ul class='my_projects'>
						<lh>~Empowering my Site~</lh>
						<li class='github_repo'><a href='https://www.github.com/uberchicgeekchick/aophp/tree/master'>AOPHP</a></li>
						<li class='github_repo'><a href='https://www.github.com/uberchicgeekchick/speaking-out/tree/master'>speakingOUT</a></li>
					</ul><br/>
					<ul class='github_releases'>
						<lh>~My Other Web Apps~</lh>
						<li class='github_repo'><a href='https://www.github.com/uberchicgeekchick/realfriends/tree/master'>realfriends</a></li>
						<li class='github_repo'><a href='https://www.github.com/uberchicgeekchick/uberchicks-oss-social-network/tree/master'>uberchicks-oss-social-network</a></li>
						<li class='github_repo'><a href='https://www.github.com/uberchicgeekchick/women.opensuse.org/tree/master'>women.opensuse.org</a></li>
					</ul>
				</div>
				<div class='bloc_extra'>&nbsp;</div>
			</div>
			<!-- bloc ends -->
		
BLOC;
?>
