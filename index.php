<!DOCTYPE html>
<html>
    
<head>
    <title>Biscuit Lanka | Sri Lanka</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <style>
            .navigation .home-active {
                background-color: #ffcc66;
            }
        
            .navigation li a:hover: {/* Current colour not change when hover */
                background-color: #111;
            }

    </style>
    
</head>

<body>



   
    <?php include('includes/header.php') ?>	
	 <div class="container">
			<img class="mySlides" src="images/img1.jpg" style="width:80;padding-left:300px">
			<img class="mySlides" src="images/img4.jpg" style="width:80;padding-left:300px">
			<img class="mySlides" src="images/img12.png" style="width:80;padding-left:300px">
			<img class="mySlides" src="images/img5.jpg" style="width:80;padding-left:300px">
			<img class="mySlides" src="images/img8.jpg" style="width:80;padding-left:300px">
			<img class="mySlides" src="images/img9.jpg" style="width:80;padding-left:300px">
			<img class="mySlides" src="images/img11.jpg" style="width:80;padding-left:300px">
	</div>
	
	
	<script>
			var a = 0;
			myone();

			function myone() 
			{
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) 
				{
				x[i].style.display = "none";  
				}
				a++;
				if (a > x.length) {a = 1}    
					x[a-1].style.display = "block";  
					setTimeout(myone, 2000);
			}
	</script>
    
    
    <div class="row-100">
        <h1 class="font-white"> Popular Brands</h1>
    
    </div>
    <div class="row-20 bg-white"   >
        <a href="products.php"><img  class="tiles" src="images/img13.png" height=200 width=200></a>
    </div>
    
    <div class="row-20 bg-white"   >
        <a href="products.php"><img  class="tiles" src="images/img14.jpg" height=200 width=200></a>
    </div>
    
    <div class="row-20 bg-white"   >
        <a href="products.php"><img  class="tiles" src="images/img15.png" height=200 width=200></a>
    </div>
    <div class="row-20 bg-white"   >
        <a href="products.php"><img class="tiles" src="images/img16.jpg" height=200 width=200></a>
    </div>
    <div class="row-20 bg-white"   >
        <a href="products.php"><img class="tiles" src="images/img17.jpg" height=200 width=200></a>
    </div>
		
    <?php include('includes/footer.php') ?>
    
</body>
    
</html>