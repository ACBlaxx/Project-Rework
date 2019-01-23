<?php
require_once ('dbconnect2.php');
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

<section style = "width:100%; height:500px; color:white; text-align:center ; font-size:30px; font-family:Helvetica; color:white;">	

<table align = 'center' >
		<form method = 'post'>
			<tr>
				<td>First Name: </td> <td> <input type = 'text' name = 'firstname' id = 'firstname' required> </td>
			</tr>
            <tr>
				<td>Last Name: </td> <td> <input type = 'text' name = 'lastname' id = 'lastname' required> </td>
			</tr>
            <tr>
				<td>Email: </td> <td> <input type = 'text' name = 'email' id = 'email' required> </td>
			</tr>
            <tr>
				<td>Phone Number: </td> <td> <input type = 'text' name = 'number' id = 'number' required> </td>
			</tr>
            <tr>
				<td>ID Number: </td> <td> <input type = 'text' name = 'id' id = 'username' id> </td>
			</tr>
			<tr>
				<td>Password: </td> <td> <input type = 'password' name = 'password' id = 'password' required> </td>
			</tr>
			
			<tr>
				<td> <input type = 'submit' name = 'btn_create' id = 'btn_create' value = 'Register'> </td>
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
	if (isset ($_POST['btn_create']))
	{
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $id = $_POST['id'];
		$pass = md5($_POST['password']);
		
		
		$query = mysqli_query($connection, "insert into new_user (First_Name, Last_Name, Email, Phone_Number, ID_Number, Password) values ('$fname', '$lname', '$email', '$number', '$id', '$pass')") or die (mysqli_error($connection));
		
		//$result = mysqli_query ($connection, $query) or die (mysqli_error($connection));
		if ($query)//($row = mysqli_fetch_array($result))
		{
	    	echo 
			"
			<script>
			window.location.href = 'start.php';
			</script>
			";
		} else { echo "Fail";}
		
	}
	
?>

</body>

</html>