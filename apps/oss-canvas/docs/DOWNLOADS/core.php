<?php
	/*
	 * (c) 2007-Present Kaity G. B. <uberChick -at- uberChicGeekChick.Com>
	 * 	http://uberChicGeekChick.Com/
	 *
	 * Writen by an uberChick, other uberChicks please meet me & others @:
	 * 	http://uberChicks.Net/
	 *
	 * I'm also disabled. I live with a progressive neuro-muscular disease.
	 * I have DYT1+ Early-Onset Generalized Dystonia, a type of Generalized Dystonia.
	 * 	http://Dystonia-DREAMS.Org/
	 *
	 *
	 *
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
	 *
	 *
	 *  
	 * The User-Visible Attribution Notice below, when provided, must appear in each
	 * user-visible display as defined in Section 6.4 (d):
	 *  
	 * Initial art work including: design, logic, programming, and graphics are
	 * Copyright (C) 2009 Kaity G. B. and released under the RPL where applicable.
	 * All materials not covered under the terms of the RPL are all still
	 * Copyright (C) 2009 Kaity G. B. and released under the terms of the
	 * Creative Commons Non-Commercial, Attribution, Share-A-Like version 3.0 US license.
	 *  
	 * Any & all data stored by this Software created, generated and/or uploaded by any User
	 * and any data gathered by the Software that connects back to the User. All data stored
	 * by this Software is Copyright (C) of the User the data is connected to.
	 * Users may licenses their data under the terms of an OSI approved or Creative Commons
	 * license. Users must be allowed to select their choice of license for each piece of data
	 * on an individual bases and cannot be applied to all of the Users. The User may
	 * select a default license for their data. All of the Software's data pertaining to each
	 * User must be fully accessible, exportable, and deletable to that User.
	 *
	 */
	$output="";
	if(isset($openSuSE_build_service) && $openSuSE_build_service && isset($openSuSE_build_service['package']) && $openSuSE_build_service['package'])
		$output=sprintf("%s\n\t\t\t\t\t\t\t<ul class='build_service_releases'>\n\t\t\t\t\t\t\t\t<li class='build_service_repo'><a href='https://build.opensuse.org/package/show?package=%s.tar.bz2&project=home%%3AuberChicGeekChick%%3A%s>home:uberChicGeekChick:%s'>openSuSE&apos; build service repo</a></li>\n\t\t\t\t\t\t\t</ul>", $output, $openSuSE_build_service['package'], $openSuSE_build_service['package'], $openSuSE_build_service['package']);
	
	$output.="<ul class=\"my_projects\">\n";
	
	$download_dir=opendir("{$this->uri}/downloads/");
	while($my_download=readdir($download_dir)){
		if(preg_match("/{$this->doc}/", $my_download)){
			switch( ($download_extension=preg_replace("/.*\.([^\.]+)$/", "$1", $my_download)) ){
				case "tar": case "bz2": case "gz": case "tgz": $download_detail="tarball"; break;
				case "rpm": $download_detail="rpm"; break;
				case "ogg": $download_detail="ogg"; break;
				case "flac": $download_detail="flac"; break;
				case "mp3": $download_detail="mp3"; break;
				case "zip": $download_detail="zi"; break;
				case "deb": $download_detail="deb"; break;
				default: $download_detail="template"; break;
			}
			$output=sprintf("%s<li class=\"my_projects\"><a href='%s/downloads/%s'>%s</a><a href=\"%s/downloads/%s\"><img class='projects_download_sm' src='{$this->uri}/graphics/%s.png' alt='Download %s&#039;s %s.' title='Download %s&#039;s %s.'/></a></li>", $output, $this->uri, $my_download, $my_download, $this->uri, $my_download, $download_detail, $this->doc, $download_detail, $this->doc, $download_detail);
		}
	}
	closedir($download_dir);
	
	$git_master_tree=array(array("git master", "master"));
	if(!isset($git_commits))
		$git_commits=$git_master_tree;
	else
		$git_commits=array_merge( $git_master_tree, $git_commits);
	unset($git_master_tree);
	
	for($i=0; isset($git_commits[$i]); $i++)
		$output=sprintf("%s\n\t\t\t\t\t\t\t<li class=\"my_projects\"><a href=\"http://www.github.com/%s/%s/tree/%s\">%s</a><a href='http://www.github.com/%s/%s/tree/%s/tarball/master'><img class='projects_download_sm' src='{$this->uri}/graphics/tgz.png' alt='Download %s&#039;s version %s&#039; source code tarball.' title='Download %s&#039;s version %s&#039; source code tarball.'/></a> <a href='http://www.github.com/%s/%s/tree/%s/zipball/master'><img class='projects_download_sm' src='{$this->uri}/graphics/zip.png' alt='Download %s&#039;s version %s&#039; source code zip archive.' title='Download %s&#039;s %s source code zip arcive.'/></a></li>", $output, $github_profile, $github_project, $git_commits[$i][1], $git_commits[$i][0], $github_profile, $github_project, $git_commits[$i][1], $this->doc, $git_commits[$i][0], $this->doc, $git_commits[$i][0], $this->doc, $git_commits[$i][0], $github_profile, $github_project, $git_commits[$i][1], $this->doc, $git_commits[$i][0], $this->doc, $git_commits[$i][0]);
	
	return sprintf("%s</ul>
							<ul>
								<lh>You can download {$this->doc}'s:</lh>
								<!--<li><a href='./?projects={$this->doc}&download=packages' alt='Download {$this->doc}'s package for your Linux distribution.' title='Download {$this->doc}'s package for your Linux distribution.'>package for your Linux distribution</a></li>-->
								<li><a href='http://www.github.com/{$github_profile}/{$github_project}/zipball/master' alt='Download {$this->doc}'s curent source code tarball.' title='Download {$this->doc}'s curent source code tarball.'>curent source code tarball</a></li>
								<li><a href='http://www.github.com/{$github_profile}/{$github_project}/zipball/master' alt='Download {$this->doc}'s curent source code tarball.' title='Download {$this->doc}'s curent source code tarball.'>curent source code in a zipped archive</a></li>
							</ul>
							<p>You can also clone {$this->doc} with <a href='http://git-scm.com'>Git</a>
								by running:
								<pre>$ git clone git://github.com/{$github_profile}/{$github_project}</pre>
							</p>", $output);
?>

