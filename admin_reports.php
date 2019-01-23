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

<nav style="width:15%; height:590px; float:left; background-color:#527a7a; font-size:20px; text-align:center; color:white;">
	<a href = "adminhome.php"> HOME </a>
</nav>

<section style="width:100%; height:540px; color:white; background-color:#669999; text-align:center; font-size:20px; font-family:Candara;" />
    <table align = 'center' border = '3'> 
    <tr>
		<th> ID Number </th>
		<th> Surname </th>
		<th> Firstname </th>
        <th> Lastname </th>
        <th> Numplate </th>
        <th> Phone Number </th>
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
        
		echo"</tr>";
			}
			?>		
		
	</table>

	<br>
 		 <button class="btn btn-success" onclick="window.print()"> Generate Reports </button>

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