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
	namespace AOPHP;
	
	class Core{
		public $Bloc;
		public $Format;
		public $Output;
		public $StorageEngine;
		
		public function __construct(){
			$this->Set_Format();
			
			$this->Output=sprintf("AOPHP::Output::Formats::%s", $this->format);
			$this->Output=new $this->Output(_AOPHP_APP_CONFIG_);
			
			$this->StorageEngine=sprintf("AOPHP::StorageEngines::%s", _AOPHP_DEFAULT_STORAGE_ENGINE_);
			$this->StorageEngine=new $this->StorageEngine(_AOPHP_APP_CONFIG_);
		}//__construct
		
		private function Prepare_Blocs(){
			
		}//Init_Application
		
		private function Set_Format(){
			static $default_format;
			
			if( !(isset($default_format)) ) $default_format="XHTML";
			if( (isset($this->Format)) ) return $this->Format;
			
			if( !(isset($_GET['Format'])) ) $_GET['Format']=$default_format;
			
			switch($_GET['Format']){
				case 'RSS':
					return $this->format="RSS";
					break;
				case 'XHTML': default:
					return $this->format=$default_format;
					break;
			}
		}//Set_Format
		
	}//AOPHP::Core
?>