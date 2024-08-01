<?php
	$mail = filter_input(INPUT_POST, 'mail');
	system("/usr/sbin/sendmail -i <template.txt $mail");
//以下略
?>
<body>お問い合わせを受け付けました</body>
