<?php
 $con = 'mysql:host=localhost;dbname=educational_buero';
 $db = new PDO($con, 'root', '');//user your own db password
 $db->exec("set names utf8");
 
?>