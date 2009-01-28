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
	class AOPHP__blocs__abstract {
		public $dependancies;
		
		public function __construct(){
			return require_once( (__load_method( "AOPHP__blocs__abstract", "__construct" )) );
		}
		
		/* 
		 * 
		 */
		abstract public function load_dependancies();
		
		/* This method does any processing that needs done before output begins.
		 * Examples include: setting headers; running insert, replace, & update 'StorageEngine'.
		 */
		abstract public function save();
		
		/* 
		 * 
		 */
		abstract public function output();
		
	}//AOPHP__blocs__abstract
?>
