<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css/master.min.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <a href="index.php"><button class="batu_btn">✖</button></a>

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
      <!-- <script type="text/javascript">
      var gazou_out=0;
      var gazou="gazou"+0
document.getElementById(gazou2).style.display ="none";
        function gazou(){
          var gazou_out="1";
          var gazou111;
          gazou1="gazou"+gazou_out;
        }
        document.getElementById(gazou1).style.display ="none";
        setTimeout("gazou()", 3000);
      </script> -->
  </body>
</html>
