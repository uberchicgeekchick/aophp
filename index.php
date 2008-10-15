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
	
	/*
	 * ALWAYS PROGRAM FOR ENJOYMENT &PLEASURE!!!
	 * Feel comfortable takeing baby steps.  Every moment is another step; step by step; there are only baby steps.
	 * Being verbose in comments, variables, functions, methods, &anything else IS GOOD!
	 * If I forget ANY OF THIS than READ:
	 * 	"Paul Graham's: Hackers &Painters"
	 * 	&& ||
	 * 	"The Mentor's Last Words: The Hackers Manifesto"
	 */
	ini_set( "display_errors", TRUE );
	ini_set( "error_reporting", E_ALL | E_STRICT );
	ini_set( "date.timezone", "America/Denver" );
	
	// And now, *gulp*, just do each step; step by step, baby steps, comment &verbose variables are fun.
	// program for fun.  If I forget than read 'Hackers &Painters' &'Hackers Manifesto'.

/*	if( ( (float)phpversion() ) >= 5.3 ) {
		require_once("./AOPHP/::/__autoload.php");
		require_once("./AOPHP/::/ExceptionHandler.Default.class.php");
	
		$speakingOUT=new AOPHP::Output::Generator( (require_once("./AOPHP/::/Apps/speakingOUT/Configuration.inc.php")) );
	}else{
*/		require_once("./AOPHP/__/__autoload.php");
		require_once("./AOPHP/__/ExceptionHandler.Default.class.php");
	
		$speakingOUT=new AOPHP__Output__Generator( (require_once("./AOPHP/__/Apps/speakingOUT/Configuration.inc.php")) );
//	}

?>
