<?php

$db = mysqli_connect("localhost","root","","db_buradio_team");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
