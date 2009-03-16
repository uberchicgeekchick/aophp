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
	
	class aophp__xml__xhtml extends aophp__xml{
		public $content_uri;
		public $doctype;
		
		public function __construct(){
			$this->doctype="xhtml";
			parent::load_app();
			$this->set_content();
		}//__construct
		
		private function set_content(){
			if( (isset($_GET['debug'])) && (file_exists( ($this->content_uri="./aophp/xml/{$this->doctype}/debug.php") )) )
				return;
			
			if( $this->app == "projects" && (file_exists( ($this->content_uri="./aophp/apps/oss-canvas/core.php") )) ) return;
			
			if( $this->app == "episodes" && (file_exists( ($this->content_uri="./aophp/apps/speakingOUT/episodes/{$this->content}.php") )) ) return;
			
			if( (file_exists( ($this->content_uri="./aophp/xml/{$this->doctype}/{$this->app}/{$this->content}.php") )) ) return;
			
			printf( "<center class='error'>aophp could not find the default content @ &#039;%s&#039;</center>", $this->content_uri );
			$this->content_uri="./aophp/xml/{$this->doctype}/projects/podcast.php";
		}//set_content
		
		
		private function save(){
			
		}//save
		
		public function __destruct(){
		}//__destruct
		
	}//aophp__xml__xhtml
?>