<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name=”viewport” content=”width=device-width,initial-scale=1.0″>
    <meta http-equiv="refresh" content="<?php include('./php/rel.php'); ?>; URL=" />
    <link rel="stylesheet" href="./scss/master.min.css"/>
    <link rel="stylesheet" href="./scss/responsive.min.css"/>
        <link rel="stylesheet" href="./scss/menu.min.css"/>
    <script type="text/javascript">
      function sousin(){
        var ret=confirm("送信してよろしいでしょうか？");
        if(ret==true){

        }
      }
    </script>
    <meta charset="utf-8" />
    <title>CONTACT</title>
  </head>
  <body>
    <?php
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");

    	if ($_POST['switch']== "1") {
        $mailbody = "
      ●お名前\n".
      $_POST['form1']."\n
      メールアドレス\n".
      $_POST['form2']."\n
      電話番号\n".
      $_POST['form3']."\n
      貴社のホームページ\n".
      $_POST['form4']."\n
      希望納期\n".
      $_POST['form5']."\n
      ご予算\n".
      $_POST['form6']."\n
      お問い合わせ内容\n".
      $_POST['form7'];

        $to = 'garuku@ours-llc.com';
        $subject = "こんにちは".$name;
        $message = $mailbody;
        $headers = "From: garuku@ours-llc.com";
    mb_send_mail($to, $subject, $message, $headers);
  }
     ?>
    <!-- PHPファイルで管理するつもりなので後々消してPHPを呼び出す感じに変えると思う。-->
<?php include('./php/menu_btn.php'); ?>
<?php include('./php/phone.php'); ?>
<!--ここまでmenu_btn-->

<center>
  <table border="1" class="maincontents_table">
    <tr>
      <td class="menu-space"></td>
      <td>
        <center>
        <p>お問い合わせ</p>
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
          <td><input type="text"name="form4"id="form4"class="form"placeholder="URLを入力してください"/></td>
        </tr>
        <tr>
          <td>希望納期</td>
          <td><input type="text"name="form5"id="form5"class="form"placeholder="ご希望納期を入力してください"/></td>
        </tr>
        <tr>
          <td>ご予算</td>
          <td><input type="text"name="form6"id="form6"class="form"placeholder="ご予算を入力してください"/></td>
        </tr>
        <tr>
          <td>お問い合わせ内容</td>
          <td><textarea name="form7"id="form7"class="form"/></textarea></td>
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
