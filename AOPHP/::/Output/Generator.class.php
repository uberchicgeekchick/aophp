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
	namespace AOPHP::Output;
	
	class Generator extends AOPHP::Output::Formatter{
		public $content_uri;
		public $format;
		
		public function __construct(){
			return require_once( (::__load_method( "AOPHP::Output::Generator", "__construct")) );
			//return require_once( "./AOPHP/Methods/Output/Generator/__construct.method.php" );
		}// __construct
		
		public function generate(){
			return require_once( (::__load_method( "AOPHP::Output::Generator", "generate")) );
			//return require_once( "./AOPHP/Methods/Output/Generator/generate.method.php" );
		}//generate
		
	}//AOPHP::Output::Generator
?>