<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <script type="text/javascript" src="./js/script.js">
    </script>
    <title>商品登録</title>
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
                <td class="taitoru">注文</td>
              </tr>
              <tr>
                <td height="30"></td>
              </tr>
              <tr>
                <td class="ueyose">
                  <center>
                    <?php
                    try {
                       // DBへ接続
                       $dsn = 'mysql:host=localhost;dbname=mysql';
                       $user = 'root';
                       $dbh = new PDO($dsn, $user);
                        // SQL作成
                         $sql = "DELETE FROM tyuumon WHERE timeday =''";

                          // SQL実行
                           $res = $dbh->query($sql);

                         } catch(PDOException $e) {
                            echo $e->getMessage();
                             die();
                             $dbh = null;
                           }
                           // 接続を閉じる
                           ?>
                           <?php
                           try {
                              // DBへ接続
                              $dsn = 'mysql:host=localhost;dbname=mysql';
                              $user = 'root';
                              $dbh = new PDO($dsn, $user);
                               // SQL作成
                                $sql = "DELETE FROM tyuumon WHERE product_name =''";

                                 // SQL実行
                                  $res = $dbh->query($sql);

                                } catch(PDOException $e) {
                                   echo $e->getMessage();
                                    die();
                                    $dbh = null;
                                  }
                                  // 接続を閉じる
                                  ?>
                                  <form method="post" action=""id="fm2">

                                  <input type="hidden" name="sakujo" value="">
                                </form>
                                  <?php

                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                      $sakujo=$_POST['sakujo'];
                                     try {
                                     $dsn = 'mysql:host=localhost;dbname=mysql';
                                     $user = 'root';
                                     $dbh = new PDO($dsn, $user);
                                      // SQL作成
                                       $sql = "DELETE FROM tyuumon;";

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
                      <table border="0">
                      <tr height="40"class="top">
                      <td width="150">商品名</td>
                      <td width="200">更新日時</td>
                      <td width="200">個数</td>
                      <td width="150"><input type="button" name="" value="リセット"onClick="reset()"></td>
                      <?php
                        foreach ($stmt as $row) {
                          echo '<tr height="40" class="white">';
                            echo '<td class="white">';echo $row['product_name'];
                            echo '</td>';
                            echo '<td class="white">';echo $row['timeday'];
                            echo '</td>';
                            echo '<td class="white">';echo $row['kosuu'];
                            echo '</td>';
                          echo '</tr>';
                        }
                        echo '</table>';
                     ?>
                   </tr>
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
