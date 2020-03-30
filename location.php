<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user' ]) ) {
 header("Location: index.php");
 exit;
}
// select logged-in users details
$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);

$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
if($_GET["id"]){
	$id=$_GET["id"];
	$sql="SELECT * FROM animal WHERE animal_id=$id";
	$result= mysqli_query($conn,$sql);
	$row= $result->fetch_assoc();
	$row= json_encode($row,true);
	echo'<div id="data">'.$row.'</div>';
}
class loc{
private $id;
private $lat;
private $lng;
function setid($id){$this->id=$id;}
function setlet($let){$this->let=$let;}
function setlng($lng){$this->lng=$lng;}
function getid(){return $this->id;}
function getlet(){return $this->let;}
function getlng(){return $this->lng;}
public function updatelocwith(){
	$sql1="UPDATE animal SET lat=$this->lat,lng=$this->lng WHERE animal_id=$this->id";
	$result1= mysqli_query($conn,$sql1);
	$row1= $result1->fetch_assoc();
}

}
 ?>
 <html>
 <head>
        <title>Simple Google Map</title>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        <script src="location.js" type="text/javascript" ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
         #map {
           height: 90%;}
#data{
	display: none;
}

         html, body {
           height: 100%;
           margin: 0;
           padding: 0;}
        </style>
 </head>
 <body>
        <div id="map"></div>
        <div><?php  ?></div>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap"
        async defer></script>
 </body>
</html>