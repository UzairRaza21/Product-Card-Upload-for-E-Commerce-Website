<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <h1>Product id- Edit</h1>
    <label for="product-name">Product Name
    <input type="text" name="product_id" id="">
    </label><br><br>

    <input type="submit" value="Show" name="product-edit">
    <input type="submit" value="Delete" name="product-delete">

</form>

<?php
if(isset($_POST['product-edit'])){
    include('conn.php');
    $p_id = $_POST['product_id'];
    $sql = "SELECT * FROM `product` WHERE product_id = {$p_id}";
    $result = mysqli_query($conn, $sql) or die ("Query unsuccessful");
    
    if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
        ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <label for="product-name">Product Title
            <input type="text" name="product-name" value="<?php echo $row['product_name']; ?>" >
        </label><br><br>

        <label for="product-description">Product Description
            <input type="text" name="product-description" value="<?php echo $row['product_description']; ?>" >
        </label><br><br>

        <label for="product-image">Product-Image
            <input type="file" name="product-image" id="" value="<?php echo $row['product_image']; ?>">
        </label><br><br>

        <input type="submit" value="Edit Product" name="upload-product">
    </form>

<?php
         }
    }
}
?>

<?php

if (isset($_POST['upload-product'])){
include('conn.php');

$pname = $_POST['product_name'];
$pdescription = $_POST['product_description'];
$pimage = $_POST['product-image'];


$sql = "UPDATE `product`SET `product_name` = '{$pname}', `product_description` = '{$pdescription}', `product_image` = '{$pimage}' WHERE product_id = '{$p_id}'";
$result = mysqli_query($conn, $sql) or die ("Query not successful");

header('location: product-display.php');
mysqli_close($conn);

}
?>

<!-- Delete Start -->

<?php
if (isset($_POST['product-delete'])){
    include('conn.php');
    $p_id = $_POST['product_id'];
    $sql = "DELETE FROM `product` WHERE product_id = '{$p_id}'";
    $result = mysqli_query($conn, $sql) or die ("Query Unsuccessful");
    header("location: product-display.php");
    mysqli_close($conn);
}
?>

<!-- Delete End -->

    
</body>
</html>