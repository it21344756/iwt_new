<?php
   function emptyInputSignup($name,$age,$gender,$email,$phone,$Username,$pwd,$pwdrp){
     $results;
     if (empty($name) || empty($age) || empty($gender) || empty($email) || empty($phone) || empty($Username) || empty($pwd) || empty($pwdrp)) {
       $results = true;
     }
     else{
       $results = false;
     }

     return $results;
   }

   function invalidUsername($Username){
     $results;
     if (!preg_match("/^[a-zA-Z0-9]*$/",$Username)) {
       $results = true;
     }
     else{
       $results = false;
     }

     return $results;
   }

   function invalidEmail($email){
     $results;
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
       $results = true;
     }
     else{
       $results = false;
     }

     return $results;
   }

   function pwdMatch($pwd,$pwdrp){
     $results;
     if ($pwd !== $pwdrp ){
       $results = true;
     }
     else{
       $results = false;
     }

     return $results;
   }

  function UnameExists($conn,$Username){
     $sql = "SELECT * FROM registered_user WHERE Username = ?; ";
     $stmt = mysqli_stmt_init($conn);

     if (!mysqli_stmt_prepare($stmt,$sql)){
       header("location: signup.php?error=STMT_FAILED!");
       exit();
     }

     mysqli_stmt_bind_param($stmt, "s",$Username);
     mysqli_stmt_execute($stmt);

     $resultsData = mysqli_stmt_get_result($stmt);

     if($row = mysqli_fetch_assoc($resultsData)){
       return $row;
     }
     else{
       $result = false;
       return $result;
     }

    mysqli_stmt_close($stmt);
  }

   function createUser($conn,$name,$age,$gender,$email,$phone,$Username,$pwd){
     $sql = "INSERT INTO registered_user(Name, Age, Gender, Email, Phone, Username, Password) VALUES(?,?,?,?,?,?,?) ; ";
     $stmt = mysqli_stmt_init($conn);

     if (!mysqli_stmt_prepare($stmt,$sql)){
       header("location: signup.php?error=STMT_FAILED!");
       exit();
     }

     $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

     mysqli_stmt_bind_param($stmt, "sssssss",$name,$age,$gender,$email,$phone,$Username,$hashedpwd);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);
     header("location:login.php?error=NONE");
     exit();
   }

   function emptyInputlogin($Username,$pwd){
     $results;
     if (empty($Username) || empty($pwd)) {
       $results = true;
     }
     else{
       $results = false;
     }

     return $results;
   }

   function loginUser($conn,$Username,$pwd){

     $UnameExists = UnameExists($conn,$Username);

     if($UnameExists === false){
       header("location: login.php?error=wrongLogin");
       exit();
     }

     $hashedpwd = $UnameExists["Password"];
     $checkpwd = password_verify($pwd, $hashedpwd);

     if ($checkpwd === false){
       header("location:login.php?error=wrongpwd");
       exit();
     }
     else if($checkpwd === true){
       session_start();
       $_SESSION["U_ID"] = $UnameExists["U_ID"];
       $_SESSION["Username"] = $UnameExists["Username"];
       header("location:../PHP/index.php");
       exit();
     }
   }


   function emptyInputupdate($name,$age,$email,$phone,$Username,$pwd,$pwdrp){
     $results;
     if (empty($name) || empty($age) || empty($email) || empty($phone) || empty($Username) || empty($pwd) || empty($pwdrp)) {
       $results = true;
     }
     else{
       $results = false;
     }

     return $results;
   }

   function emptyInputRes($fname,$lname,$date,$time,$fashion,$number,$email,$review){
     $results;
     if (empty($fname) || empty($lname) || empty($date) || empty($time) || empty($fashion) || empty($number) || empty($email) || empty($review)) {
       $results = true;
     }
     else{
       $results = false;
     }

     return $results;
   }

   function adminExists($conn,$Username){
      $sql = "SELECT * FROM admin WHERE adUname = ?; ";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: adminlogin.php?error=STMT_FAILED!");
        exit();
      }

      mysqli_stmt_bind_param($stmt, "s",$Username);
      mysqli_stmt_execute($stmt);

      $resultsData = mysqli_stmt_get_result($stmt);

      if($row = mysqli_fetch_assoc($resultsData)){
        return $row;
      }
      else{
        $result = false;
        return $result;
      }

     mysqli_stmt_close($stmt);
   }


   function loginAdmin($conn,$Username,$pwd){

     $UnameExists = adminExists($conn,$Username);

     if($UnameExists === false){
       header("location: adminlogin.php?error=wrongLogin");
       exit();
     }

     $hashedpwd = $UnameExists["adpwd"];


     if ($pwd == $hashedpwd){
       session_start();
       $_SESSION["adminID"] = $UnameExists["adminID"];
       $_SESSION["adminUname"] = $UnameExists["adminUname"];
       header("location:../PHP/adProfile.php");
       exit();

     }
     else{
       header("location:adminlogin.php?error=wrongpwd");
       exit();
     }
   }
?>
