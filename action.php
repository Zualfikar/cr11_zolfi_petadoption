<?php 


require_once 'dbconnect.php';



echo $_REQUEST;
if($_REQUEST) {

	$id=$_REQUEST['id'];
$lat=$_REQUEST['lat'];
$lng=$_REQUEST['lng'];

	$sql1="UPDATE animal SET lat=$lat,lng=$lng WHERE animal_id=$id";
	$result1= mysqli_query($conn,$sql);
	$row1= $result->fetch_assoc();
	
}
 ?>