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

<body class="body1">
  <?php
    include_once '../PHP/Header.php'
  ?>

    <div class= "wrapper1">

      <div class= "title">
        Registration form
      </div>

      <div class="form">
          <form action="signup.inc.php" method="post">
            <div class="label">Full Name</div>
              <div class= "input_field">
                <input type="text"  class="_input" name="name">
              </div>

            <div class="label">Age</div>
              <div class= "input_field">
                <input type="text" class="_input" name="age" >
              </div>

            <div class= "input_field">
              <div class="label">Gender:</div>
                <div class= "custom_select">
                  <select name="gender">
                    <option value="">Select </option>
                    <option value="male">Male </option>
                    <option value="female">Female </option>
                  </select>
                </div>
            </div>
            <br>

            <div class="label">Email:</div>
              <div class= "field">
                <input type="text" class="_input" name="email" >
              </div>

            <div class="label">Phone No:</div>
              <div class= "field">
                <input type="text" name="phoneno" class="_input" >
              </div>

            <div class="label">UserName:</div>
              <div class= "field">
                <input type="text" name="username" class="_input" >
              </div>

            <div class="label">Password:</div>
              <div class= "field">
                <input type="password" name="password" class="_input" >
              </div>

            <div class="label">Re-Enter Password:</div>
              <div class= "field">
                <input type="password" class="_input" name="repeatpassword">
              </div>

            <br
            <div class= "field">
              <div class="check">
                <input type="checkbox" required> I Agree to Terms and Conditions.</input>
                <span class="checkmark"></span>
              </div>
            </div>

            <br>
            <div class="field">
              <button type="submit" name="submit" class="_btn_">Sign-Up</button>
            </div>

          </div>
          <?php
            if(isset($_GET["error"])){
              if($_GET["error"] == "Empty_Input"){
                echo "<script>alert('Fill-in All Fields!!');</script>";
              }
              else if($_GET["error"] == "Invalid_Useername"){
                echo "<script>alert('Invalid Username!!');</script>";
              }
              else if($_GET["error"] == "Invalid_Email"){
                echo "<script>alert('Invalid Email!!');</script>";
              }
              else if($_GET["error"] == "Password Dont Match"){
                echo "<script>alert('Passwords Don't Match!!');</script>";
              }
              else if($_GET["error"] == "Username Exists!!"){
                echo "<script>alert('Username Exists!!');</script>";
              }
            }

          ?>

        </div>

    <?php
      include_once '../PHP/Footer.php'
    ?>
</body>
</html>
