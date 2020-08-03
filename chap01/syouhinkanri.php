<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <script type="text/javascript" src="./js/script.js">
    </script>
    <title>商品管理</title>
  </head>
  <body bgcolor=#e4e3e3>
    <center>
      <table class="zentai"><!--全体のテーブル-->
        <tr>
          <td class="botan">
            <?php include('./php/menu.php'); ?>
          </td>
          <td>
            <table class="honbun"><!--ここから本文-->
              <tr>
                <td class="taitoru">商品管理</td>
              </tr>
              <tr>
                <td height="30"></td>
              </tr>
              <tr>
                <td class="ueyose">
                  <center>
                    <?php
                    // 変数の初期化
                    if ($_POST['product_name3'] != "") {
                      // フォームから送信されたデータを各変数に格納
                      $id=$_POST['product_name3'];
                      try {
                        // DBへ接続
                        $dsn = 'mysql:host=localhost;dbname=mysql';
                        $user = 'root';
                        $dbh = new PDO($dsn, $user);
                        // SQL作成
                        $sql = "DELETE FROM syouhin WHERE id ='$id'";

                        // SQL実行
                        $res = $dbh->query($sql);

                      } catch(PDOException $e) {
                        echo $e->getMessage();
                        die();
                        $dbh = null;
                      }
                      // 接続を閉じる
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

                        $sql = "SELECT * FROM syouhin";

                        // SQLステートメントを実行し、結果を変数に格納
                        $stmt = $dbh->query($sql);
                      ?>
                      <form method="post" action=""id="fm3">

                      <?php
                      echo '<table border="0">';
                      echo '<tr height="40"class="top">';
                      echo '<td width="100">';echo 'ID';echo '</td>';
                      echo '<td width="150">';echo '商品名';echo '</td>';
                      echo '<td width="150">';echo '金額';echo '</td>';
                      echo '<td width="200">';echo '更新日時';echo '</td>';
                      echo '</tr>';
                        // foreach文で配列の中身を一行ずつ出力
                      foreach ($stmt as $row) {
                        // データベースのフィールド名で出力
                        // 改行を入れる
                        echo '<tr height="40" class="white">';
                        echo '<td width="100">';echo $row['id'];
                        echo '</td>';
                        echo '<td width="150">';echo $row['product_name'];
                        echo '</td>';
                        echo '<td width="150">';echo $row['price'];
                        echo '</td>';
                        echo '<td width="200">';echo $row['timeday'];
                        echo '</td>';
                        echo '<td>';
                        echo '<input type="hidden" id="';echo $row['id']; echo '" value="';echo $row['product_name']; echo'">';
                        echo '<input type="submit" name="';echo $row['product_name']; echo '" value="削除する"onClick="kanridel(';echo $row['id'];echo')">';
                        echo '</td>';
                        echo '</tr>';
                      }
                      echo '</table>';
                     ?>
                     <input type="hidden"name="product_name3">
                   </form>

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
