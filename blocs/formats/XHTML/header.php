<?php

	header("Content-disposition: inline; filename=uberChicGeekChick's coded art.html");
	header("Content-Type: text/html; charset=utf-8");

	print <<<HEADER
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.1//EN' 'http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd'>
<?xml version='1.0' encoding='UTF-8'?>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>uberChicGeekChick - programming, art, creativity, code, self expression, &amp; women(BTW: WE ROCK!) </title>

		<link rel='shortcut icon' href='./graphics/favicon.png'/>

		<!--
		<meta name='description' value='{About my page}'/>
		<meta name='keywords' content='{My page&#39;s template., keywords, about, this, page.}'/>
		
		<link rel='alternate' type='application/rss+xml' title='RSS 2.0 Feed' href='./rss.xml'/>
		<link rel='alternate' type='application/atom+xml' title='Atom 0.3 Feed' href='./atom.xml'/>
		
		<link rel='pingback' type='application/pingback+xml' href='./xmlrpc.php'/>
		<link rel='EditURI' type='application/rsd+xml' title='RSD' href='./xmlrpc.php/rsd/>
		<script language='javascript' src='./javascript.json.js'></script>
		-->
		<!-- NOTE: Firebug can't debug @import rules. -->
		<!-- <style type='text/css'> @import url('./blocs/formats/{$this->format}/alacast.css'); </style> -->
		<link rel='stylesheet' href='/blocs/formats/{$this->format}/alacast.css' type='text/css'/>
	</head>
	<body>
HEADER;
?>
