<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./scss/master.min.css">
    <script type="text/javascript">
    function sousin(){
      var input_message = document.getElementById("switch_form").value=1;
      alert(input_message);
    }
    </script>
    <title></title>
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
      ご予算\n".
      $_POST['form4']."\n
      ホームページ\n".
      $_POST['form5'];

        $to = 'garuku@ours-llc.com';
        $subject = "こんにちは".$name;
        $message = $mailbody;
        $headers = "From: garuku@ours-llc.com";
    mb_send_mail($to, $subject, $message, $headers);
  }
     ?>
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
  </body>
</html>
