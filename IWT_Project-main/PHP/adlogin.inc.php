<?php
  if (isset($_POST["submit"])){
    $Username= $_POST["Username"];
    $pwd= $_POST["password"];

    require_once 'config.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputlogin($Username, $pwd) !== false){
      header ("location:adminlogin.php?error=emptyinput");
      exit();
    }

    loginAdmin($conn,$Username,$pwd);
  }
  else {
    header("location:adminlogin.php");
  }
?>
