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
      <table class="zentai"border="1"><!--全体のテーブル-->
        <tr>
          <td class="botan">
            <?php include('./php/menu.php'); ?>
          </td>
          <td>
            <table class="honbun"><!--ここから本文-->

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
                <tr height="40"class="top">
                <td width="100">ID</td>
                <td width="150">商品名</td>
                <td width="150">金額</td>
                <td width="200">更新日時</td>
                <td width="200">個数</td>
                <td width="200">合計金額</td>
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
                  echo $row['id'];
                  echo '</td>';
                  echo '<td>';
                  echo '<input type="hidden"name="';echo $row['id'];echo'"id="';echo $row['id'];echo'">';
                  $goukeia=$row['id'];
                  $goukei = $row['kosuu']*$row['price'];
                  echo $goukei;
                  echo '</td>';
                  echo '</tr>';
                }
                echo '</table>';
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
