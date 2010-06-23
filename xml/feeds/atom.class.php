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
	namespace aophp\xml\feeds;
	
	class atom extends \aophp\xml\feeds{
		public $content_uri;
		public $doctype;
		public $enclosures;
		
		public function __construct(){
			$this->doctype="feeds/atom";
			parent::__construct();
		}//__construct
		
		public function set_uri(){
			$this->uri="./xml/{$this->doctype}/{$this->doc}.php";
		}/*set_uri();*/
		
		private function save(){
		}//save
		
		public function __destruct(){
		}//__destruct
		
	}//aophp__xml__atom
?>
