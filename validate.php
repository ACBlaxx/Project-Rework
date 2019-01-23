<?php

$email=$_POST['mail'];
$password = $_POST['pwrd'];


	
	$connect = mysqli_connect("localhost", "root", "")or die("Couldn't establish a connection");
	$selectdb = mysqli_select_db($connect,"sign")or die("Couldn't select DB");
	$retrieve = mysqli_query($connect,"select * from signup" )or die("Couldn't retrieve");
	
	
	
	while((($row=mysqli_fetch_row($retrieve)) !=FALSE))
	{
	$user = $row[1];
	$pass = $row[5];
	
		if(($user==$email) && ($pass==$password)){
		session_start();
		$_SESSION['username'] = $email;
		$_SESSION['password'] = $password;
		$name = $row[0];
		$_SESSION['name'] = $name;
		
		break;
		}
	}
 	echo $name;
	if($name!="")
	{
		header ('location:home.php');
	}
	else
	{
		 header('location:login.php'); 
	}
	
?>