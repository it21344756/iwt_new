<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/update.css">
    <title>Item Control Panel</title>
</head>
<body>
  <?php
    include_once '../PHP/Header.php'
  ?>


    <div class="container">
        <div class="title">Items Update Panel</div>
        <hr>
    <form action="./php/item.php" method="post">
        <div class="item-details">
            <div class="input-box">
                <span class="details">Item Name</span>
                <input type="text" name="name" id="name" placeholder= "Enter the item name"  required>
            </div>
            <div class="input-box">
                <span class="details">Item Details</span>
                <input type="text"  name="details" id="details" placeholder= "Enter the item Details"  required>
            </div>
            <div class="input-box">
                <span class="details">Item Price</span>
                <input type="text"  name="price" id="price" placeholder= "Enter the item Price"  required>
            </div>
            <div class="input-box">
                <span class="details">Item Image url</span>
                <input type="text"  name="image" id="image" placeholder= "Enter the Url of image"  required>
            </div>
           </div>
           <br><br>
           <div class="button">
               <input type="submit" name="submit" value="Confirm">
           </div>
          </form>
        </div>





        <?php
          include_once '../PHP/Header.php'
        ?>

     </body>
</html>
