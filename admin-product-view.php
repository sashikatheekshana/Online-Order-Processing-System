<?php include('includes/connection.php') ?>
<?php include('includes/session.php') ?>

<?php
    checkSession();
    if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'a'){
       //$message = base64_encode(urlencode("Please Login"));
       header('Location:login.php?msg=' . $message);
       exit();
       }

?>

<!DOCTYPE html>
<html>
    
<head>
    <title>View Products | Biscuit Lanka</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    
<body>
    
    <?php include('includes/header.php') ?>
    
    <hr>
    <div class="row-20 bg-grey"> 
        <h1 class="div-c">View Products</h1>
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
            
    <?php
        $retrieve = "SELECT * FROM products";
       

            
        $result = mysqli_query($connection,$retrieve);

        echo "<table class=\"user\">
            	<tr>		
                <th>Product ID</th>
                <th>Name</th>
                <th>Weight</th>
                <th>Image</th>
                <th>Vendor ID</th>
                <th>Price</th>
                </tr>
            ";

        while($row = mysqli_fetch_assoc($result)){

            echo "
            
            <tr>
                <td>".$row['productID']."</td>
                <td>".$row['name']."</td>
                <td>".$row['weight']."</td>
                <td><img src=\"images/products/{$row['imageName']}\" height=\"150px\"\ width=\"75px\"\"></td>
                <td>".$row['vendorID']."</td>
                <td>".$row['price']."</td>
            </tr>
            
            ";

        }	
        echo "</table>";

    ?>   
    

    
    
</body>
    
</html>