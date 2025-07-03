<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../Styles/home.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
  <?php
    include_once '../PHP/Header.php'
  ?>

  <br>
  <br>
  <br>
  <br>


<center>
  <p styles="font-size:;">FASHION STYLES</p>
  <h1>Want to make an appointment?</h1>
  <a href="reservation.php">
    <button type="button" style="	position: absolute;
    	top: 50%;left: 50%;transform: translate(-50%, -50%);
    	-ms-transform: translate(-50%, -50%);
    	background-color: #000000;
    	color: rgb(255, 255, 255);
    	font-family: 'Times New Roman';
    	font-size: 20px;
    	padding: 10px 10px;
    	border: rgb(100px, 10, 10);
    	cursor: pointer;
    	border-radius: 10px;
    	text-align: center;">Reserve Now</button>
  </a>
  <br>
  <br>
  <br>
  <br>
</center>


<center>
<table>
  <th class="th">
<div class="container">
  <img src="../img/images/Men fashion.jpg" alt="Snow" id="p2">
  <a href="mens.php"><button class="btn"><strong>Men's Fashion</strong></button></a>
</div>
</th>
<th class="th">
<div class="container">
  <img src="../img/images/Women fashion.jpg" alt="Snow" id="p2">
  <a href="womens.php"><button class="btn"><strong>Women's Fashion</strong></button></a>
</div>
</th>
<th class="th">
<div class="container">
  <img src="../img/images/kids fashion.jpg" alt="Snow" id="p3">
  <a href="kids.php"><button class="btn"><strong>Kid's Fashion</strong></button></a>
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
