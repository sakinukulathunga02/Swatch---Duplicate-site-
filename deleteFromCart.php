<?php
include 'config.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM cart WHERE id = '$id'";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:cart1.php'); // Redirect to the front.php page after successful deletion
    }else{
        die(mysqli_error($conn)); // Handle errors
    }
}
mysqli_close($conn);
?>
