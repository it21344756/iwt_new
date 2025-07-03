<?php
  $serverName = "localhost";
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "iwt_project";

  $conn = mysqli_connect(  $serverName, $dBUsername, $dBPassword, $dBName );

  if(!$conn){
    die("Connection faild: ". mysqli_connect_error() );
  }
?>
