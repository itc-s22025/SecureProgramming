<?php
	$mail = filter_input(INPUT_POST, 'mail');
	$h = popen('/usr/sbin/sendmail -t -i', 'w');
	if ($h === FALSE) {
		die('ただいま混み合っております。しばらくたってから...');
	}
	fwrite($h, <<<EndOfMail

To: $mail
From: webmaster@example.com
Subject: 
Content-Type: text/plain; charset="utf-8"
Content-Transfer-Encoding: 8bit

お問い合わせを受け付けました
EndOfMail
);
	pclose($h);
?>
<body>お問い合わせを受け付けました</body>
