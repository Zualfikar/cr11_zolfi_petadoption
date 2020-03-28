<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['admin' ]) && !isset($_SESSION['user' ]) ) {
 header("Location: index.php");
 exit;
}

if(isset($_SESSION['user' ])){
  header("Location: home.php");
}
// select logged-in users details
$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['admin']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);

if($_POST){
	$id=$_POST["animal_id"];
$name=$_POST["name"];
$age=$_POST["age"];
$zip_code=$_POST["zip_code"];
$type=$_POST["type"];
$description=$_POST["description"];
$image=$_POST["image"];
$animal_date=$_POST["animal_date"];
$breed=$_POST["breed"];
$website=$_POST["website"];
$location_name=$_POST["location_name"];
$hobbies=$_POST["hobbies"];
 $address=$_POST["address"];
 $city=$_POST["city"];
 $status=$_POST["status"];
 $image_location=$_POST["image_location"];

  $sql="UPDATE `animal` SET `name`='$name',`age`='$age',`image`='$image',`zip_code`='$zip_code',`description`='$description',`type`='$type',`animal_date`='$animal_date',`status`='$status',`breed`='$breed',`website`='$website',`image_location`='$image_location',`address`='$address',`city`='$city',`location_name`='$location_name',`hobbies`='$hobbies' WHERE animal_id=$id";
 if(mysqli_query($conn,$sql)){
echo "Thx admin to update  <br><a href='admin.php'>Go back to home</a>";
 }else{
 	echo "error";
 }
}
ob_end_flush(); 
 ?>
