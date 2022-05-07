<?php 
include './header.php';

try{
include_once '../../include/db_connect.php';
$valdate = array();
}catch(Exception $e){
	echo $errors = $e->getMessage();
}

?>

<style type="text/css">
	
	td{
		color: white;
		font-size: 20px;

	}
</style>


<table border="1" style="margin-left: 100px;  border-collapse: inherit;">
	
	<tr style="background: rgb(16, 98, 202); font-weight: bold; font-size: 24px;">
		<th>#</th>
		<th>Full Name</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Registration No</th>
		<th>Student type</th>
		<th>School name</th>
		<th>Wereda</th>
		<th>Zone</th>
		
		<th>Action</th>
	</tr>
<?php

	$sql = "SELECT * FROM students st, school sc, address ad, zone z, werda w WHERE st.school_id=sc.id AND st.address_id=ad.id AND z.id=ad.zone_id AND w.id=ad.werda_id AND st.status='Active' AND rstatus='1'";
	$result = $db->query($sql);
		$i = 1;
while ($row = $result->fetch()) {
	?>
      <tr>
      	<td><?php echo $i++; ?></td>
      	<td><?php echo $row['full_name'];?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['age'];  ?></td>
        <td><?php echo $row['registration_no']; ?></td>
        <td><?php echo $row['student_type']; ?></td>
        <td><?php echo $row['school_name']; ?></td>
        <td><?php echo $row['werda_name']; ?></td>
        <td><?php echo $row['zone_name']; ?></td>
         <td>
         	<a href="view_result.php?id=<?php echo $row['sid']; ?>" style="text-decoration: none; background: #000999; color: white;">View Result</a>
         	
       </tr>
	<?php
}

?>
	
</table>


</div>

<?php 

include '../inc/fotter.php';
?>