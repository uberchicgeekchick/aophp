<?php
	/*
	 * Unless explicitly acquired and licensed from Licensor under another
	 * license, the contents of this file are subject to the Reciprocal Public
	 * License ("RPL") Version 1.5, or subsequent versions as allowed by the RPL,s
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
	//namespace AOPHP;
	
	class AOPHP__Formats{
		public $content_uri;
		public $painter;
		
		public function __construct(){
			//Defines AOPHP::Formats->__construct(); && AOPHP__Formats->__construct();
			$this->set_format();
			$this->paint();
		}//__construct
		
		
		
		private function set_format(){
			if( !(isset($_GET['Format'])) )
				$_GET['Format']="";
			
			switch($_GET['Format']){
				case 'RSS':
					$this->painter=new AOPHP__Formats__RSS();
					return;
				
				case 'XHTML':
				default;
					$this->painter=new AOPHP__Formats__XHTML();
					return;
				}
		}//set_format
		
		
		
		public function paint(){
			//Defines AOPHP::Format->paint(); or AOPHP__Format->paint();
			$this->painter->paint();
		}//paint
		
	}