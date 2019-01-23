<?php
	require_once ('dbconnect2.php');
	session_start();
?>

<!DOCTYPE html5>
<html>

<head>
	<title> Admin Home </title>
</head>


<body>

<header style = "width:100%; height:50px; text-align:center; float:center; background-color:#669999; color:#993300;" >
	<p align = 'center' > 
	Welcome <?php echo $_SESSION ['current_user'];?>
	&nbsp; <img src = '' />
	&nbsp; <a href = 'Login2.php'> Logout </a>
	
	</p>
</header>

<nav style = "width:20%; height:500px; float:right; background-color:#527a7a; font-size:20px; text-align:center;">
	<a href = 'adminhome.php'> Home </a>
</nav>

<section style = "width:100%; height:595px; color:white; text-align:center ; background-color:#5c8a8a; font-size:20px; font-family:Candara;">	
	<table align = 'center' border = '2'>
		
		<tr>
		<th> ID Number </th>
		<th> Surname </th>
		<th> First Name </th>
		<th> Last Name </th>
		<th> Number Plate</th>
		<th> Phone Number </th>
		<th colspan = '2'> Actions </th>
		</tr>
		
		<?php
			$sql = "SELECT * FROM persons "; 
			$query = mysqli_query($connection, $sql) or die(mysqli_error());
			while(($row = mysqli_fetch_row($query))!=FALSE)
			{
		
		echo"<tr>";
		echo"<td>".$row[0]."</td>";
		echo"<td>".$row[1]. "</td>";
		echo"<td>".$row[2]." </td>";
		echo"<td>".$row[3]." </td>";
		echo"<td>".$row[4]." </td>";
		echo"<td>".$row[5]." </td>";
		echo"<td>".$row[6]." </td>";
		?>
		<td> <a href = "delete_persons.php?id=<?=$row[0]?>"> Delete </a> </td>
		<?php
		echo"</tr>";
			}
			?>		
		
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
</section>

</body>

</html>
