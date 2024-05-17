<?php

include "connect.php";

if(isset($_POST['insertdata'])){

	$stud_id = $_POST['stud_id'];
	$subject = $_POST['subject'];
	$score = $_POST['score'];
	$items = $_POST['items'];
	$date = $_POST['dateposted'];
	$quiz_no = $_POST['quiz_no'];

	$query = "INSERT INTO quizzes (`stud_id`,`subject`,`score`,`items`, `dateposted`, `quiz_no`) VALUES ('$stud_id','$subject','$score','$items', '$date', '$quiz_no')";
	$query_run = mysqli_query($con, $query);

	if($query_run){
		header('Location: quizzes.php');
	}

	else{
		die(mysqli_error($con));
	}
}
?>