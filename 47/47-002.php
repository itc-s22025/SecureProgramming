<?php
  $id = isset($_POST['id']) ? $_POST['id'] : '';
  $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';
  $url = isset($_POST['url']) ? $_POST['url'] : '';
  if ($id != '' && $pwd != '') {
    header('Location: ' . $url);
    exit();
}
// 以下はログイン失敗
?>
<body>
IDまたはパスワードが違います
<a href="47-001.php">再ログイン</a>
</body>
