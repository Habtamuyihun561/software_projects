<?php
session_start();
$conn=mysqli_connect("localhost","root","","db");
if (isset($_POST['register'])) {
		$id=$_POST['id'];
		$name=$_POST['title'];
		$date=$_POST['date'];
		$place=$_POST['place'];
		$acuser=$_POST['acuser'];
		$clinetent=$_POST['clientent'];
		$case_status=$_POST['case_status'];
		$body=$_POST['body'];
		$sql="insert into crime_register values (1,'$id','$name','$date','$acuser','$clinetent','$place','$case_status','$body')";
		$run=mysqli_query($conn,$sql);
		if($run){
			echo '<script type="text/javascript">';
    	   	  	   echo 'alert("Registeration Successfullly");';
    	   	  	   echo 'window.location.href="register_crime.php"';
    	   	  	   echo '</script>';
		}
		else{
			echo '<script type="text/javascript">';
    	   	  	   echo 'alert("Registeration Failed");';
    	   	  	   echo 'window.location.href="register_crime.php"';
    	   	  	   echo '</script>';
		}
			}
			


if (isset($_POST['edit'])) {
		$id=$_POST['id'];
		$name=$_POST['title'];
		$date=$_POST['date'];
		$place=$_POST['place'];
		$acuser=$_POST['acuser'];
		$clinetent=$_POST['clientent'];
		$case_status=$_POST['case_status'];
		$body=$_POST['body'];
		$sql="update crime_register set case_name='$name', case_date='$date', acuser='$acuser', clientent='$clinetent', place='$place', case_status='$case_status', case_description='$body' where case_id='$id'";
		$run=mysqli_query($conn,$sql);
			if($run){
			echo '<script type="text/javascript">';
    	   	  	   echo 'alert("Update Successfullly");';
    	   	  	   echo 'window.location.href="register_crime.php"';
    	   	  	   echo '</script>';
		}
		else{
			echo '<script type="text/javascript">';
    	   	  	   echo 'alert("Update Failed");';
    	   	  	   echo 'window.location.href="register_crime.php"';
    	   	  	   echo '</script>';
		}
			}
			if(isset($_POST['email'])){

				$fromm=$_POST['from'];
				$to=$_POST['to_mail'];
				$subject=$_POST['subject'];
				$message=$_POST['message'];
				$header="From: ".$fromm."\r\n";
				$header.="Replay0-To:".$fromm."\r\n";
				$header="Content-type:text/html\r\n";
				if(mail($to, $subject, $message,$header)){
					echo "sent successfully";
				}
				else
					echo 'faild';

			}
			
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>This Is Register Page</title>
	<link rel="stylesheet" type="text/css" href="tracked.css">
</head>
<body>
	<input type="checkbox" id="delet">
  <label for="delet" class="show_btn">D</label>
	<div class="container">
   
    <label for="delet" class="close_btn" title="close">&times;</label>
     <h1>Send Mail To User</h1>
    <form class="delete" action="register_crime.php" method="post">
    	 <input type="email" name="from" placeholder="Enter Email Of Sender" required="">
       <input type="email" name="to_mail" placeholder="Enter Email Of Reciver User" required="">
        <input type="text" name="subject" placeholder="Enter The Subject Of Mail" required="">
      <textarea name="message" placeholder="Enter The Message Content"></textarea>
      <button name="email" type="submit"> Send</button>
    </form>
  </div>
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
				<li><a href="#"><b>Avialable Cases</b></a>
					<div class="dropdown">
						<ul>
							<li><a href="avialable_crime.php">Crime</a></li>
						</ul>
						<ul>
							<li><a href="avialable_consulancy.php">Consulancy</a></li>
						</ul>
						<ul>
							<li><a href="avialable_displine.php">Displine</a></li>
						</ul>
						<ul>
							<li class="me"><a href="#">Civil Cases</a>
							<div class="secondDrop">
                     <ul>
                     	<li><a href="Avialable_H_resource.php">Human Resources</a></li>
                     	<li><a href="Avialable_other_civil.php">Other Civil Cases</a></li>
                     </ul>
                     </div></li>
						</ul>
					</div>
				
				</li>
				<li><a href="#"><b>Tracking Cases</b></a>
				<div class="dropdown">
						<ul>
							<li><a href="tracked.php">Crime</a></li>
						</ul>
						<ul>
							<li><a href="tracked_consulancy.php">Consulancy</a></li>
						</ul>
						<ul>
							<li><a href="tracked_displine.php">Displine</a></li>
						</ul>
						<ul>
							<li class="me"><a href="#">Civil Cases</a>
							<div class="secondDrop">
                     <ul>
                     	<li><a href="tracked_H.php">Human Resources</a></li>
                     	<li><a href="tracked_other.php">Other Civil Cases</a></li>
                     </ul>
                     </div></li>
						</ul>
					</div>
				</li>
				<li><a href="#"><b>Case Module</b></a>
				<div class="dropdown">
						<ul>
							<li><a href="crime_module.php">Crime</a></li>
						</ul>
						<ul>
							<li><a href="consulancy_module.php">Consulancy</a></li>
						</ul>
						<ul>
							<li><a href="displine_module.php">Displine</a></li>
						</ul>
						<ul>
							<li class="me"><a href="#">Civil Cases</a>
								<div class="secondDrop">
                     <ul>
                     	<li><a href="H_module.php">Human Resources</a></li>
                     	<li><a href="other_module.php">Other Civil Cases</a></li>
                     </ul>
                     </div>

							</li>
						</ul>
					</div>
				</li>
				<li><a href="admin_training.php"><b>Manage Serices</b></a></li>
				<li><a href="report.php"><b>Reports</b></a></li>
				<li><a href="#"><b>Documents</b></a>
           <div class="dropdown">
						<ul>
							<li><a href="document.php">Documents</a></li>
						</ul>
						<ul>
							<li class="me"><a href="#">Legislations</a>
							<div class="secondDrop">
                     <ul>
                     	<li><a href="law.php">Laws</a></li>
                     	<li><a href="institution.php">Institutions</a></li>
                     </ul>
                     </div>
              </li>
						</ul>
						</div>
				</li>
				<li><a href="index.php"><b>Back To Home</b></a></li>
				</ul>
		</div>
    </div>
    <div class="all">
    	<h1 style="text-align:center">Send Message To User To Acess His/Her Page After Regstration</h1>
    	<h2 style="color:blue; text-align: center; margin-top: 30px;">Click here......
	<input type="checkbox" id="delet">
  <label for="delet" class="show_btn">Send Mail</label></h2>
    	  <div class="form_area">

 		<form action="register_crime.php" method="post">
 			<h1><u>Register A New Criminal Case Here</u></h1>
 					
 			<input type="password" name="id" placeholder="Enter Case Id" required="">
 			<input type="text" name="title" placeholder="Enter Case Title" required="">
 			<input type="text" name="date" placeholder="Enter Case Date" required="">
 			<input type="text" name="place" placeholder="Enter Case Place" required="">
 			<input type="text" name="acuser" placeholder="Enter Acuser Name" required="">
 			<input type="text" name="clientent" placeholder="Enter Clientent Name" required="">			
 			<input type="text" name="case_status" placeholder="Enter Case Status" required="">				
 			<textarea name="body" placeholder="Enter Case Description" required="" rows="10" cols="50"></textarea>

            <button class="register" name="register" type="submit">REGISTER</button>
            <button class="edit" name="edit" type="submit">EDIT</button>
            
		</form>
 	
 	
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