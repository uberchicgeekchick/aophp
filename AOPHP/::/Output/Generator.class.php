<?php
	namespace AOPHP::Output;
	
	class Generator extends AOPHP::Output::Formatter{
		public function __construct(){
			$this->generate('XHTML');
		}
		
		public function generate($Format){
			require_once("./AOPHP/::/Output/{$Format}/header.php");
			
			require_once("./AOPHP/::/Output/{$Format}/body.php");
			
			require_once("./AOPHP/::/Output/{$Format}/footer.php");
		}
	}//AOPHP::Output::Generator
?>