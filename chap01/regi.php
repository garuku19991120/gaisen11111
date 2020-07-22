<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css/button.css">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <script type="text/javascript" src="./js/script.js">
    </script>
    <link rel="stylesheet" href="./css/style.css">
    <title>商品登録</title>
  </head>
  <body bgcolor=#e4e3e3>
    <center>
      <table class="zentai"border="0"><!--全体のテーブル-->
        <tr>
          <td class="botan">
            <table><!--ボタンを入れてある場所-->
              <tr>
                <td><a href="index2.php"class="btn btn-border">商品登録</a></td>
              </tr>
              <tr>
                <td><a href="syouhinkanri.php"class="btn btn-border">商品管理</a></td>
              </tr>
              <tr>
                <td><a href="regi.php"class="btn btn-border">注文入力</a></td>
              </tr>
              <tr>
                <td><a href="tyuumon.php"class="btn btn-border">注文</a></td>
              </tr>
              <tr>
                <td><a href="nyuuryoku.php"class="btn btn-border">入力画面</a></td>
              </tr>
              <tr>
                <td><a href="reji.php"class="btn btn-border">レジ</a></td>
              </tr>
            </table><!--ここまでボタンが入れてある場所 -->
          </td>
          <td>
            <table class="honbun"><!--ここから本文-->
              <tr>
                <td class="ueyose">
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

                        $sql = "SELECT * FROM syouhin";

                        // SQLステートメントを実行し、結果を変数に格納
                        $stmt = $dbh->query($sql);
                      ?>
                      <table border="0">
                      <tr height="40"class="top">
                      <td width="100">ID</td>
                      <td width="150">商品名</td>
                      <td width="150">金額</td>
                      <td width="200">更新日時</td>
                      </tr>
                      <form method="post" action=""id="fm1">
                      <?php
                      foreach ($stmt as $row) {
                        echo '<tr height="40" class="white">';
                        echo '<td width="100"class="bigf">';echo $row['id'];
                        echo '</td>';
                        echo '<td width="150"class="bigf">';echo $row['product_name'];
                        echo '</td>';
                        echo '<td width="150"class="bigf">';echo $row['price'];
                        echo '</td>';
                        echo '<td width="200"class="bigf">';echo $row['timeday'];
                        echo '</td>';
                        echo '<td>';
                        echo '<input type="hidden" id="';echo $row['id']; echo '" value="';echo $row['product_name']; echo'">';
                        echo '<input type="submit" name="';echo $row['product_name']; echo '" value="送信する"class="btn btn-border"onClick="sousin(';echo $row['id'];echo')">';
                        echo '</td>';
                        echo '</tr>';
                      }
                      echo '</table>';
                     ?>

                     <input type="hidden" value="" name="product_name2">


                     <?php
                     if ($_SERVER["REQUEST_METHOD"] == "POST") {
                       // フォームから送信されたデータを各変数に格納
                      $timestamp = time();
                      $timeday=date("Y-m-d H:i:s", $timestamp);
                      $product_name = $_POST['product_name2'];
                     }
                     $mysqli = new mysqli( "localhost", "root", "", "mysql");
                     // SQL(INSERT)を作成
                     $sql = "INSERT INTO tyuumon (
                       product_name,timeday
                     ) VALUES (
                       '$product_name','$timeday'
                     )";
                     $mysqli->query($sql);
                     ?>



                   </table>
          </td>
          <td class="yohaku">
            <table><!--余白用テーブル、後々何か入れてもOK -->
              <tr>
                <td></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
<center>
    <hr>
    <div class="copywrite">
      <p><?php include('./php/copywrite.php'); ?></p>
	   </div>
   </body>
</html>
