<?php
	session_start();
	if (isset ($_GET['exit']))
	{
		$_SESSION ['current_user'] = null;
		session_destroy();
	}
	include('dbconnect2.php');
?>

<!Doctype html5>
<html>

<head>
	<title> Login Page </title>
	<link href = "Style.css" rel = "stylesheet" />
</head>

<body>

<header >
 <b> Enter your login credentials </b>
</header>

<section>

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
				<td> <input type = 'reset' name = 'btn_cancel' id = 'btn_cancel' value = 'Cancel'> </td>
			</tr>
		</form>
	</table>
</section>	

<?php
	if (isset ($_POST['btn_login']))
	{
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$query = " SELECT * FROM Login WHERE Username = '$user' AND Password = '$pass' ";
		
		$result = mysqli_query ($connection, $query) or die (mysqli_error($connection));
		if ($row = mysqli_fetch_array($result))
		{
			$_SESSION ['current_user'] = $row ['Username']; 
			echo "
			<script>
			window.location.href = 'adminhome.html';
			</script>
			";
		}
		
		else
		{
			echo "
			<script> 
			alert('Wrong Useername or Password');
			</script>
			";
		}
	}
	
?>

<footer>
	<a href="https://www.facebook.com/"> <img src="facebook.jpg"/> </a>
	<a href="https://www.twitter.com/"> <img src="twitter.jpg"/> </a>
	<a href="https://www.instagram.com/"> <img src="instagram.jpg"/> </a>
</footer>

</body>

</html>