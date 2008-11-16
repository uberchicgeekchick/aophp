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
	class AOPHP__Output__Formats__RSS extends AOPHP__Output__Formats{
		public $content_uri;
		public $format;
		public $categories;
		
		public function __construct($Configuration){
			return require_once( (__load_method( "AOPHP__Output__Formats__RSS", "__construct" )) );
		}//__construct
		
		private function check_get(){
			return require_once( (__load_method( "AOPHP__Output__Formats__RSS", "check_get" )) );
		}//check_get
		
		private function set_content(){
			return require_once( (__load_method( "AOPHP__Output__Formats__RSS", "set_content" )) );
		}//set_content
		
		public function __destruct(){
			/* A very evil php bug is stopping this from working:
			return require_once( "./AOPHP/Methods/Output/Formats/RSS/__destruct.method.php" );
			return require_once( (__load_method( (get_class( $this )), "__destruct" )) );
			*/
		}//__destruct
		
	}//AOPHP__Output__Formats__RSS
?>