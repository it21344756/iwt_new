<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/Style_h.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Item Control Panel</title>
</head>
<body class="ibody">
  <?php
    include_once '../PHP/Header.php'
  ?>

    <div class="wrapper1">
        <div class="title">Items Managment Panel</div>
    <div class="form">
    <form action="../PHP/item.inc.php" method="post">
        <div class="item-details">
            <div>
                <span class="label">Item Name</span>
                <input type="text" class="_input" name="name" id="name" placeholder= "Enter the item name"  required>
            </div>
            <div>
                <span class="label">Item Details</span>
                <input type="text" class="_input" name="details" id="details" placeholder= "Enter the item Details"  required>
            </div>
            <div>
                <span class="label">Item Price</span>
                <input type="text" class="_input" name="price" id="price" placeholder= "Enter the item Price"  required>
            </div>
            <div>
                <span class="label">Item Image url</span>
                <input type="text" class="_input" name="image" id="image" placeholder= "Enter the Url of image"  required>
            </div>
           </div>
           <br><br>
           <div class="field">
             <button type="submit" name="submit" class="_btn_">Confirm</button>
           </div>
          </form>
        </div>
        </div>
        <br>
        <br>

        <?php
          include_once '../PHP/Footer.php'
        ?>
     </body>
</html>
