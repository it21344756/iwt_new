<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../Styles/style_payment.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../Styles/style_Payment.css">

</head>
<body>
<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">Dilivery Address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="Fname" placeholder="Jack Simon">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" name="Email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="Address" placeholder="Lane, Street">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="city" placeholder="Kandy">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="zip" placeholder="12345">
                    </div>
                </div>

            </div>
            <br>
            <br>
            <br>
            <br>

            <div class="col">

                <h3 class="title">Payment methodes</h3>

                <div class="inputBox">
                    <span>Card Payment</span>
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="Cname" placeholder="Jack Simon">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name="Cnumber" placeholder="1234-5678-1234-5678">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="Exmo" placeholder="March">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="Exye" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="CVV" placeholder="123">
                    </div>
                </div>

            </div>

        </div>

        <input type="submit" value="Pay" class="submit-btn">

    </form>

</div>

</body>
