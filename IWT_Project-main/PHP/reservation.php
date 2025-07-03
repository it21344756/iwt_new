<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/reservation.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
  <?php
    include_once '../PHP/Header.php'
  ?>

    <center>
        <div class="wrapper1">
            <h1>Make A Reservation</h1>
            <form action="reservations.inc.php" method="post">
                <label align="left">First name:</label><br>
                <input type="text" id="fname" name="fname" placeholder="Enter Your First Name Here" required><br>
                <label>Last name:</label><br>
                <input type="text" id="lname" name="lname" placeholder="Enter Your Last Name Here" required><br><br>
                <label>Date:</label><br>
                <input type="date" id="date" name="date" placeholder="Enter Date Here" required><br><br>
                <label>Time:</label><br>
                <input type="time" id="time" name="time" placeholder="Enter Time Here" required><br><br>
                <label>Fashion Category:</label><br>
                <select name="fashion" id="fashion" required>
                    <option value="0">--Select Fashion Category--</option>
                    <option value="men">Men</option>
                    <option value="women">Women</option>
                    <option value="kids">Kids</option>
                </select> <br>
                <label>Mobile No:</label><br>
                <input type="text" id="number" name="number" placeholder="Enter Mobile Number here" required><br><br>
                <label>Email:</label><br>
                <input type="text" id="email" name="email" placeholder="Enter Email here"
                    pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br><br>
                <label>Comments:</label><br>
                <textarea id="w3review" name="w3review" rows="4" cols="50">
                </textarea>
                <br>
                <input type="checkbox" id="terms" name="terms" value="terms" required>
                <label>Agree to terms and conditions</label><br> <br>

                <input type="reset" value="Reset">
                <br>
                <button type="submit" name="submit" class="_btn_">Submit</button>
            </form>
            </div>
            <?php
              if(isset($_GET["error"])){
                if($_GET["error"] == "Empty_Input"){
                  echo "<script>alert('Fill-in All Fields!!');</script>";
                }

                else if($_GET["error"] == "Invalid_Email"){
                  echo "<script>alert('Invalid Email!!');</script>";
                }
              }
            ?>
    </center>


    <?php
      include_once '../PHP/Footer.php'
    ?>
</body>

</html>
