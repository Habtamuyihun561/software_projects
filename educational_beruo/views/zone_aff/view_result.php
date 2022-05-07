<?php 
include './header.php';

try{
include_once '../../include/db_connect.php';
$valdate = array();
}catch(Exception $e){
	echo $errors = $e->getMessage();
}



if($_SERVER['REQUEST_METHOD'] === 'GET'){
	 $id= $_GET['id'];
		$sql = "SELECT * FROM subject su, result re, students st WHERE re.subject_id = su.id AND st.sid = '$id'";
		$result = $db->query($sql);
		$row = $result->fetch();
}
 



?>

<style type="text/css">
	
	td{
		color: white;
		font-size: 20px;
		text-align: center;

	}
	input{
		height: 25px;
		width: 200px;
		border-radius: 10px;
		font-size: 16px;
	}
</style>

<table  style="width: 700px;  margin-left: 100px;  border-collapse: inherit;">
	<center> <caption> <td>Result of    :-<?php echo $row['full_name']; ?></td></caption></center>
	<tr style="background: rgb(16, 98, 202); font-weight: bold; font-size: 24px;">
		<th>#</th>
		<th>Subject Name</th>
		<th>Result</th>
		<th>Code No</th>
		
	</tr>
<?php

	$i = 1;
	
while ($row = $result->fetch()) {
	?>
      <tr>
      	<td><?php echo $i++; ?></td>
        <td><?php echo $row['subject_name']; ?></td>
        <td><?php echo $row['result']; ?></td>
        <td><?php echo $row['code_no']; ?></td>
       </tr>
	<?php


}

?>
	
</table>



</div>

<?php 

include '../inc/fotter.php';
?>