<?php
	ini_set( "display_errors", TRUE );
	ini_set( "error_reporting", E_ALL | E_STRICT );
	ini_set( "date.timezone", "America/Denver" );

	// And now, *gulp*, just do each step; step by step, baby steps, comment &verbose variables are fun.
	// program for fun.  If I forget than read 'Hackers &Painters' &'Hackers Manifesto'.
	
	require_once( "./classes/__autoload.func.php" );
	
	//$uCGC_db=new uberChicGeekChick::db("localhost:3306", "quickly_podcasting", "uCGC.com", "my_w3b51+3");
	
	/*All of the following code needs to be moved to './outputs/xhtml.class.php
	 * __autoload.func.php also needs to be updated to support output formats
	 */
	
	header("Content-disposition: inline; filename=uberChicGeekChick's coded art.html");
	header("Content-Type: text/html; charset=utf-8");
	
	require_once("./outputs/xhtml/header.php");
	
	require_once("./outputs/xhtml/body.php");
	
	require_once("./outputs/xhtml/footer.php");

?>
