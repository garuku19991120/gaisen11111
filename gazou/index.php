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
    <div class="hidari">
    <table border="<?php include('./php/tablenumber.php'); ?>"class="hidari">
    </div>
      <tr>
        <td></td>
        <td class="menu">
          <a href="">画像確認</a>
        </td>
        <td class="menu">
          <a href="#">画像設定編集</a>
        </td>
        <td class="menu"></td>
      </tr>
    </table>
    <hr>
<!--ここまでがメニュー -->

<?php


 ?>




 <input type="file" id="example" multiple>

 <!-- 👇ここにプレビュー画像を追加する -->
 <div id="preview"></div>














    <center>

      <div class="yohaku"></div>
<table border="<?php include('./php/tablenumber.php'); ?>">
  <tr>
    <td class="gazounyuuryoku">
      <table>
        <tr>
          <td>

            <label for="sample1"><input type="file" id="sample1"accept="image/jpeg, image/png"></label></td>
            <td><input type="button"value="👁"></td>
            <td><input type="submit" name="" value="✖"></td>
        </tr>
      </table>
      <table>
        <tr>
          <td>
            <label for="sample1"><input type="file"id="sample1"accept="image/jpeg, image/png"></label></td>
            <td><input type="button"value="👁"></td>
            <td><input type="submit" name="" value="✖"></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class="gazounyuuryoku">
      <table>
        <tr>
          <td>
            <label for="sample1"><input type="file" id="sample1"accept="image/jpeg, image/png"></label></td>
            <td><input type="button"value="👁"></td>
            <td><input type="submit" name="" value="✖"></td>
        </tr>
      </table></td>
  </tr>



</table>


<input type="file" id="example" multiple>

<!-- 👇ここにプレビュー画像を追加する -->
<div id="preview"></div>


<div id="preview"></div>

<form method="post" enctype="multipart/form-data">
  <input type="file" name="example" accept="image/*">
  <button type="submit">送信する</button>
</form>
  </body>
</html>
