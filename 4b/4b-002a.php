<?php
	$mail = filter_input(INPUT_POST, 'mail');
	mb_language('Japanese');
	mb_send_mail($mail, "受け付けました", 
								"お問い合わせを受け付けました",
								"From: webmaster@example.com");
?>
<body>お問い合わせを受け付けました</body>
