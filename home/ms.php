<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name=”viewport” content=”width=device-width,initial-scale=1.0″>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $to = "garuku@ours-llc.com";
    $subject = "TEST";
    $message = "This is TEST.\r\nHow are you?";
    $headers = "From: riku@ours-llc.com";
    mb_send_mail($to, $subject, $message, $headers);
     ?>
    <form class="mail" action="" method="post">
      <table>
        <tr>
          <td><input type="text"name="form1"id="form1"class="form"placeholder="名前を入力してください"/></td>
        </tr>
        <tr>
          <td><input type="text"name="form1"id="form1"class="form"placeholder="名前を入力してください"/></td>
        </tr>
        <tr>
          <td><input type="text"name="form1"id="form1"class="form"placeholder="名前を入力してください"/></td>
        </tr>
        <tr>
          <td><input type="text"name="form1"id="form1"class="form"placeholder="名前を入力してください"/></td>
        </tr>
        <tr>
          <td><input type="text"name="form1"id="form1"class="form"placeholder="名前を入力してください"/></td>
        </tr>
      </table>
      <input type="submit" name="sousin" value="送信する">
    </form>
  </body>
</html>
