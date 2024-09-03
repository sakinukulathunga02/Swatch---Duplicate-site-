<?php
    session_start(); // Start the session

    include 'config.php';

    // Check if the user is already logged in, if yes, redirect them to the home page
    if(isset($_SESSION['username'])) {
        header("Location: home.php");
        exit;
    }

    if(isset($_POST['loginbtn'])) {
        $username = $_POST['username'];
        $password = $_POST['pswd'];

        // Your login authentication code here, check if the username and password are correct

        // Assuming authentication successful, set session variables
        $_SESSION['username'] = $username;

        // Redirect the user to the home page or any other page after successful login
        header("Location: home.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login to Swatch</title>
    <link rel="stylesheet" href="styles\style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="background"></div>
    <div class="wrapper">
      <form method="POST" action="userLogin.php">
        <h1>LOGIN</h1>
        <div class="input-box">
          <input
            type="text"
            placeholder="Username"
            id="username"
            name="username"
            required
          />
          <i class="fa fa-user" aria-hidden="true"></i>
        </div>

        <div class="input-box">
          <input
            type="password"
            placeholder="Password"
            id="pswd"
            name="pswd"
            required
          />
          <i class="fa fa-lock" aria-hidden="true"></i>
        </div>

        <div class="log">
          <input
            type="submit"
            value="Login"
            name="loginbtn"
            style="width: 100%"
          />
        </div>

        <div class="register-link">
          <p>
            Don't have an account?
            <a href="register.php">Sign Up</a>
          </p>
        </div>
      </form>
    </div>
  </body>
</html>
