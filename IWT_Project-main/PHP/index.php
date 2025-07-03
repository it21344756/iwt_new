<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Infinite</title>
    <!-- CSS File -->
    <link rel="stylesheet" href="../Styles/index.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="../Styles/style.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
  <?php
    include_once '../PHP/Header.php'
  ?>
  <?php
    if(isset($_SESSION["Username"])){
      echo "<h3> Hello there.." . $_SESSION["Username"]. "</h3>";
    }
    else if(isset($_SESSION["adminUname"])){
      echo "<h3> Hello there.." . $_SESSION["adminUname"]. "</h3>";
    }
  ?>

  <!-- Start Home Section -->
  <section class="home">
      <div class="container">

          <div class="home-content">
              <h1>Welcome to, Salon Infinite </h1>
              <p>Make your Resevation with Schedule your date and time</p>
              <a href="../PHP/reservation.php" class="sbtn btn-outline" class style="Color:#ffffff">
                  ...Reserve Now
              </a>
          </div>
      </div>
  </section>
  <!-- End Home Section -->
  <!-- Start About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="section-title">
                <h1 style="Color:#151515;">Choose your</h1>
                <h2>Hair Style</h2>
            </div>
            <div class="about-detail">
                <div class="about-detail-content">
                    <div class="about-img">
                        <img src="../img/Textured-Top-With-Undercut-Fade-824x1030.jpg">
                    </div>
                    <div class="about-description" style="text-align:justify;">
                        <p>There are many salons in The This area, but no direct competitors. There is no one place in the greater Gigaburb area that offers a high-end gentleman’s barber shop exclusively for men, where a gentleman can sit back, relax in a gentleman’s club atmosphere and experience the art of traditional grooming services in an environment that is masculine and therapeutic.</p>
                    </div>
                    <div class="about-img">
                        <img src="../img/9-long-wavy-bob-CKcg8HDM0qI.wehp.jpg">
                    </div>
                    <div class="about-description" style="text-align:justify;">
                        <p>Hair is an important part of any woman’s life. People say the hair is considered as the crowning glory of a woman. No wonder every woman wants to have a healthy, shiny, and attractive head of hair. Many women are willing to do what it takes just to maintain or enhance their beauty but most of them end up in the wrong beauty salon. Finding the right beauty salon and hairstylist is crucial to every woman.</p>
                        <p>If you are a woman who takes pride in her appearance but does not know the right beauty salon to visit, you need to read this article. Here’s how to select the right beauty salon so you don’t end up with any regrets.</p>
                    </div>
                    <div class="about-img">
                        <img src="../img/Here Are Best Men’s Fade Haircuts , learn more____.jpg">
                    </div>
                    <div class="about-description" style="text-align:justify;">
                        <p>We offer haircuts for children zero to thirteen. We understand that kids of varying ages have different requirements, so we have catered our services around specific age groups. Our trained team understands how to interact with children to make sure they are comfortable and made to feel like they are the star of the show. We can recommend a specific cut or service depending on your age.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->
    <!-- Start Package Section -->
    <section class="package" id="package">
        <div class="section-title">
            <h1 style="Color:#FF4500">Styles</h1>
            <span style="Color:#FFF" >For your Choice</span>
        </div>
        <div class="package-cards">
            <div class="card">
                <div class="card-title">
                    <h1>Mens</h1>
                </div>
                <div class="card-items">
                    <div class="item">

                        <p>Hairstyle</p>
                    </div>
                    <div class="item">

                        <p>BeardStyle</p>
                    </div>
                    <div class="item">


                    </div>
                    <div class="item">

                        <p class="not">""</span></p>
                    </div>
                    <div class="item">

                        <p class="not"></span></p>
                    </div>
                    <div class="item">

                        <p class="not"></span></p>
                    </div>
                    <div class="item">

                        <p class="not"></span></p>
                    </div>
                    <div class="item">

                        <p class="not"></span></p>
                    </div>
                    <button class="btn"><a href="mens.php">Try This</a></button>
                </div>
            </div>
            <div class="card">
                <div class="card-title">
                    <h1>Womens</h1>
                </div>
                <div class="card-items">
                    <div class="item">

                        <p>Hairstyle</p>
                    </div>
                    <div class="item">

                        <p>Makeup</p>
                    </div>
                    <div class="item">

                        <p>Eyebrow design</p>
                    </div>
                    <button class="btn"><a href="womens.php">Try This</a></button>
                </div>
            </div>
            <div class="card">
                <div class="card-title">
                    <h1>Kids</h1>
                </div>
                <div class="card-items">
                    <div class="item">

                        <p>Hairstyle</p>
                    </div>
                    <div class="item">

                        <p></p>
                    </div>
                    <div class="item">

                        <p></p>
                    </div>
                    <div class="item">

                        <p></p>
                    </div>
                    <div class="item">

                        <p></p>
                    </div>
                    <div class="item">

                        <p></p>
                    </div>
                    <div class="item">

                        <p></p>
                    </div>
                    <div class="item">

                        <p></p>
                    </div>
                    <br>
                    <br>
                    <button class="btn"><a href="kids.php">Try This</a></button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Package Section -->
    <!-- Start Gallery Section -->
    <section class="gallery" id="gallery">
        <div class="gallery-content">
            <br>
            <div class="section-title">
                <h1 style="Color:#FF4500">Gallery</h1>
                <span style="Color:#FFF">See more in our Instagram</span>
            </div>
            <div class="gallery-list-img">
                <div class="gallery-img">
                    <img width="150" height="150" src="../img/Hairstyles-2019-Latest-Hair-Style-ideas-for-women-10.jpg">
                </div>
                <div class="gallery-img">
                    <img width="150" height="150" src="../img/Long-Bob-Hairstyle.jpg">
                </div>
                <div class="gallery-img">
                    <img width="150" height="150" src="../img/45 Easy Medium Length Hairstyles for Women.jpg">
                </div>
                <div class="gallery-img">
                    <img width="150" height="150" src="../img/Long-Hairstyle-with-Layers-1.jpg">
                </div>
                <div class="gallery-img">
                    <img width="150" height="150" src="../img/ezgif.com-gif-maker-1.jpg">
                </div>
                <div class="gallery-img">
                    <img width="150" height="150" src="../img/mens-haircuts-5.jpg">
                </div>
                <div class="gallery-img">
                    <img width="150" height="150" src="../img/mens-haircuts-24.jpg">
                </div>

    </section>
    <!-- End Gallery Section -->
    <?php
      include_once '../PHP/Footer.php'
    ?>
    <script src="../JavaScript/main.js"></script>
</body>
</html>
