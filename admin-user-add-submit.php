<?php

include('includes/connection.php');

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
    $password = sha1($_POST['password']);
	$password2 = sha1($_POST['password2']);
    $userType = $_POST['userType'];
    $contact = $_POST['contact'];
   
    if ($password != $password2){
		$message = base64_encode(urlencode("Passwords do not match"));
        header('Location:admin-user-add.php?msg=' . $message);
        exit();
    }
    else {
        $selectmail= "SELECT * FROM users WHERE email ='$email' " ;
        $allmailquery = mysqli_query($connection, $selectmail ) ;  
        $num = mysqli_num_rows($allmailquery);
    
        if($num > 0){
        $message = base64_encode(urlencode("Email already exists"));
        header('Location:admin-user-add.php?msg=' . $message);
		echo "Email already exists";
        exit();
        }
        
 
        else {
            $registrationQuery = "INSERT INTO users (name, email, password, usertype, contact) VALUES ('$name', '$email', '$password', '$userType', '$contact')";
            
            if (mysqli_query($connection,$registrationQuery) === TRUE) {
                //$message = base64_encode(urlencode("Registration Successful"));
				header('Location:admin-user-add.php?msg=' . $message);
				exit();
            } 
            
            else {
                //$message = base64_encode(urlencode("SQL Error while Registering"));
				header('Location:admin-user-add.php?msg=' . $message);
				echo "Error!";
				exit();
            }
        }
        
    }
}


mysqli_close($connection);
   


?>