<?php 
include './header.php';

try{
include_once '../../include/db_connect.php';
$valdate = array();
}catch(Exception $e){
	echo $errors = $e->getMessage();
}

$data = array();

if($_SERVER['REQUEST_METHOD'] === 'GET' || isset($_POST)){
	 $id= $_GET['id'];
	$sql = "SELECT * FROM subject";
	$result = $db->query($sql);
	if ( isset($_POST['result']) || isset($_POST['code'])) {
		$i = 0;
	while ($row = $result->fetch()) {

			 	$sql = "INSERT INTO result(subject_id, student_id, result, code_no) VALUES (?, ?, ?, ?)";
				$iresult = $db->prepare($sql);
				$value = array($row['id'], $id , $_POST['result'][$i], $_POST['code'][$i]);
				$res = $iresult->execute($value);
				$i++;
 				}

 				if ($res === true) {
 					$sql = "UPDATE students SET rstatus=? WHERE sid='$id'";
  					$result = $db->prepare($sql);
				  	$value = array("1");
				  	$res = $result->execute($value);
	  				header("Location: setedlist.php");
 				}
 			}
 		
}
 



?>

<style type="text/css">
	
	td{
		color: white;
		font-size: 20px;

	}
	input{
		height: 25px;
		width: 200px;
		border-radius: 10px;
		font-size: 16px;
	}

</style>
<form method="post">
<table  style="width: 700px;  margin-left: 100px;  border-collapse: inherit;">
	
	<tr style="background: rgb(16, 98, 202); font-weight: bold; font-size: 24px;">
		<th>#</th>
		<th>Subject Name</th>
		<th>Result</th>
		<th>Code No</th>
		
	</tr>
<?php
$sql = "SELECT * FROM subject";
	$result = $db->query($sql);
	$i = 1;
	$j = 0;
while ($row = $result->fetch()) {
	?>
      <tr>
      	<td><?php echo $i++; ?></td>
        <td><?php echo $row['subject_name']; ?></td>
        <td><input type="number" name="result[<?php $j; ?>]" required="" max="100" min="0"></td>
        <td><input type="text" name="code[<?php $j; ?>]" required=""></td>
       </tr>
	<?php

$j++;
}

?>
	
</table>
<tr ><td colspan="2"><div align="center">
			            <input name="Submit" type="submit" style="margin-top: 20px; margin-bottom: 50px; width: 100px; " value="Submit">
						<input name="Submit" type="Reset" style="margin-right: 100px; margin-top: 20px; margin-bottom: 50px; width: 90px;" value="Clear">
</div></td></tr>
</form>

</div>

<?php 

include '../inc/fotter.php';
?>