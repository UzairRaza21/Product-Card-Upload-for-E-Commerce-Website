<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Upload</title>
</head>
<body>

    <h1>Upload Image</h1>
    <form action="product-insert.php" method="post" enctype="multipart/form-data">
        <label for="product-name">Product Title
            <input type="text" name="product-name" >
        </label><br><br>

        <label for="product-description">Product Description
            <input type="text" name="product-description" >
        </label><br><br>

        <label for="product-image">Product-Image
            <input type="file" name="product-image" id="">
        </label><br><br>

        <input type="submit" value="Upload Product" name="upload-product">
    </form>
 
       
 


</body>
</html>