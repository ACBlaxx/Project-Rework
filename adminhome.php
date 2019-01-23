 <?php
	require_once ('dbconnect2.php');
	session_start();
?>

 <!DOCTYPE html>
<html>
<head>
<title> Home </title>
</head>

<body background = "white">
<header style = "width:100%; height:60px; text-align:center; float:center; background-color:#476b6b; color:white;" >

	<p align = 'center' > 
	Welcome <?php echo $_SESSION ['current_user'];?>
	&nbsp; <a href = 'Login2.php'> Logout </a>
	</p>
</header>


<section style="width:100%; height:540px; color:white; background-color:#669999; text-align:center; font-size:20px; font-family:Candara;" />

		<a href = "view_reports_public_admin.php"> PUBLIC REPORTS </a> </br>
	</br>
	</br>
    </br>
    </br>
    </br>
	<a href = "admin_reports.php"> ADMIN REPORTS </a> </br>
	</br>
	</br>
    </br>
    </br>
    </br>
	<a href = "users.php"> SYSTEM USERS </a> </br>
	<style>
		a:link, a:visited {
		background-color:#805500;
		color: white;
		padding: 14px 25px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
}


a:hover, a:active {
    background-color:brown;
}
</style>

</section>



<footer style="background-color:#476b6b; width:100%; height:70px; text-align:center; color:white;" />
	
</footer>

</body>

</html>