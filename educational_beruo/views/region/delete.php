<?php 
try{
include_once '../../include/db_connect.php';
$valdate = array();
}catch(Exception $e){
	echo $errors = $e->getMessage();
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
	$id= $_GET['id'];

	$sql = "DELETE FROM schedule  WHERE idsc=?";
  	$result = $db->prepare($sql);
  	$value = array($id);
  	$res = $result->execute($value);
	  if($res == true){

	  	header('location: schedule_list.php');
	  	
	  }
	  else{
	  	echo "<script> alert('Error');</script>";
	  }



}

?>