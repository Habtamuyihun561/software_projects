<?php 
$con=mysqli_connect("localhost","root","","phptpoint_ci") or die(mysqli_error());

extract($_POST);

if($name!="" && $email!="" && $course!="")
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$course = $_POST['course'];
	$query=mysqli_query($con,"insert into student(name,email,course) values('$name','$email','$course')");
	if($query)
	{
	echo 1;	
	}
	else
	{
	echo 0;	
	}
}
?>