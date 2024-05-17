<?php

session_start();
include "connect.php";
if (isset($_POST['savedata'])){

  $lessons=$_POST['lessons'];
  $subject=$_POST['subject'];
  $filename=$_FILES["filename"]['name'];
  $description=$_POST['description'];

  if(file_exists("upload/" . $_FILES["filename"]["name"])) 
  {
    $store = $_FILES["filename"]["name"];
    echo '<script> alert("Data already exists.");</script>';
    header('Location: subjects.php');
  }
  else
  {
    $query = "INSERT INTO updatemodule (`lessons`,`subject`,`filename`,`description`) VALUES('$lessons','$subject','$filename','$description')";
    $query_run = mysqli_query($con, $query);

      
    if($query_run){
      move_uploaded_file($_FILES["filename"]["tmp_name"], "upload/".$_FILES["filename"]["name"]);
      echo '<script> alert("Data saved");</script>';
      header('Location: subjects.php');
      
      $_SESSION['status'] = " Data Imported succesfully";
      header('Location: subjects.php');
      exit(0);
    }

    else{
      die(mysqli_error($con));

      $_SESSION['status'] = "Invalid File";
      header('Location: subjects.php');
      exit(0);
    }
  }
}
?>