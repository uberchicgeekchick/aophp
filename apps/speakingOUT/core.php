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

	$this->app="speakingOUT";
	$default=array(
		'show'=>"Expressive Programming",
		'episode'=>"0007",
	);
	
	if(
		(file_exists( ($this->content_uri="./apps/{$this->app}/shows/{$default['show']}/episodes/{$this->content}.php") ))
		||
		(file_exists( ($this->content_uri="./apps/{$this->app}/shows/{$default['show']}/episodes/{$default['episode']}.php") ))
		||
		(file_exists( ($this->content_uri="./apps/{$this->app}/shows/{$default['show']}/about.php") ))
	)
		return require_once($this->content_uri);

	printf("<pre>");
	require_once("./apps/speakingOUT/README");
	printf("</pre>");
