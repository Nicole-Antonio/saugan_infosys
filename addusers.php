<?php

include "connect.php";

if(isset($_POST['insertdata'])){

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "INSERT INTO `systemusers`(username,email,password) VALUES('$username','$email','$password')";
	$query_run = mysqli_query($con, $query);

	if($query_run){
	
		header('Location: accounts.php');
	}

	else{
		die(mysqli_error($con));
	}
}
?>