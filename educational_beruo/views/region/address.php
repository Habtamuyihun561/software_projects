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

if (isset($_POST['ZSubmit'])) {
	$sql = "INSERT INTO zone(zone_name) VALUES (?)";
	$result = $db->prepare($sql);
	$value = array($_POST['zname']);
	$res = $result->execute($value);
	if ($res == true) {
		echo "<script> alert('Zone Added Sucssfully'); </script>";
	}
	

}
if (isset($_POST['wSubmit'])) {
	$sql = "INSERT INTO werda(werda_name, zone_id) VALUES (?, ?)";
	$result = $db->prepare($sql);
	$value = array($_POST['wname'], $_POST['subject']);
	$res = $result->execute($value);
	if ($res == true) {
		echo "<script> alert('Wereda Added Sucssfully'); </script>";
	}
	

}

?>



<style type="text/css">
	input{
		width: 180px;
		height: 30px;
		border-radius: 1px;
		margin-left: -50px;
		border-radius: 5px;

	}
	select{
		width: 180px;
		height: 30px;
		border-radius: 1px;
		margin-left: -50px;
		border-radius: 5px;
	}
	td{
		text-align: left;
		font-size: 24px;
		margin-right: 50px;
	}


</style>

<div class="content">


  <div id="cpblock">
    <div class="flt1 cpinner">
      <div align="center">
<p><br>
</p>
<form method="post">
<br><br>
<table>
	<tr>
		<td>
<table width="400px" height="300" cellpadding="3" cellspacing="3" bordercolor="#333333" bgcolor="#C8C8C8 " align="centre" border="0px">
				  <caption>Add new Zone</caption>
<form  method="post">

   	 
	<tr>
      <td height="37" align="center">Zone Name<span class="red">*</span></td>
      <td><input type="text" required  name="zname"/></td>
      <td id="LnameError" class="red">&nbsp;</td>
	  </tr>
     
	  <tr><td colspan="2"><div align="center">
			            <input name="ZSubmit" type="submit" value="Add">
						
			            </div></td></tr>

</form>
	</table>
		  </td>
		  <td>
<table width="400px" height="300" cellpadding="3" cellspacing="3" bordercolor="#333333" bgcolor="#C8C8C8 " align="centre" border="0px">
				  <caption>Add New Wereda</caption>
<form  method="post">

   	 
	
     
	<?php 
			$zsql = "SELECT * FROM zone";
			$zresult = $db->query($zsql);

		?>
		<tr>
                   <td height="37" align="center">Zone<span class="red">*</span></td>
                   <td><select id="zone" required="required" name="subject">
                   <option value="" selected>Please select...</option>
                   <?php
                   while ($row = $zresult->fetch()) {
                   ?>
                   
                   <option value="<?php echo $row['id']; ?>"><?php echo $row['zone_name']; ?></option>
                   <?php
               			}
			       ?>
                   </select>
                   </td>
                  <td id="Student_TypeError" class="red">&nbsp;</td>
              </tr>

	<tr>
      <td height="37" align="center">Woreda name<span class="red">*</span></td>
      <td><input type="text" required  name="wname"/></td>
      <td id="LnameError" class="red">&nbsp;</td>
	  </tr>
  	
						  <tr><td colspan="2"><div align="center">
			            <input name="wSubmit" type="submit" value="Add">
						
			            </div></td></tr>

</form>
		      </table>
</td>
</tr>
</table>
				</div></div>
    <img src="../assets/img/cp_bottcorn.gif" width="1017" height="20" alt="" class="flt1" />

  </div>

</div>
<?php 
include '../inc/fotter.php';
?>




