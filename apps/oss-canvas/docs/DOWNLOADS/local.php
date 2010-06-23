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
	
	if(!(isset($version) && isset($release) ))
		return sprintf("
							<div class='projects_download'>
								<ul class='my_projects'>
									<li class='my_projects'><a href=\"?projects={$this->doc}\">{$this->doc}:</a></li>
								</ul>
							</div>
							<br clear=\"all\"/>
		");
	
	return sprintf("
							<div class='projects_download'>
								<ul class='my_projects'>
									<li class='my_projects'><a href=\"?projects={$this->doc}\">{$this->doc}-{$version}{$release}:</a></li>
								</ul>"
							. ( (isset($version) && isset($release) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.x86_64.tar.gz")) ?"<a href='{$this->uri}/downloads/{$this->doc}-".preg_replace("/%/", "%%", urlencode($version))."{$release}.x86_64.tar.gz'><img class='projects_download' alt='Download {$this->doc}&#039;s latest source tarball.' title='Download {$this->doc}&#039;s latest source tarball.' src='{$this->uri}/graphics/tgz.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.x86_64.tar.gz"." -->")
							. ( (isset($version) && isset($release) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.i586.tar.gz")) ?"<a href='{$this->uri}/downloads/{$this->doc}-".preg_replace("/%/", "%%", urlencode($version))."{$release}.i586.tar.gz'><img class='projects_download' alt='Download {$this->doc}&#039;s latest source tarball.' title='Download {$this->doc}&#039;s latest source tarball.' src='{$this->uri}/graphics/tgz.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.i586.tar.gz"." -->")
							. ( (isset($version) && isset($release) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.tar.gz")) ?"<a href='{$this->uri}/downloads/{$this->doc}-".preg_replace("/%/", "%%", urlencode($version))."{$release}.tar.gz'><img class='projects_download' alt='Download {$this->doc}&#039;s latest source tarball.' title='Download {$this->doc}&#039;s latest source tarball.' src='{$this->uri}/graphics/tgz.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.tar.gz"." -->")
							. ( (isset($version) && isset($release) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.x86_64.tar.bz2")) ?"<a href='{$this->uri}/downloads/{$this->doc}-".preg_replace("/%/", "%%", urlencode($version))."{$release}.x86_64.tar.bz2'><img class='projects_download' alt='Download {$this->doc}&#039;s latest source tarball.' title='Download {$this->doc}&#039;s latest source tarball.' src='{$this->uri}/graphics/tarball.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.x86_64.tar.bz2"." -->")
							. ( (isset($version) && isset($release) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.i586.tar.bz2")) ?"<a href='{$this->uri}/downloads/{$this->doc}-".preg_replace("/%/", "%%", urlencode($version))."{$release}.i586.tar.bz2'><img class='projects_download' alt='Download {$this->doc}&#039;s latest source tarball.' title='Download {$this->doc}&#039;s latest source tarball.' src='{$this->uri}/graphics/tarball.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.i586.tar.bz2"." -->")
							. ( (isset($version) && isset($release) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.tar.bz2")) ?"<a href='{$this->uri}/downloads/{$this->doc}-".preg_replace("/%/", "%%", urlencode($version))."{$release}.tar.bz2'><img class='projects_download' alt='Download {$this->doc}&#039;s latest source tarball.' title='Download {$this->doc}&#039;s latest source tarball.' src='{$this->uri}/graphics/tarball.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.tar.bz2"." -->")
							. ( (isset($version) && isset($release) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.x86_64.rpm")) ?"<a href='{$this->uri}/downloads/{$this->doc}-".preg_replace("/%/", "%%", urlencode($version))."{$release}.x86_64.rpm'><img class='projects_download' alt='Download {$this->doc}&#039;s latest x86_64bit RPM.' title='Download {$this->doc}&#039;s latest x86_64bit RPM.' src='{$this->uri}/graphics/x86_64.rpm.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.tar.gz"." -->")
							. ( (isset($version) && isset($release) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.i586.rpm")) ?"<a href='{$this->uri}/downloads/{$this->doc}-".preg_replace("/%/", "%%", urlencode($version))."{$release}.i586.rpm'><img class='projects_download' alt='Download {$this->doc}&#039;s latest 32bit RPM.' title='Download {$this->doc}&#039;s latest 32bit RPM.' src='{$this->uri}/graphics/rpm.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}-{$version}{$release}.i586.rpm"." -->")
							. ( (isset($deb) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}_${deb}_amd64.deb")) ?"<a href='{$this->uri}/downloads/{$this->doc}_${deb}_amd64.deb'><img class='projects_download' alt='Download {$this->doc}&#039;s latest 64bit(amd64) Ubuntu Karmic Debian package.' title='Download {$this->doc}&#039;s latest 64bit(amd64) Ubuntu Karmic Debian package.' src='{$this->uri}/graphics/x86_64.deb.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}_${deb}_amd64.deb"." -->")
							. ( (isset($deb) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}_${deb}_i386.deb")) ?"<a href='{$this->uri}/downloads/{$this->doc}_${deb}_i386.deb'><img class='projects_download' alt='Download {$this->doc}&#039;s latest 32bit(i386) Ubuntu Karmic Debian package.' title='Download {$this->doc}&#039;s latest 32bit(i386) Ubuntu Karmic Debian package.' src='{$this->uri}/graphics/deb.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}_${deb}_i386.deb"." -->")
							. ( (isset($version) && isset($release) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}_{$version}-{$release}_amd64.deb")) ?"<a href='{$this->uri}/downloads/{$this->doc}_".preg_replace("/%/", "%%", urlencode($version))."-{$release}_amd64.deb'><img class='projects_download' alt='Download {$this->doc}&#039;s latest 64-bit(amd64) Debian package.' title='Download {$this->doc}&#039;s latest 64-bit(amd64) Debian package.' src='{$this->uri}/graphics/x86_64.deb.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}_{$version}-{$release}_amd64.deb"." -->")
							. ( (isset($version) && isset($release) && file_exists(trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}_{$version}-{$release}_i386.deb")) ?"<a href='{$this->uri}/downloads/{$this->doc}_".preg_replace("/%/", "%%", urlencode($version))."-{$release}_i386.deb'><img class='projects_download' alt='Download {$this->doc}&#039;s latest 32-bit(i386) Debian package.' title='Download {$this->doc}&#039;s latest 32-bit(i386) Debian package.' src='{$this->uri}/graphics/deb.png'></a>" :"<!-- download not found: " . trim(`pwd`)."/{$this->uri}/downloads/{$this->doc}_{$version}-{$release}_i386.deb"." -->")
						. "</div>
						<br clear=\"all\"/>
						");
