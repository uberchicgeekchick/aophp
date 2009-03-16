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
	$project_dir=strtolower( $this->content );
	$github_profile="uberchicgeekchick";
	//http://github.com/uberchicgeekchick/greet-tweet-know/tarball/e1d73512840ea0ba6ccfc6a43a43bc1497e98285
	/* old local uri:
	 *	./aophp/xml/{$this->doctype}/{$this->category}/{$this->content}.php
	 * new local uri:
	 *	./aophp/oss-canvas/{$this->content}.php
	 */
	
	if( (file_exists( "./aophp/oss-canvas/{$this->content}.php" )) )
		return require_once( ($this->content_uri="./aophp/oss-canvas/{$this->content}.php") );
	
	print <<<BLOC
					<div class="projects_container">
						<div class="projects_download">
							<a href="http://www.github.com/{$github_profile}/{$project_dir}/tarball/master"><img border="0" width="90" src="./graphics/icons/downloads/tar.png"></a>
							<a href="http://www.github.com/{$github_profile}/{$project_dir}/zipball/master"><img border="0" width="90" src="./graphics/icons/downloads/zip.png"></a>
						</div>
						
						<div class="projects_description">
							<h1>{$this->content} @ <a href='http://www.github.com/{$github_profile}/{$project_dir}'>github</a></h1>
							<p>
								Greet-Tweet-Know is a a Twitter client for GTK+/GNOME focused on creating the most full featured Twitter client available any where.
							</p>
						</div>
						<div class="copyright">by <a href="http://www.github.com/{$github_profile}/{$project_dir}">Me :-), Kaity G. B. / uberChick / uberchicgeekchick</a></div>
				
						<hr/>
						<ul class='my_projects'>
							<li><a href='#project_description'>Description</a></li>
							<li><a href='#project_download'>Download</a></li>
							<li><a href='#project_installation'>Installation</a></li>
							<li><a href='#project_dependencies'>Dependencies</a></li>
							<li><a href='#project_license'>License</a></li>
							<li><a href='#project_authors'>Authors</a></li>
						</ul>
						<hr/>
						<a href='project_description'>Description</a>
						<p>
							Greet-Tweet-Know is a a Twitter client for GTK+/GNOME focused on creating the most full featured Twitter client available any where, not just on GNOME & Linux, even though the experience of using Greet-Tweet-Know. Greet-Tweet-Know goals are to provide access to all of Twitter's functions and to add interfaces that make using & managing your Twitter status, messages, friends, & followers. Greet-Tweet-Know can easily be embedded into other applications.
						</p>
						<hr/>
						<a name='project_download'>Download</a>
						<ul>
							<lh>You can download {$this->content}'s:</lh>
							<li><a href="./?projects={$this->content}&download=packages" alt="Download {$this->content}'s package for your Linux distribution." title="Download {$this->content}'s package for your Linux distribution.">package for your Linux distribution</a></li>
							<li><a href="http://www.github.com/{$github_profile}/{$project_dir}/zipball/master" alt="Download {$this->content}'s curent source code tarball." title="Download {$this->content}'s curent source code tarball.">curent source code tarball</a></li>
							<li><a href="http://www.github.com/{$github_profile}/{$project_dir}/zipball/master" alt="Download {$this->content}'s curent source code tarball." title="Download {$this->content}'s curent source code tarball.">curent source code in a zipped archive</a></li>
						</ul>
						<p>You can also clone {$this->content} with <a href="http://git-scm.com">Git</a>
							by running:
							<pre>$ git clone git://github.com/{$github_profile}/{$project_dir}</pre>
						</p>
						<hr/>
						<a name='project_installation'>Installation</a>
						<p>
							{$this->content} can be installed from source using the standard process for building applications.
							<ul>
								<lh>Start by downloading {$this->content}'s source as a tarball or zipped archive.&nbsp; Than</lh>
								<li>Extract the tarball, or zipped archive, you've downloaded.</li>
								<li>open a terminal in, or cd to, the directory the tarball created.</li>
								<li>Now you're ready to start installing {$this->content} by 1st running:</li>
									<ul><li>./configure</li></ul>
								<li>Note: on 64bit Linux distros you may need to help out configure a lil by running:</li>
									<ul><li>./configure --libdir=/usr/lib64</li></ul>
								<li>After you've run the above command simply run:</li>
									<ul><li>make</li></ul>
								<li>If after running make you don't have any errors than go ahead & install {$this->content}. By default make will install {$this->content} to /usr so you may need root privileges to finish installing {$this->content}. if this is the case, which it usually is, than you'll need to run the following command:</li>
									<ul><li>sudo make install</li></ul>
								<li>If you don't need to have root privileges to install Greet-Tweet-Know than simply run:</li>
									<ul><li>make install</li></ul>
							</ul>
						</p>
						<hr/>
						<a name='project_dependencies'>Dependencies</a>
						<ul>
							<li>libglade >= 0.23</li>
							<li>libxml >= 2.6.16</li>
							<li>glib >= 2.15.0</li>
							<li>gtk >= 2.14.0</li>
							<li>gconf >= 1.2.0</li>
							<li>libgio >= 2.15.5</li>
							<li>dbus >= 0.61</li>
							<li>libcanberra >= 0.4</li>
							<li>enchant >= 1.2.0</li>
							<li>iso-codes >= 0.35
						</ul>
						<hr/>
						<a name='project_license'>License</a><br/>
<pre>Unless explicitly acquired and licensed from Licensor under another
license, the contents of this file are subject to the Reciprocal Public
License ("RPL") Version 1.5, or subsequent versions as allowed by the RPL,
and You may not copy or use this file in either source code or executable
form, except in compliance with the terms and conditions of the RPL.
 
All software distributed under the RPL is provided strictly on an "AS
IS" basis, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, AND
LICENSOR HEREBY DISCLAIMS ALL SUCH WARRANTIES, INCLUDING WITHOUT
LIMITATION, ANY WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
PURPOSE, QUIET ENJOYMENT, OR NON-INFRINGEMENT. See the RPL for specific
language governing rights and limitations under the RPL.
 
 
The User-Visible Attribution Notice below, when provided, must appear in each
user-visible display as defined in Section 6.4 (d):
 
Initial art work including: design, logic, programming, and graphics are
Copyright (C) 2009 Kaity G. B. and released under the RPL where applicable.
All materials not covered under the terms of the RPL are all still
Copyright (C) 2009 Kaity G. B. and released under the terms of the
Creative Commons Non-Commercial, Attribution, Share-A-Like version 3.0 US license.
 
Any & all data stored by this Software created, generated and/or uploaded by any User
and any data gathered by the Software that connects back to the User. All data stored
by this Software is Copyright (C) of the User the data is connected to.
Users may licenses their data under the terms of an OSI approved or Creative Commons
license. Users must be allowed to select their choice of license for each piece of data
on an individual bases and cannot be applied to all of the Users. The User may
select a default license for their data. All of the Software's data pertaining to each
User must be fully accessible, exportable, and deletable to that User.</pre>
						</p>
						<hr/>
						<a name='project_authors'>Authors</a>
						<p>Kaity G. B., aka uberChick, (<a href='mailto:uberChick@uberChicGeekChick.Com'>uberChick@uberChicGeekChick.Com</a>)</p>
						<hr/>
						<a name='contact'>Contact</a>
						<p>Kaity G. B., aka uberChick, (<a href='mailto:uberChick@uberChicGeekChick.Com'>uberChick@uberChicGeekChick.Com</a>)</p>
					</div>
BLOC;
?>
