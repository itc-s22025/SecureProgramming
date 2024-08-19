<?php
	$callback = $_GET['callback'];
	header('Content-Type: text/javascript; charset=utf-8');
	$json = json_encode(array('time' => date('G:i')));
	echo "$callback($json);";
?>
