<?php
    include 'config.php';

    if(isset($_GET['deleteid'])){
        $Uname = $_GET['deleteid'];

        $sql="DELETE FROM registration WHERE Uname = '$Uname'";

        $result = mysqli_query($conn,$sql);

        if($result){
            header('location:login.php');

        }else{
            die(mysqli_close($conn));
        }
    }
    mysqli_close($conn);
?>