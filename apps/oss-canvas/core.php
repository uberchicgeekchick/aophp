<?php
	/*
	 * Unless explicitly acquired and licensed from Licensor under another
	 * license, the contents of this file are subject to the Reciprocal Public
	 * License ('RPL') Version 1.5, or subsequent versions as allowed by the RPL,
	 * and You may not copy or use this file in either source code or executable
	 * form, except in compliance with the terms and conditions of the RPL.
	 *
	 * All software distributed under the RPL is provided strictly on an 'AS
	 * IS' basis, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, AND
	 * LICENSOR HEREBY DISCLAIMS ALL SUCH WARRANTIES, INCLUDING WITHOUT
	 * LIMITATION, ANY WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
	 * PURPOSE, QUIET ENJOYMENT, OR NON-INFRINGEMENT. See the RPL for specific
	 * language governing rights and limitations under the RPL.
	 */
	if(!( (isset($this->content)) && $this->content ))
		$this->content="aophp";
	
	$project_dir=strtolower( $this->content );
	$github_profile='uberchicgeekchick';
	//http://github.com/uberchicgeekchick/greet-tweet-know/tarball/e1d73512840ea0ba6ccfc6a43a43bc1497e98285
	/* old local uri:
	 *	./xml/{$this->doctype}/{$this->category}/{$this->content}.php
	 * new local uri:
	 *	./oss-canvas/{$this->content}.php
	 */
	
	if( (file_exists( "./apps/oss-canvas/{$this->content}.php" )) )
		return require_once( ($this->content_uri="./oss-canvas/{$this->content}.php") );
	
	$this->content_uri='./apps/oss-canvas/docs/';
	
	printf("<!-- -->
					<div class='projects_container'>
						<div class='projects_download'>
							<a href='http://www.github.com/{$github_profile}/{$project_dir}/tarball/master'><img class='projects_download' src='./graphics/icons/downloads/tar.png'></a>
							<a href='http://www.github.com/{$github_profile}/{$project_dir}/zipball/master'><img class='projects_download' src='./graphics/icons/downloads/zip.png'></a>
						</div>
						
						<div class='projects_description'>
							<h1>{$this->content} @ <a href='http://www.github.com/{$github_profile}/{$project_dir}'>github</a></h1>
							<p>
								%s
							</p>
						</div>
						<div class='copyright'>by <a href='http://www.github.com/{$github_profile}/{$project_dir}'>Me :-), Kaity G. B. / uberChick / uberchicgeekchick</a></div>
				
						<hr/>
						<ul class='my_projects'>
							<li><a href='#INFO'>Description</a></li>
							<li><a href='#DOWNLOAD'>Download</a></li>
							<li><a href='#INSTALL'>Installation</a></li>
							<li><a href='#DEPENDENCIES'>Dependencies</a></li>
							<li><a href='#COPYING'>License</a></li>
							<li><a href='#CONTACT'>Contact</a></li>
							<li><a href='#AUTHORS'>Authors</a></li>
						</ul>
						<hr/>
						<a href='INFO'>Description</a>
						<p>
							%s
						</p>
						<hr/>
						<a name='DOWNLOAD'>Download</a>
						<ul>
							<lh>You can download {$this->content}'s:</lh>
							<!--<li><a href='./?projects={$this->content}&download=packages' alt='Download {$this->content}'s package for your Linux distribution.' title='Download {$this->content}'s package for your Linux distribution.'>package for your Linux distribution</a></li>-->
							<li><a href='http://www.github.com/{$github_profile}/{$project_dir}/zipball/master' alt='Download {$this->content}'s curent source code tarball.' title='Download {$this->content}'s curent source code tarball.'>curent source code tarball</a></li>
							<li><a href='http://www.github.com/{$github_profile}/{$project_dir}/zipball/master' alt='Download {$this->content}'s curent source code tarball.' title='Download {$this->content}'s curent source code tarball.'>curent source code in a zipped archive</a></li>
						</ul>
						<p>You can also clone {$this->content} with <a href='http://git-scm.com'>Git</a>
							by running:
							<pre>$ git clone git://github.com/{$github_profile}/{$project_dir}</pre>
						</p>
						<hr/>
						<a name='INSTALL'>Installation</a>
						<p>
							%s
						</p>
						<hr/>
						<a name='DEPENDANCIES'>Dependencies</a>
						<ul>
							%s
						</ul>
						<hr/>
						<a name='LICENSE'>
							%s
						</p>
						<hr/>
						<a name='CONTACT'>Contact</a>
							%s
						<hr/>
						<a name='AUTHORS'>Authors</a>
							%s
						<hr/>
					</div>
				",( !(file_exists( ($doc="{$this->content_uri}/INFO/{$this->content}.php") ))
					?(require_once("{$this->content_uri}/INFO/default.php"))
					:(require_once($doc))
				),( !(file_exists( ($doc="{$this->content_uri}/README/{$this->content}.php") ))
					?(require_once("{$this->content_uri}/README/default.php"))
					:(require_once($doc))
				),( !(file_exists( ($doc="{$this->content_uri}/INSTALL/{$this->content}.php") ))
					?(require_once("{$this->content_uri}/INSTALL/default.php"))
					:(require_once($doc))
				),( !(file_exists( ($doc="{$this->content_uri}/DEPENDENCIES/$this->content}.php") ))
					?(require_once("{$this->content_uri}/DEPENDENCIES/default.php"))
					:(require_once($doc))
				),( !(file_exists( ($doc="{$this->content_uri}/COPYING/{$this->content}.php") ))
					?(require_once("{$this->content_uri}/COPYING/default.php"))
					:(require_once($doc))
				),( !(file_exists( ($doc="{$this->content_uri}/CONTACT/{$this->content}.php") ))
					?(require_once("{$this->content_uri}/CONTACT/default.php"))
					:(require_once($doc))
				),( !(file_exists( ($doc="{$this->content_uri}/AUTHORS/{$this->content}.php") ))
					?(require_once("{$this->content_uri}/AUTHORS/default.php"))
					:(require_once($doc))
				)
			);//printf
?>
