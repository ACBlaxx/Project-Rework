<?php
    require_once ('dbconnect2.php');
    session_start();
?>

<!doctype html>
<html>
<head> 
<title> 
	Start 
</title> 
	<style>
		body{
			background-image: url(traffic.jpg);
			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
	</style>
</head>

<header style = "width:100%; height:60px; text-align:center; float:center; color:white;" >

	<p align = 'center' > 
	Welcome <?php echo $_SESSION ['current_user'];?>
	&nbsp; <img src = '' />
	&nbsp; <a href = 'start.html'> Logout </a>
	</p>
</header>

<body> 
<section style = "font-family:Helvetica; color:white; font-size:20px; width:100%; height:450px; text-align:center;">

	<p><h1>TRAFFIC OFFENCE MANAGEMENT SYSTEM</p></h1>
	<P><h2></p></h2>
	
		<a href = "final.php"> ENTER DETAILS OF AN OFFENCE </a> </br>
	</br>
	</br>
	</br>
	<a href = "view_reports_public.php"> VIEW VEHICLES WITH OFFENCES </a> </br>
	</br>
	</br>
	</br>
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
    background-color:#805500;
	}
	</style>
</section>	
</body>
</html>