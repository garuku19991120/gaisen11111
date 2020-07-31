<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name=”viewport” content=”width=device-width,initial-scale=1.0″>
    <meta http-equiv="refresh" content="5; URL=">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/menu.css">
    <title>HOME</title>
</head>
<body>
  <center>

<div class="zentai2">
    <table class="zentai" border="<?php include('./php/tablenumber.php'); ?>">
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
                <td>
                  <?php include('./php/menu_phone.php'); ?>
                </td>
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