<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから送信されたデータを各変数に格納
    $id   = $_REQUEST['product_id'];
    $product_name = $_REQUEST['product_name'];
    $price  = $_REQUEST['product_price'];
}
// ドライバ呼び出しを使用して MySQL データベースに接続します
$dsn = 'mysql:host=localhost;dbname=mysql';
$user = 'root';
// 素敵な処理
if($id==0):
  echo "登録情報を入力してください。";
else:

$dbh = new PDO($dsn, $user);

$sql = "SELECT count(*) as cnt FROM img_info where id=".$id;

// SQLステートメントを実行し、結果を変数に格納
$stmt = $dbh->query($sql);
// foreach文で配列の中身を一行ずつ出力
foreach ($stmt as $row) {	$counterror=$row['cnt'];


}


 ?>
