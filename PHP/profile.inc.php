<?php
  session_start();


  include 'config.inc.php';
  include 'functions.inc.php';

  if(isset($_POST["submit"])) {
    $name= $_POST["name"];
    $age= $_POST["age"];
    $email= $_POST["email"];
    $phone= $_POST["phoneno"];
    $Username= $_POST["username"];
    $pwd= $_POST["password"];
    $pwdrp= $_POST["repeatpassword"];

    /*require_once'config.inc.php';
    require_once'functions.inc.php';*/



    if (emptyInputupdate($name,$age,$email,$phone,$Username,$pwd,$pwdrp) !== false){
      header("location: profile.php?error=Empty_Input");
      exit();
    }
    if (invalidUsername($Username) !== false){
      header("location: profile.php?error=Invalid_Useername");
      exit();
    }
    if (invalidEmail($email) !== false){
      header("location: profile.php?error=Invalid_Email");
      exit();
    }
    if (pwdMatch($pwd,$pwdrp) !== false){
      header("location: profile.php?error=Password Dont Match");
      exit();
    }

    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $sql = "UPDATE registered_user SET Name = '$name', Age ='$age', Email='$email', Phone='$phone', Username='$Username', Password ='$hashedpwd' WHERE U_ID='{$_SESSION["U_ID"]}';";
    $result = mysqli_query($conn,$sql);
    if ($result){
      header("location:profile.php?error=none");
    }
  }
  else if(isset($_POST["delete"])){
    $sql = "DELETE  FROM registered_user WHERE U_ID='{$_SESSION["U_ID"]}';";
    $result = mysqli_query($conn,$sql);
    if ($result){
      header("location:logout.inc.php?error=deleted");
    }
  }
    ?>
