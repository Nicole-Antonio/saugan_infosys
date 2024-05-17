<?php

include "connect.php";


if(isset($_POST['deletedata']))
{

	$id = $_POST['delete_id'];

	$query = "DELETE FROM submitassignments WHERE id='$id'";
	$query_run = mysqli_query($con, $query);

	if($query_run){
		header('Location: submittedassignments.php');
	}

	else{
		die(mysqli_error($con));
	}
}
?>
