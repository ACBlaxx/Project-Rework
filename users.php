<?php
	require_once ('dbconnect2.php');
	session_start();
?>

<!DOCTYPE html5>
<html>

<head>
	<title> SYSTEM USERS </title>
	<style>
		body{
			background-image: url(Background 1.jpg);
			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>


<body>


<header style = "width:100%; height:60px; text-align:center; float:center; background-color:#669999; color:#993300; padding-top:clear;" >
	<p align = 'center' > 
	Welcome <?php echo $_SESSION ['current_user'];?>
	&nbsp; <a href = 'Login2.php'> Logout </a>
	
	</p>
</header>

<nav style="width:10%; height:590px; float:right;  font-size:20px; text-align:center; color:black;">
	<a href = "adminhome.php"> HOME </a>
</nav>

<section style = "width:100%; height:590px; text-align:center ; font-size:20px; font-family:Helvetica; color:white;">
	<table align = 'center' border = '3'>
<!--
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
-->
</head>
<body>
<!--
<div class="topnav">
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>
-->	
		<tr>
		<th> First Name </th>
		<th> Last Name </th>
		<th> Email </th>
		<th> Phone Number </th>
        <th> ID Number </th>
		</tr>
		
		<?php
			$sql = "SELECT * FROM new_user "; 
			$query = mysqli_query($connection, $sql) or die(mysqli_error());
			while(($row = mysqli_fetch_row($query))!=FALSE)
			{
		
		
		echo"<tr>";
		echo"<td>".$row[0]."</td>";
		echo"<td>".$row[1]."</td>";
		echo"<td>".$row[2]."</td>";
        echo"<td>".$row[3]."</td>";
        echo"<td>".$row[4]."</td>";
		?>
		
		<?php
		echo"</tr>";
			}
			?>		
		
	</table>
	<br>
  <button class="btn btn-success" onclick="window.print()"> Generate Report </button>
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
