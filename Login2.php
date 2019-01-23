<?php
	session_start();
	if (isset ($_GET['exit']))
	{
		$_SESSION ['current_user'] = null;
		session_destroy();
	} 
	/*else {
		header('location:Login2.php');
	}
	*/
	include('dbconnect2.php');
?>

<!Doctype html5>
<html>

<head>
	<title> Login Page </title>
	<style>
		body{
			background-image: url(traffic.jpg);
			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>

<body>

<header style = "width:100%; height:50px; text-align:center; float:center; color:white;"> Enter your login credentials </header>
 
</header>

<nav style = "width:20%; height:500px; float:right; font-size:20px; text-align:center;">
	<a href = 'start.html'> HOME </a>
</nav>

<section style = "width:100%; height:500px; color:white; text-align:center ; font-size:20px; font-family:Helvetica; color:white;">	

<table align = 'center' >
		<form method = 'post'>
			<tr>
				<td>User Name: </td> <td> <input type = 'text' name = 'username' id = 'username' required> </td>
			</tr>
			
			<tr>
				<td>Password: </td> <td> <input type = 'password' name = 'password' id = 'password' required> </td>
			</tr>
			
			<tr>
				<td> <input type = 'submit' name = 'btn_login' id = 'btn_login' value = 'Login'> </td>
				<td> <input type = 'reset' name = 'btn_cancel' id = 'btn_cancel' value = 'Reset'> </td>
			</tr>
		</form>
	</table>
	
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

<?php
	if (isset ($_POST['btn_login']))
	{
		$user = $_POST['username'];
		$pass = md5($_POST['password']);
		
		//$encpass = md5($pass);
		
		$query = " SELECT * FROM admin WHERE Username = '$user' AND Password = '$pass' ";
		
		$result = mysqli_query ($connection, $query) or die (mysqli_error($connection));
		if ($row = mysqli_fetch_array($result))
		{
			$_SESSION ['current_user'] = $row ['Username']; 
			echo 
			"
			<script>
			window.location.href = 'adminhome.php';
			</script>
			";
		}
		
	}
	
?>

</body>

</html>