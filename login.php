<?php include('includes/connection.php') ?>
<?php include('includes/session.php') ?>

<!DOCTYPE html>
<html>
    
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">  
</head>

<body class="login-body" style="background:url(./images/bck2.jpg);background-size: cover;">
        
    <?php include('includes/header.php') ?>
    <div class="row-100">  
        <div class="login-box">

		<div class="loginbox">
		<img src="./images/prof.png" class="prof">
		<h1>Login Here</h1>
		<form action="login-submit.php" method="post">
			<p>Email</p>
			<input type="text" name="email" placeholder="Enter Email" required>
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password" required>
			<input type="submit" name="submit" value="Login">
			<a href="register.php">Dont Have an account</a>

		</form>
		</div>
    </div> 
        
</body>
    
</html>