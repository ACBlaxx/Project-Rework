<?php
	require_once ('dbconnect2.php');
	session_start();
?>

<!DOCTYPE html5>
<html>

<head>
	<title> Reports Made By The Public </title>
</head>


<body>

<header style = "width:100%; height:100px; text-align:center; float:center; background-color:#669999; color:#993300; padding-top:clear;" >
	<p align = 'center' > 
	Welcome <?php echo $_SESSION ['current_user'];?>
	&nbsp; <a href = 'Login2.php'> Logout </a>
	
	</p>
</header>

<nav style="width:20%; height:590px; float:left; background-color:#527a7a; font-size:20px; text-align:center; color:white;">
	<a href = "adminhome.php"> HOME </a>
</nav>

<section style = "width:100%; height:8000px; color:white; text-align:center ; background-color:#5c8a8a; font-size:20px; font-family:Helvetica;">
	<table align = 'center' border = '2'>
		
		<tr>
		<th> Number Plate </th>
		<th> Vehicle </th>
		<th> Offence </th>
		<th> Extra Information </th>
		<th> Action </th>
		</tr>
		
		<?php
			$sql = "SELECT * FROM public_reports "; 
			$query = mysqli_query($connection, $sql) or die(mysqli_error());
			while(($row = mysqli_fetch_row($query))!=FALSE)
			{
		
		
		echo"<tr>";
		echo"<td>".$row[0]." </td>";
		echo"<td>".$row[1]." </td>";
		echo"<td>".$row[2]." </td>";
		echo"<td>".$row[3]." </td>"
		?>
		<td> <a href = "delete_reports.php?id=<?=$row[0]?>"> Delete </a> </td>
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
    background-color:brown;
}

</style>

</section>

</body>

</html>
