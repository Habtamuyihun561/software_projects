<?php
session_start();
try{
	include_once '../../include/db_connect.php';
	
	
}
catch(Exception $e)
{echo  $e->getMessage();}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	@$email = $_POST['username'];
	@$password = md5($_POST['password']);
	
	 
	$sql = "SELECT * FROM users, user  WHERE username='$email' AND password='$password' AND users.user_id=user.uid";
	$exequery = $db->query($sql);
	$result = array();
	
	if($exequery->rowCount() > 0){
 	$row = $exequery->fetch(PDO::FETCH_ASSOC);

 		$_SESSION['role'] = $row['role'];
 		$_SESSION['id'] = $row['uid'];
 		$_SESSION['full_name'] = $row['full_name'];
      if ($row['role'] == "admin") {
      	header("Location: ../admin/index.php");
      }
      if ($row['role'] == "director") {
      	header("Location: ../director/index.php");
      }
      if ($row['role'] == "student") {
      	header("Location: ../student/index.php");
      }
      if ($row['role'] == "werda") {
      	header("Location: ../werda_aff/index.php");
      }
      if ($row['role'] == "zone") {
      	header("Location: ../zone_aff/index.php");
      }
      if ($row['role'] == "regional") {
      	header("Location: ../region/index.php");
      }
  }

	else{
      	$result['success'] = "2";
      	$result['message'] = "Invalid username and password";
      	echo json_encode($result);
      }


}else{
		$result['success'] = "3";
      	$result['message'] = "Connection Error";
      	echo json_encode($result);
}
	
?>