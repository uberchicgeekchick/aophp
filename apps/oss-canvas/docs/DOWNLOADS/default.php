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
	return "
						<ul>
							<lh>You can download {$this->doc}'s:</lh>
							<!--<li><a href='./?projects={$this->doc}&download=packages' alt='Download {$this->uri}'s package for your Linux distribution.' title='Download {$this->uri}'s package for your Linux distribution.'>package for your Linux distribution</a></li>-->
							<li><a href='http://www.github.com/{$github_profile}/{$project_dir}/zipball/master' alt='Download {$this->uri}'s curent source code tarball.' title='Download {$this->doc}'s curent source code tarball.'>curent source code tarball</a></li>
							<li><a href='http://www.github.com/{$github_profile}/{$project_dir}/zipball/master' alt='Download {$this->uri}'s curent source code tarball.' title='Download {$this->doc}'s curent source code tarball.'>curent source code in a zipped archive</a></li>
						</ul>
						<p>You can also clone {$this->doc} with <a href='http://git-scm.com'>Git</a>
							by running:
							<pre>$ git clone git://github.com/{$github_profile}/{$project_dir}</pre>
						</p>";
?>

