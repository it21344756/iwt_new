<style>
    .menu{
    width: 100%;
    background: #24262b;
    opacity: 85%;
    overflow: auto;

}
.menu ul{
    margin: 0;
    padding: 0;
    list-style: none;
    line-height: 100px;

}
.menu li{
    float: right;

}
.menu ul li a{
    background: #24262b;
    text-decoration: none;
    width: 150px;
    display: block;
    text-align: center;
    color: #ffffff;
    font-size: 16px;
    font-family:'Poppins', sans-serif;

    letter-spacing: 0.5px;

}
.menu li a:hover{
    color: lightcoral;
    opacity: 0.5px;
    font-size: 16px;
}


#Icon{
  width:100px;
  height:80px;
  margin-top: 10px;
  margin-left:30px;
  margin-bottom: 10px;
  float:left;
}



</style>
    <?php
    session_start();
    ?>
    <nav>
    <div class="menu">
            <ul>
                  <?php
                  if(isset($_SESSION["U_ID"])){
                    echo "<li><a href='../PHP/logout.inc.php'><b>Log-Out</b></a></li>";
                    echo "<li><a href='../PHP/profile.php'><b>Profile</b></a></li>";
                  }
                  else if(isset($_SESSION["adminID"])){
                    echo "<li><a href='../PHP/logout.inc.php'><b>Log-Out</b></a></li>";
                    echo "<li><a href='../PHP/adProfile.php'><b>Manage</b></a></li>";
                  }
                  else{
                    echo "<li><a href='../PHP/Signup.php'><b>Sign-Up</b></a></li>";
                    echo "<li><a href='../PHP/login.php'><b>Log-In</b></a></li>";
                  }
                ?>
                <li><a href="../PHP/reservation.php"><b>Reserve Now</b></a></li>
                <li><a href="../PHP/store.php"><b>Store</b></a></li>
                <li><a href="../PHP/styles.php"><b>Styles</b></a></li>
                <li><a href="../PHP/index.php"><b>Home</b></a></li>
            </ul>
            <a href = "../PHP/index.php"> <img src ="../img/Icon.jpg" id="Icon"></a>
        </div>
      </nav>
