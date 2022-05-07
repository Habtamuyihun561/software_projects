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
<div class="t-content">
<table style="color: white;">
		
		<tr> <td><form action="set_search.php" method="post">
	<table>
	<tr><th>Search Hear </th><td><input type="text" name="search" required="" style="height: 25px; border-radius: 10px; width: 170px;" placeholder="Search hear"></td><td><input type="submit" name="bsearch" value="Search" ></td></tr>

	</table>
	
</form></td>

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
if (isset($_POST['search']) && !empty($_POST['search'])) {
	$name = $_POST['search'];
	$sql = "SELECT * FROM students st, school sc, address ad, zone z, werda w WHERE full_name LIKE '%$name%' AND st.school_id=sc.id AND st.address_id=ad.id AND z.id=ad.zone_id AND w.id=ad.werda_id AND st.status='Active' AND rstatus='1'";
	$result = $db->query($sql);
}

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
        <td><?php  if ($row['rstatus'] == "0") {
        	echo "Unseted";
        } else{
        	echo "Seted";
        }

        ?></td>
         <td>
         	<a href="view_result.php?id=<?php echo $row['sid']; ?>" style="text-decoration: none; background: #000999; color: white;">See result</a>
         	 <a href="remove.php?id=<?php echo $row['sid']; ?>" style="text-decoration: none; color: white; background:  red;">Remove</a></td>
       </tr>
	<?php
}


?>
	
</table>


</div>

<?php 

include '../inc/fotter.php';
?>