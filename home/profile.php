<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name=”viewport” content=”width=device-width,initial-scale=1.0″>
    <meta http-equiv="refresh" content="<?php include('./php/rel.php'); ?>; URL=" />
    <link rel="stylesheet" href="./scss/master.min.css"/>
    <link rel="stylesheet" href="./scss/responsive.min.css"/>
    <meta charset="utf-8" />
    <title>PROFILE</title>
  </head>
  <body>
    <!-- PHPファイルで管理するつもりなので後々消してPHPを呼び出す感じに変えると思う。-->
  <?php include('./php/menu_btn.php'); ?>
  <?php include('./php/phone.php'); ?>
<!--ここまでmenu_btn-->

<center>
  <table border="1" class="maincontents_table">
    <tr>
      <td class="menu-space"></td>
      <td>
        <table>
          <tr>
            <td>
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

          </td>
        </tr>
        </table>
      </td>
    </tr>
  </table>
  </body>
</html>
