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
	namespace aophp;
	
	class core extends aophp{
		public $is_binary;
		public $xml;
		public $parse_user_data;
		
		public function __construct($config_file){
			$this->parse_user_data=new \aophp\security();
			if(! ($this->xml=new \aophp\xml()) ){
				$this->is_binary=TRUE;
				$this->load_binary();
				return;
			}
			$this->is_binary=FALSE;
		}//__construct
		
		private function load_binary(){
		}//load_binary
		
	}//aophp::core
?>
