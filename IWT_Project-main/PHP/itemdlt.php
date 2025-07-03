<?php include_once '../PHP/config.inc.php'; ?>

 <?php

if (isset($_GET['id'])) {
    $id  = $_GET['id'];


    $SQL = "DELETE FROM items WHERE Item_ID='$id '";



    if(mysqli_query($conn,$SQL)){
        echo "<script>alert ('Your Items Deleted')</script>";

    }
    else{
        echo "<script>alert ('Your Data Not Submited')</script>";

    }

    header("location:../PHP/itemmanage.php");

    mysqli_close($conn);


}
 ?>
