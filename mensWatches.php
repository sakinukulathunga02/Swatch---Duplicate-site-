<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Men's Collection</title>
    <link rel="stylesheet" href="styles/mensWatches.css" />
    <link rel="stylesheet" href="styles/navbar-mensWatches.css">
    <link rel="stylesheet" href="styles/aboutus-mensWatches.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
  </head>
  <body>
  <script href="javascript.js"></script>

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
                <a href= "front.php"><div class=" navbar-col-logo-text navbar-swatch-combined"></a>
                  Swatch
                </div>
                <div class=" navbar-col-logo navbar-swatch-combined"><img src="images/Swatch-Symbol.png" alt="Logo"
                    width="12%" height="70%"></div>
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
                <button class="dropbtn">Collaboration</button>
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
              <div class="row"> <a href = "cart1.php"><i class="fa fa-shopping-cart navbar-shopping-icon" aria-hidden="true"></i></a>
                <a href = "userProfile.php"><i class=" fa fa-user navbar-account-icon" aria-hidden="true"></i></a>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  
</div>

    <h1>Men's Category</h1>



  <?php
        include 'config.php'; 

        $sql = "SELECT * FROM watchdetails";
        $result = mysqli_query($conn, $sql);

        // Fetch watch IDs and display delete buttons for each watch
        while ($row = mysqli_fetch_assoc($result)) {
          $watch_id = $row['id'];
          $W_Name = $row['W_Name'];
          $price  = $row['Price'];
          $img = $row['image'];
          ?>
          <div class="responsive">
              <div class="gallery">
                <a target="_blank">
                  <img
                    src="images/<?php echo $img?>"
                    alt="Mens Watch"
                    width="600"
                    height="400"
                  />
                </a>
                <div class="desc"><?php echo $W_Name;?></div>
                <div class="price">Rs.<?php echo $price;?></div>
                <div class="btn-addcarttocart">
                <button class="view-btn"><a href="Description.php?id=<?php echo $watch_id?>">SHOW</a></button>
                  <form action="add_to_cart.php?id=<?php echo $watch_id?>" method="post">
                    <input type="submit" value="Add to cart" name="submit" class="add-btn"/>
                  </form>
                 
                </div>
              </div>
            </div>

            <?php
        }
        
    ?>




      </body>
</html>


  
    <!-- <div
      class="flex-head"
      style="height: 130px; margin-bottom: 0px; width: 100%"
    >
      <div class="col-85" style="text-align: start; padding-left: 2%">
        <img
          src="images/logo.jpg"
          width="220px"
          height="130px"
          style="padding-bottom: 0"
        />
      </div>
      <div
        class="col-40"
        style="
          text-align: left;
          padding-top: 50px;
          font-size: 20px;
          font-weight: lighter;
          color: rgb(255, 255, 255);
        "
      >
        <span style="opacity: 50%">Wear Elegence</span>
      </div>

      <div
        style="
          flex-grow: 1;
          padding-top: 10px;
          padding-left: 5px;
          text-align: end;
          padding-top: 25px;
        "
      >
        <div class="icon" style="display: inline; transform: scale(1.3)">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </div>
        <div class="icon" style="display: inline; padding-right: 30px">
          <i
            class="fa fa-user"
            aria-hidden="true"
            style="margin-left: 50px"
          ></i>
        </div>
      </div>
    </div>

    <h1>Men's Category</h1>



    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="images/men2.webp">
          <img
            src="images/men2.webp"
            alt="Men's Watch"
            width="600"
            height="400"
          />
        </a>
        <div class="desc">Movado Men's Watch</div>
        <div class="price">Rs.32,000</div>
        <div class="btn-addcarttocart">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="name" value="Fossil" />
            <input type="hidden" name="price" value="20000000" />
            <input type="submit" value="Add to cart" name="submit" />
          </form>
        </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="images/men1.png">
          <img
            src="images/men1.png"
            alt="Men's Watch"
            width="600"
            height="400"
          />
        </a>
        <div class="desc">Limestone Quartz Men's series 10G</div>
        <div class="price">Rs.130,000</div>
        <div class="btn-addcarttocart">
          <form action="add_to_cart.php" method="post">
            <input
              type="hidden"
              name="name"
              value="Limestone Quartz Men's series 10G"
            />
            <input type="hidden" name="price" value="130000" />
            <input type="submit" value="Add to cart" name="submit" />
          </form>
        </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="images/men5.webp">
          <img
            src="images/men5.webp"
            alt="Men's Watch"
            width="600"
            height="400"
          />
        </a>
        <div class="desc">Seiko Classic Automatic Watch</div>
        <div class="price">Rs.58,999</div>
        <div class="btn-addcarttocart">
          <form action="add_to_cart.php" method="post">
            <input
              type="hidden"
              name="name"
              value="Seiko Classic Automatic Watch"
            />
            <input type="hidden" name="price" value="589999" />
            <input type="submit" value="Add to cart" name="submit" />
          </form>
        </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="images/men4.webp">
          <img
            src="images/men4.webp"
            alt="Men's Watch"
            width="600"
            height="400"
          />
        </a>
        <div class="desc">Citizen Tsuyosa Classic Watch</div>
        <div class="price">Rs.67,899</div>
        <div class="btn-addcarttocart">
          <form action="add_to_cart.php" method="post">
            <input
              type="hidden"
              name="name"
              value="Citizen Tsuyosa Classic Watch"
            />
            <input type="hidden" name="price" value="67899" />
            <input type="submit" value="Add to cart" name="submit" />
          </form>
        </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="images/men6.webp">
          <img
            src="images/men6.webp"
            alt="Men's Watch"
            width="600"
            height="400"
          />
        </a>
        <div class="desc">Apple Smart Watch</div>
        <div class="price">Rs.87,990</div>
        <div class="btn-addcarttocart">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="name" value="Apple Smart Watch" />
            <input type="hidden" name="price" value="87990" />
            <input type="submit" value="Add to cart" name="submit" />
          </form>
        </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="images/men1.png">
          <img
            src="images/men1.png"
            alt="Men's Watch"
            width="600"
            height="400"
          />
        </a>
        <div class="desc">Limestone Quartz Men's series 10G</div>
        <div class="price">Rs.130,000</div>
        <div class="btn-addcarttocart">
          <form action="add_to_cart.php" method="post">
            <input
              type="hidden"
              name="name"
              value="Limestone Quartz Men's series 10G"
            />
            <input type="hidden" name="price" value="130000" />
            <input type="submit" value="Add to cart" name="submit" />
          </form>
        </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="images/men3.png">
          <img
            src="images/men3.png"
            alt="Men's Watch"
            width="600"
            height="400"
          />
        </a>
        <div class="desc">Museum Classic Automatic Watch</div>
        <div class="price">Rs.58,999</div>
        <div class="btn-addcarttocart">
          <form action="add_to_cart.php" method="post">
            <input
              type="hidden"
              name="name"
              value="Museum Classic Automatic Watch"
            />
            <input type="hidden" name="price" value="58999" />
            <input type="submit" value="Add to cart" name="submit" />
          </form>
        </div>
      </div>
    </div>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="images/men4.webp">
          <img
            src="images/men4.webp"
            alt="Men's Watch"
            width="600"
            height="400"
          />
        </a>
        <div class="desc">Citizen Tsuyosa Classic Watch</div>
        <div class="price">Rs.67,899</div>
        <div class="btn-addcarttocart">
          <form action="add_to_cart.php" method="post">
            <input
              type="hidden"
              name="name"
              value="Citizen Tsuyosa Classic Watch"
            />
            <input type="hidden" name="price" value="67899" />
            <input type="submit" value="Add to cart" name="submit" />
          </form>
        </div>
      </div>
    </div> -->
