<?php
	header("Content-disposition: inline; filename=Expressive+Programming.rss.xml");
	header("Content-Type: text/xml; charset=utf-8");
	
	print <<<RSS
<?xml version='1.0' encoding='utf-8'?>
<rss version='2.0'>
	<channel>
		<title>Expressive Programming</title>
		<description>
			<![CDATA[uberChicGeekChick: Expressive Programming, the podcast &amp; more, about: programming, art, creativity, code, self expression, &amp; uber women (WE ROCK!).&nbsp; Programming is an art form, a creative outlet, &amp; most powerfully it can also be on outlet for our self expression.&nbsp; Here I look at programming as self expression. art, &amp; other ways that programming improves &amp; reflects our life, our self, &amp; our desire to improve our life.]]>
		</description>
		<link>http://uberChicGeekChick.Com/</link>
		<language>en-US</language>
		
RSS;
?>