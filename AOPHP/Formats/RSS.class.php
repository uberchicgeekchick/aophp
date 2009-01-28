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
	//namespace AOPHP::Formats;
	
	class AOPHP__Formats__RSS extends AOPHP__Formats{
		public $content_uri;
		public $format;
		public $mimetype;
		public $categories;
		
		public $enclosures;
		
		public function __construct(){
			//Defines AOPHP::Output::Formats::RSS->__construct(); or AOPHP__Output__Formats__RSS->__construct();
			$this->mimetype="RSS";
			
			$this->categories=array(
				'episodes', 'specials', 'blogs', 'projects',
				'total'=>4
			);
			
			//if( !($this->check_get()) )
				$_GET['Category']="episodes";
			
			$this->check_get();
			
			$this->set_content();
		}//__construct
		
		private function check_get(){
				if( !(isset($_GET['Enclosures'])) )
					if( (isset($_GET['Enclosure'])) )
						$_GET['Enclosures']=$_GET['Enclosure'];
					else
						$_GET['Enclosures']='OGG';
				
				switch( $_GET['Enclosures'] ){
					case 'MP3': case 'hpr': case 'mp3':
						$this->enclosures="MP3";
						break;
					
					case 'HPR': case 'hpr':
						$this->enclosures="OGG";
						break;
					
					case 'OGG': case 'ogg': default:
						$this->enclosures="OGG";
						break;
				}
		}//check_get
		
		private function set_content(){
				$this->content_uri="./AOPHP/Formats/{$this->mimetype}/enclosures/{$this->enclosures}.RSS.php";
		}//set_content
		
		public function __destruct(){
		}//__destruct
		
	}//AOPHP__Output__Formats__RSS
?>