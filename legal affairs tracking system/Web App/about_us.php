<?php
$conn=mysqli_connect("localhost","root","","db");
$sql="select *from about_us";
$data=mysqli_query($conn,$sql);
$row=$data->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>This Is About us Page</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div class="wraper">
	<div class="header">
		<div class="logo">
			<div class="logo_left">
				<img src="logo1.jpg" alt="Image Should Available Here" width="150" height="150">
			</div>
			<div class="logo_right">
				<img src="logo1.jpg" alt="Image Should Available Here" width="150" height="150">
			</div>
			<h1>Legal Afairs Tracking</h1>
		</div>
		<div class="navigator">
			<ul>
				<li><a href="index.php"><b>Home</b></a></li>
				<li><a href="training.php"><b>Training</b></a></li>
				<li><a href="about_us.php"><b>About Us</b></a></li>
				<li><a href="contact_us.php"><b>Contact Us</b></a></li>
				<li><a href="login.php"><b>Login</b></a></li>
				
			</ul>
		</div>
    </div>
    <div class="content">
    	<div class="content_left">
    		<h1>Information About us</h1>
    	
    		  <h1>Mission</h1>
    		  <p><?php echo $row['mission'];?></p>
    		  <h1>Vission</h1>
    		  <p> <?php echo $row['vission'];?></p>
    		  <h1>Background</h1>
    		  <p> <?php echo $row['background'];?></p>
    		 
    	
    	</div>
    	
    </div>
    <div class="footer">
    	<div class="left">
    		<p> A computer system is a "complete" computer that includes the hardware, operating system (main software), and peripheral equipment needed and used for "full" operation. This term may also refer to a group of computers that are linked and function together, such as a computer network or computer cluster.</p>
    	</div>
    	<div class="center">
    		<p> A computer system is a "complete" computer that includes the hardware, operating system (main software), and peripheral equipment needed and used for "full" operation. This term may also refer to a group of computers that are linked and function together, such as a computer network or computer cluster.</p>
    	</div>
    	<div class="right">
    		<p> A computer system is a "complete" computer that includes the hardware, operating system (main software), and peripheral equipment needed and used for "full" operation. This term may also refer to a group of computers that are linked and function together, such as a computer network or computer cluster.</p>
    	</div>
    </div>
</div>
</body>
</html>