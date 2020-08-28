<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
require 'database.php';
require 'jsonenc.php';
require 'aplLog.php';


// ドライバ呼び出しを使用して MySQL データベースに接続します
//変数の初期化
$sql = null;$res = null;$dbh = null;
//SQL文を$dsnに格納している。
$dsn = 'mysql:dbname=mysql;host=localhost;charset=utf8';
//pass.user入力
$user = 'root';
$password = '';
$pg = connect_pg();
try {
    $dbh  = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
   $e->getMessage();
    exit();
}
$sql = "SELECT * FROM img_info_dtl";
$res = $dbh->query($sql);

foreach( $res as $value ) {
  $params = array();

  $params[] = $value['id'];
  $params[] = $value['img_pass'];
  $params[] = $value['outtime'];
}
close_pg($pg);
  echo exp_json_encode($params);

// 接続を閉じる
$dbh = null;
  ?>
