<?php 
include './header.php';

try{
include_once '../../include/db_connect.php';
$valdate = array();
}catch(Exception $e){
	echo $errors = $e->getMessage();
}

$id = $_GET['id'];
$sql = "SELECT * FROM students st, school sc, address ad, zone z, werda w WHERE st.school_id=sc.id AND st.address_id=ad.id AND z.id=ad.zone_id AND w.id=ad.werda_id AND st.status='Active' AND rstatus='1' AND st.sid='$id'";
	$result = $db->query($sql);
	$row = $result->fetch();

$sum = $_GET['sum'];

$sql = "SELECT * from subject";
$result = $db->query($sql);
$sub = $result->rowCount();

$Avarage = $sum/$sub;

$sql = "SELECT * FROM students";
$result = $db->query($sql);
$per = $result->rowCount();

$Persentile = $sum/$per;

?>
<style type="text/css">
	th{
		text-align: left;
		margin-left: 40px;
	}

</style>

<div class="t-content">

<table id="t" style="margin-left: 100px; font-size: 25px; width: 1000px; height: 500px; background: white; border-radius: 10px;">
	<tr><td><img src="../assets/img/bit.png" style="width: 100px; margin-left: 20px; height: 50px; "></td><th>Amara Educational Beruo<hr/></th></tr>

	<tr>
		<th>Full Name <u> <?php echo $row['full_name']; ?> </u></th> <th>Gender <u><?php echo $row['gender']; ?></u></th><th> Age <u><?php echo $row['age']; ?></u></th>
	</tr>
	<tr>
		<th>Wereda <u> <?php echo $row['werda_name']; ?> </u></th> <th>Zone <u><?php echo $row['zone_name']; ?></u></th><th> Region  <u>Amhara</u></th>
	</tr>
	<tr>
		<th>Avarage <u> <?php echo $Avarage; ?></u></th> <th>Persentile <u><?php echo $Persentile; ?></u></th>
	</tr>
	<tr>
		<th>School Name <u><?php echo $row['school_name']; ?></u></th> <th>School Code <u><?php echo $row['school_code']; ?></u></th> <th>School Type <u><?php echo $row['school_type']; ?></u></th>
	</tr>
	<tr>
		<th>Student Type <u><?php echo $row['student_type']; ?></u></th> <th>Result Status 
			<u style="color: red">
			
<?php 

if ( ($row['gender'] == "Male") & ($Persentile >50)) {
	echo "PROMOTED";
}
if ( ($row['gender'] == "Female") & ($Persentile > 45)) {
	echo "PROMOTED";
}
else{
	echo "FAILD";
}

?>

		</u>  </th>
	</tr>
<tr><td>
<center> <button onclick="printco('t')" style="height: 25px; font-size: 18px; background: green; width: 100px; color: white; border-radius: 4px;">Print</button></center></td></tr>
</table>

</div>


<script type="text/javascript">
	
function printco(el){
	var restorpage = document.body.innerHTML;
	var printc = document.getElementById(el).innerHTML;
	document.body.innerHTML = printc;
	window.print();
	document.body.innerHTML = restorpage;
}

</script>

<?php 
include '../inc/fotter.php';
?>