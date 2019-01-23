        <?php
        
        include('dbconnect2.php');
        //receive the ID_No from people database
		
        if(isset($_GET['id'])){
            
            $ID_No = $_GET['id'];
            $query = mysqli_query($connection, "SELECT * FROM persons WHERE ID_No = '$ID_No'");   
        }
  
		     //If edit button is clicked, update the persons records
        if(isset($_POST['btn_edit'])){
          
            //Get the new values entered
            $sname = $_POST['sname'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $logbook = $_POST['logbook'];
            $num_plate = $_POST['num_plate'];
            $phone = $_POST['phone'];
            
            //Query to update the data
            $sql = "update persons SET Number_Plate = '$num_plate', Phone_Number = '$phone' WHERE ID_No = '$ID_No'";

            $query = mysqli_query($connection, $sql);
            
            header("Location: view_persons.php");
            exit;
        }
		
        /*//php validation
        echo"<script>
                alert('Data edited successfully!');
                window.location.href = 'view_persons.php';
                </script>"
		*/
		?>
		
<!doctype html>
<html>
<head>
	<title> Edit Details </title>
</head>
    <section style = "width:100%; height:650px; color:white; text-align:center ; background-color:#5c8a8a; font-size:20px; font-family:Candara;">
	
        <fieldset>
        <form method = "POST" action = "edit_persons.php">
            <h1>Edit records</h1>
        
            <label>ID Number: </label><input type = "text" value = <?php echo $ID_No;?> readonly/><br />
            <br />
			<?php
			while(($row = mysqli_fetch_row($query))!=FALSE)
			?>
		
            <label> Number Plate: </label> <input type = "text" name = "num_plate" id = "num_plate" value =  <?=$row[5]?> > <br />
            <br />
            <label> Phone Number: </label> <input type = "text" name = "phone" id = "phone" value =  <?=$row[6]?> > <br />
            <br />
	
            <input type = "submit" name = "btn_edit" id = "btn_edit" value = "Edit">
            <input type = "reset" value = "Reset"> </br>
			</br>
			<a href = 'view_persons.php'> Back </a>
            
        </form>
        </fieldset>
		
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
    </body>
    
</html>