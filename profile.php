<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Men's Collection</title>
    <link rel="stylesheet" href="styles/mencss.css" />
    <link rel="stylesheet" href="styles/profileStyles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
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
    </div> -->
    

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

        echo '
        <div class="mainview">
        <h2>User Profile</h2>
        <div class="leftView">
          <img src="images\dp.jpg" alt="dp" />
        </div>
        <div class="rightView">
          <div class="row">
            <div class="col">
              <span class="profiletxt"> Name </span><br />
              <span class="userIn"> '.$Name.' </span>
            </div>
            <div class="col">
              <span class="profiletxt"> Email </span><br />
              <span class="userIn"> '.$Email.' </span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <span class="profiletxt"> Username </span><br />
              <span class="userIn"> '.$Uname.' </span>
            </div>
            <div class="col">
              <span class="profiletxt"> Address: </span><br />
              <span class="userIn"> '.$Address.' </span>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <span class="profiletxt"> Contact No: </span><br />
              <span class="userIn"> '.$Phone_Number.' </span>
            </div>
            <div class="col">
              <span class="profiletxt"> Date of Birth </span><br />
              <span class="userIn"> '.$Date_Of_Birth.' </span>
            </div>
          </div>
        </div>
        <div class="flex-container">
            <button class="update">
                <a class="text-light" href="updateUser.php?updateid='.$Uname.'">Update</a>
            </button>
            <button class="delete">
                <a class="text-light" href="deleteUser.php?deleteid='.$Uname.'">Delete</a>
            </button>
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
