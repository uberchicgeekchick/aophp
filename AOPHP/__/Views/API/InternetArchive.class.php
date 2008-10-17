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
	
	class AOPHP__Views__API__InternetArchive extends AOPHP__Views__API {
		private $Domain;
		
		public __construct(){
			$this->Domain="http://www.archive.org/";
		}
		
		public function login(){
			$form=sprintf("
			<form action='http://www.archive.org/login.php' method='post'>
				<input NAME='username' TYPE='text' id='username' value='' SIZE='26'>
				<input NAME='password' TYPE='PASSWORD' id='password' SIZE='26'>
				<input name='remember' type='checkbox' id='remember' value='CHECKED' checked></td>
				<input name='referer' type='hidden' id='referer' value=''>
				<input NAME='submit' TYPE='submit' id='submit' VALUE='Log in'>
			</form>
			");
		}//login
		
		
	}//AOPHP__Views__API__Archive.org
?>