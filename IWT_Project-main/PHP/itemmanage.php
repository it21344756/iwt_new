

<?php
	include_once '../PHP/config.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="stylesheet" href="../Styles/itemmanage.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
  <?php
    include_once '../PHP/Header.php'
  ?>





    <h1 class="store-product-page-title">Product Manage</h1>
    <hr>

    <div class="store-products-container-box">

            <div class="store-products-container-box2">



                    <!-- Product list 1 -->

             <?php
                $sql = "select * from items";
                $result = $conn->query($sql);
                $count=0;
                if($result->num_rows > 0){
                    while($row=$result->fetch_assoc()) {
                        $count = $count + 1;

                        if($count <=5){
                            echo

                            " <div class='store-product-lists'>
                                <div class='store-product-carts'>
                                         <img src=".$row["Item_Image"]." >
                                         </div>
                                    <div class='store-box-carts'>
                                        <h3>".$row["Item_Name"]."</h3>
                                        <h4><span>Rs.</span>".$row["Item_Price"]."</h4>
                                        <h5>".$row["Item_Details"]."</h5>
                                        <div class='store-product-btn'>
                                            <a href='../PHP/itemdlt.php?id=".$row["Item_ID"]."'><button type='submit' name='submit' class='store-buy-btn'>DELETE</button></a>
                                            <a href='../PHP/itemupdate.php?id=".$row["Item_ID"]."'><button type='submit' name='submit' class='store-cart-btn'>UPDATE</button></a>
                                      </div>
                                </div>
                            </div>";

                            }

                        }

                    }

                else{
                    echo "0 results";
                }


                $conn->close();
                ?>


            </div>



   </div>
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
