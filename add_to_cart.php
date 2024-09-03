<?php

include 'config.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL statement
    $sql = "SELECT * FROM watchDetails WHERE id = ?";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "i", $id);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['W_Name'];
        $price = $row['Price'];
        $img = $row['image'];

        // Insert into cart table
        $quantity = 1;
        $query = mysqli_query($conn, "INSERT INTO cart (image, name, quantity, price) VALUES ('$img', '$name', '$quantity', '$price')");

        // Check if the insertion was successful
        if ($query) {
            echo "<script>alert('Item added to cart');</script>";
            header("Location: cart1.php");
            exit;
        } else {
            echo 'Failed to add item to cart.';
            header("Location: test.html");
            exit;
        }
    } else {
        echo 'No records found for the given ID.';
    }

    // Close statement
    mysqli_stmt_close($stmt);
} else {
    echo 'ID parameter is missing.';
}
?>
