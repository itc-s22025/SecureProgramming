<?php
  session_start();
	// 省略
  // ユーザIDの確認
  $token = $_COOKIE['token'];
  if (! $token || $token != $_SESSION['token']) {
    die('認証エラー');
  }
?>
<body> 認証に成功しました </body>
