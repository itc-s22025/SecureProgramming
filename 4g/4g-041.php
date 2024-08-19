<?php
  session_start();
  if (empty($_SESSION['userid'])) {
    header('HTTP/1.1 403 Forbidden');
    die('ログインが必要です');
  }

  $a = array();
  $a['userid'] = $_SESSION['userid'];
  $a['mail'] = $_SESSION['mail'];
  $json = json_encode($a, JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS);
	if (empty($_GET['callback'])){
		header('Content-Type: application/json; charset=utf-8');
		echo $json;
	}else{;
  	$callback = $_GET['callback'];
  	if (! preg_match('/\A[_a-z][_a-z0-9]*\z/i', $callback)) {
    	header('HTTP/1.1 403 Forbidden');
    	die("コールバック関数名が不正です");
  	}
 		header('Content-Type: text/javascript; charset=UTF-8');
 		echo "$callback($json)";
	}
