<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/size.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/menu.css">
    <title>ようこそ</title>
  </head>
  <body>
    <div class="link">
      <h1><a href="">Link1.</a><a href="">Link2.</a></h1>
    </div>

<form class="" action="" method="post">

    <table border="1"class="fairu">
      <tr>
        <td><input type="file" name="example" accept="image/*"></td>
        <td><label for="me"class="sentakunasi">
          <div class="senntakunasi">
            表示
          </div>
        </label>
        <input type="checkbox"id="me"class="hyoujinasi"value="off"></td>
        <td><input type="submit"class="fairu"name="fname"></td>
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

</form>
    <input type="checkbox" class="menuopen">
  </body>
</html>
