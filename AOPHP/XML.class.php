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
	
	class AOPHP__XML{
		public $content_uri;
		public $painter;
		
		public function __construct(){
			//Defines AOPHP::XML->__construct(); && AOPHP__XML->__construct();
			$this->set_format();
			$this->paint();
		}//__construct
		
		
		
		private function set_format(){
			if( !(isset($_GET['Format'])) )
				$_GET['Format']="";
			
			$painter=NULL;
			switch($_GET['Format']){
				case 'RSS':
					$painter="RSS";
					break;
				
				case 'XHTML':
				default;
					$painter="XHTML";
					break;
			}
			
			if(!$painter)
				Exception::throw("Unable to find XML format for this session");
			
			$painter="AOPHP__XML__{$painter}";
			$this->painter=new $painter();
		}//set_format
		
		
		
		public function paint(){
			//Defines AOPHP::XML->paint(); or AOPHP__XML->paint();
			$this->painter->paint();
		}//paint
		
	}
