<?php 
	require_once ('dbconnect2.php');
	
	//Enter data into the database
	$num_plate = false;
	if(isset($_POST['num_plate'])){
		$num_plate = $_POST['num_plate'];
	}
	

	$vehicle = false;
	if(isset($_POST['vehicle'])){
		$vehicle = $_POST['vehicle'];
	}
	

	$offence = false;
	if(isset($_POST['offence'])){
		$offence = $_POST['offence'];
	}
	

	$extra_info = false;
	if(isset($_POST['extra_info'])){
		$extra_info = $_POST['extra_info'];
	}
	
	if(empty($num_plate) && empty($vehicle) && empty($offence)){
		echo "<script> alert ('Can't enter blanks'); </script>";
	}
   		else
	//Execute the insert query
	$response = mysqli_query($connection, "INSERT INTO public_reports (Number_Plate, Vehicle, Offence, Extra_Info) VALUES ('$num_plate', '$vehicle', '$offence', '$extra_info')") or die (mysqli_error($connection));
	
	if ($response)
	{
		echo "<script> alert ('Data Entry Successful!!'); </script>";
		" <script> window.location.href = 'start.php'; </script> ";
	}
?>

<!DOCTYPE html5>
<html>
<head> 

<title> 
	Final Report 
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

<script>
function validate()
{	
	if(document.myform.vehicle.value==""){
		alert("Please choose a vehicle")
	}
	
	if(document.myform.offence.value==""){
		alert("Please choose an offence") 
	}
}
</script>


</head>

<body> 

<nav style="width:10%; height:600px; float:right; font-size:20px; text-align:center; color:white;">
	<br/>
	<a href = "start.php"> HOME </a>
</nav>

<section style =  "width:90%; height:600px; color:black; text-align:center ; font-size:20px; font-family:Helvetica;" >

	 <header> ENTER VEHICLE DETAILS </header>
	 
	<P>  </br>
		<form name = "myform" action = "final.php" method = "POST" onsubmit = return(validate())>
		
		
			Number Plate: <input type = "text" id = "num_plate" name = "num_plate" maxlength = "8" size = "8" required/> </br>
				
					</br>
					</br>
			
			Vehicle: Choose the type of vehicle  </br>
			
					</br>
					
				<select id = "vehicle" name = "vehicle">
					<option value = ""> </option>
					<option value = "bus"> Bus </option>
					<option value = "truck"> Truck </option>
					<option value = "motorcycle"> Motorcycle </option>
					<option value = "matatu"> Matatu </option> </br>
					<option value = "sedan"> Sedan </option> </br>
					<option value = "pick-up"> Pick-up </option> </br>
					<option value = "other"> Other </option> </br>
					 
				 </select>	</br>
					</br>

				  </br>
				  </br>
		
			
			Offence: Choose the type of offence  <br/> 
					
					</br>
					
				<select id = "offence" name = "offence" >
					<option value = ""> </option>
					<option value = "Speeding"> Speeding </option>
					<option value = "Driver using the phone while driving"> Driver using the phone while driving </option>
					<option value = "Dangerous/Reckless driving"> Dangerous or Reckless driving </option>
					<option value = "Disobeying or ignoring traffic signs"> Disobeying or ignoring traffic signs </option> </br>
					<option value = "Rider(s) not wearing a helmet"> Rider(s) not wearing a helmet </option> </br>
					<option value = "Passenger/Driver not wearing a seatbelt"> Passenger/Driver not wearing a seatbelt </option> </br>
					<option value = "Other offence"> Other offence (Please provide extra infromation) </option> </br>
					
				</select> </br>
				
				</br>
				</br>

			Extra information: Please add any extra information that would be helpful <br/>

					</br>
					<input type = "text" id = "textboxid2" name = "extra_info" style = "width:400px"/> </br>
					<script> document.getElementById('textboxid2').style.height = "150px"; </script>	
					</br>
			<input type="Submit" name = 'btn_submit' id = 'btn_submit'  value = "SUBMIT"/>
		</form>
		
<style>
a:link, a:visited {
    background-color:#805500;
    color: black;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color:white;
}
</style>

</section>	
	
</body>
<footer style = "width:100%; height:50px; text-align:center;" >

</footer>

</html>

