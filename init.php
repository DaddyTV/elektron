<?php
  $db = mysqli_connect('127.0.0.1','root','','elektron');

  if(mysqli_connect_errno()) {
    echo 'Forbindelse til databasen mislykkes med følgende fejl: '. mysqli_connect_errno();
    die();
  }

  $db->set_charset("utf8");
?>
