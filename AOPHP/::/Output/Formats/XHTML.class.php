<?php
	/*
	 * (c) 2007-Present Kaity G. B. <uberChick -at- uberChicGeekChick.Com>
	 * 	http://uberChicGeekChick.Com/
	 *
	 * Writen by an uberChick, other uberChicks please meet me & others @:
	 * 	http://uberChicks.Net/
	 *
	 * I'm also disabled. I live with a progressive neuro-muscular disease.
	 * I have DYT1+ Early-Onset Generalized Dystonia, a type of Generalized Dystonia.
	 * 	http://Dystonia-DREAMS.Org/
	 */

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
	 *
	 * ------------------------------------------------------------------------
	 * |	A copy of the RPL 1.5 may be found with this project or online at |
	 * |		http://opensource.org/licenses/rpl1.5.txt		  |
	 * ------------------------------------------------------------------------
	 */
	namespace AOPHP::Output::Formats;
	
	class XHTML extends AOPHP::Output::Formats{
		public $content_uri;
		public $format;
		public $categories;
		
		public function __construct($Configuration){
			
		}//::construct
		
		private function check_get(){
			return require_once( (::__load_method( "AOPHP::Output::Formats::XHTML", "check_get" )) );
		}//check_get
		
		private function set_content(){
			if( (isset($_GET['debug'])) && (file_exists( ($this->content_uri="./blocs/debug.php") )) )
				return;
			
			for($n=0; $n<$this->categories['total']; $n++ )
				if( (isset( $_GET[ $this->categories[$n] ] )) && (file_exists( ($this->content_uri="./blocs/{$this->categories[$n]}/{$_GET[ $this->categories[$n] ]}.php") )) )
					return;
			
			$this->content_uri="./blocs/about/podcast.php";
		}//set_content
		
		public function __destruct(){
			/* A very evil php bug is stopping this from working:
			return require_once( "./AOPHP/Methods/Output/Formats/XHTML/__destruct.method.php" );
			return require_once( (::__load_method( (get_class( $this )), "__destruct" )) );
			*/
		}//__destruct
		
	}//AOPHP::Output::Formats::XHTML
?>
