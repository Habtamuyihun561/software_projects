<?php
session_start();
$conn=mysqli_connect("localhost","root","","db");
 	 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>This Is User Login Page</title>
	<link rel="stylesheet" type="text/css" href="admin_login.css">
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
    
<h1 style="text-align:center ;">Welcome To Login Page </h1>
<h1 style="text-align:center ;margin-bottom: 30px;">You Can Login As Admin And As User To Do That First Select Your Role</h1>
   
  
    	<div class="box1">
		<img src="image2.jpg" alt="Image is here" width="100%"
		height="250px">
		<div class="formarea">
          <form action="#" method="post">
			 	<input type="text" placeholder="Enter Your Username" name="username">
			    <input type="password" placeholder="Enter Your Password" name="password">
                 <button type="submit" name="userlogin">Log In</button><br>
                 </form>
	    </div> 	
			      		 			     
			
			
		</div>

		</div>
	
   </div>
   <?php
    	   if(isset($_POST['userlogin'])){
    	   	  $username=$_POST['username'];
    	   	  $pass=$_POST['password'];
    	   	  $sql="select * from account where username='$username' and password='$pass' and role='user'";
    	   	   $sql1="select * from account where username='$username' and password='$pass' and role='admin'";
    	   	   $run2=mysqli_query($conn,$sql1);
    	   	  $count1=mysqli_fetch_array($run2);
    	   	  $run=mysqli_query($conn,$sql);
    	   	  $count=mysqli_fetch_array($run);
    	   	 if(is_array($count1)){
    	   	  	$_SESSION['rol']=$count1['role'];
    	   	  }
    	   	   else{
    	   	  	   echo '<script type="text/javascript">';
    	   	  	   echo 'alert("You Entered Invalid Requirement");';
    	   	  	   echo 'window.location.href="login.php"';
    	   	  	   echo '</script>';
    	   	  }
    	   	  if(is_array($count)){
    	   	  	 $_SESSION['username']=$count['username'];
    	   	  	 $_SESSION['role']=$count['role'];
    	   	  }
    	   	  else{
    	   	  	   echo '<script type="text/javascript">';
    	   	  	   echo 'alert("You Entered Invalid Password");';
    	   	  	   echo 'window.location.href="login.php"';
    	   	  	   echo '</script>';
    	   	  }
    	   }
    	   if(isset($_SESSION['role'])){
    	   	header("Location:user_page.php");
    	   }
    	    if(isset($_SESSION['rol'])){
    	   	header("Location:admin.php");
    	   }

    	?>
  
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