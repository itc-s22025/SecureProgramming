<?php
//略
  if (empty($_COOKIE['CSRF_TOKEN'])) { //トークンがなければ生成
    $token = bin2hex(openssl_random_pseudo_bytes(24));
    setcookie('CSRF_TOKEN', $token);
  }
  //メールアドレスをJSONで返す

