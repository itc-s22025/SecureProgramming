<?php
	// パラメータを取得し、文字エンコーディングチェックと変換
	// 入力値検証まで行う関数
	// $key : GETパラメータ名
	// $pattern : 入力値検証用正規表現文字列
	// 戻り値 : 取得したパラメータ(String)
 	function getParam($key, $pattern, $error) {
		$val = filter_input(INPUT_GET, $key);
		// 文字エンコーディング(Shift_JS)のチェック
		if (! mb_check_encoding($val, 'Shift_JIS')) {
			die('文字エンコーディングが不正です');
    		}
    		$val = mb_convert_encoding($val, 'UTF-8', 'Shift_JIS');
		if (preg_match($pattern, $val) !== 1) {
			die($error);
		}
		return $val;
	}
	// パラメータ取得関数の呼び出し
	$name = getParam('name', '/\A[[:^cntrl:]]{1,20}\z/u', 
		'20文字以内で氏名を入力してください（必須項目）。制御文字は使用できません');
?>
<body>
名前は<?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?>です
</body>

