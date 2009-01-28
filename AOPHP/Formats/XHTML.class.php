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
	
	class AOPHP__Formats__XHTML extends AOPHP__Formats{
		public $content_uri;
		public $format;
		public $mimetype;
		public $categories;
		
		public function __construct(){
			//Defines AOPHP::Output::Formats::XHTML->__construct(); / AOPHP__Output__Formats__XHTML->__construct();
			$this->mimetype="XHTML";
			
			$this->categories=array(
				'episodes', 'specials', 'blogs', 'projects',
				'total'=>4
			);
			
			if( !($this->check_get()) )
				$_GET['episodes']="0006";
			
			$this->set_content();
		}//__construct
		
		private function check_get(){
			//Defines AOPHP::Output::Formats::XHTML->check_get(); / AOPHP__Output__Formats__XHTML->check_get();
			for($n=0; $n<$this->categories['total']; $n++ )
				if( (isset( $_GET[ $this->categories[$n] ] )) )
					return 1;
			return 0;
		}//check_get
		
		private function set_content(){
			//Defines AOPHP::Output::Formats::XHTML->set_content(); or AOPHP__Output__Formats__XHTML->set_content();
			if( (isset($_GET['debug'])) && (file_exists( ($this->content_uri="./AOPHP/blocs/formats/{$this->mimetype}/debug.php") )) )
				return;
			
			for($n=0; $n<$this->categories['total']; $n++ )
				if( (isset( $_GET[ $this->categories[$n] ] )) && (file_exists( ($this->content_uri="./AOPHP/blocs/formats/{$this->mimetype}/{$this->categories[$n]}/{$_GET[ $this->categories[$n] ]}.php") )) )
					return;
			
			$this->content_uri="./AOPHP/blocs/formats/{$this->mimetype}/podcast.php";
		}//set_content
		
		public function __destruct(){
			//Defines AOPHP::Output::Formats::XHTML->__destruct(); or AOPHP__Output__Formats__XHTML->__destruct();
			
			/* A very evil php bug is stopping this from working:
			return require_once( "./AOPHP/Methods/Output/Formats/XHTML/__destruct.method.php" );
			return require_once( (__load_method( (get_class( $this )), "__destruct" )) );
			*/
			print("<!-- __destruct -->");
		}//__destruct
		
	}//AOPHP__Output__Formats__XHTML
?>