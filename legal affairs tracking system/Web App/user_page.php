<?php
session_start();
$conn=mysqli_connect("localhost","root","","db");
$username=$_SESSION['username'];

if (isset($_POST['send'])) {
	$comment=$_POST['comment'];
	$sqll="insert into comment(id,catagory,comment) values('$id','$type','$comment')";
	$run=mysqli_query($conn,$sqll);
	if($run){
		echo '<script type="text/javascript">';
    	   	  	   echo 'alert("You Send Your Feedback");';
    	   	  	   echo 'window.location.href="user_page.php"';
    	   	  	   echo '</script>';
	}
	else{
		echo '<script type="text/javascript">';
    	   	  	   echo 'alert(" Sending Your Comment is Failed");';
    	   	  	   echo 'window.location.href="user_page.php"';
    	   	  	   echo '</script>';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>This Is User Page</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<input type="checkbox" id="delet">
  <label for="delet" class="show_btn">D</label>
  <div class="container">
   
    <label for="delet" class="close_btn" title="close">&times;</label>
     <h1>Send Feedback</h1>
    <form class="delete" action="user_page.php" method="post">
      <textarea name="comment" placeholder="Enter Your Comment"></textarea>
      <button name="send" type="submit"> Send</button>
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
				<li><a href="index.php"><b>Home</b></a></li>
				<li><a href="training.php"><b>Training</b></a></li>
				<li><a href="about_us.php"><b>About Us</b></a></li>
				<li><a href="contact_us.php"><b>Contact Us</b></a></li>
				<li><a href="login_out.php"><b>Login Out</b></a></li>
			</ul>
		</div>
    </div>
    <div class="content">
    	<div class="content_left">

    		 <h1 style="background-color:burlywood;margin-bottom: 30px;width: 40%;margin-left: 30%;"><strong><u>Wellcome Back To Your Case Page</u></strong></h1>

        
         <h1 style="text-align:center;">Under Criminal Catagory</h1>
	            
        <table>
        <tr>
          <th class="th">Case Id</th>
          <th class="th">Case Title</th>
          <th class="th">Case Date</th>
          <th class="th">Case Place</th>
          <th class="th">Acuser</th>
          <th class="th">Clientent</th>
          <th class="th">Case Status</th>
          <th class="tth">Case Description</th>
          <td class="th">Action</td>
                    </tr>

                    <?php
        $sqlw="select * from crime_register where username='$username'";
        $data=mysqli_query($conn,$sqlw);
			     while ($row=$data->fetch_assoc()){
				?>	
              <tr>
                  <td><?php echo $row['case_id'];?></td>
                  <td><?php echo $row['case_name'];?></td>
                  <td><?php echo $row['case_date'];?></td>
                  <td><?php echo $row['place'];?></td>
                  <td><?php echo $row['acuser'];?></td>
                  <td><?php echo $row['clientent'];?></td>
                  <td><?php echo $row['case_status'];?></td>
                  <td class="action"><?php echo $row['case_description'];?></td>
                  <?php
                }
                ?>
                  <td class="Action"><input type="checkbox" id="delet">
  <label for="delet" class="show_btn">Send Feedback</label></td>
</tr>
            </table>    
         <h1 style="text-align:center;">Under Other Civil Catagory</h1>
		             
        <table>
        <tr>
          <th class="th">Case Id</th>
          <th class="th">Case Title</th>
          <th class="th">Case Date</th>
          <th class="th">Case Place</th>
          <th class="th">Acuser</th>
          <th class="th">Clientent</th>
          <th class="th">Case Status</th>
          <th class="tth">Case Description</th>
          <td class="th">Action</td>
                    </tr>

                    <?php
                    $sqlw="select * from other_civil where username='$username'";
                     $data=mysqli_query($conn,$sqlw);
           while($row=$data->fetch_assoc()){
			
				?>	
              <tr>
                  <td><?php echo $row['case_id'];?></td>
                  <td><?php echo $row['case_name'];?></td>
                  <td><?php echo $row['case_date'];?></td>
                  <td><?php echo $row['place'];?></td>
                  <td><?php echo $row['acuser'];?></td>
                  <td><?php echo $row['clientent'];?></td>
                  <td><?php echo $row['case_status'];?></td>
                  <td class="action"><?php echo $row['case_description'];?></td>
                  <?php
                }
                ?>
                  <td class="Action"><input type="checkbox" id="delet">
  <label for="delet" class="show_btn">Send Feedback</label></td>
</tr>
            </table>    
           
<h1 style="text-align:center;">Under Human Resource Catagory</h1>
            
        <table>
        <tr>
          <th class="th">Case Id</th>
          <th class="th">Case Title</th>
          <th class="th">Case Date</th>
          <th class="th">Case Place</th>
          <th class="th">Acuser</th>
          <th class="th">Clientent</th>
          <th class="th">Case Status</th>
          <th class="tth">Case Description</th>
          <td class="th">Action</td>
                    </tr>

                    <?php
			
      $sqlw="select * from human_resource where username='$username'";
       $data=mysqli_query($conn,$sqlw);
           while($row=$data->fetch_assoc()){
				?>	
              <tr>
                  <td><?php echo $row['case_id'];?></td>
                  <td><?php echo $row['case_name'];?></td>
                  <td><?php echo $row['case_date'];?></td>
                  <td><?php echo $row['place'];?></td>
                  <td><?php echo $row['acuser'];?></td>
                  <td><?php echo $row['clientent'];?></td>
                  <td><?php echo $row['case_status'];?></td>
                  <td class="action"><?php echo $row['case_description'];?></td>
                  <?php
                }
                ?>
                  <td class="Action"><input type="checkbox" id="delet">
  <label for="delet" class="show_btn">Send Feedback</label></td>
</tr>
            </table>    
         <h1 style="text-align:center;">Under Descipline Catagory</h1>
		         <table>    
            <tr>
          <th class="th">Case Id</th>
          <th class="th">Case Title</th>
          <th class="th">Case Date</th>
          <th class="th">Acuser</th>
          <th class="th">Case Status</th>
          <th class="tth">Case Description</th>
          <th class="th">Action</th>
           </tr>
           <?php
        
    		        
                $sqlw="select * from descipline where username='$username'";

                $data=mysqli_query($conn,$sqlw);
           while($row=$data->fetch_assoc()){
				               ?>	
              <tr>
                  <td><?php echo $row['case_id'];?></td>
                  <td><?php echo $row['case_name'];?></td>
                  <td><?php echo $row['case_date'];?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['case_status'];?></td>
                  <td class="Action"><?php echo $row['body'];?></td>
                  <?php
                }
                ?>
                  <td class="action"><input type="checkbox" id="delet">
  <label for="delet" class="show_btn">Send Feedback</label></td>
</tr>
       </table>           
    		  <h1 style="text-align:center;">Under Consultancy Catagory</h1>
    		   
    		    	<table>
        <tr>
          <th class="th">Case Id</th>
          <th class="th">Case Title</th>
          <th class="th">Case Date</th>
          <th class="th">Taker Name</th>
          <th class="th">Giver Name</th>
          <th class="th">Case Status</th>
          <th class="tth">Case Description</th>
          <th class="th">Actions</th>
           </tr>
         
         <?php
         $sqlw="select * from consulancy where username='$username'";
          $data=mysqli_query($conn,$sqlw);
           while($row=$data->fetch_assoc()){
			       			?>	
              <tr>
                  <td><?php echo $row['case_id'];?></td>
                  <td><?php echo $row['title'];?></td>
                  <td><?php echo $row['date'];?></td>
                  <td><?php echo $row['taker_name'];?></td>
                  <td><?php echo $row['giver_name'];?></td>
                  <td><?php echo $row['case_status'];?></td>
                  <td class="action"><?php echo $row['body'];?></td>
                  <?php
                }
                ?>
                  	<td class="Action"><input type="checkbox" id="delet">
  <label for="delet" class="show_btn">Send Feedback</label></td>
</tr>
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

</body>
</html>