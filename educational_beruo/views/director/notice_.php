<?php 
include './header.php';

try{
include_once '../../include/db_connect.php';
$valdate = array();
}catch(Exception $e){
	echo $errors = $e->getMessage();
}
if (isset($_POST['update'])) {

	$sql = "INSERT INTO notice(title, description, _from) VALUES (?, ?, ?)";
  	$result = $db->prepare($sql);
  	$value = array($_POST['title'], $_POST['desc'], "School Director");
  	$res = $result->execute($value);

  		if ($res == true) {
  				echo "<script>alert('Thank you notice posted');</script>";
  				}

  				else{
				echo "<script>alert('Error');</script>";
  				}

		
  }
  
			
 		

 



?>

<style type="text/css">
	input{
		width: 239px;
		height: 30px;
		border-radius: 1px;
		margin-left: -150px;

	}
	
	td{
		text-align: left;
		font-size: 24px;
		margin-right: 50px;
	}
	textarea{
		width: 239px;
		height: 130px;
		border-radius: 1px;
		margin-left: -150px;
	}


</style>

<div class="content">
	

<div id="cpblock">
    <div class="flt1 cpinner">
      <div align="center">
 
				   <table width="890px" height="300" cellpadding="3" cellspacing="3" bordercolor="#333333" bgcolor="#C8C8C8 " align="centre" border="0px">
				  
<form id="theForm"  method="post">
		 
<tr>
      <td height="37" align="center">Title<span class="red">*</span></td>
      <td><input required  onInvalid=setCustomerValidity("Please Enter Only Number") type="text" id="Fname" name="title" /></td>
      <td id="FnameError" class="red"  >&nbsp;</td>
	</tr>
	<tr>
      <td height="37" align="center">Description<span class="red">*</span></td>
      <td>
      	<textarea required   type="text" id="Lname" name="desc"></textarea> 
  </td>
	  </tr>
	  <tr>
	  <td height="37" align="center"></td>
 <td align="center">
			            <input name="update" type="submit" value="Post">
						
			            </td><td></td></tr>
			        </form>
		      </table>	
</div>
</div>
	    
    
    <img src="../assets/img/cp_bottcorn.gif" width="1017" height="20" alt="" class="flt1" />

  </div>

</div>


<?php 

include '../inc/fotter.php';
?>