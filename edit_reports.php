<?php
        
        include('dbconnect2.php');
		session_start();
?>
		
<!doctype html>
<html>
    <head>
      
    </head>
    <body>
    
<nav style = "width:20%; height:100px; float:left; background-color:#5c5c3d; font-size:30px; text-align:center;">
	<a href = 'view_reports.php'> Back </a>
</nav>

    <section>

        <?php

        //receive the national ID from viewrecords
        if(isset($_GET['num_plate'])){
            
            $Number_plate = $_GET['num_plate'];
            $query = mysqli_query($connection, "SELECT * FROM public_reports WHERE Number_Plate = '$num_plate'");
            $fetched_voter = mysqli_fetch_assoc($query);
            
        }
		
        //If edit button is clicked, update the report
        if(isset($_POST['btn_edit'])){
            //print_r($_POST);
            
            
            //Get the new values entered
			
            $ID_no = $_POST['id'];
            $lname = $_POST['lname'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $county = $_POST['county'];
            
            //Query to update the data
            $sql = "UPDATE public_reports SET Number_Plate = '$num_plate', Vehicle = '$vehicle',  Offence = '$offence' WHERE Number_Plate = '$num_plate'";

            $query = mysqli_query($connection, $sql);
            
            header("Location: view_reports.php");
            exit;
        }
        
        /*//php validation
        echo"<script>
                alert('Data edited successfully!');
                window.location.href = 'viewrecords.php';
                </script>"*/
        ?>
		
        <fieldset>
        <form method="POST">
            <h1>Edit Reports</h1> 
        
            <label>:</label> <input type = "text" value = '<?php echo $nationalid;?>' id = "id"  readonly/> <br />
			<br />
            <label>First Name:</label> <input type = "text" name = "fname" id = "fname" value = '<?php echo $fetched_voter['fname']; ?>' > <br />
            <br />
            <label>Last Name:</label> <input type = "text" name = "lname" id = "lname" value = '<?php echo $fetched_voter['lname']; ?>' > <br />
            <br />
            <label>Gender:</label> <input type = "text" name = "gender" id = "gender" value = '<?php echo $fetched_voter['gender']; ?>' > <br />
            <br />
            <label>Age:</label> <input type = "text" name = "age" id = "age" value = '<?php echo $fetched_voter['age']; ?>' > <br />
            <br />
            <label>County:</label> <input type = "text" name = "county" id = "county" value = '<?php echo $fetched_voter['mobile']; ?>' > <br />
            <br />

            <input type="submit" name="btn_edit" id="btn_edit" value="Edit">
            <input type="reset" value="Cancel">
            
        </form>
        </fieldset>
        </section>
        <footer>
        </footer>
    </body>
    
    
    
</html>