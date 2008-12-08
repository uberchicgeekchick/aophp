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
	 *
	 * ------------------------------------------------------------------------
	 * |	A copy of the RPL 1.5 may be found with this project or online at |
	 * |		http://opensource.org/licenses/rpl1.5.txt		  |
	 * ------------------------------------------------------------------------
	 */
	
	//Defines AOPHP::Core->construct(); or AOPHP__Core->__construct();
			$this->Set_Format();
			
			$this->Output=sprintf("AOPHP%s%sOutput%s%sFormats%s%s%s", $this->separator, $this->separator, $this->separator, $this->separator, $this->separator, $this->separator, $this->format);
			
			$this->Output=new $this->Output(_AOPHP_APP_CONFIG_);
			
			$this->Output=sprintf("AOPHP%s%sStorageEngines%s%s%s", $this->separator, $this->separator, $this->separator, $this->separator, $this->separator, $this->separator, _AOPHP_DEFAULT_STORAGE_ENGINE_);
			
			$this->Output=new $this->Output(_AOPHP_APP_CONFIG_);
?>