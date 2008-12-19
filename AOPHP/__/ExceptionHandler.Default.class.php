<?php
	abstract class AOPHP__ExceptionHandler{
		static function Catcher(&$Exception){
			
		}
	}
	
	set_exception_handler('AOPHP__ExceptionHandler::Catcher');
?>
