<?php
  if (isset($_POST["submit"])){

    $name= $_POST["name"];
    $age= $_POST["age"];
    $gender= $_POST["gender"];
    $email= $_POST["email"];
    $phone= $_POST["phoneno"];
    $Username= $_POST["username"];
    $pwd= $_POST["password"];
    $pwdrp= $_POST["repeatpassword"];

    require_once'config.inc.php';
    require_once'functions.inc.php';

    if (emptyInputSignup($name,$age,$gender,$email,$phone,$Username,$pwd,$pwdrp) !== false){
      header("location: signup.php?error=Empty_Input");
      exit();
    }
    if (invalidUsername($Username) !== false){
      header("location: signup.php?error=Invalid_Useername");
      exit();
    }
    if (invalidEmail($email) !== false){
      header("location: signup.php?error=Invalid_Email");
      exit();
    }
    if (pwdMatch($pwd,$pwdrp) !== false){
      header("location: signup.php?error=Password Dont Match");
      exit();
    }

    if (UnameExists($conn,$Username) !== false){
      header("location: signup.php?error=Username Exists!!");
      exit();
    }


    createUser($conn,$name,$age,$gender,$email,$phone,$Username,$pwd );

  }

  else{
    header("location: signup.php");
    exit();
  }
?>
