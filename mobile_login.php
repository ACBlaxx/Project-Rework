<?php
    require_once "connection.php";

    $name = $_POST["user_name"];
    $password = $_POST["password"];

    $mysql_qry = "select * from new_user where Phone_Number like '$name' and Password like '$password'";
    $result = mysqli_query ($conn, $mysql_qry);
    if(mysqli_num_rows($result)>0){
        echo 	"
        <script>
        window.location.href = 'start.php';
        </script>
        ";
    } else {
        //echo "Error: " . $mysql_qry . "</br>" . $conn->error;
        echo "Unsuccessful";
    }