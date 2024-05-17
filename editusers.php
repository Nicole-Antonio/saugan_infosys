<?php

include "connect.php";

if(isset($_POST['updatedata'])){

	$id = $_POST['update_id'];

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "UPDATE systemusers SET username = '$username', email = '$email', password = '$password' WHERE id='$id'";
	$query_run = mysqli_query($con, $query);

	if($query_run){
		header('Location: accounts.php');
	}

	else{
		die(mysqli_error($con));
	}
}
?>