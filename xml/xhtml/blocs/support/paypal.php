<?php
	print <<<BLOC
		<div class='please_help'>
			<form action='https://www.paypal.com/cgi-bin/webscr' method='post'>
				<input type='hidden' name='cmd' value='_s-xclick'>
				<input type='image' src='../../xml/xhtml/graphics/paypal.gif' border='0' name='submit' alt='PayPal - The safer, easier way to pay online!'>
				<input type='hidden' name='encrypted' value='-----BEGIN PKCS7-----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-----END PKCS7-----'>
			</form>
		</div>
BLOC;
?>