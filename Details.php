<?php
	session_start();
/*	if(!isset ($_SEESION ['current_user'])) 										
	{
		echo "<b> Please <a href = 'Login2.php'> login </a> to acces this page </b>";
		exit;
	}
*/
	require_once ('dbconnect2.php');
?>

<!DOCTYPE html5>
<html>

<head>
	<title> Voter Registration </title>
</head>

<body>

<header>
	<p align = 'center' > 
	Welcome <?php echo $_SESSION ['current_user'];?>
	&nbsp; &nbsp; <a href = 'Login2.php'> Logout </a>
	</p>
</header>

<nav>
	<ul>
		<li> <a href = 'view_reports.php'> View Reports </a> </li>
		<li> <a href = 'Details.php'> Enter Voter Details </a> </li>
		<li> <a href = 'edit_reports.php'> Edit Voter Details </a> <li>
		<li> <a href = 'delete_reports.php'> Edit Voter Details </a> <li>
		<li> <a href = 'Login2.php'>Login  </a> </li>
	</ul>
</nav>

<section>

<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post" method = "select">

	FirstName: <input type = "text" name = "fname" id = "fname" required/> </br>
	
	LastName: <input type = "text" name = "lname" id = "lname" required/> </br>
	
	Gender: <input type = "radio" name = "gender" value = "Male"/> Male 
			<input type = "radio" name = "gender" value = "Female"/> Female </br>
	
	NationalID: <input type = "text" name = "id" id = "id" required/> </br>
	
	Age: <input type = "text" name = "age" id = "age" required/> </br>
	
	County: <input type = "text" name = "county" id = "county" required/> </br>
	
	<input type = "submit" name = "submit" value = "Submit"/> 
    <input type = "reset" name = "reset" value = "Cancel"/>
</form>

</section>

<footer>
	<a href="https://www.facebook.com/"> <img src="facebook.jpg"/> </a>
	<a href="https://www.twitter.com/"> <img src="twitter.jpg"/> </a>
	<a href="https://www.instagram.com/"> <img src="instagram.jpg"/> </a>
</footer>

</body>

</html>

<?php
	
	if (isset($_POST['submit']))
		
		//Collect form data and insert into database
		$fname = $_POST ['fname'];
		$lname = $_POST ['lname'];
		$gender = $_POST ['gender'];
		$id = $_POST ['id'];
		$age = $_POST ['age'];
		$county = $_POST ['county'];
		
		//Execute insert query
		$response = mysqli_query ($connection, "INSERT INTO details VALUES ('$fname', '$lname', '$gender', '$id', '$age', '$county', '', '')" ) or die (mysqli_error($connection));
		if ($response)
			echo "Voter details saved succeessfully"
?>