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
	
	class Formats extends AOPHP::Output::Generator{
		private $Format;
		private $Categories;
		private $Category;
		private $Content;
		
		public function __construct(){
			$this->Set_Format;
			parent::__construct();
		}
		
		private function Set_Format(){
			if( !(isset($_GET['Format'])) )
				$_GET['Format']="";
			
			switch($_GET['Format']){
				case 'RSS':	return $this->Format="RSS";
				case 'XHTML':	return $this->Format="XHTML";
				default:		return $this->Format="XHTML";
			}
		}//Set_Format
		
		private function Load_Categories(){
			$this->categories=array(
				'episodes', 'specials', 'blogs', 'about',
				'Total'=>4
			);
			
			if( !($this->Check_Get()) ){
				$_GET['Category']="episodes";
				$this->Category="episodes";
				$this->Content="0005";
			}
		}//Load_Categories
		
		private function Check_Get(){
			for($n=0; $n<$this->Categories['Total']; $n++ )
				if( (isset( $_GET[ $this->Categories[$n] ] )) ){
					$this->Category=$this->Categories[$n];
					$this->Content=$_GET[ $this->Categories[$n] ];
					return 1;
				}
			return 0;
		}//Check_Get
	}