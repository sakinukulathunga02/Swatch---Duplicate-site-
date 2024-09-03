<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Description</title>
    <link rel="stylesheet" href="styles/description.css" />
    <link rel="stylesheet" href="./styles/navbar-description.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>

    <?php
        include 'config.php'; // Don't forget the semicolon here

        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $sql = "SELECT * FROM watchDetails WHERE id = '$id'"; // Removed the semicolon here

            $result = mysqli_query($conn, $sql); // Added the missing $conn

            if($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $id = $row['id'];
                $wname = $row['W_Name'];
                $price = $row['Price'];
                $color = $row['Color'];
                $generation = $row['Generation'];
                $description = $row['Description'];
                $img1= $row['image'];
                $img2 = $row['image2'];
                $img3 = $row['image3'];
            }}?>
    
<!--Start of Hero Section-->
<div class="container"></div>
<div class="container">

  <div class="container">
    <div class="navbar navbar-inverse" role="navigation">

      <div class="container navbar navbar-fade">
        <div class="row navbar-row">
          <div class="col-4 navbar-logo-column navbar-all">
            <div class="container">
              <div class="row ">
                <div class=" navbar-col-logo-text navbar-swatch-combined">
                  Swatch
                </div>
                <div class=" navbar-col-logo navbar-swatch-combined"><img src="images/Swatch-Symbol.png" alt="Logo"
                    width="8%" height="75%"></div>
              </div>
            </div>
          </div>

          <div class="col-8 navbar-watches navbar-col navbar-all"><span class="navbar-text">
              <div class="dropdown">
                <button class="dropbtn">Watches</button>
                <div class="dropdown-content">
                  <a href="#">Men's Watches</a>
                  <a href="#">Ladies Wactch</a>
                  <a href="#">Kid's Watch</a>
                </div>
              </div>
            </span></div>
          <div class="col-8 navbar-gifts navbar-col navbar-all"><span class="navbar-text">
              <div class="dropdown">
                <button class="dropbtn">Gifts</button>
                <div class="dropdown-content">
                  <a href="#">Vouchers</a>
                  <a href="#">Gift card</a>
                </div>
              </div>
            </span></div>
          <div class="col-8 navbar-moonswatch navbar-col navbar-all"><span class="navbar-text">
              <div class="dropdown">
                <button class="dropbtn">Brands</button>
                <div class="dropdown-content">
                  <a href="#">Rolex</a>
                  <a href="#">Casio</a>
                  <a href="#">Samsung</a>
                  <a href="#">Apple</a>
                </div>
              </div>
            </span></div>
          <div class="col-18 navbar-scuby navbar-col navbar-all"><span class="navbar-text">
              <div class="dropdown">
                <button class="dropbtn">Collaborate with us</button>
                <!--<div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>-->
              </div>
            </span>
          </div>
          <div class="col-10 navbar-swatchpay navbar-col navbar-all"><span class="navbar-text">
              <div class="dropdown">
                <button class="dropbtn">Popular</button>
                <!--<div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>-->
              </div>
            </span></div>
          <div class="col-10s navbar-ourworld navbar-col navbar-all"><span class="navbar-text">
              <div class="dropdown">
                <button class="dropbtn">Recent</button>
                <!--<div class="dropdown-content">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>-->
              </div>
            </span></div>

          <div class="col-5 navbar-all">
            <div class="container">
              <div class="row"> <i class="fa fa-shopping-cart navbar-shopping-icon" aria-hidden="true"></i>
                <i class=" fa fa-user navbar-account-icon" aria-hidden="true"></i>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  
</div>



    <!--Slideshow-->
    <div class="container">
      <div class="row">
        <div class="col-2">
          <div class="slideshow-container">
            <div class="mySlides fade">
              <img src="images/<?php echo $img1?>" style="width: 100%" />
            </div>

            <div class="mySlides fade">
              <img src="images/<?php echo $img2?>" style="width: 100%" />
            </div>

            <div class="mySlides fade">
              <img src="images/<?php echo $img3?>" style="width: 100%" />
            </div>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
          </div>
          <br />

          <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>

          <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
              showSlides((slideIndex += n));
            }

            function currentSlide(n) {
              showSlides((slideIndex = n));
            }

            function showSlides(n) {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              if (n > slides.length) {
                slideIndex = 1;
              }
              if (n < 1) {
                slideIndex = slides.length;
              }
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex - 1].style.display = "block";
              dots[slideIndex - 1].className += " active";
            }
          </script>
        </div>

        <div class="col-2">
          <h1 class="topic1"><?php echo $wname?></h1>
          <h3 class="topic2">Generation 02</h3>
            <br>
          <p class ="para-desc" style="text-align:justify; padding-left:35px;padding-right:25px;">
            <?php echo $description?>
          </p>

          <h3 class="topic1">Pricing Information</h3>
          <p class="topic3">Rs. <?php echo $price?></p>

          <div class="topic4">
            <i class="fa fa-building" aria-hidden="true"></i>&nbsp;Store pickup
            (1-2 working days)
          </div>

          <div class="topic4">
            <i class="fa fa-truck" aria-hidden="true"></i>&nbsp;Islandwide
            Delivery(5-7 working days)
          </div>

          <br />
            
          

          <div class="btn-addcarttocart">
            <form action = "add_to_cart.php?id=<?php echo $watch_id?>" method="post">
            <input type="submit" value = "Add to cart"></input>
          </form>
          </div>
          <div class="btn-addcarttocart">
            <button type="button">Buy Now</button>
          </div>

          <p style="padding-left: 40px; padding-top: 10px">
            Seller :
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
