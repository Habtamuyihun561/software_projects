<div class="home">
    			<h3> To Log Out Click Here  </h3><a href="admin_log_out.php"><b>Log Out</b></a>
    			<h1>Dear Admin Welcome Back</h1>
    			<h1>You Have The Following Tasks Bellow</h1>
    		<div class="admin_box">
    			<h2>You Have <?php
    		$sql="SELECT COUNT(*) FROM `crime_register`";
    		$run=mysqli_query($conn,$sql);
    		$count=mysqli_num_rows($run);
    		echo $count;
    		?> Cases Under Crime Catagory Totally</h2>
    		<h2>You Have <?php
    		$sql="SELECT COUNT(*) FROM `crime_register` WHERE status=1";
    		$run=mysqli_query($conn,$sql);
    		$count=mysqli_num_rows($run);
    		echo $count;
    		?> Cases Under Crime Catagory In The Avilable Cases</h2>
    			<h2>You Have <?php
    		$sql="SELECT COUNT(*) FROM `crime_register` WHERE status=2";
    		$run=mysqli_query($conn,$sql);
    		$count=mysqli_num_rows($run);
    		echo $count;
    		?> Cases Under Crime Catagory Currently You Tracking In The Tracking Cases</h2>
    			<h2>You Have <?php
    		$sql="SELECT COUNT(*) FROM `crime_register` WHERE status=3";
    		$run=mysqli_query($conn,$sql);
    		$count=mysqli_num_rows($run);
    		echo $count;
    		?> Cases Under Crime Catagory Those Are Closed In The Module</h2>
    			
    		</div>

    		<div class="admin_box">
    			<h2>You Have <?php
    		$sql="SELECT COUNT(*) FROM consulancy";
    		$run=mysqli_query($conn,$sql);
    		$count=mysqli_num_rows($run);
    		echo $count;
    		?> Cases Under Consulancy Catagory Totally</h2>
    		<h2>You Have <?php
    		$sql="SELECT COUNT(*) FROM consulancy WHERE status=1";
    		$run=mysqli_query($conn,$sql);
    		$count=mysqli_num_rows($run);
    		echo $count;
    		?> Cases Under Consulancy Catagory In The Tracking Cases</h2>
    			<h2>You Have <?php
    		$sql="select count(*) from consulancy where status=2";
    		$run=mysqli_query($conn,$sql);
    		$count=mysqli_num_rows($run);
    		echo $count;
    		?> Cases Under Consulancy Catagory Currently You Tracking In The Tracking Cases</h2>
    			<h2>You Have <?php
    		$sql="select count(*) from consulancy where status=3";
    		$run=mysqli_query($conn,$sql);
    		$count=mysqli_num_rows($run);
    		echo $count;
    		?> Cases Under Consulancy Catagory Those Are Closed In The Module</h2>
    			
    		</div>
    		<div class="admin_box">
    			<h2>You Have <?php
    		$sql="select count(*) from descipline";
    		$run=mysqli_query($conn,$sql);
    		$count=mysqli_num_rows($run);
    		echo $count;
    		?> Cases Under Descipline Catagory Totally</h2>
    		<h2>You Have <?php
    		$sql="SELECT COUNT(*) FROM descipline WHERE status=1";
    		$run=mysqli_query($conn,$sql);
    		$count=mysqli_num_rows($run);
    		echo $count;
    		?> Cases Under Descipline Catagory In The Tracking Cases</h2>
    			<h2>You Have <?php
    		$sql="select count(*) from descipline where status=2";
    		$run=mysqli_query($conn,$sql);
    		$count=mysqli_num_rows($run);
    		echo $count;
    		?> Cases Under Descipline Catagory Currently You Tracking In The Module</h2>
    			<h2>You Have <?php
    		$sql="select count(*) from descipline where status=3";
    		$run=mysqli_query($conn,$sql);
    		$count=mysqli_num_rows($run);
    		echo $count;
    		?> Cases Under Descipline Catagory Those Are Closed In SThe Module</h2>
    			</div>
    		<div class="admin_box">	
    			<h2>You Released <?php
    		$sql="select count(*) from training";
    		$run=mysqli_query($conn,$sql);
    		$count=mysqli_num_rows($run);
    		echo $count;
    		?> Training  Services Totally</h2>
    			<h2>You Have <?php
    		$sql="select count(*) from comment";
    		$run=mysqli_query($conn,$sql);
    		$count=mysqli_num_rows($run);
    		echo $count;
    		?> Feedback From Users</h2>
    		</div>
    		

    		</div>