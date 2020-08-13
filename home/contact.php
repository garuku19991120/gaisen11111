<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="refresh" content="<?php include('./php/rel.php'); ?>; URL=" />
    <link rel="stylesheet" href="./scss/master.css"/>
    <meta charset="utf-8" />
    <title>CONTACT</title>
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
        <center>
        お問い合わせ
        <form class="mail" action="" method="post">
      <input type="hidden" name="switch"value="0"id="switch_form">
      <table>
        <tr>
          <td>名前</td>
          <td><input type="text"name="form1"id="form1"class="form"placeholder="名前を入力してください"/></td>
        </tr>
        <tr>
          <td>メールアドレス</td>
          <td><input type="email"name="form2"id="form2"class="form"placeholder="メールアドレスを入力してください"/></td>
        </tr>
        <tr>
          <td>電話番号</td>
          <td><input type="tel"name="form3"id="form3"class="form"placeholder="000-0000-0000"/></td>
        </tr>
        <tr>
          <td>貴社のホームページ</td>
          <td><input type="text"name="form4"id="form4"class="form"placeholder="ご予算を入力してください"/></td>
        </tr>
        <tr>
          <td>貴社のホームページ</td>
          <td><input type="text"name="form4"id="form4"class="form"placeholder="ご予算を入力してください"/></td>
        </tr>
        <tr>
          <td>希望納期</td>
          <td><input type="text"name="form4"id="form4"class="form"placeholder="ご予算を入力してください"/></td>
        </tr>
        <tr>
          <td>ご予算</td>
          <td><input type="text"name="form4"id="form4"class="form"placeholder="ご予算を入力してください"/></td>
        </tr>
        <tr>
          <td>ホームページ</td>
          <td><textarea name="form5"id="form5"class="form"/></textarea></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td colspan="2">
            <button onclick="sousin()">送信する</button>
          </td>
        </tr>
      </table>
    </form>

        <p class="s1">Dummy Text</p>
      </td>
    </tr>
  </table>

  </body>
</html>
