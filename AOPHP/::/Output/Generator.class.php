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
	namespace AOPHP::Output;
	
	class Generator extends AOPHP::Output::Formatter{
		public $Content_URI;
		public $Format;
		
		public function __construct(){
			$this->Generate();
			parent::__construct();
		}// __construct
		
		private function Generate(){
			require_once("./blocs/formats/{$this->Format}/header.php");
			
			require_once("./blocs/formats/{$this->Format}/body.php");
			
			require_once("./blocs/formats/{$this->Format}/footer.php");
		}//Generate
		
	}//AOPHP::Output::Generator
?>