<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Products</title>
</head>
<body>
    
        <?php
        include("conn.php");
        $sql = "SELECT * FROM `product`";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);
        if($row > 0){
            ?>

            <?php
            while($row = mysqli_fetch_assoc($result)){

                ?>

            <div class="T-shirts-collections">
                <div class="flex-item">
                     <div><?php echo "<img src='".$row['product_image']."' height='200px' width='300px'>"  ?></div>
                    <h2><?php echo $row['product_name']?></h2>
                    <h3><?php echo $row['product_description']?></h3>
                    <button>Buy Now</button>
                </div>
            </div>
            <?php
        }
?>
<?php
        }else{
            echo "No Record Found";
            mysqli_close($conn);
        }

        ?>
    
</body>
</html>