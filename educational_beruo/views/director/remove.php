<?php 
try{
include_once '../../include/db_connect.php';
$valdate = array();
}catch(Exception $e){
	echo $errors = $e->getMessage();
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
	$id= $_GET['id'];

	$sql = "UPDATE students SET status=? WHERE sid='$id'";
  	$result = $db->prepare($sql);
  	$status = "Unactive";
  	$value = array($status);
  	$res = $result->execute($value);
	  if($res == true){

	  	header('location: director.php');
	  	
	  }
	  else{
	  	echo "<script> alert('Error');</script>";
	  }



}

?>