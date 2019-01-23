<?php
include "dbconnect2.php";
include "view_reports.php";

$num_plate = $_GET["id"];

$sql =mysqli_query($connection, "delete from public_reports where Number_Plate = '$num_plate'");

//$delete = mysqli_query($sql);
if($sql)
{
	header ('location: view_reports_public_admin.php');
} else
{
	echo "Failed to delete!!";
}

?>