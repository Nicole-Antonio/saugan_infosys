<?php

include "connect.php";

if(isset($_POST['insertdata'])){

	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$gradelvl = $_POST['gradelvl'];

	$query = "INSERT INTO students (`lname`,`fname`,`mname`,`gradelvl`) VALUES ('$lname','$fname','$mname','$gradelvl')";
	$query_run = mysqli_query($con, $query);

	if($query_run){
		header('Location: mystudents.php');
	}

	else{
		die(mysqli_error($con));
	}
}
?>