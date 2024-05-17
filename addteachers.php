<?php

include "connect.php";

if(isset($_POST['insertdata'])){
	
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$email = $_POST['email'];
	$advisory = $_POST['advisory'];

	$query = "INSERT INTO teachers (`lname`,`fname`,`mname`,`email`,`advisory`) VALUES ('$lname','$fname','$mname','$email','$advisory')";
	$query_run = mysqli_query($con, $query);

	if($query_run){
		header('Location: teachers.php');
	}

	else{
		die(mysqli_error($con));
	}
}
?>