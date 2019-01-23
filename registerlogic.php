<?php
include("classes.php");
$target = "images/".basename($_FILES['image']['name']);
$fname=$_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['uname'];
$password = $_POST['pass'];
$repass = $_POST['repass'];

$shapass = sha1($password);

if($password==$repass)
{
    $image = $_FILES['image']['name'];
    $foo = new sellers($name, $email, $shapass, $gender, $phone, $location,date("Y/m/d"), date("Y/m/d"),$image);
    $action = $foo->create();
}
if($action){
//Check if image is uploaded
if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
header('location:login.php');
}
else
header('location:register.php');
?>