<?php include_once 'config.inc.php'; ?>

 <?php

$Item_Name= $_POST["name"];
$Item_Details= $_POST["details"];
$Item_Price = $_POST["price"];
$Item_Image = $_POST["image"];




	$SQL = "insert into items(Item_Name,Item_Details,Item_Price,Item_Image)values('$Item_Name','$Item_Details','$Item_Price','$Item_Image')";


	if(mysqli_query($conn,$SQL)){
		echo "<script>alert ('Your Data Submited')</script>";
	}
	else{
		echo "<script>alert ('Your Data Not Submited 222')</script>";
	}

	mysqli_close($conn);

 ?>
