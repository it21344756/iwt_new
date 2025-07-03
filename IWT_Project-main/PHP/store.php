

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
    <link rel="stylesheet" href="../Styles/store.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

  <?php
    include_once '../PHP/Header.php'
  ?>

    <div class="store-product-cart">

        <div class="cat-cart">
            <img src="../img/Creams.png" alt="Avatar">
            <div class="cat-cart-name">
              <h2><b>Cosmetic</b></h2>
            </div>
        </div>

        <div class="cat-cart">
            <img src="../img/shampoo.png" alt="Avatar">
            <div class="cat-cart-name">
              <h2><b>Shampos</b></h2>
            </div>
        </div>


        <div class="cat-cart">
            <img src="../img/body lotions.png" alt="Avatar">
            <div class="cat-cart-name">
              <h2><b>Body Lotion</b></h2>
            </div>
        </div>

        <div class="cat-cart">
            <img src="../img/Hair tools.png" alt="Avatar">
            <div class="cat-cart-name">
              <h2><b>Hair Tools</b></h2>
            </div>
        </div>

    </div>


    <h1 class="store-product-page-title">All Products</h1>
    <hr>

    <div class="store-products-container-box">

            <div class="store-products-container-box2">



                    <!-- Product list 1 -->

             <?php
                $sql = "SELECT * FROM items";
                $result = mysqli_query($conn,$sql);
                $count=0;
                if($result->num_rows > 0){
                    while($row=$result->fetch_assoc()) {
                        $count = $count + 1;

                        if($count <= 5){
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
                                            <button class='store-buy-btn'>Buy</button>
                                            <button class='store-cart-btn'><img src='../img/Cart/cart.svg'></button>
                                      </div>
                                </div>
                            </div>";

                            }

                        }

                    }

                else{
                    echo "0 results";
                }
                echo "</table>";

                $conn->close();
                ?>


            </div>



   </div>






   <?php
     include_once '../PHP/Footer.php'
   ?>


</body>
</html>
