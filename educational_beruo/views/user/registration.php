<?php 

include './header.php';

session_start();
try{
  include_once '../../include/db_connect.php';
  
  
}
catch(Exception $e)
{echo  $e->getMessage();}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  @$password = md5($_POST['password']);
  @$phone = $_POST['phone'];
  $sql = "UPDATE  users,user  SET username=?, password=? WHERE users.user_id=user.uid AND user.phone = '$phone' OR user.full_name= '$phone'";
  $result = $db->prepare($sql);
  $value = array($_POST['username'], $password);

  $res = $result->execute($value);
    if($res == true){

      header('location: ../index.php');
       echo "<script> alert('Sucssfully Register your login cridtials');</script>";
    }
    else{
      echo "<script> alert('No data found in this phone number or Full name please make sure that your phone  or full name is registerd by system admin or director');</script>";
    }
  
}

?>
<div class="sub-header">
	<p ><a href="../index.html" class="flt1 tp_home2">Home</a> 
        <img src="../assets/img/tp_pipe.gif" width="3" height="18" alt="" class="flt tp_pipe" /> <a href="../inc/about.php" class="flt tp_home">About Us</a> <img src="../assets/img/tp_pipe.gif" width="3" height="18" alt="" class="flt tp_pipe" /> <a href="../inc/service.php" class="flt tp_home">Services</a> <img src="../assets/img/tp_pipe.gif" width="3" height="18" alt="" class="flt tp_pipe" /> <a href="../inc/contactus.php" class="flt tp_home">Feedback</a> <img src="../assets/img/tp_pipe.gif" width="3" height="18" alt="" class="flt tp_pipe" /> <a href="../inc/contactus.php" class="flt tp_home">Contact Us</a>
   </p>
</div>
 
	
<div class="content">
	

<div id="cpblock">
    <div class="flt1 cpinner">
 
 <form id="theForm"  method="post" onsubmit='return  formValidator()'>
      <div class="flt lp_block"> 
      <img src="../assets/img/lp_imgpair.jpg" width="51" height="37" alt="" class="flt1 lp_imgpair" /> 
    <span class="flt lp_txtmem">member <span style="color:#00000;">login</span></span><br />
      <lable style="font-size: 16px; font-weight: bolder;">UserName</lable><input required="required" type="text" name="username" id='username' style="width: 160px; height: 25px; border: none; border-radius: 4px; margin-left: 10px;"> <br> <br>
      <lable style="font-size: 16px; font-weight: bolder;">Phone No/ <br> Full name</lable><input required="required" type="Phone" name="phone" placeholder="Phone or full name" style="width: 160px; height: 25px; border: none; border-radius: 4px; margin-left: 14px;"> <br> <br> 
      <lable style="font-size: 16px; font-weight: bolder;">Password</lable><input required="required" type="password" name="password" id='password' style="width: 160px; height: 25px; border: none; border-radius: 4px; margin-left: 14px;"> <br> <br>
    <input  type="submit" name="submit" style="border: none; width: 90px; border-radius: 10px;" value="Register" onclick="validateUsername(document.getElementById('username'), 'Please Enter a Value')"onclick="validateUsername(document.getElementById('password'), 'Please Enter a Value')">&nbsp &nbsp &nbsp 
    <input  type="reset" name="submit" style="border: none; width: 90px; border-radius: 10px;" value="Clear"> <br>
   If you account <a href="../index.php" style="color: white; font-size: 20px; ">Login hear</a>
  </form>

  <br> <br> 
    <div class="flt1 lp_boxbg"> 
      <span class="flt1 lp_txtour">our solutions</span><br />
          <span class="flt1 lp_boxtxt">You may conduct your Educational problems and Solution to us. </span><br />
          <img src="../assets/img/lp_ashsqr.jpg" width="3" height="3" alt="" class="flt1 lp_boxbult" /> <a href="viewStudentStatus.html" class="flt lp_boxtxt2">Student Status</a> <img src="../assets/img/lp_ashsqr.jpg" width="3" height="3" alt="" class="flt1 lp_boxbult" /><a href="ViewPersonalData3.html" class="flt lp_boxtxt2">Personal Data</a> <img src="../assets/img/lp_ashsqr.jpg" width="3" height="3" alt="" class="flt1 lp_boxbult" /> <a href="ViewSchedule.php" class="flt lp_boxtxt2">Exam Schedule</a><img src="../assets/img/lp_ashsqr.jpg" width="3" height="3" alt="" class="flt1 lp_boxbult" /> <a href="notice.html" class="flt lp_boxtxt2">Notice</a>  </div>
        <img src="../assets/img/lp_boxcorn2.gif" width="258" height="12" alt="" class="flt1 lp_boxtop2" /> <img src="../assets/img/lp_boxcorn3.gif" width="260" height="15" alt="" class="flt1 lp_boxtop3" />
        <div class="flt1 lp_box2bg"> <img src="../assets/img/lp_imgclient.jpg" width="45" height="40" alt="" class="flt1 lp_imgclient" /> <span class="flt lp_txtclint">client speaks</span> <span class="flt1 lp_box2txt">&#8220;You may conduct your Educational problems and Solution to us.&#8221;<br />
          <span style="float:right; color:#F3FF9F;">- </span></span> </div>
        <img src="../assets/img/lp_boxcorn4.gif" width="260" height="14" alt="" class="flt1" /> </div>
      <div class="flt rp_block"> <img src="../assets/img/rp_topcorn.gif" width="560" height="14" alt="" class="flt1 rp_topcornn" />
        <div class="flt1 rp_inner"> <span class="flt rp_txtour">our <span style="color:#3F4534;">Vision</span></span> <span class="flt rp_nameband"><img src="../assets/img/cp_nameband.gif" width="287" height="14" alt="" /></span> <img src="../assets/img/cp_imgabacus.jpg" width="95" height="93" alt="" class="flt1 rp_abacus" /> <span class="flt rp_weltxt">We provide quality education for all.<br />
          <span class="flt rp_weltxt2"> Amhara regional state educational office primary vision is to see a developed society by its  </span><br />
       </span> <img src="../assets/img/cp_line.gif" width="511" height="1" alt="" class="flt1 rp_line" /> <span class="flt rp_txtour">our <span style="color:#3F4534;">Mission</span></span> <span class="flt rp_nameband">
          <br />
          Amhara regional state educational office primary vision is to see a developed society by its ,  text-decoration:none.Amhara regional state educational office primary vision is to see a developed society by its  Amhara regional state educational office  <br />
          <br />
 To disseminate education throughout the region with regarding equalty,quality Respond to societal problems through active community engagement.
</span><br />
            </div>
        <img src="../assets/img/rp_bottcorn.gif" width="560" height="14" alt="" class="flt1" /> 
      </div>
    </div>
    <img src="../assets/img/cp_bottcorn.gif" width="1017" height="20" alt="" class="flt1" />

  </div>

</div>


<?php 
include '../inc/fotter.php';
?>