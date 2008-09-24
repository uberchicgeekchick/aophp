<?php
	print <<<BLOC
		<div class='right_sides_blocs'>
			<div class='copyright'>
				powered by <a href='http://github.com/uberchicgeekchick/speaking-out/tree'>speaking-out</a><br/>
				&copy; 2008 Kaity G. B.<br/>
				<a href='http://github.com/uberchicgeekchick/speaking-out/tree'>speaking-out</a> is <a href='http://opensource.org/' title='Free, as in freedom, &amp; open source software,'>F&amp;OSS</a><br/>released under the <a href='http://opensource.org/licenses/rpl1.5.txt' title='Reciprocal Public License'>RPL 1.5</a>
			</div>
			<br/>
BLOC;
	require_once("./blocs/links/MyBlogLog.php");
	print <<<BLOC
		</div>
	</body>
</html>
BLOC;
?>