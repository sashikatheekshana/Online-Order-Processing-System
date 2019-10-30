<?php include('includes/connection.php') ?>
<!DOCTYPE html>
<html>
    
<head>
    <title>Products | biscuit lanka</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <style>
            .navigation .products-active {
                background-color: #ffcc66;
            }
        
            .navigation li a:hover:not(.products-active)
                background-color: #111;
            }
    </style>
</head>
    
<body>

    <?php include('includes/header.php') ?>
    
    <div class="row-100 div-c bg-yellow"> 
        <font size=20px>Products</font>
    </div>
    
    <div class="row-100"><h2 class="error-msg"><?php include_once('includes/message.php'); ?></h2></div>
    
    <?php
    
    $retrieveProduct = 'SELECT * FROM products'; 
    $resultProduct = mysqli_query($connection, $retrieveProduct); 

    ?>
        
    <div class="row-100">
        
        <?php
        while($rowProduct  = mysqli_fetch_assoc($resultProduct)){
            
                echo "
                   <div class=\"row-20 product-box\">
                   
                        <h2 align=\"center\">" . $rowProduct['name'] . ' ' . $rowProduct['weight'] . "</h2>
                        
                        <p align=\"center\">
                            <img src=\"images/products/{$rowProduct['imageName']}\" height=\"200px\"\ width=\"200px\"\">
                        </p>
                        
                        <h2 align=\"center\">" . $rowProduct['price'] . "</h2>";
                        
                  
                        $IDretrieve = $rowProduct['vendorID'];
                        $retrieveVendorName = "SELECT U.name FROM users U,products P WHERE U.userID=P.vendorID AND '$IDretrieve'=U.userID";
                        $resultVendorName = mysqli_query($connection, $retrieveVendorName); 
                        $rowVendorName  = mysqli_fetch_assoc($resultVendorName);
                        echo "<h3 align=\"center\">" . $rowVendorName['name'] . "</h3>";
                            
          
                        $productID = $rowProduct['productID'];
                        echo "<form action =\"product-buy.php\" name=\"del_submit\" method=\"post\" >
                                <input type=\"number\" placeholder=\"number of units\" name=\"units\" min=\"1\">
                                <input type=\"hidden\" value=" .$productID. " name=\"productID\">
                                <input class=\"form-button\" type=\"submit\" name=\"submit\" value=\"Buy now\">
                            </form>
                        
                   </div>"
                   ;
            
        }
        ?>
        
    </div>
    
    <?php include('includes/footer.php') ?>

</body>
    
</html>