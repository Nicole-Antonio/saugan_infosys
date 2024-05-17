<?php

include "connect.php";


if(isset($_POST['deletedata'])){

	$id = $_POST['delete_id'];

	$query = "DELETE FROM systemusers WHERE id='$id'";
	$query_run = mysqli_query($con, $query);

	if($query_run){
		header('Location: accounts.php');
	}

	else{
		die(mysqli_error($con));
	}
}
?>
