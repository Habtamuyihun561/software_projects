<?php 
try{
include_once '../../include/db_connect.php';
$valdate = array();
}catch(Exception $e){
	echo $errors = $e->getMessage();
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
	$id= $_GET['id'];

	$sql = "UPDATE students SET rstatus=? WHERE sid='$id'";
  	$result = $db->prepare($sql);
  	$status = "0";
  	$value = array($status);
  	$res = $result->execute($value);
	  if($res == true){

	 $sql = "DELETE FROM result WHERE student_id=?";
  	$result = $db->prepare($sql);
  	$value = array($id);
  	$res = $result->execute($value);
	header('location: unsetteld_list.php');
	  	
	  }
	  else{
	  	echo "<script> alert('Error');</script>";
	  }



}

?>