<?php

include "connect.php";

if(isset($_POST['updatedata'])){

	$id = $_POST['update_id'];

	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$gradelvl = $_POST['gradelvl'];

	$query = "UPDATE students SET lname = '$lname',fname = '$fname', mname ='$mname', gradelvl = '$gradelvl' WHERE id='$id'";
	$query_run = mysqli_query($con, $query);

	if($query_run){
		header('Location: mystudents.php');
	}

	else{
		die(mysqli_error($con));
	}
}
?>