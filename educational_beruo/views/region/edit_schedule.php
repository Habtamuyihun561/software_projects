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

	$id= $_GET['id'];
	$sql = "SELECT * FROM schedule, subject WHERE idsc = '$id'";
	$result = $db->query($sql);
	$row = $result->fetch();

if (isset($_POST['Submit'])) {
	$sql = "UPDATE schedule SET subject_id=?, start_at=?, end_at=?, shift=? WHERE idsc=?";
	$result = $db->prepare($sql);
	$value = array($_POST['subject'], $_POST['start'], $_POST['end'], $_POST['shift'], $id);
	$res = $result->execute($value);
	if ($res == true) {
		header("Location: schedule_list.php");
	}
	else{
		echo "Error 1";
	}

}

?>



<style type="text/css">
	input{
		width: 239px;
		height: 30px;
		border-radius: 1px;
		margin-left: -50px;
		border-radius: 5px;

	}
	select{
		width: 239px;
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
<table width="890px" height="300" cellpadding="3" cellspacing="3" bordercolor="#333333" bgcolor="#C8C8C8 " align="centre" border="0px">
				  
<form  method="post">

   	 
	<tr>
      <td height="37" align="center">Start<span class="red">*</span></td>
      <td><input type="datetime-local" value="<?php echo $row['start_at']; ?>" required  name="start"/></td>
      <td id="LnameError" class="red">&nbsp;</td>
	  </tr>
     
	  <tr>
     <td height="37" align="center">End<span class="red">*</span></td>
      <td><input type="datetime-local" required value="<?php echo $row['end_at']; ?>" name="end"/></td>
      <td id="age_error" class="red">&nbsp;</td>
	  </tr>
		 
	<tr>
       <td height="37" align="center">Shift<span class="red">*</span></td>
      <td><select id="School_Type" required="required" name="shift">
            <option value="<?php echo $row['shift']; ?>" selected > <?php echo $row['shift']; ?> </option>
            <option value="Morning">Morning</option>
			<option value="Afternoon">Afternoon</option>
			<option value="Night">Night</option>
      
          </select></td>
  </tr>
	  

		<?php 
			$zsql = "SELECT * FROM subject ";
			$zresult = $db->query($zsql);

		?>
                   <td height="37" align="center">Subject<span class="red">*</span></td>
                   <td><select id="zone" required="required" name="subject">
                   <option value="<?php echo $row['subject_name']; ?>" selected > <?php echo $row['subject_name']; ?> </option>
                   <?php
                   while ($row = $zresult->fetch()) {
                   ?>
                   
                   <option value="<?php echo $row['id']; ?>"> <?php echo $row['subject_name']; ?></option>
                   <?php
               			}
			       ?>
                   </select>
                   </td>
                  <td id="Student_TypeError" class="red">&nbsp;</td>
              </tr>

  	
						  <tr><td colspan="2"><div align="center">
			            <input name="Submit" type="submit" value="UPDATE">
						
			            </div></td></tr>

</form>
		      </table>

				</div></div>
    <img src="../assets/img/cp_bottcorn.gif" width="1017" height="20" alt="" class="flt1" />

  </div>

</div>
<?php 
include '../inc/fotter.php';
?>




