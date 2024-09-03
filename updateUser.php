<?php
include 'config.php';

// Check if updateid is set in the URL
if(isset($_GET['updateid'])) {
    $Uname = $_GET['updateid'];
    
    // Prepare SQL statement to select user data based on Uname
    $sql = "SELECT * FROM registration WHERE Uname = '$Uname' ";

    $result = mysqli_query($conn, $sql);

    // Fetch user data if the query is successful
    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['Name'];
        $email = $row['Email'];
        $Uname = $row['Uname'];
        $address = $row['Address'];
        $phone = $row['Phone_Number'];
        $dob = $row['Date_Of_Birth'];
        $password = $row['Password'];
    } else {
        echo "No user found with that username.";
    }
} else {
    echo "No username provided.";
}

// Handle form submission
if(isset($_POST["update"])){
    // Retrieve form data
    $name = $_POST["name"];
    $Uname = $_POST["Uname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $dob = $_POST["dob"];
    $password = $_POST["password"];

    // SQL query to update user data
    $sql = "UPDATE registration SET 
        Name = '$name', 
        Uname = '$Uname', 
        Email = '$email', 
        Address = '$address', 
        Phone_Number = '$phone', 
        Date_Of_Birth = '$dob',
        Password = '$password'
        WHERE Uname = '$Uname'";

    $result = mysqli_query($conn, $sql);
    if($result){
        // Redirect to display.php after successful update
        header("location: userProfile.php?Uname=".urlencode($row['Uname']));
        exit();
    } else {
        die(mysqli_error($conn)); // Output the MySQL error for debugging
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>User Profile Update</title>
            <link rel="stylesheet" href="styles/userupdate.css" />
            <link rel="stylesheet" href="styles/navbarcontent.css" />
            
            <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
            />
    </head>
<body>
    
<script href="javascript/javascript.js"></script>

<!--Start of Hero Section-->

    <center>
    <div class="wrapper">
        <i class="fa-solid fa-user"></i>
        <h1>MY PROFILE</h1>
        <form method="post">
            <div class="input-box">
            <h6>Name:</h6>
            <input
                type="text"
                id="name"
                name="name"
                required
                value="<?php echo isset($name)?$name: ''?>"
            /><br />
            </div>

            <div class="input-box">
            <h6>Email:</h6>
            <input
                type="email"
                id="email"
                name="email"
                required
                value="<?php echo isset($email)?$email : '' ?>"
            /><br />
            </div>

            <div class="input-box">
            <h6>Username:</h6>
            <input
                type="text"
                id="Uname"
                name="Uname"
                required
                value="<?php echo isset($Uname)?$Uname: ''?>"
            /><br />
            </div>

            <div class="input-box">
            <h6>Address:</h6>
            <input
                type="text"
                id="address"
                name="address"
                required
                value="<?php echo isset($address)?$address: ''?>"
            /><br />
            </div>

            <div class="input-box">
            <h6>Contact Number:</h6>
            <input
                type="tel"
                id="phone"
                name="phone"
                required
                value="<?php echo isset($phone)?$phone: ''?>"
            /><br />
            </div>

            <div class="input-box">
            <h6>Date of Birth:</h6>
            <input
                type="date"
                id="dob"
                name="dob"
                required
                value="<?php echo isset($dob)?$dob: ''?>"
            /><br />
            </div>

            <div class="input-box">
            <h6>Password:</h6>
            <input
                type="password"
                id="password"
                name="password"
                required
                value="<?php echo isset($password)?$password: ''?>"
            /><br />
            </div>

            <div class="log">
            <input type="submit" name="update" value="Update" />
            </div>
        </form>
        </div>
</center>
  </body>
</html>
