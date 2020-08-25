<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name=”viewport” content=”width=device-width,initial-scale=1.0″>
    <meta http-equiv="refresh" content="<?php include('./php/rel.php'); ?>; URL=" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script type="text/javascript">
            $(document).ready(function(){
                $('.slider').bxSlider({
                    auto: true,
                    pause: 5000,
                });
            });
    </script>
    <link rel="stylesheet" href="./scss/master.css"/>
    <meta charset="utf-8" />
    <title>HOME</title>
  </head>
  <body>
    <!-- PHPファイルで管理するつもりなので後々消してPHPを呼び出す感じに変えると思う。-->
    <?php include('./php/menu_btn.php'); ?>
<!--ここまでmenu_btn-->

<center>
  <table border="1" class="maincontents_table">
    <tr>
      <td class="menu-space"></td>
      <td>
        <table>
          <tr>
            <td>
              <div class="slider">
                <img src="./image/gazou1.png" width="400"height="300"style="object-fit: cover;">
                <img src="./image/gazou1.png" width="400"height="300"style="object-fit: cover;">
                <img src="./image/gazou1.png" width="400"height="300"style="object-fit: cover;">
                <img src="./image/gazou1.png" width="400"height="300"style="object-fit: cover;">
              </div>
          </td>
        </tr>
        </table>
        <p class="s1"></p>
        <p class="s_jouhou">サークル情報:凱旋</p>
        <p>ーーーーーーーーーーーーーーーーーーーーーーーーー
          <br>
          ーーーーーーーーーーーーーーーーーーーーーーーーー
          <br>
          ーーーーーーーーーーーーーーーーーーーーーーーーー
          <br>
          ーーーーーーーーーーーーーーーーーーーーーーーーー
        </p>
      </td>
    </tr>
  </table>
  </body>
</html>
