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

	return sprintf("
							<div class='projects_download'>
								<h4>{$this->doc}-${version}${release}:</h4>"
							. ( (isset($version) && isset($release) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-${version}-${release}.x86_64.rpm")) ?"<a href='{$this->uri}/downloads/{$this->doc}-${version}-${release}.x86_64.rpm'><img class='projects_download' alt='Download {$this->doc}&#039;s latest x86_64bit RPM.' title='Download {$this->doc}&#039;s latest x86_64bit RPM.' src='{$this->uri}/graphics/x86_64.rpm.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-${version}-${release}.tar.gz"." -->")
							. ( (isset($version) && isset($release) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-${version}-${release}.i586.rpm")) ?"<a href='{$this->uri}/downloads/{$this->doc}-${version}-${release}.i586.rpm'><img class='projects_download' alt='Download {$this->doc}&#039;s latest 32bit RPM.' title='Download {$this->doc}&#039;s latest 32bit RPM.' src='{$this->uri}/graphics/rpm.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-${version}-${release}.i586.rpm"." -->")
							. ( (isset($deb) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}_${version}-${release}_amd64.deb")) ?"<a href='{$this->uri}/downloads/{$this->doc}_${version}-${release}_amd64.deb'><img class='projects_download' alt='Download {$this->doc}&#039;s latest x86_64 Debian package.' title='Download {$this->doc}&#039;s latest x86_64 Debian package.' src='{$this->uri}/graphics/x86_64.deb.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}_${version}-${release}_amd64.deb"." -->")
							. ( (isset($deb) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}_${version}-${release}_i386.deb")) ?"<a href='{$this->uri}/downloads/{$this->doc}_${version}-${release}_i386.deb'><img class='projects_download' alt='Download {$this->doc}&#039;s latest 32bit Debian package.' title='Download {$this->doc}&#039;s latest 32bit Debian package.' src='{$this->uri}/graphics/deb.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}_${version}-${release}_i386.deb"." -->")
							. ( (isset($deb) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}${deb}.deb")) ?"<a href='{$this->uri}/downloads/{$this->doc}${deb}.deb'><img class='projects_download' alt='Download {$this->doc}&#039;s latest Debian package.' title='Download {$this->doc}&#039;s latest Debian package.' src='{$this->uri}/graphics/deb.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}${deb}.deb"." -->")
							. ( (isset($version) && isset($release) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-${version}-${release}.tar.gz")) ?"<a href='{$this->uri}/downloads/{$this->doc}-${version}-${release}.tar.gz'><img class='projects_download' alt='Download {$this->doc}&#039;s latest tarball.' title='Download {$this->doc}&#039;s latest tarball.' src='{$this->uri}/graphics/tgz.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-${version}-${release}.tar.gz"." -->")
						. "</div>
						<br clear=\"all\"/>
						");
