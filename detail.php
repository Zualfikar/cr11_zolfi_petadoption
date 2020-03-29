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
        <li class="active"><a href="home.php">Home</a></li>
          <li><a  href="logout.php?logout">Sign Out</a></li>
        
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="card" style="">
  <img src="<?php echo $row['image'] ?>" width="400px"  class="card-img-top" alt="...">
  <div class="card-body">
    <h1 class="card-title"><?php echo $row['name'] ?></h1>
    <h3 class="card-title"><?php echo $row['age'] ?> years</h3>
    <p class="card-text"><?php echo $row['description'] ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Type : <?php echo $row['type'] ?></li>
    <li class="list-group-item">Date : <?php echo $row['animal_date'] ?></li>
    <li class="list-group-item">Breed : <?php echo $row['breed'] ?></li>
    <li class="list-group-item">Hobbies : <?php echo $row['hobbies'] ?></li>
    <li class="list-group-item">Status : <?php echo $row['status'] ?></li>
  </ul>
  <div class="card-body">
<a href="adopt.php?id=<?php echo $row['animal_id'] ?>" class=""><button type="button" class="btn btn-info">Adopting</button></a>
<a href="location.php?id=<?php echo $row['animal_id'] ?>" class=""><button type="button" class="btn btn-info">location</button></a>
    
  </div>
</div>
</div>
 </body>
 </html>
 <?php ob_end_flush(); ?>