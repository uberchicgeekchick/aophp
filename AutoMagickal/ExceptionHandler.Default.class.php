<?php
	namespace speakingOUT;
	
	abstract class ExceptionHandler{
		static function Catcher(&$Exception){
			
		}
	}
	
	set_exception_handler('speakingOUT::ExceptionHandler::Catcher');
?>