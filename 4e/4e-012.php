<?php
class Logger {
  const LOGDIR = '/tmp/';  //ログ出力
  private $filename = '';  //ログファイル名
  private $log = '';       //ログバッファ

  public function __construct($filename) {
    $this->filename = basename($filename); 
    $this->log = '';	//ログバッファ
  }

  public function __destruct() {
    $path = self::LOGDIR . $this->filename;  // ファイル名の組み立て
    $fp = fopen($path, 'a');
    if ($fp === false) {
      die('Logger: ファイルがオープンできません' . htmlspecialchars($path));
    }
    if (! flock($fp, LOCK_EX)) {   //排他ロック
      die('Logger: ファイルのロックに失敗しました');
    }
    fwrite($fp, $this->log); //書き出し
    fflush($fp);             //フラッシュしてからロック解除
    flock($fp, LOCK_UN);
    fclose($fp);
  }

  public function add($log) {  //ログ出力
    $this->log .= $log;        //バッファに追加
  }
}
