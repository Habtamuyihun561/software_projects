<?php 
include './header.php';

try{
include_once '../../include/db_connect.php';
$valdate = array();
}catch(Exception $e){
	echo $errors = $e->getMessage();
}
if (isset($errors)) {
	echo "Errors :".$errors;
}



	//$id= $_SESSTION['id'];
	$sql = "SELECT * FROM students st, school sc, address ad, zone z, werda w WHERE st.school_id=sc.id AND st.address_id=ad.id AND z.id=ad.zone_id AND w.id=ad.werda_id AND st.sid = '8'";
	$result = $db->query($sql);
	$row = $result->fetch();


?>

<style type="text/css">
	th{
		text-align: left;
		color: #444;
	}
	td{
		color: white;
		font-weight: bolder;
	}

</style>
<div id="cpblock" style="margin-bottom: 200px;">
    <div class="flt1 cpinner">
    	<table>

    	<tr>
    		<td>
    			<table>
    		<tr><th>Full Name:</th><td><?php echo $row['full_name']; ?></td></tr>
    		<tr><th>Gender:</th><td><?php echo $row['gender']; ?></td></tr>
    		<tr><th>Age:</th><td><?php echo $row['age']; ?></td></tr>
    		<tr><th>Registration No</th><td><?php echo $row['registration_no']; ?></td></tr>
    		<tr><th>Student Type</th><td><?php echo $row['student_type']; ?></td></tr>
    		<tr><th>School Name</th><td><?php echo $row['school_name']; ?></td></tr>
    		<tr><th>School Code</th><td><?php echo $row['school_code']; ?></td></tr>
    		
    	</table>
    		</td>
    		<td>
    		<table style="margin-left: 200px">
    		<tr><th>Birth Place</th><td><?php echo $row['birthpalce']; ?></td></tr>
    		<tr><th>Werda</th><td><?php echo $row['werda_name']; ?></td></tr>
    		<tr><th>Zone</th><td><?php echo $row['zone_name']; ?></td></tr>
    		<tr><th>Status</th><td><?php echo $row['status']; ?></td></tr>
    		<tr><th>Father's Jop</th><td><?php echo $row['father_job']; ?></td></tr>
    		<tr><th>Mother Toung</th><td><?php echo $row['mothers_toung']; ?></td></tr>
    		<tr><th>School Type</th><td><?php echo $row['school_type']; ?></td></tr>
    		<tr><th>Regsitration Date</th><td><?php echo $row['register_at']; ?></td></tr>
    	</table>
    		</td>
    </tr>
    	</table>
    <center style="margin-top: 20px;">
    		<button style="background: blue; border-radius: 5px; height: 40px; justify-content: center;"> <a href="view_result.php" style="text-decoration: none; color: white; font-size: 24px;">View Result</a></button>
</center>
    </div>
    <img src="../assets/img/cp_bottcorn.gif" width="1017" height="20" alt="" class="flt1" />

  </div>

</div>

<?php 
include '../inc/fotter.php';
?>