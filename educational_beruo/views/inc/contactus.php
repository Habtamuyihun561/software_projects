<?php
try{
include_once '../../include/db_connect.php';
$valdate = array();
}catch(Exception $e){
	echo $errors = $e->getMessage();
}
if (isset($errors)) {
	echo "Errors :".$errors;
}

$Message = "";
if (isset($_POST['submit'])) {
	$sql = "INSERT INTO contact(name, phone, message) VALUES (?, ?, ?)";
	$result = $db->prepare($sql);
	$value = array($_POST['Name'], $_POST['Phone'], $_POST['Message']);
	$res = $result->execute($value);
	if ($res == true) {
		$Message = "Thank you for your Feedback we will contact you ASAP";
	}

}

?>




<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Type" content="text/html" charset="iso-8859-1" />

	<title>Amhara Education Beruo</title>

	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/formvalidation.css">

<style type="text/css">
	input, textarea{
		width: 239px;
		height: 30px;
		border-radius: 1px;
		margin-left: 0px;

	}
	select{
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


</head>
<body>
	
	<div class="header">
		<img src="../assets/img/header.jpg">
	</div>
   <div class="sub-header">
	<p ><a href="../index.php" class="flt1 tp_home2">Home</a> 
        <img src="../assets/img/tp_pipe.gif" width="3" height="18" alt="" class="flt tp_pipe" /> <a href="about.php" class="flt tp_home">About Us</a> <img src="../assets/img/tp_pipe.gif" width="3" height="18" alt="" class="flt tp_pipe" /> <a href="service.php" class="flt tp_home">Services</a> <img src="../assets/img/tp_pipe.gif" width="3" height="18" alt="" class="flt tp_pipe" /> <a href="contactus.php" class="flt tp_home">Feedback</a> <img src="../assets/img/tp_pipe.gif" width="3" height="18" alt="" class="flt tp_pipe" /> <a href="contactus.php" class="flt tp_home">Contact Us</a>
   </p>
</div>
 
	
<div class="content">


  <div id="cpblock">
    <div class="flt1 cpinner">
      <div align="center">
<p><br>
</p>
<form method="post">
<br><br>
<table >
 <tr>
  <td>Name:</td>
  <td><input type="text" name="Name" size="20"/></td>
 </tr>
 <tr><td></td><td></td></tr>
 <tr>
  <td>Email:</td>
  <td><input type="email" name="Email" size="20"/></td>
 </tr>
 
<tr><td></td><td></td></tr>
 <tr>
  <td>Phone Number:<br></td>
  <td><input type="phone" name="Phone" size ="20"/></td>
 </tr>
 <tr>
  <td>Message:<br></td>
  <td><textarea type="text" name="Message" style="height:100px"  /></textarea></td>
 </tr>
 <tr><td></td><td></td></tr><tr><td></td><td></td></tr>
 <tr>
  <td></td><td><input type="submit" name="submit" value ="Submit"/>&nbsp &nbsp &nbsp 
  <input type="reset" name="reset" value="Clear"/></td>
 </tr>
</table>

</form>
		      </table>

		      <?php 
		      	if (isset($Message)) {?>

		      		<b style="color: red"> <?php echo $Message; ?></b>
		      	<?php	
		      	}
		      ?>
				</div></div>
    <img src="../assets/img/cp_bottcorn.gif" width="1017" height="20" alt="" class="flt1" />

  </div>

</div>
<?php 
include './fotter.php';
?>




