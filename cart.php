<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'config.php'; 

        $sql = "SELECT * FROM cart"; 

        $result = mysqli_query($conn, $sql); 

        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $quantity = $row['quantity'];
            $price = $row['price'];

            echo '<div>
                <h2>Watch Details</h2>
                <table>
                    <tr>
                        <th>ID:</th>
                        <td>'.$id.'</td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td>'.$name.'</td>
                    </tr>
                    <tr>
                        <th>Quantity:</th>
                        <td>'.$quantity.'</td>
                    </tr>
                    <tr>
                        <th>Price:</th>
                        <td>'.$price.'</td>
                    </tr>
                </table>
              </div>';
        } 

        mysqli_close($conn);
    ?>
</body>
</html>
