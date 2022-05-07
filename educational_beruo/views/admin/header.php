<?php 

session_start();

if ($_SESSION['role'] != 'admin') {
	header("Location: ../index.php");
}



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Type" content="text/html" charset="iso-8859-1" />

	<title>Admin page |Amhara Education Beruo</title>

	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/formvalidation.css">

</head>
<body>
	
	<div class="header">
		<img src="../assets/img/header.jpg">
	</div>

	<div class="sub-header">
	<p >
		<img src="../assets/img/tp_pipe.gif" width="3" height="18" alt="" class="flt tp_pipe" /> <a href="index.php" class="flt tp_home">Home</a>
		<img src="../assets/img/tp_pipe.gif" width="3" height="18" alt="" class="flt tp_pipe" /> <a href="user_registration.php" class="flt tp_home">Add Users</a><img src="../assets/img/tp_pipe.gif" width="3" height="18" alt="" class="flt tp_pipe" /> 
		  <a href="userlist.php" class="flt tp_home">User List</a> <img src="../assets/img/tp_pipe.gif" width="3" height="18" alt="" class="flt tp_pipe" /> <a href="update_profile.php?id=<?php echo $_SESSION['id']; ?>" class="flt tp_home">Update Profile</a>  <img src="../assets/img/tp_pipe.gif" width="3" height="18" alt="" class="flt tp_pipe" /> <a href="../user/logout.php" class="flt tp_home">Logout</a> 

   </p>
</div>