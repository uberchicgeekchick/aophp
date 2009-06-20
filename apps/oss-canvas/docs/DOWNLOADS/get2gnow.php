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
	$versions=array(
		array("#0000F6aEC", "http://github.com/uberchicgeekchick/get2gnow/tree/74eee7ef76ae8db5ed7fa3ecdfef7cf0badc1897"),
		array("#0000DDaC4", "http://github.com/uberchicgeekchick/get2gnow/tree/2153cc59673836859000652727bd78e99f5f5806"),
		array('00.00.DB.a09', "http://github.com/uberchicgeekchick/get2gnow/tree/9c8cf017e8fafc9ea8945ed9a9d582fa922425c4"),
		array('00.00.DB.aFF', "http://github.com/uberchicgeekchick/get2gnow/tree/4b789ae4d47f77cc786d7f0e7ebdc7a1d6760cc8"),
	);
	
	$output="<ul class=\"my_projects\">\n";
	for($i=0; isset($versions[$i]); $i++)
		$output=sprintf("%s\n\t\t\t\t\t\t\t<li class=\"my_projects\"><a href=\"%s\">%s</a></li>", $output, $versions[$i][1], $versions[$i][0]);
	return sprintf("%s</ul>", $output);
?>

