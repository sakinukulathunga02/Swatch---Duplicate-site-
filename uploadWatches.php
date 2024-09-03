<?php
    include 'config.php'; // Make sure you have a database connection here

    if(isset($_POST['submit'])){
        $file = $_FILES['image']['name'];
        $file2 = $_FILES['image2']['name'];
        $file3 = $_FILES['image3']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $tempname = $_FILES['image2']['tmp_name'];
        $tempname = $_FILES['image3']['tmp_name'];
        $folder = 'images/'.$file;
        $w_name = $_POST['w_name'];
        $generation = $_POST['generation'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $color = $_POST['color'];
        

        // Inserting into database
        $query = mysqli_query($conn,"INSERT INTO watchdetails (image,image2, image3, W_Name, Generation, Price, Description, Color) 
        VALUES 
        ('$file', '$file2', '$file3', '$w_name', '$generation', '$price', '$description', '$color')");

        if(move_uploaded_file($tempname, $folder)){
            echo "<h2>File uploaded successfully</h2>";
        } else {
            echo "<h2>File not uploaded</h2>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0" />
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data"> <!-- Add enctype attribute -->
        <input type="file" name="image" placeholder="image1" />
        <br />
        <input type="file" name="image2" placeholder="image2" />
        <br />
        <input type="file" name="image3" placeholder="image3" />
        <br />
        <input type="text" name="w_name" placeholder="w_name" />
        <br />
        <input type="text" name="generation" placeholder="generation" />
        <br />
        <input type="number" name="price" placeholder="price" />
        <br />
        <input type="text" name="description" placeholder="description" />
        <br />
        <input type="text" name="color" placeholder="color" />
        <br />
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
