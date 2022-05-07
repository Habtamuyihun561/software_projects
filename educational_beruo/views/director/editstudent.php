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

	$sql = "SELECT * FROM students st, school sc, address ad, zone z, werda w WHERE st.school_id=sc.id AND st.address_id=ad.id AND z.id=ad.zone_id AND w.id=ad.werda_id AND st.sid = '$id'";
	$result = $db->query($sql);
	$row = $result->fetch();


if (isset($_POST['Submit'])) {

	$sql = "UPDATE students, school SET full_name=?, gender=?, age=?, registration_no=?, student_type=? WHERE sid='$id'";
  	$result = $db->prepare($sql);
  	
  	$value = array($_POST['Fname'], $_POST['sex'], $_POST['age'], $_POST['Reg_No'], $_POST['Student_Type']);
  	$res = $result->execute($value);
	  if($res == true){

	  	echo "<script> alert('Sucssfully Update');</script>";
	  	header('location: director.php');
	  	
	  }
	  else{
	  	echo "<script> alert('Error');</script>";
	  }



}
?>

<script>
  window.onload = init;
 
// The "onload" handler. Run after the page is fully loaded.
function init() {
   // Attach "onsubmit" handler
   document.getElementById("theForm").onsubmit = validateForm;
   // Attach "onclick" handler to "reset" button
   document.getElementById("reset").onclick = clearDisplay;
   // Set initial focus
   document.getElementById("name").focus();
}
 
/* The "onsubmit" handler to validate the input fields.
 * Most of the input validation functions take 2 arguments:
 * inputId or inputName: the "id" of the <input> element to be validated
 *   or "name" for checkboxes and radio buttons.
 * errorMsg: the error message to be displayed if validation fails.
 *   The message shall be displayed on an element with id of
 *   inputID+"Error" if it exists; otherwise via an alert().
 */
function validateForm() {
   return (isNotEmpty("Fname", "<font color=red>Please enter your First Name!</font>")
        &&isNotEmpty("Mname", "<font color=red>Please enter your Middle Name!</font>")
		&&isNotEmpty("Lname", "<font color=red>Please enter your Last Name!</font>")
		&&isAlphabetic("Fname", "<font color=red>Please enter your First Name!</font>")
		&&isAlphabetic("Mname", "<font color=red>Please enter your Middle Name!</font>")
		&&isAlphabetic("Lname", "<font color=red>Please enter your Last Name!</font>")
        && isNumeric("Reg_No", "<font color=red>Please enter a 8-Digit Registration code!</font>")
        &&isLengthMinMax("Reg_No", "<font color=red>Please enter a 8-digit Registration code!</font>", 8, 8)
		&&isNotEmpty("photo","<font color=red>Please Browse Student Photo!</font>")
		&&isNotEmpty("bele", "<font color=red>Please enter your Valid Birth Place!</font>")
		&& isAlphabetic("bele", "<font color=red>Please enter your Birth Place!</font>")
		&&isNotEmpty("Fjob", "<font color=red>Please Enter Father Job!</font>")
        && isSelected("nbs", "<font color=red>Please make a selection!</font>")
		&&isNotEmpty("Mtounge", "<font color=red>Please Enter Student Mother Tounge!</font>")
		&& isAlphabetic("Mtounge", "<font color=red>Please Enter Student Mother Tounge!</font>")
		&&isNotEmpty("D_id", "<font color=red>Please Enter School Director Id!</font>")
		&&isNotEmpty("W_Id", "<font color=red>Please Enter Wereda Examination  Affir Performer Id!</font>")
);
}
 
// Return true if the input value is not empty
function isNotEmpty(inputId, errorMsg) {
   var inputElement = document.getElementById(inputId);
   var errorElement = document.getElementById(inputId + "Error");
   var inputValue = inputElement.value.trim();
   var isValid = (inputValue.length !== 0);  // boolean
   showMessage(isValid, inputElement, errorMsg, errorElement);
   return isValid;
}
 
/* If "isValid" is false, print the errorMsg; else, reset to normal display.
 * The errorMsg shall be displayed on errorElement if it exists;
 *   otherwise via an alert().
 */
function showMessage(isValid, inputElement, errorMsg, errorElement) {
   if (!isValid) {
      // Put up error message on errorElement or via alert()
      if (errorElement !== null) {
         errorElement.innerHTML = errorMsg;
      } else {
         alert(errorMsg);
      }
      // Change "class" of inputElement, so that CSS displays differently
      if (inputElement !== null) {
         inputElement.className = "error";
         inputElement.focus();
      }
   } else {
      // Reset to normal display
      if (errorElement !== null) {
         errorElement.innerHTML = "";
      }
      if (inputElement !== null) {
         inputElement.className = "";
      }
   }
}
 
// Return true if the input value contains only digits (at least one)
function isNumeric(inputId, errorMsg) {
   var inputElement = document.getElementById(inputId);
   var errorElement = document.getElementById(inputId + "Error");
   var inputValue = inputElement.value.trim();
   var isValid = (inputValue.search(/^[0-9]+$/) !== -1);
   showMessage(isValid, inputElement, errorMsg, errorElement);
   return isValid;
}
 
// Return true if the input value contains only letters (at least one)
function isAlphabetic(inputId, errorMsg) {
   var inputElement = document.getElementById(inputId);
   var errorElement = document.getElementById(inputId + "Error");
   var inputValue = inputElement.value.trim();
   var isValid = inputValue.match(/^[a-zA-Z]+$/);
   showMessage(isValid, inputElement, errorMsg, errorElement);
   return isValid;
}
 
// Return true if the input value contains only digits and letters (at least one)
function isAlphanumeric(inputId, errorMsg) {
   var inputElement = document.getElementById(inputId);
   var errorElement = document.getElementById(inputId + "Error");
   var inputValue = inputElement.value.trim();
   var isValid = inputValue.match(/^[0-9a-zA-Z]+$/);
   showMessage(isValid, inputElement, errorMsg, errorElement);
   return isValid;
}
 
// Return true if the input length is between minLength and maxLength
function isLengthMinMax(inputId, errorMsg, minLength, maxLength) {
   var inputElement = document.getElementById(inputId);
   var errorElement = document.getElementById(inputId + "Error");
   var inputValue = inputElement.value.trim();
   var isValid = (inputValue.length >= minLength) && (inputValue.length <= maxLength);
   showMessage(isValid, inputElement, errorMsg, errorElement);
   return isValid;
}
 
 
// Return true if selection is made (not default of "") in <select> input
function isSelected(inputId, errorMsg) {
   var inputElement = document.getElementById(inputId);
   var errorElement = document.getElementById(inputId + "Error");
   var inputValue = inputElement.value;
   // You need to set the default value of <select>'s <option> to "".
   var isValid = inputValue !== "";
   showMessage(isValid, inputElement, errorMsg, errorElement);
   return isValid;
}
 
 
// The "onclick" handler for the "reset" button to clear the display
function clearDisplay() {
   var elms = document.getElementsByTagName("*");  // all tags
   for (var i = 0; i < elms.length; i++) {
      if ((elms[i].id).match(/Error$/)) {  // no endsWith() in JS?
         elms[i].innerHTML = "";
      }
      if (elms[i].className === "error") {  // assume only one class
         elms[i].className = "";
      }
   }
   // Set initial focus
   document.getElementById("name").focus();
}
  </script>

  <!-- content panel starts here -->
  <div id="cpblock">
   <div class="flt1 cpinner">
     <div align="center">

<style type="text/css">
	input{
		width: 239px;
		height: 30px;
		border-radius: 1px;
		margin-left: -50px;

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

<p><br>
</p>
	
  
<table width="890px" height="300" cellpadding="3" cellspacing="3" bordercolor="#333333" bgcolor="#C8C8C8 " align="centre" border="0px">
		


<form  method="post" onsubmit='return  formValidator()'>


	<tr>
	      <td height="37" align="center">Full Name<span class="red">*</span></td>
	      <td><input type="text" required value="<?php echo $row['full_name']; ?>"  onInvalid=setCustomerValidity("Please Enter Only Number")id="Fname" name="Fname" title="Enter First Name"/></td>
	      <td id="FnameError" class="red">&nbsp;</td>
	</tr>
	
     <tr>
      <td height="37" align="center">Registration Number<span class="red">*</span></td>
      <td><input type="text" required value="<?php echo $row['registration_no']; ?>"  Pattern="[0-9]+" onInvalid=setCustomerValidity("Please Enter Only Number") id="Reg_No" name="Reg_No"/></td>
      <td id="Reg_NoError" class="red">&nbsp;</td>
	  </tr>
	  <tr>
     <td height="37" align="center">Age<span class="red">*</span></td>
      <td><input type="Number" required value="<?php echo $row['age']; ?>"  Pattern="[0-9]+" onInvalid=setCustomerValidity("Please Enter Only Number") id="age" max="100" min="12" name="age"/></td>
      <td id="age_error" class="red">&nbsp;</td>
	  </tr>
			<tr>
      <td height="37" align="center">Sex<span class="red">*</span></td>
      <td><select id="sex" required="required" value="<?php echo $row['sex']; ?>" name="sex">
            <option value="" selected>Please select...</option>
           <option value="Male">Male</option>
			<option value="Female">Female</option>
          </select><br /></td>
      <td id="sexError" class="red">&nbsp;</td></tr>
			 
	<tr>
       <td height="37" align="center">School Type<span class="red">*</span></td>
      <td><select id="School_Type" required="required" name="School_Type">
            <option value="" selected>Please select...</option>
            <option value="Public">Public</option>
			<option value="Private">Private</option>
			<option value="Missionary">Missionary</option>
          </select></td>
      <td id="School_TypeError" class="red">&nbsp;</td>
  </tr>
	  <tr>
      <td height="37" align="center">School Name<span class="red">*</span></td>
      <td><input type="text" required value="<?php echo $row['school_name']; ?>"  Pattern="[a-zA-Z]+" onInvalid=setCustomerValidity("Please Enter Only Number") id="School_Name" name="School_Name"/></td>
      <td id="School_NameError" class="red">&nbsp;</td>
	</tr>
	 
	<tr>
      <td height="37" align="center">Student Type<span class="red">*</span></td>
      <td><select id="Student_Type" required="required" name="Student_Type">
            <option value="" selected>Please select...</option>
            <option value="Regular">Regular</option>
			<option value="Private">Private</option> 
			<option value="Extension">Extension</option>
          </select></td></tr>
		 
	<tr>

		<?php 
			$zsql = "SELECT * FROM zone";
			$zresult = $db->query($zsql);

		?>
                   <td height="37" align="center">Zone<span class="red">*</span></td>
                   <td><select id="zone" required="required" name="zone">
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

		<?php 
			$zsql = "SELECT * FROM werda";
			$zresult = $db->query($zsql);

		?>
                   <td height="37" align="center">Wereda<span class="red">*</span></td>
                   <td><select id="wereda" required="required" name="wereda">
                   <option value="" selected>Please select...</option>
                   <?php
                   while ($row = $zresult->fetch()) {
                   ?>
                   
                   <option value="<?php echo $row['id']; ?>"><?php echo $row['werda_name']; ?></option>
                   <?php
               			}
			       ?>
                   </select>
                   </td>
                  <td id="Student_TypeError" class="red">&nbsp;</td>
              </tr>
			 <tr>
      <td height="37" align="center">School Code<span class="red">*</span></td>
      <td><input type="text" required value="<?php echo $row['school_code']; ?>" Pattern="[0-9]+" onInvalid=setCustomerValidity("Please Enter Only Number") id="School_Code" name="School_Code"/></td>
      <td id="LnameError" class="red">&nbsp;</td>
	  </tr>
						  <tr><td colspan="2"><div align="center">
			            <input name="Submit" type="submit" value="Update">
						<input name="Submit" type="Reset" value="Clear">
			            </div></td></tr>

</form>
		      </table>
				</div>
      </div>

 <img src="../assets/img/cp_bottcorn.gif" width="1017" height="20" alt="" class="flt1" />

  </div>



<?php

include '../inc/fotter.php';
 ?>