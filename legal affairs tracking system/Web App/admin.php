<?php
$conn=mysqli_connect("localhost","root","","db");
$sql="select *from comment order by order_id desc";
$data=mysqli_query($conn,$sql);

if(isset($_POST['ignore'])){
	$id=$_POST['id'];
	$sqll="delete from comment where id='$id'";
	$run=mysqli_query($conn,$sqll);
	if($run){
	echo '<script type="text/javascript">';
    	   	  	   echo 'alert("You Successfully Deleted The Comment");';
    	   	  	   echo 'window.location.href="admin.php"';
    	   	  	   echo '</script>';
	
}
	else{
		echo '<script type="text/javascript">';
    	   	  	   echo 'alert("You Entered Wrong Caes Id");';
    	   	  	   echo 'window.location.href="admin.php"';
    	   	  	   echo '</script>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="tracked.css">
	     
</head>
<body>
	<input type="checkbox" id="delet">
  <label for="delet" class="show_btn">D</label>
	<div class="container">
   
    <label for="delet" class="close_btn" title="close">&times;</label>
     <h1>Delete Case</h1>
    <form class="delete" action="admin.php" method="post">
      <input type="password" name="id" placeholder="Enter Case Id" required="">
      <button name="ignore" type="submit"> Delete</button>
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
    <div class="content">
    <div class="content_left">
    		<a href="admin_log_out.php">log out</a>
    		
    		 <table>
        <tr>
          <th class="th">Comment Id</th>
          <th class="th">Catagory</th>
          <th class="tth">Comment Description</th>
          <th class="th">Actions</th>
           </tr>
           <?php
		if($data->num_rows >0){
			?>
			<h1><strong>Avialable Feedback</strong></h1>
			<?php
			while($row=$data->fetch_assoc()){
				?>	
              <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['catagory'];?></td>
                  <td class="action"><?php echo $row['comment'];?></td>
                  
         
		  <?php }
		   ?>
		<td class="Action">
			
  <input type="checkbox" id="delet">
  <label for="delet" class="show_btn">Delete</label>

            </tr>
                   
                    <?php

		}

                 else{
                 echo'<h1 class="no"><strong>No Avialable Feedback</strong></h1>';
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