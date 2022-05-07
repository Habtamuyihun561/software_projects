<?php
$conn=mysqli_connect("localhost","root","","db");
$sql="select *from training";
$data=mysqli_query($conn,$sql);
if (isset($_POST['ignore'])) {
	$conn=mysqli_connect("localhost","root","","db");
	$id=$_POST['id'];
	$sql="delete from training where id='$id'";
	$run=mysqli_query($conn,$sql);
	if($run){
	echo '<script type="text/javascript">';
    	   	  	   echo 'alert("You Successfully Deleted");';
    	   	  	   echo 'window.location.href="admin_training.php"';
    	   	  	   echo '</script>';
    	   	  	 }
	
}

   if(isset($_POST['tpost'])){
   	 $id=$_POST['tid'];
   	 $title=$_POST['ttitle'];
   	 $start_date=$_POST['sdate'];
   	 $end_date=$_POST['edate'];
   	 $body=$_POST['tbody'];
   	 $sql="insert into training values('$id','$title','$start_date','$end_date','$body')";
   	 $run=mysqli_query($conn,$sql);
   	 if($run){
   	 	echo '<script type="text/javascript">';
    	   	  	   echo 'alert("You Successfully Post ");';
    	   	  	   echo 'window.location.href="admin_training.php"';
    	   	  	   echo '</script>';
   	 }
   }
   if (isset($_POST['apost'])) {
   	$mission=$_POST['abody1'];
   	$vission=$_POST['abody2'];
   	$background=$_POST['abody3'];
   	$sql="update about_us set mission='$mission',vission='$vission',background='$background' where 1";
   	$run=mysqli_query($conn,$sql);
   	 if($run){
   	 	echo '<script type="text/javascript">';
    	   	  	   echo 'alert("You Successfully Post ");';
    	   	  	   echo 'window.location.href="admin_training.php"';
    	   	  	   echo '</script>';
   	 }
   	
   }
   if(isset($_POST['contact'])){
   	 $email=$_POST['email'];
   	 $phone=$_POST['phone'];
   	 $office=$_POST['office'];
   	 $other=$_POST['other'];
   	
   	 $sql="update contact_us set email='$email', phone='$phone',office='$office',other='$other' where 1";
   	 $run=mysqli_query($conn,$sql);
   	 if($run){
   	 	echo '<script type="text/javascript">';
    	   	  	   echo 'alert("You Successfully Post ");';
    	   	  	   echo 'window.location.href="admin_training.php"';
    	   	  	   echo '</script>';
   	 }
   }
  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>This Is Admin Training Page</title>
	<link rel="stylesheet" type="text/css" href="tracked.css">
</head>
<body>
	<input type="checkbox" id="delet">
  <label for="delet" class="show_btn">D</label>
	<div class="container">
   
    <label for="delet" class="close_btn" title="close">&times;</label>
     <h1>Delete Case</h1>
    <form class="delete" action="admin_training.php" method="post">
      <input type="password" name="id" placeholder="Enter Case Id" required="">
      <button name="ignore" type="submit"> Delete</button>
    </form>
  </div>
	
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
    <div class="content">
    	<div class="inline">
    	<div class="con_left">
    		<h1>Content For Training</h1>
    		<form action="admin_training.php" method="post">
    			<input type="text" name="tid" placeholder="Enter Training Id" required="">
    			<input type="text" name="ttitle" placeholder="Enter Training Title" required="">
    			<input type="text" name="sdate" placeholder="Enter Training Date" required="">
    			<input type="text" name="edate" placeholder="Enter Training Date" required="">
    			<textarea type="text" name="tbody" placeholder="Enter Training Description" required=""></textarea>
    			<button type="submit" name="tpost">Post</button>
    			
    		</form>
    		
    	</div>
    	<div class="con_center">
    		<h1>Content For About Us </h1>
    		<form action="admin_training.php" method="post">
    			<textarea type="text" name="abody1" placeholder="Enter Mission" required=""></textarea>
    			<textarea type="text" name="abody2" placeholder="Enter Vision" required=""></textarea>
    			<textarea type="text" name="abody3" placeholder="Enter Background" required=""></textarea>
    			<button type="submit" name="apost">Submit</button>
    			
    		</form>

    	</div>
    	<div class="con_right">
    		<h1>Content For Contact Us</h1>
    		<form action="admin_training.php" method="post">
    			<input type="text" name="email" placeholder="Enter Email" required="">
    			<input type="text" name="phone" placeholder="Enter Phone" required="">
    			<input type="text" name="office" placeholder="Enter Office Number" required="">
    			<textarea type="text" name="other" placeholder="Enter Other Contacts" required=""></textarea>
    			<button type="submit" name="contact">Submit</button>
    			</form>
    	</div>
    	</div>
    </div>

    <div class="training_list">
    	  <table>
        <tr>
          <th class="th">Training Id</th>
          <th class="th">Training Title</th>
          <th class="th">Start Date</th>
          <th class="th">End Date</th>        
          <th class="tth">Traiining Description</th>
          <th class="th">Actions</th>
           </tr>
           <?php
		if($data->num_rows >0){
			?>
			<h1>Avialable Training Lists</h1>
			<?php
			while($row=$data->fetch_assoc()){
				?>	
              <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['title'];?></td>
                  <td><?php echo $row['strat_date'];?></td>
                  <td><?php echo $row['end_date'];?></td>
                  <td class="action"><?php echo $row['body'];?></td>
                  
         
		  <?php }
?>

         <td class="Action"><input type="checkbox" id="delet">
  <label for="delet" class="show_btn">Delete</label></td>
                    </tr>
                    <?php
                
		}

                 else{
                 echo'<h1 class="no"><strong>No Avialable Training Here </strong></h1>';
                 }
    		    ?>
    		</table>
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

</body>
</html>