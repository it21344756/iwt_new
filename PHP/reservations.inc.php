<?php
  if (isset($_POST["submit"])){

    $fname= $_POST["fname"];
    $lname= $_POST["lname"];
    $date= $_POST["date"];
    $time= $_POST["time"];
    $fashion= $_POST["fashion"];
    $number= $_POST["number"];
    $email= $_POST["email"];
    $review= $_POST["w3review"];

    require_once'config.inc.php';
    require_once'functions.inc.php';

    if (emptyInputRes($fname,$lname,$date,$time,$fashion,$number,$email,$review) !== false){
      header("location: reservation.php?error=Empty_Input");
      exit();
    }

    if (invalidEmail($email) !== false){
      header("location: reservation.php?error=Invalid_Email");
      exit();
    }


    $sql = "INSERT INTO reservations SET fname = '$fname', lname ='$lname', res_date= '$date', res_time ='$time', fashion_category='$fashion', contact_no ='$number',email='$email', comment= '$review'; ;";
    $result = mysqli_query($conn,$sql);
    if(isset($_SESSION['success'])){
     echo "<script>alert(".$_SESSION['success'].")</script>";
     unset($_SESSION['success']);
   }
    if ($result){
      echo "<script>alert('Reservation Added!!');</script>";
      header("location:index.php?error=none");
    }
  }


?>
