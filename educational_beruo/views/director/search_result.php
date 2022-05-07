<?php 
include './header.php';

try{
include_once '../../include/db_connect.php';
$valdate = array();
}catch(Exception $e){
	echo $errors = $e->getMessage();
}

if (isset($_POST['search']) && !empty($_POST['search'])) {
	$name = $_POST['search'];
	$sql = "SELECT * FROM students st, school sc, address ad, zone z, werda w WHERE full_name LIKE '%$name%' AND st.school_id=sc.id AND st.address_id=ad.id AND z.id=ad.zone_id AND w.id=ad.werda_id OR registration_no LIKE '%$name%' AND st.school_id=sc.id AND st.address_id=ad.id AND z.id=ad.zone_id AND w.id=ad.werda_id AND st.status='Active'";
	$result = $db->query($sql);
		$ro = $result->rowCount();
		if ($ro<1) {
			echo "<script>alert('No rcored found in this name');</script>";
		}
	  
}

?>

<style type="text/css">
	
	td{
		color: white;
		font-size: 20px;

	}
</style>

<div class="t-content">
<table style="color: white;">
		
		<tr> <td><form action="search_result.php" method="post">
	<table>
	<tr><th>Search Hear </th><td><input type="text" name="search" style="height: 25px; border-radius: 10px; width: 200px;" required="" placeholder="Search by name, reg"></td><td><input type="submit" name="bsearch" value="Search" ></td></tr>

	</table>
	
</form></td>

<td style="margin-left: 100px;">
	
<b><h2 style="background: green; border-radius: 10px;"><a href="addstudent.php" style="text-decoration: none; color: white; ">Add New Student</a></h2></b>
</td>

</tr>
	</table>
</div>
<table border="1" style="margin-left: 10px;  border-collapse: inherit;">
	
	<tr style="background: rgb(16, 98, 202); font-weight: bold; font-size: 24px;">
		<th>Full Name</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Registration No</th>
		<th>Student type</th>
		<th>School name</th>  
		<th>Wereda</th>
		<th>Zone</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
<?php


while ($row = $result->fetch()) {
	?>
      <tr>
      	<td><?php echo $row['full_name'];?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['age'];  ?></td>
        <td><?php echo $row['registration_no']; ?></td>
        <td><?php echo $row['student_type']; ?></td>
        <td><?php echo $row['school_name']; ?></td>
        <td><?php echo $row['werda_name']; ?></td>
        <td><?php echo $row['zone_name']; ?></td>
        <td><?php echo $row['status']; ?></td>
         <td>
         	<a href="more.php?id=<?php echo $row['sid']; ?>" style="text-decoration: none; background: #564fed; color: white;">More</a>
         	<a href="editstudent.php?id=<?php echo $row['sid']; ?>" style="text-decoration: none; color: white; background: #000567;">Edit</a> <a href="remove.php?id=<?php echo $row['sid']; ?>" style="text-decoration: none; color: white; background:  red;">Remove</a></td>
       </tr>
	<?php
}

?>
	
</table>


</div>

<?php 

include '../inc/fotter.php';
?>