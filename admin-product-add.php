<?php include('includes/connection.php') ?>
<?php include('includes/session.php') ?>

<?php
    checkSession();
    if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'a'){
       //pls logged in
       header('Location:login.php?msg=' . $message);
       exit();
       }
?>

<!DOCTYPE html>
<html>
    
<head>
    <title>Add Products | Biscuit Lanka</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    
<body>
    
    <?php include('includes/header.php') ?>
    <hr>
    <div class="row-20 bg-grey"> 
        <h1 class="div-c">Add Products</h1>
    </div>
    <div class="row-80 bg-grey">
        <div class="row-100 navigation">
             <ul class="right-nav bg-green">
                      <li><a href="admin-product-view.php" class="bg-green" >View Products</a></li>
                      <li><a href="admin-product-add.php" class="bg-green" >Add Products</a></li>
                      <li><a href="admin-product-delete.php" class="bg-green" >Delete Products</a></li>
                </ul>
        </div>
    </div>
    
            
    <div class="row-100">

    
        <form class="form-box" action="admin-product-add-submit.php" method="post" enctype="multipart/form-data">      
                <p>Enter Vendor ID:</p>
                <input type="text" name="vendorID" placeholder="Vendor ID" required>  
            
                <p>Enter Product Name:</p>
                <input type="text" name="name" placeholder="Product Name" required>    
                
                <p>Enter Weight (Amount in grams):</p>
                <input type="text" name="weight" placeholder="Weight" required> 
            
                <p>Enter Price (Amount in Rs.):</p>
                <input type="text" name="price" placeholder="Price" required> 
                
                <p>Select product image (200x200) to upload:</p>
                <input type="file" name="fileToUpload" id="fileToUpload">
                
                <br><br>
                
                <input class="form-button" type="submit" name="submit" value="Add Product">
                
                <h3 class="error-msg"><?php include_once('includes/message.php'); ?></h3>
            
        </form>     
        
        
    </div> 
    
</body>
    
</html>