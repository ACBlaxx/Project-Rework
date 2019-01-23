<?php
include "dbconnect2.php";
include "view_persons.php";

$ID_No = $_GET["id"];

$sql = mysqli_query ($connection, "DELETE FROM persons where ID_No = '$ID_No'");
//$delete = mysqli_query($sql);
if($sql)
{
	header ('location: view_persons.php');
} else
{
	echo "Failed to delete";
}

?>