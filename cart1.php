<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <!-- Include CSS and JavaScript files -->
    <link rel="stylesheet" href="styles/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="styles/navbar-cart1.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
        .navbar-col-logo-text{
            color:white;
        }
        .navbar-col-logo-text a:hover{
            color:black;
        }

        .navbar-col{
            margin-top:1.6%;
            margin-bottom:1%;
        }

        .icon-col-bar{
            margin-top:2%;
        }
        </style>

</head>
<body>
<div class="container navbar navbar-fade">
      <div class="row navbar-row">
        <div class="col-27 navbar-logo-column">
          <div class="container">
            <div class="row">
              <a href = "front.php" class="navbar-col-logo-text"><div class="navbar-col-logo-text navbar-swatch-combined" >
                Swatch
              </div></a>
              <div class="navbar-col-logo navbar-swatch-combined" >
                
              </div>
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
        <div class="col-85 navbar-scuby navbar-col">
          <span class="navbar-text">Collaborations</span>
        </div>
        <div class="col-10 navbar-swatchpay navbar-col">
          <span class="navbar-text">Popular</span>
        </div>
        <div class="col-10s navbar-ourworld navbar-col">
          <span class="navbar-text">Recent</span>
        </div>
        <div class="col-8 navbar-col navbar-empty"></div>
        <div class="col-5 icon-col-bar">
          <div class="container">
            <div class="row">
              <a href="cart1.php"><i class="fa fa-shopping-cart navbar-shopping-icon"
                aria-hidden="true"
              ></i></a>
              <a href = "userProfile.php"><i class="fa fa-user navbar-account-icon" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
<div class="container">
<div class="container1" style = "margin-top:15%;" >
    <?php
        include 'config.php'; 

        $sql = "SELECT * FROM cart"; 

        $result = mysqli_query($conn, $sql); 

        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $quantity = $row['quantity'];
            $price = $row['price'];
            $img = $row['image'];
    ?>

        <div class="cart-item">
            <img src="images/<?php echo $img?>" alt="<?php echo $name?>" width="150px" height="120px">
            <div class="cart-item-info">
                <p><?php echo $name?></p>
                <p>Price: $<?php echo $price?></p>
                <label for="quantity">Quantity:</label>
                <select id="Quantity" class="btn1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> 
                <div style="padding-top: 10px;">
                    <a class="btn" href="deleteFromCart.php?deleteid=<?php echo $id?>">Remove</a>
                    <a href="#" class="btn" >Proceed</a>
                </div>
            </div>
        </div>
        <?php }?>
</div>

<div class="total">
    <p id="total">Total: $0</p>
    <a href="#" class="btn">Checkout</a>
</div>
</div>
<div style="margin: auto;">
    <script>
        window.onload = function() {
            updateTotal(); // Update total when page loads

            // Add event listeners to each quantity selector
            var quantitySelectors = document.querySelectorAll('.btn1');
            quantitySelectors.forEach(function(selector) {
                selector.addEventListener('change', function() {
                    updateTotal();
                });
            });
        };

        function updateTotal() {
            var total = 0;
            var items = document.querySelectorAll('.cart-item');
            items.forEach(function(item) {
                var price = parseFloat(item.querySelector('.cart-item-info p:nth-child(2)').textContent.replace('Price: $', ''));
                var quantity = parseInt(item.querySelector('.btn1').value);
                total += price * quantity;
            });
            document.getElementById('total').textContent = 'Total: $' + total.toFixed(2);
        }
    </script>
</div>

</body>
</html>