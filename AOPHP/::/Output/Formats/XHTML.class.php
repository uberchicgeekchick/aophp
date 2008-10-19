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
	namespace AOPHP::Output::Formats;
	
	class XHTML extends AOPHP::Output::Formats{
		public $content_uri;
		public $format;
		public $categories;
		
		public function __construct($Configuration){
			$this->format="XHTML";
			
			$this->categories=array(
				'episodes', 'special', 'blog', 'about',
				'total'=>4
			);
			
			if( ! ($this->check_get()) )
				$_GET['blog']="0001";
			
			$this->set_content();
			parent::__construct();
		}
		
		private function check_get(){
			
			for($n=0; $n<$this->categories['total']; $n++ )
				if( (isset( $_GET[ $this->categories[$n] ] )) )
					return TRUE;
			return FALSE;
			
		}//
		
		private function set_content(){
			if( (isset($_GET['debug'])) && (file_exists( ($this->content_uri="./blocs/debug.php") )) )
				return;
			
			for($n=0; $n<$this->categories['total']; $n++ )
				if( (isset( $_GET[ $this->categories[$n] ] )) && (file_exists( ($this->content_uri="./blocs/{$this->categories[$n]}/{$_GET[ $this->categories[$n] ]}.php") )) )
					return;
			
			$this->content_uri="./blocs/about/podcast.php";
		}//
		
	}//AOPHP::Output::Formats::XHTML
?>