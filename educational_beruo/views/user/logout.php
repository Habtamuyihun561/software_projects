<?php
session_start();
if (isset($_SESSION))
{
   		unset($_SESSION['role']);
      unset($_SESSION['id']);
      unset($_SESSION['full_name']);
      
      session_destroy();
    header("Location: ../index.php");
}
else {
	echo "<div class='main'><br />" ."You cannot log out because you are not logged in";
}

?>