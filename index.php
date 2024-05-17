<?php

include "connect.php";
session_start();


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="SELECT * from `systemusers` where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($con,$sql);

	$row=mysqli_fetch_array($result);


	if (empty($username)) {

        header("Location: index.php?error=Username is required");

        exit();

    }elseif(empty($password)){

        header("Location: index.php?error=Password is required");

        exit();
    }

	elseif($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;

		header("location:userhome.php");
	}

	elseif($row["usertype"]=="teacher")
	{

		$_SESSION["username"]=$username;
		
		header("location:teacherhome.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:adminhome.php");
	}

	else
	{
		header("Location: index.php?error=Invalid username or password");

        exit();
	}

}




?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="container">
		<div class="wrapper">
			<div class ="title"><span>Login</span></div>
			<form action="#" method="POST">
				<?php if (isset($_GET['error'])) { ?>
          		  <p class="error" style=" background: #F2DEDE; color: #A94442; padding: 10px; width: 100%; border-radius: 5px; margin: 10px auto; text-align: center"><?php echo $_GET['error']; ?></p>
       			 <?php } ?>
				<div class = "row">
					<span class="material-icons">person</span>
					<input type ="text" placeholder="Username" name="username" required autocomplete="off">
				</div>
				<div class = "row">
					<span class="material-icons">lock</span>
					<input id="password" type ="password" placeholder="Password" name="password" required autocomplete="off">
				</div>
				<div class = "row button">
					<input type ="submit" value="Login">
				</div>
			</form>
		</div>
	</div>
</body>
</html>