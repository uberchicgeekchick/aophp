<?php
	namespace AOPHP;
	
	abstract class ExceptionHandler{
		static function Catcher(&$Exception){
			
		}
	}
	
	set_exception_handler('AOPHP::ExceptionHandler::Catcher');
?>
