<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name=”viewport” content=”width=device-width,initial-scale=1.0″>
  <!--ここは決めた秒数でページを再読み込みする文
    <meta http-equiv="refresh" content="5; URL=">
-->
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript" src="./js/script.js"></script>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/size.css">
    <link rel="stylesheet" href="./css/menu.css">
    <title>WORKS</title>
</head>
<body>
  <center>
    <table>
      <tr>
        <td class="yoha1"></td><td class="yoha1"></td><td class="yoha2"><?php include('./php/menu_phone.php'); ?></td>
      </tr>
    </table>
<div class="zentai2">
    <table class="zentai"border="<?php include('./php/tablenumber.php'); ?>">
      <tr>
        <td class="buttontable">
          <?php include('./php/menu_main.php'); ?>
        </td>
        <td>
          <table class="main_contents">
            <tr>
              <td></td>
            </tr>
          </table>
          <td class="ueyose">
            <table class="yohaku">
              <tr>
                <td><?php include('./php/menu_phone.php'); ?></td>
              </tr>
            </table>
          </td>
        </td>
      </tr>
    </table>
</div>
  <p><?php include('./php/copywrite.php'); ?></p>
</body>
</html>
