<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name=”viewport” content=”width=device-width,initial-scale=1.0″>
  <!--ここは決めた秒数でページを再読み込みする文
    <meta http-equiv="refresh" content="5; URL=">
-->
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/size.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/form.css">
    <script type="text/javascript" src="./js/script.js"></script>
    <script type = "text/javascript">
    <!--
    function functionName()
    {
    var select1 = document.forms.formName.selectName1; //変数select1を宣言
    var select2 = document.forms.formName.selectName2; //変数select2を宣言

    select2.options.length = 0; // 選択肢の数がそれぞれに異なる場合、これが重要

    if (select1.options[select1.selectedIndex].value == "1")
    {
    select2.options[0] = new Option("");
    select2.options[1] = new Option("りんご");
    select2.options[2] = new Option("みかん");
    select2.options[3] = new Option("オレンジ");
    }

    else if (select1.options[select1.selectedIndex].value == "2")
    {
    select2.options[0] = new Option("");
    select2.options[1] = new Option("きゅうり");
    select2.options[2] = new Option("にんんじん");
    select2.options[3] = new Option("たまねぎ");
    }

    else if (select1.options[select1.selectedIndex].value == "3")
    {
    select2.options[0] = new Option("");
    select2.options[1] = new Option("牛肉");
    }
    }
    //-->
    </script>
    <title>CONTACT</title>
</head>
<body bgcolor onLoad="functionName()">

  <center>

<div class="zentai2">
    <table class="zentai"border="<?php include('./php/tablenumber.php'); ?>">
      <tr>
        <td class="buttontable">
          <?php include('./php/menu_main.php'); ?>
        </td>
        <td>

          <center>
            <table class="main_contents">
              <tr>
                <td>
                  <table border="0">
                    <form name="formName" method="post" action="">
                    <tr>
                      <td class="foom"><label for="name">お名前</label></td>
                      <td class="foom">
                        <input type="text" name="" placeholder="お名前を入力してください"class="fome"tabindex="1"id="name">
                      </td>
                    </tr>
                    <tr>
                      <td class="foom"><label for="mail">メールアドレス</label></td>
                      <td class="foom">
                        <input type="mail" name="" placeholder="メールアドレスを入力してください"class="fome"tabindex="1"id="mail">
                      </td>
                    </tr>
                    <tr>
                      <td class="foom"><label for="tell">電話番号</label></td>
                      <td class="foom">
                        <input type="tel" name="" placeholder="000-0000-0000"class="fome"tabindex="1"id="tell">
                      </td>
                    </tr>
                    <tr>
                      <td class="foom"><label for="page">貴社のホームページ</label></td>
                      <td class="foom">
                        <input type="text" name="" placeholder="URLを入力してください"class="fome"tabindex="1"id="page">
                      </td>
                    </tr>
                    <tr>
                      <tr>
                        <td class="foom"><label for="page">貴社のホームページ</label></td>
                        <td class="foom">
                          <input type="text" name="" placeholder="URLを入力してください"class="fome"tabindex="1"id="page">
                        </td>
                      </tr>
                      <tr>
                      <td class="foom"><label for="nouki">希望納期</label></td>
                      <td class="foom">
                        <input type="text" name="" placeholder="希望の納期を入力してください"class="fome"tabindex="1"id="nouki">
                      </td>
                    </tr>
                    <tr>
                      <td class="foom"><label for="jisseki">実績公開について</label></td>
                      <td class="foom">
                        <input type="text" name="" placeholder="ホームページ、同人誌などの掲載可否"class="fome"tabindex="1"id="jisseki">
                      </td>
                    </tr>
                    <tr>
                      <td class="foom"><label for="yosan">ご予算</label></td>
                      <td class="foom">
                        <input type="text" name="" placeholder="ご予算を入力してください"class="fome"tabindex="1"id="yosan">
                      </td>
                    </tr>
                    <tr>
                      <td class="foom"><label>好きな食べ物のジャンルは？</label></td>
                      <td class="foom">
                        <select name = "selectName1" onChange="functionName()"class="sentaku">
                          <option value = "0"></option>
                          <option value = "1">くだもの</option>
                          <option value = "2">やさい</option>
                          <option value = "3">にくるい</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td class="foom">
                        そのジャンル内で何が特に好きですか？
                      </td>
                      <td class="foom">
                        <select name = "selectName2"class="sentaku">
                        </select>
                      </td>
                    </tr>
                  </table>
                  <center>
                  <input type="submit" name="send_button" value="送信する"onclick="sendbutton()"class="send_button">
                </form>
                </td>
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
