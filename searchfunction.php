<?php

require_once 'dbconnect.php';

 $search = $_POST['search'];
 $sql = "SELECT * From animal WHERE `breed` LIKE '%$search%' OR `city` LIKE '%$search%' OR `location_name` LIKE '%$search%'";
 $result = $conn-> query($sql);
 
 $result=mysqli_query($conn,$sql);
if ($result->num_rows == 0){
  echo "no animal matching";
}elseif ($result->num_rows == 1) {
  $row=$result->fetch_assoc();
  if($row["type"]=="small"){
    echo '<div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="'.$row["image"].'" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>'.$row["name"].'</h4>
                <p>'.$row["age"].' years</p>
                <div class="portfolio-links">
                  <a href="'.$row["image"].'" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                  <a href="detail.php?id='.$row["animal_id"].'" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>';}elseif ($row["type"]=="larg") {
            echo '<div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="'.$row["image"].'" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>'.$row["name"].'</h4>
                <p>'.$row["age"].' years</p>
                <div class="portfolio-links">
                  <a href="'.$row["image"].'" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                  <a href="detail.php?id='.$row["animal_id"].'" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>';}else{
            echo '<div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="'.$row["image"].'" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>'.$row["name"].'</h4>
                <p>'.$row["age"].' years</p>
                <div class="portfolio-links">
                  <a href="'.$row["image"].'" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                  <a href="detail.php?id='.$row["animal_id"].'" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>';}
}else{
  $rows= $result->fetch_all(MYSQLI_ASSOC);
 foreach($rows as $key => $value){
    if($value["type"]=="small"){
    echo '<div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="'.$value["image"].'" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>'.$value["name"].'</h4>
                <p>'.$value["age"].' years</p>
                <div class="portfolio-links">
                  <a href="'.$value["image"].'" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                  <a href="detail.php?id='.$value["animal_id"].'" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>';}elseif ($value["type"]=="larg") {
            echo '<div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="'.$value["image"].'" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>'.$value["name"].'</h4>
                <p>'.$value["age"].' years</p>
                <div class="portfolio-links">
                  <a href="'.$value["image"].'" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                  <a href="detail.php?id='.$value["animal_id"].'" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>';}else{
            echo '<div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="'.$value["image"].'" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>'.$value["name"].'</h4>
                <p>'.$value["age"].' years</p>
                <div class="portfolio-links">
                  <a href="'.$value["image"].'" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                  <a href="detail.php?id='.$value["animal_id"].'" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>';}}
echo '</div></div></div>';}
 
$conn->close();
 ?>