<?php
session_start();
unset($_SESSION['rol']);
header('Location:login.php');
?>