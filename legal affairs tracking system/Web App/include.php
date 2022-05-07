<?php
$conn=mysqli_connect("localhost","root","","db");
 if(isset($_GET['file_id'])){
            	$id=$_GET['file_id'];
            	$sql="select * from files where id='$id'";
            	$run=mysqli_query($conn,$sql);
            	$file=mysqli_fetch_array($run);
            	$filepath='uploads/'.$file['file_name'];
            	if(file_exists($filepath
            	)){
            		header('Content-Type:application/octet-stream');
            		header('Content-Description:File Transfer');
            		header('Content-Disposition: attachment; filename='.basename($filepath));
            		header('Expires:0');
            		header('Cache-Control:must-revalidate');
            		header('Pragma:public');
            		header('Content-Length:'.filesize('uploads/'.$file['file_name']));
            		readfile('uploads/'.$file['file_name']);
            		$count=$file['download']+1;
            		$sql2="update files set download='$count' where id='$id'";
            		$run2=mysqli_query($conn,$sql2);
            		
            	}
            }
?>