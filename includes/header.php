	<html>
	<center><font  align=center size=70px color=black > Biscuit Lanka</font></center>
    <header class="navigation">
        <div class="row-100 bg-grey">
                <ul class="left-nav">
                      <li><a class="home-active" href="index.php">Home</a></li>
                      <li><a class="products-active" href="products.php">Products</a></li>
                      <li><a class="facilities-active" href="facilities.php">About US</a></li>                      
                      <li><a class="help-active" href="help.php">Help</a></li>
					  
                </ul>
                
                <ul class="right-nav">
                <?php require_once('includes/connection.php'); ?>
                <?php require_once('includes/session.php'); ?>
            
			    <?php 
					checkSession();
					if(isset($_SESSION['name'])){
             
							if("{$_SESSION['usertype']}" == 'a'){
								echo "<li><a href=\"admin-dashboard.php\" class=\"active\">Admin Panel</a></li>";
								echo "<li><a href=\"logout.php\">Log Out</a></li>";
				            }
                            elseif("{$_SESSION['usertype']}" == 'c'){
								echo "<li><a href=\"customer-dashboard.php\" class=\"active\">Customer Dashboard</a></li>";						
								echo "<li><a href=\"logout.php\">Log Out</a></li>";
                                
				            }
							elseif("{$_SESSION['usertype']}" == 'v'){
								echo "<li><a href=\"vendor-dashboard.php\" class=\"active\">Vendor Dashboard</a></li>";							
								echo "<li><a href=\"logout.php\">Log Out</a></li>";
                                
				            }
                            
                        }
					else{
						echo "<li><a class=\"active\" href=\"login.php\">Login</a></li>";
						echo "<li><a href=\"register.php\">Register</a></li>";
						}
                ?>
                
                </ul>
                
                
            
                
        </div>
    </header>
	</html>