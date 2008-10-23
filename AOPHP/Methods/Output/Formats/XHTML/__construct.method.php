<?php
	/*
	 * (c) 2007-Present Kathryn G. Bohmont <uberChicGeekChick.Com -at- uberChicGeekChick.Com>
	 * 	http://uberChicGeekChick.Com/
	 * Writen by an uberChick, other uberChicks please meet me & others @:
	 * 	http://uberChicks.Net/
	 *I'm also disabled; living with Generalized Dystonia.
	 * Specifically: DYT1+/Early-Onset Generalized Dystonia.
	 * 	http://Dystonia-DREAMS.Org/
	 */
	
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
	
	//Defines AOPHP::Output::Formats::XHTML->__construct(); or AOPHP__Output__Formats__XHTML->__construct();
			$this->format="XHTML";
			
			$this->categories=array(
				'episodes', 'specials', 'blogs', 'about',
				'total'=>4
			);
			
			if( ! ($this->check_get()) )
				$_GET['episodes']="0003";
			
			$this->set_content();
			parent::__construct();
?>