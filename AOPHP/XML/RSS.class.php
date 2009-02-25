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
	
	class AOPHP__XML__RSS extends AOPHP__XML{
		public $content_uri;
		public $format;
		public $categories;
		
		public $enclosures;
		
		public function __construct(){
			//Defines AOPHP::XML::RSS->__construct(); or AOPHP__XML__RSS->__construct();
			$this->format="RSS";
			
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
					case 'FLAC': case 'OGG':
						$this->enclusures=$_GET['Enclosures'];
						break;
					case 'MP3': case 'hpr': case 'mp3':
					case 'HPR': case 'hpr':
						$this->enclosures="ERROR";
						break;
					
					default:
						$this->enclosures="OGG";
						break;
				}
		}//check_get
		
		private function set_content(){
				$this->content_uri="./AOPHP/XML/{$this->format}/enclosures/{$this->enclosures}.RSS.php";
		}//set_content
		
		
		
		public function paint(){
			//Defines AOPHP::Formats::RSS->paint(); or AOPHP__Format__RSS->paint();
			require_once("./AOPHP/XML/{$this->format}/header.php");
			require_once("./AOPHP/XML/{$this->format}/body.php");
			require_once("./AOPHP/XML/{$this->format}/footer.php");
		}//paint
		
		public function addtag($tag_type){
		}//paint_tag
		
		private function format_pubDate(){
			printf( "<pubDate>%s</pubDate>", (date( "r", (mktime()) )) );
		}//addtag_pubDate
		
		public function __destruct(){
		}//__destruct
		
	}//AOPHP__XML__RSS
?>
