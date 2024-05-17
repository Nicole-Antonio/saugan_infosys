<?php

session_start();
include "connect.php";
if (isset($_POST['insertassignment'])){

  $lname=$_POST['lname'];
  $submittedassignment=$_FILES["submittedassignment"]['name'];

  if(file_exists("submittedassignments/" . $_FILES["submittedassignment"]["name"])) 
  {
    $store = $_FILES["submittedassignment"]["name"];
    echo '<script> alert("Data already exists.");</script>';
    header('Location: submitassignment.php');
  }
  else
  {
    $query = "INSERT INTO submitassignments (`lname`,`submittedassignment`) VALUES('$lname','$submittedassignment')";
    $query_run = mysqli_query($con, $query);

      
    if($query_run){
      move_uploaded_file($_FILES["submittedassignment"]["tmp_name"], "submittedassignments/".$_FILES["submittedassignment"]["name"]);
      echo '<script> alert("Data saved");</script>';
      header('Location: submitassignment.php');

      $_SESSION['status'] = " Data Imported succesfully";
      header('Location: submitassignment.php');
      exit(0);
    }

    else{
      die(mysqli_error($con));

      $_SESSION['status'] = "Invalid File";
      header('Location: submitassignment.php');
      exit(0);
    }
  }
}
?>