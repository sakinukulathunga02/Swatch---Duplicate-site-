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

        $sql = "SELECT * FROM watchdetails";
        $result = mysqli_query($conn, $sql);

        // Fetch watch IDs and display delete buttons for each watch
        while ($row = mysqli_fetch_assoc($result)) {
            $watch_id = $row['id'];
            $W_Name = $row['W_Name'];
            $price  = $row['Price'];
            $img = $row['image'];
            echo ' <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="images/men1.png">
                <img
                  src="images/'.$img.'"
                  alt="Mens Watch"
                  width="600"
                  height="400"
                />
              </a>
              <div class="desc">'.$W_Name.'</div>
              <div class="price">Rs.'.$price.'</div>
              <div class="btn-addcarttocart">
                <form action="add_to_cart.php" method="post">
                  
                  <input type="submit" value="Add to cart" name="submit" />
                </form>
              </div>
            </div>
          </div>
          <button class="delete-btn"><a class="text-light" href="displayWatch.php?id='.$watch_id.'">SHOW '.$watch_id.'</a></button><br>';
        }

        
    ?>
</body>
</html>
