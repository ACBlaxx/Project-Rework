<?php
	require_once ('dbconnect2.php');
	session_start();
?>

<!DOCTYPE html5>
<html>

<head>
	<title> Comprehensive Reports </title>
</head>


<body>

<header style = "width:100%; height:100px; text-align:center; float:center; background-color:#669999; color:#993300;" >
	<p align = 'center' > 
	Welcome <?php echo $_SESSION ['current_user'];?>
	&nbsp; <a href = 'Login2.php'> Logout </a>
	
	</p>
</header>

<nav style = "width:20%; height:700px; float:right; background-color:#527a7a; font-size:20px; text-align:center;">
	<a href = 'adminhome.php'> HOME </a> </br>
</nav>

<section style = "width:100%; height:700px; color:white; text-align:center ; background-color:#5c8a8a; font-size:20px; font-family:Candara;">	
	<table align = 'center' border = '2'>
<!--		
		<tr>
		<th> ID Number</th>
		<th> Number Plate </th>
		<th> Offence </th>
		
		<th colspan = '1'> Actions </th>
		</tr>
		
		<?php
			$sql = "SELECT * FROM admin_reports "; 
			$query = mysqli_query($connection, $sql) or die(mysqli_error());
			while(($row = mysqli_fetch_row($query))!=FALSE)
			{
		
		
		echo"<tr>";
		echo"<td>".$row[0]."</td>";
		echo"<td>".$row[1]. "</td>";
		echo"<td>".$row[2]." </td>";
		echo"<td>".$row[3]."</td>";
		?>
		<td> <a href = "delete_reports.php?id=<?=$row[0]?>"> Delete </a> </td>
		<?php
		echo"</tr>";
			}
			?>	
		
	</table>
-->		
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

	<a href = 'view_reports_public_admin.php'> PUBLIC REPORTS </a>
</section>

</body>

</html>
