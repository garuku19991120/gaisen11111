<?php
echo '
<div class="menu_btn">
<table class="menu_table">
  <tr class="menu_tr">
    <td class="menu_td"><a href="index.php"><button class="menu_button">PAGE1</button></a></td>
  </tr>
  <tr class="menu_tr">
    <td class="menu_td"><a href="profile.php"><button class="menu_button">PAGE2</button></a></td>
  </tr>
  <tr class="menu_tr">
    <td class="menu_td"><a href="gallery.php"><button class="menu_button">PAGE3</button></a></td>
  </tr>
  <tr class="menu_tr">
    <td class="menu_td"><a href="works.php"><button class="menu_button">PAGE4</button></a></td>
  </tr>
  <tr class="menu_tr">
    <td class="menu_td"><a href="contact.php"><button class="menu_button">PAGE5</button></a></td>
  </tr>
</table>
  ';
echo '<div class="copywrite">';
$today = date("Y");
echo "© 2020-".($today)." GAISEN All Rights Reserved.";
echo '</div>';
  echo'
</div>


';

 ?>
