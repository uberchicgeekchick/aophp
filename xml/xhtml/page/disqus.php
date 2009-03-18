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
	
	print <<<DISQUS
			<blockquote id="disqus_thread"></blockquote>
			<script type="text/javascript">
				//window.disqus_no_style=1;
				disqus_container_id="disqus_thread";
			</script>
			<script type="text/javascript" src="http://disqus.com/forums/expressive-programming/embed.js"></script>
			<a href="http://disqus.com" class="dsq-brlink">blog comments powered by Disqus</a>
			<script type="text/javascript">
				//<![CDATA[
				(function() {
					var links = document.getElementsByTagName('a');
					var query = '?';
					for(var i = 0; i < links.length; i++) {
						if(links[i].href.indexOf('#disqus_thread') >= 0) {
							query += 'url' + i + '=' + encodeURIComponent(links[i].href) + '&';
						}
					}
					document.write('<script charset="utf-8" type="text/javascript" src="http://disqus.com/forums/expressive-programming/get_num_replies.js' + query + '"></'+'script><br'+'/></'+'form>');
				})();
				//]]>
			</script>
			<hr/>
DISQUS;
?>