<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Swatch</title>
  <link href="styles/indexstyle.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="styles/navbar.css" rel="stylesheet">

  <link href="styles/slideshowbutton.css" rel="stylesheet">
  <style>
  .navbar {
    position: absolute;
    top: 0;
    z-index: 10;
     /* Change background color to black */
    width: 100%;
    
}
.navbar:hover{
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    color: white;
    background-color:transparent;
    
}

</style>
</head>

<body>
  <!--Header-->
  <script href="javascript/javascript.js"></script>

  <!--Start of Hero Section-->

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
                    <a href="mensWatches.php">Men's Watches</a>
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
                <div class="row"> <a href= "cart1.php"><i class="fa fa-shopping-cart navbar-shopping-icon" aria-hidden="true"></i></a>
                  <a href = "userProfile.php"><i class=" fa fa-user navbar-account-icon" aria-hidden="true"></i></a>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="slideshow-container"></div>

    <div class="mySlides fade">
      <div class="heroimagecss"><img src="images/Watch gero image.jpeg"
          style="width:100%; height: 100vh;; background-repeat:no; object-fit: cover; object-position: 0 -80px;">
      </div>
    </div>

    <div class="mySlides fade">
      <div class="heroimagecss"><img src="images/Heroimage2.jpeg"
          style="width:100%; height: 100vh;; object-fit: cover; background-repeat:no; object-fit: cover; object-position: 0 -280px;">
      </div>
    </div>

    <div class="mySlides fade">
      <div class="heroimagecss"><img src="images/heroimage3.jpeg"
          style="width:100%; height: 100vh;; object-fit: cover; background-repeat:no; object-fit: cover; object-position: 0 -350px;">
      </div>
    </div>
    <p class ="slideshow-text ">Experience Time<br> Exquisitely</p>
    <p class="slideshow-text2">Be a Brand</p>
    <button class="slideshow-button slideshow-button1"><a href="www.youtube.com">Discover</a></button>
    <button class="slideshow-button slideshow-button2"><a href="index.html">See Stories</a></button>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

  </div>
  </div>
  <br>

  <Script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
    slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      slides[slideIndex - 1].style.display = "block";
      setTimeout(showSlides, 2500); // Change image every 2 seconds
    }

  </Script>
  <!--End of Hero Section -->

  <p class="numbertext"
    style="color: rgb(185, 185, 185); text-align:center; font-size: 60px; margin-bottom:100px; margin-top: 150px;">Main
    Catergories</p>

  <!--Image gallery for Categories-->

  <div class="container-image-gallery">
    <div class="image-gallery-container">
      <div class="gallery">
        <a target="_blank" href="images/Digital Watch.jpeg">
          <img src="images/Digital Watch.jpeg" alt="Cinque Terre" width="25%" height="400">
        </a>
        <div class="desc">Digital Watch</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="images/Mens Watch.jpeg">
          <img src="images/Mens Watch.jpeg" alt="Forest" width="600px" height="400px">
        </a>
        <div class="desc">Men's Watch</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="images/iLadies Watch.jpeg">
          <img src="images/Ladies Watch.jpeg" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="desc">Ladies Watch</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="images/Smart watch.jpeg">
          <img src="images/Smart watch.jpeg" alt="Mountains" width="600" height="400">
        </a>
        <div class="desc">Smart Watch</div>
      </div>
    </div>
  </div>










  <!--End of Image Gallery for Categoryies-->

  <div class="container">
    <div class="container container-card-set1">
      <h1 class="section-topic text-size50">
        Top Brands
      </h1>
      <div class="row">
        <div class="col-2">
          <div class="gallery-product imageclass img-class1 ">
            <a target="_blank" href="images/img_mountains.jpg">
              <img src="images/apple.png" alt="Mountains" width="100%" height="auto" class="image1 fade">
            </a>
            <div class="desc2 text-center apple">Apple</div>
          </div>
        </div>
        <div class="col-2">
          <div class="gallery-product imageclass img-class2">
            <a target="_blank" href="images/img_mountains.jpg">
              <img src="images/Samsung.png" alt="Mountains" width="100%" height="auto" class="image1 fade">
            </a>
            <div class="desc2 text-center samsung">Samsung</div>
          </div>
        </div>
      </div>
    </div>

    <!------------------------------------------------------------------------------------>
    <h1 class="section-topic text-size50 section-topic-2">
      Best Recognized
    </h1>
    <div class="container container-card-set1 card-set-2">
      <div class="row">
        <div class="col-2">
          <div class="gallery-product imageclass img-class1">
            <a target="_blank" href="images/img_lights.jpg">
              <img src="images/Rolex.png" alt="Northern Lights">
            </a>
            <div class="desc2 text-center rolex">Rolex</div>
          </div>
        </div>
        <div class="col-2">
          <div class="gallery-product imageclass img-class2 img4">
            <a target="_blank" href="images/img_mountains.jpg">
              <img src="images/Casio.jpeg" alt="Mountains">
            </a>
            <div class="desc2 text-center casio">Casio</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="emptydiv"></div>


  <div class="container footer ">
    <h1 class="footer-title">About Us</h1>
    <div class="row">
      <div class="col-3 vertical-line">
        <h1 class="footer-col-1-title">Good Community</h1>
        <p class="footer-text">Etsy is a global online marketplace, where people come together to make, sell, buy, and
          collect unique items. We’re also a community pushing for positive change for small businesses, people, and the
          planet. Here are some of the ways we’re making a positive impact, together.</p>
      </div>
      <div class="col-3 vertical-line">
        <h1 class="footer-col-1-title">Support Independent Creators</h1>
        <p class="footer-text">There’s no Etsy warehouse – just millions of people selling the things they love. We make
          the whole process easy, helping you connect directly with makers to find something extraordinary.</p>
      </div>
      <div class="col-3 vertical-line">
        <h1 class="footer-col-1-title">Peace of Mind</h1>
        <p class="footer-text">Your privacy is the highest priority of our dedicated team. And if you ever need
          assistance, we are always ready to step in for support.</p>
      </div>
    </div>
    <h1 class="footer-end-text">Get in Touch with us!</h1>
    <div class="row social-media">
      <div class="social-media-text"><a href="www.instagram.com"><i class="fa-brands fa-instagram"
            aria-hidden="true"></i></a></div>
      <div class="social-media-text"><a href="www.twitter.com"><i class="fa-brands fa-twitter"></i></a></div>
      <div class="social-media-text"><a href="www.pinterest.com"><i class="fa-brands fa-pinterest"></i></a></div>
      <div class="social-media-text"><a href="www.youtube.com"><i class="fa-brands fa-youtube"></i></a></div>
      <div class="social-media-text"><a href="www.facebook.com"><i class="fa-brands fa-facebook"></i></a></div>
    </div>
  </div>
</body>

</html>