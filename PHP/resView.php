<?php
    include 'config.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/resView.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Styles/resView.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php
    include_once '../PHP/Header.php'
  ?>
        <center>
        <div class=wrapper>
            <br>
            <h1>Reservations</h1>
            <table style="margin-right:100px;" class="table table-border">
              <thead>
                <tr>
                  <th>Reservation_ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Fashion Category</th>
                  <th>Contact No</th>
                  <th>Email</th>
                  <th>Comments</th>

                </tr>
              </thead>
              <tbody>
                <?php
                  $serverName = "localhost";
                  $dBUsername = "root";
                  $dBPassword = "";
                  $dBName = "iwt_project";

                  $conn = mysqli_connect(  $serverName, $dBUsername, $dBPassword, $dBName );
                  if(!$conn){
                    die("Connection faild: ". mysqli_connect_error() );
                  }

                  $sel="SELECT * FROM reservations";
                  $query=$conn->query($sel);
                  while ($row=$query->fetch_assoc()){

                ?>
                <tr>
                  <td> <?php echo $row['res_id'];?></td>
                  <td> <?php echo $row['fname'];?></td>
                  <td> <?php echo $row['lname'];?></td>
                  <td> <?php echo $row['res_date'];?></td>
                  <td> <?php echo $row['res_time'];?></td>
                  <td> <?php echo $row['fashion_category'];?></td>
                  <td> <?php echo $row['contact_no'];?></td>
                  <td> <?php echo $row['email'];?></td>
                  <td> <?php echo $row['comment'];?></td>

                </tr>
                <?php
                  }
                  ?>
              </tbody>
            </table>
          </div>
        </center>



      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

    <?php
      include_once '../PHP/Footer.php'
    ?>
</body>

</html>
