<?php
// openssl_random_pseudo_bytes
function getToken() {
  $s = openssl_random_pseudo_bytes(24);
	return base64_encode($s);
}

  // ここまでで認証成功
  session_start();
  session_regenerate_id(true); // セッションIDの再生成
  $token = getToken(); // トークン生成
  // セッションに保存
  setcookie('token', $token, 0, '', '', true, true);
  $_SESSION['token'] = $token;
?>
<body>
認証成功<a href="48-002.php">next</a>
</body>

