<?php
	$token = $_SERVER['HTTP_X_CSRF_TOKEN'];
  if (empty($token) || $token !== $_SESSION['token']) {
    header('HTTP/1.1 403 Forbidden');
    error_log('** CSRF detected **');
    die('正規の経路から使用ください');
  }
  
