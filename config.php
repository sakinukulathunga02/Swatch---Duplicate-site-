<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "watches";

//creating connection
$conn = new mysqli($servername, $username, $password, $db);

//check connection
if ($conn->connect_error) {
    die ("Connection failed" . $conn->connect_error);
}



?>