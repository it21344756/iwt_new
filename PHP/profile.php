<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="../Styles/Style_h.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<title>Registration Form</title>

</head>

<body class="body2">
  <?php
    include_once '../PHP/Header.php';
    require_once '../PHP/profile.inc.php';
  ?>

  <section>
  <?php
    if(isset($_SESSION["Username"])){
      echo "<h3> Hello there.." . $_SESSION["Username"]. "</h3>";
    }
  ?>
</section>

    <div class= "wrapper2">

      <div class= "title">
        Update Account Details
      </div>

      <div class "form">
          <form action="profile.inc.php" method="post">

          <?php
            $sql = "SELECT * FROM registered_user WHERE U_ID ='{$_SESSION["U_ID"]}';";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)>0){
              while ($row = mysqli_fetch_assoc($result)){
            ?>
            <div class="label">Full Name</div>
              <div class= "input_field">
                <input type="text"  class="_input" name="name" value="<?php echo $row['Name']; ?>" >
              </div>

            <div class="label">Age</div>
              <div class= "input_field">
                <input type="text" class="_input" name="age" value="<?php echo $row['Age']; ?>" >
              </div>


            <div class="label">Email:</div>
              <div class= "field">
                <input type="text" class="_input" name="email" value="<?php echo $row['Email']; ?>" >
              </div>

            <div class="label">Phone No:</div>
              <div class= "field">
                <input type="text" name="phoneno" class="_input" value="<?php echo $row['Phone']; ?>" >
              </div>

            <div class="label">UserName:</div>
              <div class= "field">
                <input type="text" name="username" class="_input" value="<?php echo $row['Username']; ?>" >
              </div>

            <div class="label">Password:</div>
              <div class= "field">
                <input type="password" name="password" class="_input" value="<?php echo $row['Password']; ?>" >
              </div>

            <div class="label">Re-Enter Password:</div>
              <div class= "field">
                <input type="password" class="_input" name="repeatpassword" value="<?php echo $row['Password']; ?>">
              </div>
            <?php
              }
            }
          ?>


            <br>
            <div class="field">
              <button type="submit" name="submit" class="_btn_">UPDATE</button>
            </div>
            <br>
            <div class="field">
              <button type="submit" name="delete" class="_btn_">Delete Account</button>
            </div>

          </div>
          <?php
            if(isset($_GET["error"])){
              if($_GET["error"] == "Empty_Input"){
                echo "<script>alert('Fill-in all fields!!');</script>";
              }
              else if($_GET["error"] == "Invalid_Useername"){
                echo "<script>alert('Invalid Username!!');</script>";
              }
              else if($_GET["error"] == "Invalid_Email"){
                echo "<script>alert('Invalid Email!!');</script>";
              }
              else if($_GET["error"] == "Password Dont Match"){
                echo "<script>alert('Password Dont Match!!');</script>";
              }
              else if($_GET["error"] == "Username Exists!!"){
                echo "<script>alert('Username Existss!!');</script>";
              }
              else if($_GET["error"] == "none"){
                echo "<script>alert('Updated Succesfully!!');</script>";
              }
              else if($_GET["error"] == "deleted"){
                echo "<script>alert('Account Deleted!!');</script>";
              }
            }
          ?>

        </div>

    <?php
      include_once '../PHP/Footer.php'
    ?>
</body>
</html>
