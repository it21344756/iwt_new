<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="../Styles/Style_h.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<title>Log-In From</title>

</head>

<body class="body3">
  <?php
    include_once '../PHP/Header.php'
  ?>

    <div class= "wrapper3">

      <div class= "title">
        User Log-In
      </div>

      <br>
      <br>
      <br>

      <div class "form">
          <form action="login.inc.php" method="post">
            <div class="label">Username</div>
              <div class= "input_field">
                <input type="text"  class="_input" name="Username">
              </div>

              <br>
              <br>


            <div class="label">Password:</div>
              <div class= "field">
                <input type="password" name="password" class="_input" >
              </div>
            <br>
            <br>
            <br>
            <div class="field">
              <button type="submit" name="submit" class="_btn_">Log-In</button>
            </div>
            <p>Not a member? <a href="signup.php">Sign-Up</a></p>
            <p><p>An Admin? <a href="adminlogin.php">Admin Log-In</a></p></p>
            <?php
              if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                  echo "<script>alert('Fill-In All Fields!!');</script>";
                }
                else if($_GET["error"] == "wrongLogin"){
                  echo "<script>alert('Invalid Username!!');</script>";
                }
                else if($_GET["error"] == "wrongpwd"){
                  echo "<script>alert('Wrong Password!!');</script>";
                }
              }
            ?>

          </div>
        </div>

    <?php
      include_once '../PHP/Footer.php'
    ?>
</body>
</html>
