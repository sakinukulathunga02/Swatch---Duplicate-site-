<!-- <!DOCTYPE html>

<html>
    <head>

    </head>
    <body>
        <?php
            include 'config.php';
        ?> 
        <form action="submitRegistration.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
      
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="email">Username:</label>
            <input type="text" id="Uname" name="Uname" required><br>
      
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required><br>
      
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required><br>
      
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br>
      
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
        
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required><br>

            <input type="checkbox" id="privacy_checkbox" required>
            <label for="privacy-checkbox">I agree to the <a href="privacy.html" target="_blank">privacy policy</a>.</label><br>


            <div class="button-container">
                <input type="submit" value="Register">
                <input type="reset" value="Clear">
            </div>

            <p>already have an account? <a href="SignIn.html">Sign in</a></p>

        </form>
    </body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Swatch</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
</head>
<body>
    <div class="background"></div>
    <div class="wrapper">
        <form method="post" action="submitRegistration.php">
            <h1>SIGN UP</h1>
            <div class="input-box">
                <input type="text" placeholder="Name" id="name" name="name" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Email" id="email" name="email" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Username" id="Uname" name="Uname" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Address" id="address" name="address" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" id="password" name="password" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Re-enter Password" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="log">
                <input type="submit" value="Register" name="loginbtn" style="width: 100%;">
            </div>
        </form>
    </div>
</body>
</html>