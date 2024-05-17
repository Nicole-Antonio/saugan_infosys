<?php

include "connect.php";

if(isset($_POST['updatedata'])){

	$id = $_POST['update_id'];

	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$email = $_POST['email'];
	$advisory = $_POST['advisory'];

	$query = "UPDATE teachers SET lname = '$lname',fname = '$fname', mname ='$mname', email = '$email', advisory = '$advisory' WHERE id='$id'";
	$query_run = mysqli_query($con, $query);

	if($query_run){
		header('Location: teachers.php');
	}

	else{
		die(mysqli_error($con));
	}
}
?>