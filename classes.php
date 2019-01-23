<?php

class sellers
{
 public $name, $email, $password, $gender, $phone, $location, $created, $updated,$Photo;
 

 //Constructor
 public function __construct($name, $email, $password, $gender, $phone, $location, $created, $updated,$Photo)
 {
	$this->name = $name;
	$this->email = $email;
	$this->password = $password;
	$this->gender = $gender;
	$this->phone = $phone;
	$this->location = $location;
	$this->created = $created;
	$this->updated = $updated;
	$this->Photo = $Photo;
 }

 public function create()
 {
	require_once "connection.php";

	$name = $this->name;
	$email = $this->email;
	$password = $this->password;
	$gender = $this->gender;
	$phone = $this->phone;
	$location = $this->location;
	$created = $this->created;
	$updated = $this->updated;
	$Photo = $this->Photo;

	if($name!="" && $email!="" && $password!="" && $gender!="" && $phone!="")
	{
		$action = mysqli_query($connect,"INSERT INTO sellers(name,email,password,gender,phone,location,created,updated,photo) VALUES('$name','$email','$password','$gender','$phone','$location','$created','$updated','$Photo')");
	}

	if($action)
	{
		return true;
	}
	else
	return false;
 }



 public function uploadprofilePhoto($id,$image)
 {
   
 }

 public function edit($Name,$phone,$location)
 {
	$connect = mysqli_connect("localhost","root", "");
	mysqli_select_db($connect,"verto");

 }

 public function deleteAccount($id)
 {

 }

 public function proposeTrade($id, $itemName, $offer)
 {

 }

 public function viewmyHistory($id)
 {

 }

 public function Review($id,$reviewPoint)
 {
	//There should another table for review
	//First MAKE sure isset

	//Second make sure you cant review yourself
 }

public function Login($username,$pass)
{

}

public function completeTransaction($itemid)
{

}



}

class items
{
	public $name,$image,$desc,$price,$tags;

	public function __construct($name,$image,$desc,$price,$tags)
	{
		$this->name = $name;
		$this->image = $image;
		$this->desc = $desc;
		$this->price = $price;
		$this->tags = $tags;

	}

	public function newItem()
	{
		$connect = mysqli_connect("localhost","root", "");
		mysqli_select_db($connect,"verto");

		$name = $this->name;
		$image = $this->image;
		$desc = $this->desc;
		$price = $this->price;
		$tags = $this->tags;

		if(isset($_SESSION['id']))
			$uploader = $_SESSION['id'];
			$currentDate = date("Y/m/d");
		$action = mysqli_query($connect, "INSERT INTO items(name,image,description,price,istatus,uploader,created,updated,tags) VALUES('$name','$image','$desc','$price','0','$uploader','$currentDate','$currentDate','$tags')");

		if($action)
			return true;
		else
			return false;
	}

	public function searchItems($id,$filter)
	{
		$connect = mysqli_connect("localhost","root", "");
		mysqli_select_db($connect,"verto");

		session_start();
		if(isset($_SESSION['name'])){
		$action = mysqli_query($connect, "SELECT * FROM items WHERE name='$filter' AND id!='$Id'");

		if($action)
			return true;
		else
			return false;
		}
	}

	public function editmyItem($desc,$value,$tag,$image)
	{

	}

	public function deleteItem($id)
	{
		$connect = mysqli_connect("localhost","root", "");
		mysqli_select_db($connect,"verto");

		session_start();
		if(isset($_SESSION['name'])){
		$action = mysqli_query($connect, "DELETE FROM items WHERE id='$id'");

		if($action)
			return true;
		else
			return false;
		}
	}

	public function predictTransact($userId)
	{
		//Create a list of all items that hav been requested or complted's tags
		//From that item list find the one with the highest occurence and make it ppriority one and so on
		//On home page suggest them according to latest. Putting the most importants first
		//Only three tags
	}
}

?>