<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/master.min.css">
    <title>ようこそ</title>
    <script type="text/javascript">
      function sousin(){
        document.getElementById("kirikae").value =1;

      }
    </script>
  </head>
  <body>
    <!-- メニューボタン -->
    <div class="task">
    <table class="menu">
      <tr>
        <td><a href="index.php"class="link_btn"><button class="button_active">設定</button></a></td>
      </tr>
        <tr>
        <td><a href="output.php"class="link_btn"><button class="button">表示確認</button></a></td>
      </tr>
    </table>
</div>
<?php
if($_POST["kirikae"] == 1) {
$id=1;
$img_pass="./img/".$_POST['file_input'];
$out_time=$_POST['out_time'];

}
$sql = null;$res = null;$dbh = null;
// ドライバ呼び出しを使用して MySQL データベースに接続します

$dsn = 'mysql:dbname=mysql;host=localhost;charset=utf8';
$user = 'root';
$password = '';

try {
    $dbh  = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
$sql = "INSERT INTO img_info_dtl (
  id, img_pass, out_time
) VALUES (
  '$id', '$img_pass', '$out_time'
)";
$res = $dbh->query($sql);

// 値を取得
//$sql = "INSERT INTO img_info_dtl(id,img_pass,out_time) VALUES (1, "./img/1.jpg",3,)";
// 接続を閉じる
$dbh = null;
  ?>
  <?php
  $id=1;
  $img_pass="./img/".$_POST['file_input'];
  $out_time=$_POST['out_time'];
  $sql = null;$res = null;$dbh = null;
  // ドライバ呼び出しを使用して MySQL データベースに接続します

  $dsn = 'mysql:dbname=mysql;host=localhost;charset=utf8';
  $user = 'root';
  $password = '';

  try {
    $dbh  = new PDO($dsn, $user, $password);
  } catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
  }
  $sql = "DELETE FROM img_info_dtl WHERE out_time = 0";
  $res = $dbh->query($sql);
  $sql = "DELETE FROM img_info_dtl WHERE img_pass = './img/'";
  $res = $dbh->query($sql);
  // 値を取得
  //$sql = "INSERT INTO img_info_dtl(id,img_pass,out_time) VALUES (1, "./img/1.jpg",3,)";
  // 接続を閉じる
  $dbh = null;
  ?>
<?php
// ドライバ呼び出しを使用して MySQL データベースに接続します
$sql = null;$res = null;$dbh = null;
$dsn = 'mysql:dbname=mysql;host=localhost;charset=utf8';
$user = 'root';
$password = '';
try {
    $dbh  = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    exit();
}
$sql = "SELECT * FROM img_info_dtl";
$res = $dbh->query($sql);
// 値を取得
?>
<form method="post" action="ppap.php" enctype="multipart/form-data">
ファイル:<input type="file" name="up_file"><br>
<input type="submit" value="upload">
</form>

  <form action="" method="post">

    <!-- ここから画像インプット -->
    <table class="input_table"border="0">
      <input type="hidden" name="kirikae"id="kirikae" value="0">
      <tr>
        <td></td>
        <td><input type="file" name="file_input" id="file_input"class="file_input"accept="image/*"></td>
        <td><input type="button" value="表示" class="hyouji"></td>
        <td><input type="button" value="✖" class="batten"></td>
        <td><input type="number" name="out_time" id="out_time" value="1" class="byousuu"></td>
      </tr>
      <tr>
        <th>ID</th>
        <th>PASS名</th>
        <th>秒数</th>
      </tr>
      <?php
      foreach( $res as $value ) {
          echo "<tr>";
        		echo "<td>$value[id]</td><td>$value[img_pass]</td><td>$value[out_time]</td>";
            echo '<td><input type="button"value="✖"><td>';
            echo "</tr>";
          }
      // 接続を閉じる
      $dbh = null;
        ?>
      <tr>
        <td colspan="4"><textarea name="" id="" cols="50" rows="3" class="messeji"></textarea></td>
      </tr>
      <tr>
        <td colspan="4"class="tyuuou"><input type="submit" value="送信"class="button"onclick="sousin()"></td>
      </tr>
    </table>

<!-- ここまでがインプットのボタン -->
<script type="text/javascript">
// HTMLInputElement オブジェクトを作成する
var element = document.createElement("input");
// コントロールタイプを「ファイル選択」に設定する
input_file.type = "file";
// 出力テスト
console.log(element);
</script>
</form>
<div class="maru">
aaa
</div>
</body>
</html>
