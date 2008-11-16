<?php

	header("Content-disposition: inline; filename=Expressive+Programming.html");
	header("Content-Type: text/html; charset=utf-8");

	print <<<HEADER
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.1//EN' 'http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd'>
<?xml version='1.0' encoding='UTF-8'?>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>uberChicGeekChick: Expressive Programming, the podcast &amp; uber women rock!</title>
		
		<meta name='description' value='uberChicGeekChick: Expressive Programming, the podcast &amp; more, about: programming, art, creativity, code, self expression, &amp; uber women (WE ROCK!)'/>
		<meta name='keywords' content='uberChicGeekChick, Expressive Programming, podcast, social media, programming, art, creativity, code, self expression, women, game development, 3-D, PHP, C, uberChick, uberChicks'/>

		<link rel='shortcut icon' href='./graphics/favicon.png'/>
		
		<link rel='alternate' type='application/rss+xml' title='Expressive Programming&#039;s OGG Feed' href='./?Format=RSS&Enclosure=ogg'/>
		<link rel='alternate' type='application/rss+xml' title='Expressive Programming&#039;s MP3 Feed' href='./?Format=RSS&Enclosure=mp3'/>
		<link rel='alternate' type='application/rss+xml' title='Expressive Programming&#039;s HPR Feed' href='./?Format=RSS&Enclosure=hpr'/>

		<!--
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
