<?php
include 'config.php';

$name = $_POST["name"];

$Uname = $_POST["Uname"];
$email = $_POST["email"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$dob = $_POST["dob"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

$duplicate = mysqli_query($conn,"SELECT * FROM registration WHERE Uname = '$Uname' or Email = '$email'");
if(mysqli_num_rows($duplicate) > 0){
  echo "<script>alert('User name or Email has already been taken');</script>";
}else{
  if($password == $confirm_password){
    $sql = "INSERT INTO registration (
      Name,
      Email,
      Uname,
      Address,
      Phone_Number,
      Date_Of_Birth,
      Password
    ) VALUES (
      '$name',
      '$email',
      '$Uname',
      '$address',
      '$phone',
      '$dob',
      '$password'
    )";
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Record Inserted Successfully!')</script>";
      header("location: login.php");
    } else {
      echo "<script>alert('Error occurred when inserting data. Please try again later')</script>";
    }
  } else {
    echo "<script>alert('Password and Confirm Password do not match');</script>";
  }
}

mysqli_close($conn);
?>
