<?php
	$addr = filter_input(INPUT_GET, 'addr');
	if (preg_match('/\A[[:^cntrl:]]{1,30}\z/u', $addr) !== 1){
		die('30文字以内で住所を入力してください(必須項目)。改行やタブなどの制御文字は使用できません');
	}
?>

