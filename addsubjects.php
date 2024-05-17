<?php

include "connect.php";

if(isset($_POST['insertdata'])){

	$title = $_POST['title'];
	$gradelvl = $_POST['gradelvl'];
	$teacher = $_POST['teacher'];

	$query = "INSERT INTO subjects (`title`,`gradelvl`,`teacher`) VALUES ('$title','$gradelvl','$teacher')";
	$query_run = mysqli_query($con, $query);

	if($query_run){
		header('Location: subjectmanagement.php');
	}

	else{
		die(mysqli_error($con));
	}
}
?>