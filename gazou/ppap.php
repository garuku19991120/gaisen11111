<?php
  $uploaddir = './img/';
  $upload = $uploaddir . basename($_FILES['userfile']['name']);
  move_uploaded_file($_FILES['userfile']['tmp'], $upload)
?>
