<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['pswd'];

    // Perform the necessary validation and authentication
    if (!empty($username) && !empty($password)) {
        // Your database connection details
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "watches";

        // Create connection
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare a SQL statement to fetch user data
        $stmt = $conn->prepare("SELECT id, Uname, password FROM registration WHERE Uname = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User found, verify password
            $row = $result->fetch_assoc();
            if ($password == $row['password']) {
                // Password is correct, redirect to profile page
                header("Location: userProfile.php?Uname=" . urlencode($row['Uname']));
                exit();
            } else {
                // Incorrect password
                echo '<script>alert("Incorrect password");</script>';
            }
        } else {
            // User not found
            echo '<script>alert("User not found");</script>';
        }

        $stmt->close();
        $conn->close();
    } else {
        // Username or password not provided
        echo '<script>alert("Please enter both username and password");</script>';
    }
}
?>
