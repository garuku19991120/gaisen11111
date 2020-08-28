<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name=”viewport” content=”width=device-width,initial-scale=1.0″>
    <meta http-equiv="refresh" content="<?php include('./php/rel.php'); ?>; URL=" />
    <link rel="stylesheet" href="./scss/master.min.css" />
    <link rel="stylesheet" href="./scss/responsive.min.css"/>
    <link rel="stylesheet" href="./scss/menu.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js">
    </script>
    <meta charset="utf-8" />
    <title>GALLERY</title>
  </head>
  <body>
   <?php include('./php/menu_btn.php'); ?><!--メニューボタン-->
   <div class="phone_menu">
   <?php include('./php/phone.php'); ?>
   </div>
<center>
  <table border="0" class="maincontents_table">
    <tr>
      <td class="menu-space"></td>
      <td>
        <table>
          <tr>
            <td>
              <!--メインコンテンツ
              この中にあるイメージタグのアドレスを変えると自動的に横幅が統一されて上に詰めた画像一覧が表示される
              -->
              <div class="center">
                <ul>
                  <li>
                    <ol>
                      <li><img src="./image/1.jpg" alt=""></li>
                      <li><img src="./image/3.jpg" alt=""></li>
                      <li><img src="./image/3.jpg" alt=""></li>
                      <li><img src="./image/3.jpg" alt=""></li>
                      <li><img src="./image/2.png" alt=""></li>
                      <li><img src="./image/2.png" alt=""></li>
                    </ol>
                  </li
                  ><li>
                    <ol>
                      <li><img src="./image/2.png" alt=""></li>
                      <li><img src="./image/3.jpg" alt=""></li>
                      <li><img src="./image/2.png" alt=""></li>
                      <li><img src="./image/3.jpg" alt=""></li>
                      <li><img src="./image/3.jpg" alt=""></li>
                      <li><img src="./image/3.jpg" alt=""></li>
                    </ol>
                  </li>
                </ul>
              </div>
              <!--メインコンテンツ-->
            </td>
          </tr>
        </table>
        <p class="s1"></p>
      </td>
    </tr>
  </table>
  </body>
</html>
