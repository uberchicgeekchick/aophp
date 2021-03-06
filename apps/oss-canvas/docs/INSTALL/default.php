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
	return "{$this->doc} can be installed from source using the standard process for building applications.
							<ul>
								<lh>Start by downloading {$this->doc}'s source as a tarball or zipped archive.&nbsp; Than</lh>
								<li>Extract the tarball, or zipped archive, you've downloaded.</li>
								<li>open a terminal in, or cd to, the directory the tarball created.</li>
								<li>Now you're ready to start installing {$this->doc} by 1st running:</li>
									<ul><li>./configure</li></ul>
								<li>Note: on 64bit Linux distros you may need to help out configure a lil by running:</li>
									<ul><li>./configure --libdir=/usr/lib64</li></ul>
								<li>After you've run the above command simply run:</li>
									<ul><li>make</li></ul>
								<li>If after running make you don't have any errors than go ahead & install {$this->doc}. By default make will install {$this->doc} to /usr so you may need root privileges to finish installing {$this->doc}. if this is the case, which it usually is, than you'll need to run the following command:</li>
									<ul><li>sudo make install</li></ul>
								<li>If you don't need to have root privileges to install Greet-Tweet-Know than simply run:</li>
									<ul><li>make install</li></ul>
							</ul>";
