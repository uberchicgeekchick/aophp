<?php
	/*
	 * (c) 2007-Present Kathryn G. Bohmont <uberChicGeekChick.Com -at- uberChicGeekChick.Com>
	 * 	http://uberChicGeekChick.Com/
	 * Writen by an uberChick, other uberChicks please meet me & others @:
	 * 	http://uberChicks.Net/
	 *I'm also disabled; living with Generalized Dystonia.
	 * Specifically: DYT1+/Early-Onset Generalized Dystonia.
	 * 	http://Dystonia-DREAMS.Org/
	 */

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
	 *
	 * ---------------------------------------------------------------------------------
	 * |	A copy of the RPL 1.5 may be found with this project or online at	|
	 * |		http://opensource.org/licenses/rpl1.5.txt					|
	 * ---------------------------------------------------------------------------------
	 */
	
	namespace AOPHP::Output;
	
	class Logger extends AOPHP::Output {
		private $programs_name;
		
		private $logging_enabled;
		private $silence_output;
		private $logs_path;
		
		private $year;
		private $month;
		private $day;
		
		private $current_hour;
		private $starting_hour;
		private $ending_hour;
		
		private $log_file;
		private $logs_fp;
		
		public function __construct( $logs_path = ".", $programs_name = "uberChicGeekChick's logger", $logging_enable = true, $silence_output = false ) {
			$this->program_name = $programs_name;
			
			if( $silence_output )
				$this->silence_output=true;
			else
				$this->silence_output=false;
			
			if( ! $logging_enable )
				return $this->disable_logging();
			
			$this->log_file = "";
			if(!( (is_dir( $logs_path )) ))
				$this->logs_path = ".";
			else
				$this->logs_path = preg_replace( "/\/$/", "", $logs_path );
			
			$this->logging_enabled = true;
			$this->ending_hour = -1;
		}//method: public function __construct();
		
		private function disable_logging() {
			$this->logging_enabled = false;
			
			$this->year = null;
			$this->month = null;
			$this->day = null;
			
			$this->current_hour = date( "H" );
			$this->starting_hour = null;
			
			$this->logs_fp = null;
		}//method: private function disable_logging();
		
		private function setup_logging_data() {
			$this->year = date( "Y" );
			$this->month = date( "m" );
			$this->day = date( "d" );
			
			$this->starting_hour = $this->current_hour - ( $this->current_hour % 6 );
			$this->ending_hour = $this->starting_hour + 5;
		}//method: private function setup_logging_data();
		
		private function check_log() {
			if(
				( ($this->current_hour = date( "H" )) > $this->ending_hour )
				||
				( $this->current_hour < $this->starting_hour )
				||
				(!
					(file_exists( $this->log_file ))
					&&
					$this->logs_fp
				)
			)
				return true;
			return false;
		}//method:private function check_log();
		
		private function rotate_log() {
			if(!( ($this->check_log()) ))
				return false;
			
			$this->setup_logging_data();
			if( $this->logs_fp )
				fclose( $this->logs_fp );
			
			if(!( ($this->logs_fp = fopen( ($this->log_file = "{$this->logs_path}/{$this->program_name}'s log for {$this->year}-{$this->month}-{$this->day} from ".(($this->starting_hour<10)?"0":"")."{$this->starting_hour}:00 through ".(($this->ending_hour<10)?"0":"")."{$this->ending_hour}:59.log" ), "a" )) )) {
				fwrite( STDERR, (utf8_encode("I was unable to load the log file:\n\t\"{$this->log_file}\"\nLogging will be disabled.\n")) );
				$this->disable_logging();
			}
		}//method: private function rotate_log();
		
		public function log_output( &$string, &$error ) {
			if( $this->logging_enabled ) {
				$this->rotate_log();
				fwrite( $this->logs_fp, (utf8_encode( (($error==true) ? "*ERROR*:" : "" ) . $string )) );
			}
		
		}//method: private function log_output();
		
		public function output( $string, $error = false ) {
			$this->log_output( $string, $error );
		
			if( $error === true )
				return fwrite( STDERR, (utf8_encode($string)) );
			
			if( $this->silence_output )
				return false;
			
			return fwrite( STDOUT, (utf8_encode($string)) );
		}//method:public function output( $error = false );
		
		private function close_log() {
			if( $this->logs_fp )
				fclose( $this->logs_fp );
		}//method:private function close_log();
		
		public function __destruct() {
			$this->close_log();
		}//method: public function __destruct();
	}//namespace: uberChicGeekChick; class: helper

?>
