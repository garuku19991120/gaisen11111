<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
      <script type="text/javascript" src="./js/script.js"></script>
    <title>画像表示設定</title>
  </head>
  <body>
    <hr>
    <table>
      <tr>
        <td></td><td><a href="#">画像表示設定</a></td><td><a href="#">画像表示</a></td>
      </tr>
    </table>
    <hr>
    <center>


      <?php
        // ドライバ呼び出しを使用して MySQL データベースに接続します
        $dsn = 'mysql:host=localhost;dbname=mysql';
        $user = 'root';

        try {
            $dbh = new PDO($dsn, $user);
          } catch (PDOException $e) {
            echo "接続に失敗しました。: " . $e->getMessage() . "\n";
            exit();
          }

          echo '<br>';
          // 素敵な処理
          $dbh = new PDO($dsn, $user);

          $sql = "SELECT * FROM gazou";

          // SQLステートメントを実行し、結果を変数に格納
          $stmt = $dbh->query($sql);
        ?>


    <table border="<?php include('./php/tablenumber.php'); ?>">
      <tr>
        <td>
          <form action="" method="post">
            <input type="file" name="fname">

        </td>
        <td>
          <input type="checkbox" name="" value=""id="gazou1"class="botann">
          <label for="gazou1">ボタン</label>
          <input type="submit"value="アップロード">
        </td>
      </tr>
      <tr>
        <td>
            <input type="file" name="fname">
        </td>
        <td>
          <input type="checkbox" name="" value=""id="gazou2"class="botann">
          <label for="gazou2">ボタン</label>
          <input type="submit" value="アップロード">
        </form>
        </td>
      </tr>
    </table>

<?php
$tempfile = $_FILES['fname']['tmp_name'];
$filename = './upimg/' . $_FILES['fname']['name'];

if (is_uploaded_file($tempfile)) {
  if ( move_uploaded_file($tempfile , $filename )) {
    echo $filename . "をアップロードしました。";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "ファイルが選択されていません。";
}
?>
<?php
echo $_POST["fname"];
if ($_POST["fname"] == "true") {
  // フォームから送信されたデータを各変数に格納
 $timestamp = time();
 $timeday=date("Y-m-d H:i:s", $timestamp);
 $fname = $_POST['fname'];
$mysqli = new mysqli( "localhost", "root", "", "mysql");
// SQL(INSERT)を作成
$sql = "INSERT INTO gazou
 (
  code, createdate
) VALUES (
  '$fname','$timeday'
)";
$mysqli->query($sql);
}
?>
  </body>
</html>
