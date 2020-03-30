<?php 


require_once 'location.php';
$loca= new loc;
$loca->setid($_REQUEST['id']);
$loca->setlet($_REQUEST['let']);
$loca->setlng($_REQUEST['lng']);
$status=$loca->updatelocwith();
if($status==true){
	echo "update";

}else{
	echo "false";
}


 ?>