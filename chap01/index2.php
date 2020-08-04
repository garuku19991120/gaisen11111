<?php
$page_flag = 0;

if( !empty($_POST['btn_confirm']) ) {
	$page_flag = 1;
}elseif( !empty($_POST['btn_submit']) ) {

	$page_flag = 2;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/style.css">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <title>商品登録</title>
  </head>
  <body bgcolor=#e4e3e3>
    <center>
      <table class="zentai"><!--全体のテーブル-->
        <tr>
          <td class="botan"><!--ここからボタンを載せているところ -->
            <?php include('./php/menu.php'); ?>
          </td>
          <td>
            <table class="honbun"border="0"><!--ここから本文-->
							<tr>
								<td class="taitoru">商品登録</td>
							</tr>
							<tr>
								<td height="30"></td>
							</tr>
              <tr>
                <td class="ueyose">
                  <center>
                  <?php if( $page_flag === 1 ): ?>
          	      <form method="post" action="">
          	      <table border="0"CELLSPACING="0">
          	        <tr height="40">
          	          <td class="top"><h3>ID</h3></td>
          	          <td class="top"><h3>商品名</h3></td>
          	          <td class="top"><h3>金額（円）</h3></td>
          	        </tr>
          	        <form method="post" action="">
          	        <tr height="33">
          	          <div class="kakuning">
          	          <td width="150"><p><?php echo $_POST['product_id']; ?></p></td>
          	          <td width="150"><p><?php echo $_POST['product_name']; ?></p></td>
          	          <td width="150"><?php echo $_POST['product_price']; ?></td>
          	        </div>
          	        </tr>
          	      </table>
          	      	<input type="hidden" name="product_id" value="<?php echo $_POST['product_id']; ?>">
          	      	<input type="hidden" name="product_name" value="<?php echo $_POST['product_name']; ?>">
          	        <input type="hidden" name="product_price" value="<?php echo $_POST['product_price']; ?>">

          					<?php
          					$counterror=0;
          					if ($_SERVER["REQUEST_METHOD"] == "POST") {
          							// フォームから送信されたデータを各変数に格納
          							$id   = $_REQUEST['product_id'];
          							$product_name = $_REQUEST['product_name'];
          							$price  = $_REQUEST['product_price'];
          					}
          					// ドライバ呼び出しを使用して MySQL データベースに接続します
          					$dsn = 'mysql:host=localhost;dbname=mysql';
          					$user = 'root';
          					echo '<br>';
          					// 素敵な処理
          					if($id==0):
          						echo "登録情報を入力してください。";
          					else:

          					$dbh = new PDO($dsn, $user);

          					$sql = "SELECT count(*) as cnt FROM syouhin where id=".$id;

          					// SQLステートメントを実行し、結果を変数に格納
          					$stmt = $dbh->query($sql);
          					// foreach文で配列の中身を一行ずつ出力
          					foreach ($stmt as $row) {
          						// データベースのフィールド名で出力
          						// 改行を入れる
          						$counterror=$row['cnt'];


          					}
          					if (0 == $counterror):
          						echo '<br>';
          						echo '<input type="submit" name="btn_back" value="戻る">';
          		      	echo '<input type="submit" name="btn_submit" value="送信">';
          				else:
          					echo '<br>';
          					echo 'IDを変えてください';
          					echo '<input type="submit" name="btn_back" value="戻る">';
          				endif;
          					endif;
          					 ?>


          				 <?php elseif( $page_flag === 2 ): ?>
										 <p>送信が完了しました。</p>
          					 <a href="index2.php" class="btn-square">戻る</a>
          					 <?php
          					 if ($_SERVER["REQUEST_METHOD"] == "POST") {
          						 // フォームから送信されたデータを各変数に格納
          						$timestamp = time();
          						$timeday=date("Y-m-d H:i:s", $timestamp);
          						 $id   = $_REQUEST['product_id'];
          						 $product_name = $_REQUEST['product_name'];
          						 $price  = $_REQUEST['product_price'];
          					 }
          					 $mysqli = new mysqli( "localhost", "root", "", "mysql");
          					 // SQL(INSERT)を作成
          					 $sql = "INSERT INTO syouhin (
          						 id, product_name, price,timeday
          					 ) VALUES (
          						 '$id', '$product_name', '$price','$timeday'
          					 )";
          					 $mysqli->query($sql);
          					 ?>
          				 	</form>
          				 	<!--- ここから主に使うところ  原稿    -->
          			 		<?php else: ?>
          		<form method="post" action="">
          	    <table border="0">
          	      <tr>
          	        <td class="top"><h3>ID</h3></td>
          	        <td class="top"><h3>商品名</h3></td>
          	        <td class="top"><h3>金額（円）</h3></td>
          	      </tr>
          				<tr height="15">
          				</tr>
          	      <tr>
          	        <td><input type="number" name="product_id" value=""></td>
          	        <td><input type="text" name="product_name" value=""></td>
          	        <td><input type="number" name="product_price" value=""></td>
          	      </tr>

          				<tr height="15">
          				</tr>
          				<tr>
          					<td></td>
          					<td><input type="submit"name="btn_confirm"value="送信する"class="btn-square"></td>
          					<td></td>
          				</tr>

          	    </table>


          	</form>
          					<?php endif; ?>
                </td>
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

    <hr>
    <div class="copywrite">
      <p><?php include('./php/copywrite.php'); ?></p>
	   </div>
   </body>
</html>
