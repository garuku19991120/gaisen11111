<?php

// ドライバ呼び出しを使用して MySQL データベースに接続します
$sql = null;$res = null;$dbh = null;

$dsn = 'mysql:dbname=mysql;host=localhost;charset=utf8';
$user = 'root';
$password = '';

try {
    $dbh  = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
$sql = "SELECT * FROM img_info_dtl";
$res = $dbh->query($sql);


foreach( $res as $value ) {
  $vv=$vv+1;
  echo '<img src="';echo"$value[img_pass]";echo'"class="img_out"id="gazou';echo "$vv"; echo'">';
    }

// 接続を閉じる
$dbh = null;
  ?>
