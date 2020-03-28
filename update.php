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
	$sql="SELECT * FROM animal WHERE animal_id=$id";
	$result= mysqli_query($conn,$sql);
	$row= $result->fetch_assoc();
}
?>

<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link href="assets/css/style1.css" rel="stylesheet">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 

<div class="con">

 <!-- USING BOOTSTRAP 3.0.3 -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ZOOY</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav pull-right">
        <li class="active"><a href="admin.php">Home</a></li>
          <li><a  href="logout.php?logout">Sign Out</a></li>
        
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="card" style="">
  <img src="<?php echo $row['image'] ?>" width="400px"  class="card-img-top" alt="...">
  <div class="card-body">
  	<form action="a_update.php" method="post" >
  	<input type="hidden" name="animal_id" value="<?php echo $row['animal_id'] ?>">
    <h1 class="card-title"><input type="text" name="name" value="<?php echo $row['name'] ?>"></h1>
    <h3 class="card-title"><input type="text" name="age" value="<?php echo $row['age'] ?>"> years</h3>
    <p class="card-text"><input type="text" name="desciption" value="<?php echo $row['description'] ?>"></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Image : <input type="text" name="image" value="<?php echo $row['image'] ?>"></li>
    <li class="list-group-item">Website : <input type="text" name="website" value="<?php echo $row['website'] ?>"></li>
    <li class="list-group-item">Type : <input type="text" name="type" value="<?php echo $row['type'] ?>"></li>
    <li class="list-group-item">Date : <input type="text" name="animal_date" value="<?php echo $row['animal_date'] ?>"></li>
    <li class="list-group-item">Breed : <input type="text" name="breed" value="<?php echo $row['breed'] ?>"></li>
    <li class="list-group-item">Hobbies : <input type="text" name="hobbies" value="<?php echo $row['hobbies'] ?>"></li>
    <li class="list-group-item">Status : <input type="text" name="status" value="<?php echo $row['status'] ?>"></li>
     <li class="list-group-item">Country : <input type="text" name="location_name" value="<?php echo $row['location_name'] ?>"></li>
      <li class="list-group-item">City : <input type="text" name="city" value="<?php echo $row['city'] ?>"></li>
       <li class="list-group-item">Address : <input type="text" name="address" value="<?php echo $row['address'] ?>"></li>
        <li class="list-group-item">Zip_code : <input type="text" name="zip_code" value="<?php echo $row['zip_code'] ?>"></li>
         <li class="list-group-item">Image for location : <input type="text" name="image_location" value="<?php echo $row['image_location'] ?>"></li>
  </ul>
  <div class="card-body">
  	<button class="btn btn-dark">
    		<input type="submit"   ></button>

    </div>
</form>
  </div>
</div>
</div>
 </body>
 </html>
 <?php ob_end_flush(); ?>