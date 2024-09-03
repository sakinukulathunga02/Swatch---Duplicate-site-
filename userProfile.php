<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/p1.css">
    <link href="styles/navbar.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
        .navbar {
    position: absolute;
    top: 0;
    z-index: 10;
    background-color: black; /* Change background color to black */
    width: 100%;
    
}
.navbar:hover{
    background-color: black;
    color: white;
    
}

.wrapper{
    width:70%;
}

.dropdown .dropbtn:hover{
    text-decoration:underline;
}

.dropdown-content a{
    color:black;
}

    </style>
</head>
<body>
<div class="container navbar navbar-fade">
      <div class="row navbar-row">
        <div class="col-27 navbar-logo-column">
          <div class="container">
            <div class="row">
              <a href = "front.php"><div class="navbar-col-logo-text navbar-swatch-combined">
                Swatch
              </div></a>
              <div class="navbar-col-logo navbar-swatch-combined">
                <img
                  src="images/Swatch-Symbol.png"
                  alt="Logo"
                  width="6%"
                  height="75%"
                />
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
        <div class="col-5">
          <div class="container">
            <div class="row">
              <a href="cart1.php"><i class="fa fa-shopping-cart navbar-shopping-icon"
                aria-hidden="true"
              ></i></a>
              <a href = "#"><i class="fa fa-user navbar-account-icon" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
<?php
include 'config.php'; // Include your database configuration file

// Check if Uname is set in the URL
if(isset($_GET['Uname'])) {
    $Uname = $_GET['Uname'];
    
    // Prepare SQL statement to select user data based on Uname
    $sql = "SELECT * FROM registration WHERE Uname = '$Uname'";

    $result = mysqli_query($conn, $sql);
    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $Name = $row['Name'];
        $Email = $row['Email'];
        $Uname = $row['Uname'];
        $Address = $row['Address'];
        $Phone_Number = $row['Phone_Number'];
        $Date_Of_Birth = $row['Date_Of_Birth'];
        $Password = $row['Password'];

        // Display user data in HTML

        echo '<div class="wrapper">
        <h1>MY PROFILE</h1>
        <div class="row">
            

            <div class="col-2">
                <h6>Name: '.$Name.'</h6>
                <h6>Email: '.$Email.'</h6>
                <h6>Contact: 0771042838</h6>

            </div>

            <div class="col-2">
                <h6>Username: '.$Uname.'</h6>
                <h6>Address: '.$Address.'</h6>
                <h6>Date of Birth: 06/06/2002</h6>

            </div>
        </div>
        <br><br>
        <div class="btndiv">
                <a class="text-light" class="editbtn" href="updateUser.php?updateid='.$Uname.'">Update</a>
                <a class="text-light" class="editbtn" href="deleteUser.php?deleteid='.$Uname.'">Delete</a>

        </div>
    </div>';
        
    } else {
        echo "No user found with that username.";
    }
} else {
    echo "No username provided.";
}
?>
    
</body>
</html>