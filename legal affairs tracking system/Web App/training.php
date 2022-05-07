<?php
$conn=mysqli_connect("localhost","root","","db");
$sql="select title,strat_date,end_date,body from training";
$run=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>This Is Training Page</title>
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
    		<h1>Training Given By Legal Affairs</h1>
    		
    		 <table>
        <tr>
          
          <th class="th">Title</th>
          <th class="th">Start Date</th>
          <th class="th">End Date</th>
          <th class="tth">Training Description</th>
         
           </tr>
           <?php
		if($run->num_rows >0){
			while($row=$run->fetch_assoc()){
				?>	
              <tr>
                
                  <td><?php echo $row['title'];?></td>
                  <td><?php echo $row['strat_date'];?></td>
                  <td><?php echo $row['end_date'];?></td>
                  <td><?php echo $row['body'];?></td>
              </tr>
                
         
		  <?php }}

                 else{
                 echo'<h1 class="no"><strong>No Avialable Training</strong></h1>';
                 }
    		    ?>
    		</table>
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