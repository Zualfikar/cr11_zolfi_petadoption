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
 
  $sql="INSERT INTO animal (name,age,type,description,image,animal_date,breed,website,hobbies,location_name,address,city,image_location,zip_code,status) VALUES ('$name','$age','$type','$description','$image','$animal_date','$breed','$website','$hobbies','$location_name','$address','$city','$image_location','$zip_code','$status')";
  // $sql2="INSERT INTO location (location_name,address,city,image_location,zip_code) VALUES ('$location_name','$address','$city','$image_location','$zip_code')";
  
  if(mysqli_query($conn,$sql) ){
  	echo "THX Admin to ADD animals<br>
     <a href='admin.php'>back to the home</a>";
  }else{
  	echo "maybe you made some misstake";
  }

}

ob_end_flush();
?>