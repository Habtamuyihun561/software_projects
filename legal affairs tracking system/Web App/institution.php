<?php

$conn=mysqli_connect("localhost","root","","db");

if(isset($_POST['upload'])){
	$filename=$_FILES['file']['name'];
	$destination='uploads/'.$filename;
	$extension=pathinfo($filename,PATHINFO_EXTENSION);
	$file=$_FILES['file']['tmp_name'];
	$size=$_FILES['file']['size'];
	
		if(move_uploaded_file($file, $destination)){
			$sq="insert into files(file_name,size,download,status) values('$filename.','$size',0,17)";
			$ru=mysqli_query($conn,$sq);
			if($ru){
				echo "file is uploaded";
		}
		else
		echo "file is not uploaded";
		}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Report Page</title>
	<link rel="stylesheet" type="text/css" href="tracked.css">
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
    		<h3>Institutions Of Legal Tracking Affairs </h3>
    		<div class="fileform">
    			<h1>Upload Your File</h1>
    		<form action="institution.php" method="post" enctype="multipart/form-data">
    			    
              <input type="file" name="file" placeholder="Choose File" required="">
              <button type="submit" name="upload">Upload</button>
              </form>
              </div>
              <?php
               $sqll="select *from files where status=17";
            $rung=mysqli_query($conn,$sqll);

            ?>
            <table>
            	<tr>
            		<th>File Name</th>
            		<th>Size</th>
            		<th>Number Of Downloads</th>
            		<th>Action</th>
            	</tr>
            	<?php
            	while($rowv=$rung->fetch_assoc()){
            	?>
            	<tr>
            	<td><?php echo $rowv['file_name']?></td>
            		<td><?php echo $rowv['size']?> byte</td>
            			<td><?php echo $rowv['download']?></td>
            			<td><a href="report.php?file_id=<?php echo $rowv['id']?>">Downlad</a></td>
            		</tr>
            	<?php

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