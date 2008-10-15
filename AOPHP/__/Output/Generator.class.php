<?php
	class AOPHP__Output__Generator extends AOPHP__Output__Formatter{
		public function __construct(){
			$this->generate('XHTML');
		}
		
		public function generate($Format){
			require_once("./AOPHP/__/Output/{$Format}/header.php");
			
			require_once("./AOPHP/__/Output/{$Format}/body.php");
			
			require_once("./AOPHP/__/Output/{$Format}/footer.php");
		}
	}//AOPHP__Output__Generator
?>