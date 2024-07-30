<?php
 session_start();
 // 省略
 // トークンの確認
 $token = @$_COOKIE['token'];
 if (empty($token) || ! hash_equals(@$_SESSION['token'], $token)) {
 die('認証エラー。トークンが不正です');
}
?>
<body> トークンをチェックし、認証状態を確認しました </body>
