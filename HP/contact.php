<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name=”viewport” content=”width=device-width,initial-scale=1.0″>
    <meta http-equiv="refresh" content="5; URL=">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript">


    </script>
    <title>CONTACT</title>
</head>
<body>
  <center>

<div class="zentai2">
    <table class="zentai"border="1">
      <tr>
        <td class="buttontable">
          <table class="none">
            <tr>
              <td>
                <div class="container">
                  <a href="index.php" class="btn-animation-02">
                    <span>1<span></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="container">
                  <a href="profile.php" class="btn-animation-02">
                    <span>2<span></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="container">
                  <a href="works.php" class="btn-animation-02">
                    <span>3<span></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="container">
                  <a href="contact.php" class="btn-animation-02">
                    <span>4<span></a>
                </div>
              </td>
            </tr>
          </table><!-- ボタンが格納されている。 -->
        </td>
        <td>
          <center>
          <table class="kawaii1">
            <tr>
              <td>
                <table border="0">
                  <form action="" method="post">
                  		  <input type="hidden"id="sentaku_1"name="sentaku_1"alue=牛肉,豚肉,鶏肉>
                  		  <input type="hidden"id="sentaku_2"name="sentaku_2"value=麩菓子,きなこ棒>
                  		  <input type="hidden"id="sentaku_3"name="sentaku_3"value=リンゴジュース,オレンジジュース,ドクペ>



                  <tr>
                    <td class="foom">お名前</td>
                    <td class="foom">
                      <input type="text" name="" value="名前を入力してください"class="fome">
                    </td>
                  </tr>
                  <tr>
                    <td class="foom">
                      好きな食べ物のジャンルは？
                    </td>
                    <td class="foom">
                      <select class="sentaku" name="janru"onChange="jannru()">
                        <option value=""></option>
                        <option value="">お肉</option>
                        <option value="">お菓子</option>
                        <option value="">ジュース</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="foom">
                      そのジャンル内で何が特に好きですか？
                    </td>
                    <td class="foom">
                      <select class="sentaku" name="">
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="foom"></td>
                    <td class="foom"></td>
                  </tr>
                </table>
                <center>
                <br>
                <input type="submit" name="send_button" value="送信する"onclick="sendbutton()"class="send_button">
              </form>
              </td>
            </tr>
          </table>
          <td>
            <table class="yohaku">
              <tr>
                <td></td>
              </tr>
            </table>
          </td>
        </td>
      </tr>
    </table>
</div>
<hr>
<div class="copywrite">
  <p>© 2020-<?php $today = date("Y");print_r($today);?> GAISEN</p>
</div>
</body>
</html>
