<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css/button.css">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <script type="text/javascript" src="./js/script.js">
    </script>
    <link rel="stylesheet" href="./css/style.css">
    <title>レジ</title>
  </head>
  <body bgcolor=#e4e3e3>
    <center>
      <table class="zentai"border="0"><!--全体のテーブル-->
        <tr>
          <td class="botan">
            <?php include('./php/menu.php'); ?>
          </td>
          <td>
            <table class="honbun"><!--ここから本文-->
            <tr>
              <td class="taitoru">レジ</td>
            </tr>
            <tr>
              <td height="30"></td>
            </tr>


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

                  $sql = "SELECT * FROM nyuuryoku";

                  // SQLステートメントを実行し、結果を変数に格納
                  $stmt = $dbh->query($sql);
                ?>
                <?php

                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                   try {
                   $dsn = 'mysql:host=localhost;dbname=mysql';
                   $user = 'root';
                   $dbh = new PDO($dsn, $user);
                    // SQL作成
                     $sql = "DELETE FROM nyuuryoku;";

                      // SQL実行
                       $res = $dbh->query($sql);

                     } catch(PDOException $e) {
                        echo $e->getMessage();
                         die();
                         // 接続を閉じる
                         $dbh = null;
                       }
                       }

            ?>

                <tr height="40"class="top">
                <td width="100">ID</td>
                <td width="150">商品名</td>
                <td width="150">金額</td>
                <td width="200">更新日時</td>
                <td width="200">個数</td>
                <td width="200">合計金額</td>
                <td width="200">削除</td>
                <td width="200">
                  <form action="" method="post"id="sakujo">
                    <input type="button" name="sakujo" value="全削除"onclick="ryry()">
                  </form>
                </td>
                </tr>
                <form method="post" action=""id="fm5">
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
                  echo $row['kosuu'];
                  echo '</td>';
                  echo '<td>';
                  $goukeikosuu = $goukeikosuu+$row['kosuu'];
                  $goukei = $row['kosuu']*$row['price'];
                  echo $goukei;
                  $goukeia=$goukeia+$goukei;
                  echo '</td>';
                  echo '<td>';
                  echo '</td>';
                  echo '</tr>';
                }
                echo '</table>';
                echo '
                <table class="okaikei">
                  <tr>
                    <td>合計点数</td><td>合計金額</td><td>お預かり</td><td>おつり</td><td>会計ボタン</td>
                  </tr>
                  <tr>
                    <td>';
                    echo $goukeikosuu;
                    echo '</td>
                    <td>';
                    echo $goukeia;
                    echo '</td>
                    <input type="hidden"id="goukeikingaku"name="goukeikingaku"value="';echo $goukeia;echo '">';
                    echo'<td>
                    <input type="number"id="oadukari">
                    </td>
                    <td>
                    <input type="text"id="oturi"name="oturi"class="oturi"readonly="readonly">
                    </td>
                    <td>
                    <input type="button" name="" value="会計"onClick="okaikei()">
                    </td>
                  </tr>
                </table>
                ';
                ?>


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
