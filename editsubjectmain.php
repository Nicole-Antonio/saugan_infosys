<?php

include "connect.php";
if (isset($_POST['updatedata'])){

  $id = $_POST['update_id'];
  
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
    $query = "UPDATE updatemodule SET  lessons = '$lessons', subject = '$subject',filename = '$filename', description = '$description'  WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

      
    if($query_run){
      move_uploaded_file($_FILES["filename"]["tmp_name"], "upload/".$_FILES["filename"]["name"]);
      header('Location: subjects.php');
    }

    else{
      die(mysqli_error($con));
    }
  }
}
?>