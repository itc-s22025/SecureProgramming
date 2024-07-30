<?php
	session_start();
	header('Content-Type: text/html; charset=UTF-8');
	$id = @$_POST['ID']; //id
	$pwd = @$_POST['PWD']; // password
	//DB接続
	$db = new PDO("mysql:host=127.0.0.1;dbname=wasbook", "wasbook", "wasbook");
	//SQLの組み立て
	$sql = "SELECT * FROM users WHERE id = '$id' AND PWD = '$pwd'";
	$ps = $db->query($sql);
?>
<html>
<body>
<?php
	if ($ps->rowCount() > 0){
		$_SESSION['id'] = $id;
		echo 'ログイン成功';
}else{
		echo 'ログイン失敗';
}
// pg_close($con);
?>
</body>
</html>
