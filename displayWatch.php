<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'config.php'; // Don't forget the semicolon here

        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $sql = "SELECT * FROM watchDetails WHERE id = '$id'"; // Removed the semicolon here

            $result = mysqli_query($conn, $sql); // Added the missing $conn

            if($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $id = $row['id'];
                $wname = $row['W_Name'];
                $price = $row['Price'];
                $color = $row['Color'];

                echo '<div>
                <h2>Watch Details</h2>
                <table>
                    <tr>
                        <th>ID:</th>
                        <td>'.$id.'</td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td>'.$wname.'</td>
                    </tr>
                    <tr>
                        <th>Price:</th>
                        <td>'.$price.'</td>
                    </tr>
                    <tr>
                        <th>Color:</th>
                        <td>'.$color.'</td>
                    </tr>
                    
                </table>
              </div>';
                
            } else {
                echo "No watch found with that id.";
            }


        } else {
            echo "ERROR";
        }


    ?>
</body>
</html>
