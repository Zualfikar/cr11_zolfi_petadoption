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

if($_GET["id"]){

	$id=$_GET["id"];
	$sql="DELETE  FROM animal WHERE animal_id=$id";

	if(mysqli_query($conn,$sql)){
		echo "deleted seccesfully<a href='admin.php'>back to the home</a>";
	}else{
		echo "error";
	}

}

ob_end_flush();
?>