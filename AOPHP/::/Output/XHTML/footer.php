<?php
print <<<BLOC
		<div class='right_sides_blocs'>
			<div class='copyright'>
				<nobr>my site &amp; podcast are</nobr><br/>
				<nobr>&copy; 2008 Kaity G. B.</nobr><br/>
				<nobr>powered by <a href='http://github.com/uberchicgeekchick/speaking-out/tree'>speaking-OUT</a></nobr><br/>
				<nobr><a href='http://github.com/uberchicgeekchick/speaking-out/tree'>speaking-OUT</a> is <a href='http://opensource.org/' title='Free, as in freedom, &amp; open source software,'>F&amp;OSS</a><br/>released under the <a href='http://opensource.org/licenses/rpl1.5.txt' title='Reciprocal Public License'>RPL 1.5</a></nobr>
			</div>
			<br/>
BLOC;
	
	require_once("./blocs/widgets/MyBlogLog.php");
	require_once("./blocs/episodes/rss.php");
	
print <<<BLOC
		</div>
	</body>
</html>
BLOC;
?>
