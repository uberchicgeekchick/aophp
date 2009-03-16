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
	//namespace aophp::xml;
	
	class aophp__xml__feeds extends aophp__xml{
		public $content_uri;
		public $doctype;
		public $categories;
		public $category;
		public $content;
		
		public $enclosures;
		
		public function __construct(){
			parent::load_app();
			$this->set_content();
		}//__construct
		
		private function set_content(){
			if( !(isset($_GET['enclosures'])) )
				if( (isset($_GET['enclosure'])) )
					$_GET['enclosures']=$_GET['enclosure'];
				else
					$_GET['enclosures']='ogg';
			
			switch( $_GET['enclosures'] ){
				case 'flac': case 'ogg':
					$this->enclosures=$_GET['enclosures'];
				break;
				case 'mp3': case 'hpr':
					$this->enclosures="error";
				break;
				
				default:
					$this->enclosures="ogg";
				break;
			}
			$this->content_uri="./aophp/xml/{$this->doctype}/enclosures/{$this->enclosures}.php";
		}//set_content
		
		private function save(){
			$this->doctype->save();
		}//save
		
		
		private function format_pubDate(){
			printf( "<pubDate>%s</pubDate>", (date( "r", (mktime()) )) );
		}//addtag_pubDate
		
		public function __destruct(){
		}//__destruct
		
	}//aophp__xml__feed__rss
?>
