<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name=”viewport” content=”width=device-width,initial-scale=1.0″>
  <!--ここは決めた秒数でページを再読み込みする文
    <meta http-equiv="refresh" content="5; URL=">
-->
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/size.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/menu.css">
      <script type="text/javascript" src="./js/script.js"></script>
    <title>PROFILE</title>
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
              <td>
                <div class="ueyose">
                <table border="<?php include('./php/tablenumber.php'); ?>">
                  <tr>
                    <td><img src="./image/top.png"class="top"></td>
                  </tr>
                </table>
              </td>
              <td>
                <p class="name">Garuku</p>

                MAIL:garuku@ours-llc.com<br>
                Twitter:@garuku_1120<br>
                Instagram:https://www.instagram.com/garuku_1120/<br>


              </td>
              <td></td>
              
            </tr>
            <tr class="kuuhgakugyou">
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="pro_bun"><p>
              <br><br>
                Garuku（ガルク）。埼玉県出身。情報系の高校でプログラミングを学び、
                東洋美術学校で二年間イラストレーションについて学びました。
                現在はIT系の会社でウェブプログラミングをしています。<br>
                <br><br>
                自分はリアルかつポップなイラストを描いています。
                本当はいないとわかっていてももしかしたらいるかもしれない。
                そういうイラストを目指しています。<br>
                <br><br>
                使うことのできるソフト<br>
                Adobe Photoshop、Adobe Illustrator、Adobe Dreamweaver、Adobe InDesign、
                CLIP STUDIO PAINT、Paint Tool SAI、Live2D<br>AviUtl、Blender、Atom、
                
                Visual Studio Code、Studio One4<br>

              </p></td>  
            </tr>
          </table>
        </div>
          </td>
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
