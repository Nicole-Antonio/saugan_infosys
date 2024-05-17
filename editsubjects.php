<?php

include "connect.php";

if(isset($_POST['updatedata'])){

	$id = $_POST['update_id'];

	$title = $_POST['title'];
	$gradelvl = $_POST['gradelvl'];
	$teacher = $_POST['teacher'];

	$query = "UPDATE subjects SET title = '$title', gradelvl = '$gradelvl', teacher ='$teacher' WHERE id='$id'";
	$query_run = mysqli_query($con, $query);

	if($query_run){
		header('Location: subjectmanagement.php');
	}

	else{
		die(mysqli_error($con));
	}
}
?>