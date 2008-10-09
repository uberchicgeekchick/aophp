<?php
	namespace speakingOUT;
	
	abstract class speakingOUT__ExceptionHandler{
		static function Catcher(&$Exception){
			
		}
	}
	
	set_exception_handler('speakingOUT__ExceptionHandler::Catcher');
?>
