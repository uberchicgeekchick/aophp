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
	$this->app="oss-canvas";
	if(!( (isset($this->doc)) && $this->doc ))
		$this->doc="life";
	
	$project_dir=strtolower( $this->doc );
	$github_profile='uberchicgeekchick';
	//http://github.com/uberchicgeekchick/greet-tweet-know/tarball/e1d73512840ea0ba6ccfc6a43a43bc1497e98285
	/* old local uri:
	 *	./xml/{$this->doctype}/{$this->category}/{$this->content}.php
	 * new local uri:
	 *	./oss-canvas/{$this->content}.php
	 */
	
	if( (file_exists( ($this->uri="./apps/oss-canvas/{$this->doc}.php") )) )
		return require_once( $this->uri );
	
	$this->uri='./apps/oss-canvas/docs/';
	
	printf("<!-- -->
					<div class='projects_container'>
						<div class='projects_download'>
							<a href='http://www.github.com/{$github_profile}/{$project_dir}/tarball/master'><img class='projects_download' src='./graphics/icons/downloads/tar.png'></a>
							<a href='http://www.github.com/{$github_profile}/{$project_dir}/zipball/master'><img class='projects_download' src='./graphics/icons/downloads/zip.png'></a>
						</div>
						
						<div class='projects_description'>
							<h1>{$this->doc}</h1><h2 class='resources'><a href='http://www.github.com/{$github_profile}/{$project_dir}'>@github</a></h2>
							<p>
								%s
							</p>
						</div>
						<div class='copyright'>by <a href='./?projects=life'>Me :-), Kaity G. B. / uberChick / uberchicgeekchick</a></div>
				
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
						<a name='DOWNLOAD'>Downloads</a>
							%s
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
				",( !(file_exists( ($doc="{$this->uri}/INFO/{$this->doc}.php") ))
					?(require_once("{$this->uri}/INFO/default.php"))
					:(require_once($doc))
				),( !(file_exists( ($doc="{$this->uri}/README/{$this->doc}.php") ))
					?(require_once("{$this->uri}/README/default.php"))
					:(require_once($doc))
				),( !(file_exists( ($doc="{$this->uri}/DOWNLOADS/{$this->doc}.php") ))
					?(require_once("{$this->uri}/DOWNLOADS/default.php"))
					:(require_once($doc))
				),( !(file_exists( ($doc="{$this->uri}/INSTALL/{$this->doc}.php") ))
					?(require_once("{$this->uri}/INSTALL/default.php"))
					:(require_once($doc))
				),( !(file_exists( ($doc="{$this->uri}/DEPENDENCIES/{$this->doc}.php") ))
					?(require_once("{$this->uri}/DEPENDENCIES/default.php"))
					:(require_once($doc))
				),( !(file_exists( ($doc="{$this->uri}/COPYING/{$this->doc}.php") ))
					?(require_once("{$this->uri}/COPYING/default.php"))
					:(require_once($doc))
				),( !(file_exists( ($doc="{$this->uri}/CONTACT/{$this->doc}.php") ))
					?(require_once("{$this->uri}/CONTACT/default.php"))
					:(require_once($doc))
				),( !(file_exists( ($doc="{$this->uri}/AUTHORS/{$this->doc}.php") ))
					?(require_once("{$this->uri}/AUTHORS/default.php"))
					:(require_once($doc))
				)
			);//printf
?>
