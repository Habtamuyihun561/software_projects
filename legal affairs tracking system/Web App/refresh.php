<?php
   session_start();
   unset($_SESSION['catagory']);
	header('Location:admin.php');
?>