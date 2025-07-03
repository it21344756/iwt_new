<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../Styles/adProfile.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
  <?php
    include_once '../PHP/Header.php'
  ?>

  <br>
  <br>


<center>
  <p styles="font-size:;">Admin's Panel</p>
  <h1>Manage Content</h1>
  <br>

</center>

<br>
<br>
<br>
<center>
<table>
  <th class="th">
<div class="container">
  <a href="resView.php"><button class="btn"><strong>View Reservations</strong></button></a>
</div>
</th>
<th class="th">
<div class="container">

  <a href="item.php"><button class="btn"><strong>Add Items to Store</strong></button></a>
</div>
</th>
<th class="th">
<div class="container">

  <a href="itemmanage.php"><button class="btn"><strong>Manage Store</strong></button></a>
</div>
</th>
</table>
  <br>
  <br>
</center>
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
