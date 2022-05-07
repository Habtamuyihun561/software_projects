<?php 
include './header.php';

try{
include_once '../../include/db_connect.php';
$valdate = array();
}catch(Exception $e){
	echo $errors = $e->getMessage();
}

	$id= $_GET['id'];
	$sql = "SELECT * FROM users WHERE user_id = '$id'";
	$result = $db->query($sql);
	$row = $result->fetch();

	if (isset($_POST['update'])) {

if (($_POST['password'] == "") || ($_POST['npassword']== " ")) {
	$sql = "UPDATE users SET username=?, email=? WHERE user_id=?";
  	$result = $db->prepare($sql);
  	$value = array($_POST['username'], $_POST['email'], $id);
  	$res = $result->execute($value);

  		if ($res == true) {
  				header("Location: index.php");
  				}
}

if ($_POST['password'] == $_POST['npassword']) {
	$sql = "UPDATE users SET username=?, email=?, password=? WHERE user_id=?";
  	$result = $db->prepare($sql);
  	$value = array($_POST['username'], $_POST['email'], md5($_POST['password']), $id);
  	$res = $result->execute($value);

  			if ($res == true) {
  				header("Location: index.php");
  				
  			}
  		}
			
		
  }
  
			
 		

 



?>

<style type="text/css">
	input{
		width: 239px;
		height: 30px;
		border-radius: 1px;
		margin-left: -50px;

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
 <span style="font-size: 16px; text-align: center; margin-left: 0px; color: red">* If you don't want to change your password please leave oldpassword and new password fields</span>
  
				   <table width="890px" height="300" cellpadding="3" cellspacing="3" bordercolor="#333333" bgcolor="#C8C8C8 " align="centre" border="0px">
				  
<form id="theForm"  method="post">
		 
<tr>
      <td height="37" align="center">Username<span class="red">*</span></td>
      <td><input required  Pattern="[a-zA-Z]+" onInvalid=setCustomerValidity("Please Enter Only Number") type="text" id="Fname" name="username"  
      	value="	<?php 
      			echo $row['username'];
      		?>"
       title="Enter First Name"/></td>
      <td id="FnameError" class="red"  >&nbsp;</td>
	</tr>
	

	<tr>
      <td height="37" align="center">Old Password<span class="red">*</span></td>
      <td><input   onInvalid=setCustomerValidity("Please Enter Only Number") type="Password" id="Mname" name="password"/></td>
      <td id="MnameError" class="red">&nbsp;</td>
	  </tr>
	  <tr>
      <td height="37" align="center">New Password<span class="red">*</span></td>
      <td><input    onInvalid=setCustomerValidity("Please Enter Only Number") type="Password" id="Mname"  name="npassword"/></td>
      <td id="MnameError" class="red">&nbsp;</td>
	  </tr>
   	 
	<tr>
      <td height="37" align="center">Email<span class="red">*</span></td>
      <td><input required  onInvalid=setCustomerValidity("Please Enter Only Number") type="email" id="Lname" name="email"/></td>
      <td id="LnameError" value = "
<?php 
      			echo $row['email'];
      		?>"
       class="red">&nbsp;</td>
	  </tr>
	  <tr>
	  <td height="37" align="center"></td>
 <td align="center">
			            <input name="update" type="submit" value="Update">
						
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