<?php require_once('includes\connection.php'); ?>

<?php
session_start();

if (isset($_SESSION['name'])){
		session_unset();
		session_destroy();
		//$message = base64_encode(urlencode(("Logged Out Successfully")));
		header('Location:login.php?msg=' . $message);
		exit();
	}

?>