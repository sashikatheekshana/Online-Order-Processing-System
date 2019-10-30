<?php

include('includes/connection.php');

$target_dir = "images/products/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
    
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        //error uploading your file
        header('Location:vendor-product-add.php?msg=' . $message);
		echo "Error!";
        exit();
    }
}

if (isset($_POST['submit'])){
    
$imageName = $_FILES["fileToUpload"]["name"];
$imageData = $_FILES["fileToUpload"]["tmp_name"];
$imageType = $_FILES["fileToUpload"]["type"];
				
    $vendorID = $_POST['vendorID'];
    $productname = $_POST['name'];
    $weight = $_POST['weight'];  
    $price = $_POST['price']; 
    $insertProduct = "INSERT INTO products (vendorID, name, weight, price, imageName) VALUES ('$vendorID','$productname', '$weight','$price', '$imageName')";
    
    if (mysqli_query($connection,$insertProduct) === TRUE) {
                //insert product
				header('Location:admin-product-add.php?msg=' . $message);
				echo "product added!";
				exit();
        } 
    else {
        //Error Registration
        header('Location:admin-product-add.php?msg=' . $message);
		echo "Error";
        exit();
        }

 }

mysqli_close($connection);
?>