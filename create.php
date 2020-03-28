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
        <li class="active"><a href="admin.php">Back to Home</a></li>
          <li><a  href="logout.php?logout">Sign Out</a></li>
      
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<div class="card" style="">
  <img src="https://cdn.pixabay.com/photo/2015/11/16/14/43/cat-1045782__340.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <form action="a_create.php" method="post" >
      

    <h2 class="card-title">Name :<input type="text" name="title"></h2>
    <h3 class="card-title">Age :<input type="text" name="age" ></h3>
    <h4 class="card-title">breed :<input type="text" name="breed" ></h4>

    <p class="card-text">Description :<input  type="text" name="description"></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Type :<input list="type" name="type">

<datalist id="type">
  <option value="small">
  <option value="larg">
  <option value="senior">
  
</datalist></li>
    <li class="list-group-item">Image :<input type="text" name="image"></li>
    <li class="list-group-item">Website : <input type="text" name="website"></li>
    <li class="list-group-item">Date : <input type="date" name="animal_date"></li>
    <li class="list-group-item">Hobbies : <input type="text" name="hobbies" ></li>
    <li class="list-group-item">Country : <input type="text" name="location_name"></li>
    <li class="list-group-item">Address : <input type="text" name="address"></li>
    <li class="list-group-item">City : <input type="text" name="city">
      <li class="list-group-item">Zip_code : <input type="text" name="zip_code">
<li class="list-group-item">Image for location :<input type="text" name="image_location"></li>
    </li>
  </ul>

  <div class="card-body">
    
      <button class="btn btn-dark">
        <input type="submit" text="update"  ></button>
    <a href="create.php" class=""><button type="button" class="btn btn-info">Remove</button></a>

</form>
    
  </div>
</div>
</body>
</html>
<?php ob_end_flush(); ?>