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
		<th>Subject Name</th>
		<th>Start At</th>
		<th>End At</th>
		<th>Shift</th>
		
		
	</tr>
<?php

	$sql = "SELECT * FROM subject st, schedule sc WHERE sc.subject_id=st.id";
	$result = $db->query($sql);
		$i = 1;
while ($row = $result->fetch()) {
	?>
      <tr>
      	<td><?php echo $i++; ?></td>
      	<td><?php echo $row['subject_name'];?></td>
        <td><?php echo $row['start_at']; ?></td>
        <td><?php echo $row['end_at'];  ?></td>
        <td><?php echo $row['shift']; ?></td>
         
       </tr>
	<?php
}

?>
	
</table>


</div>

<?php 

include '../inc/fotter.php';
?>