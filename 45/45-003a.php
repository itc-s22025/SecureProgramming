<?php
  function ex($s) { // XSS対策用
    echo htmlspecialchars($s, ENT_COMPAT, 'UTF-8');
  }
  session_start();
  $id = @$_SESSION['id']; // ユーザIDの取り出し
  // ログイン確認…省略
  $p_token = filter_input(INPUT_POST, 'token');
  $s_token = @$_SESSION['token'];
  if (empty($p_token) || $p_token !== $s_token) {
    die('正規の画面からご使用ください'); // 適当なエラーメッセージを表示
  }
  $pwd = filter_input(INPUT_POST, 'pwd');   // パスワードの取得
?>
<body>
<?php ex($id); ?>さんのパスワードを<?php ex($pwd); ?>に変更しました
</body>

