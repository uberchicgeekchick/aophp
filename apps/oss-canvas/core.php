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
	
	$github_profile='uberchicgeekchick';
	$github_project=strtolower( $this->doc );
	/* old local uri:
	 *	./xml/{$this->doctype}/{$this->category}/{$this->content}.php
	 * new local uri:
	 *	./oss-canvas/{$this->content}.php
	 */
	
	if( (file_exists( ($this->uri="./apps/oss-canvas/{$this->doc}.php") )) ){
		return require_once( $this->uri );
	}
	
	$this->uri='./apps/oss-canvas';
	
	if(file_exists("{$this->uri}/projects/{$this->doc}.php"))
		require("{$this->uri}/projects/{$this->doc}.php");
	
	
	printf("<!-- -->
					<div class='projects_container'>
						<div class='projects_description'>
							<h1>{$this->doc}</h1><h2 class='resources'><a href='http://www.github.com/{$github_profile}/{$github_project}'>@github</a></h2>
							<div class='copyright'>by <a href='./?projects=life'>Me :-), Kaity G. B. / uberChick / uberchicgeekchick</a></div>
								%s
							<p>
								%s
							</p>
						</div>
				
						<hr/>
						<ul class='my_projects'>
							<li><a href='#INFO'>Description</a></li>
							<li><a href='#SCREENSHOTS'>Screenshots</a></li>
							<li><a href='#DOWNLOAD'>Download</a></li>
							<li><a href='#INSTALL'>Installation</a></li>
							<li><a href='#DEPENDENCIES'>Dependencies</a></li>
							<li><a href='#COPYING'>License</a></li>
							<li><a href='#CONTACT'>Contact</a></li>
							<li><a href='#AUTHORS'>Authors</a></li>
						</ul>
						<hr/>
						<a name='INFO'>Description</a>
						<p>
							%s
						</p>
						<hr/>
						<a name='SCREENSHOTS'>Screenshots</a>
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
						<a name='LICENSE'>License</a>
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
				",(file_exists("{$this->uri}/docs/DOWNLOADS/local.php")
					?require("{$this->uri}/docs/DOWNLOADS/local.php")
					:""
				),(
					require("{$this->uri}/docs/README/default.php")
				),( !(file_exists( ($doc="{$this->uri}/docs/INFO/{$this->doc}.php") ))
					?(require("{$this->uri}/docs/INFO/default.php"))
					:(require($doc))
				),( !(file_exists( ($doc="{$this->uri}/docs/SCREENSHOTS/{$this->doc}.php") ))
					?"{$this->uri} has no screen shots available at this time."
					:(require($doc))
				),(
					require("{$this->uri}/docs/DOWNLOADS/core.php")
				),( !(file_exists( ($doc="{$this->uri}/docs/INSTALL/{$this->doc}.php") ))
					?(require("{$this->uri}/docs/INSTALL/default.php"))
					:(require($doc))
				),( !(file_exists( ($doc="{$this->uri}/docs/DEPENDENCIES/{$this->doc}.php") ))
					?(require("{$this->uri}/docs/DEPENDENCIES/default.php"))
					:(require($doc))
				),( !(file_exists( ($doc="{$this->uri}/docs/COPYING/{$this->doc}.php") ))
					?(require("{$this->uri}/docs/COPYING/default.php"))
					:(require($doc))
				),( !(file_exists( ($doc="{$this->uri}/docs/CONTACT/{$this->doc}.php") ))
					?(require("{$this->uri}/docs/CONTACT/default.php"))
					:(require($doc))
				),( !(file_exists( ($doc="{$this->uri}/docs/AUTHORS/{$this->doc}.php") ))
					?(require("{$this->uri}/docs/AUTHORS/default.php"))
					:(require($doc))
				)
			);//printf
?>
