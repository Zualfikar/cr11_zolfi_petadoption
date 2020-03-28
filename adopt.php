<?php
require_once 'dbconnect.php' ; 
ob_start();
session_start();
if( !isset($_SESSION['user' ]) ) {
 header("Location: index.php");
 exit;
}

if($_GET["id"]){

	$id=$_GET["id"];
	$sql="UPDATE `animal` SET `status`='reserved' WHERE animal_id=$id  ";

	if(mysqli_query($conn,$sql)){
		echo "We will contact you to procces your adepting  <br><a href='home.php'>back to the home</a>";
	}else{
		echo "this item is reserved before";
	}

}
ob_end_flush(); 
 ?>