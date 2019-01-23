<!doctype html5>
<html>
<body>
	<form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	Day of the Week: <input type="text" id="day" name="day" />
	<input type="submit" value="Submit" id="btn_submit" name="btn_submit"/>
	</form>

	<?php
  //A logic to detect if the user has clicked the button
  if(isset($_POST['btn_submit']))
	  
	  {
  
  //Switch Statements
  $dayOfWeek = $_POST['day'];
  
  switch ($dayOfWeek)
  {
	  case 1:
		echo "Today is Sunday";
	  break ;
	  
	  case 2:
		echo "Today is Monday";
	  break;
	  
	  case 3:
		echo "Today is Tuesday";
	  break; 
	  
	  case 4:
		echo "Today is Wednesday";
	  break; 
	  
	  case 5:
		echo "Today is Thursday";
	  break; 
	  
	  case 6:
		echo "Today is Friday";
	  break; 
	  
	  case 7:
		echo "Today is Saturday";
	  break;
	  
	  default:
		echo "The day is unaivailable";
	  break;
  }
	  }
?>
</body>
</html>