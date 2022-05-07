<?php 
include './header.php';

try{
include_once '../../include/db_connect.php';
$valdate = array();
}catch(Exception $e){
	echo $errors = $e->getMessage();
}

	$sql = "SELECT * FROM notice";
	$result = $db->query($sql);
	

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
		font-size: 16px;
		font-weight: bolder;
		margin-left: 20px;
		color: #444;
	}
	th{
		font-size: 24px;
		text-align: left;
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

<?php while ($row = $result->fetch()) {
	?>
		<tr>
      <th height="37" align="center">Created at</th>
      <td>
      	<?php echo $row['created_at']; ?>

      </td>
     
	</tr>	 
	<tr>
      <th height="37" align="center">Title</th>
      <td>
      	<?php echo $row['title']; ?>
      </td>
     
	</tr>
	<tr>
      <th height="37" align="center">Description</th>
      <td>
      	<?php echo $row['description']; ?>
      </td>
	  </tr>
	  <tr>
	  <th height="37" align="center">From</th> <td><?php echo $row['_from']; ?></td>
	 
	</tr>
<?php } ?>
	</table>	
</div>
</div>
	    
    
    <img src="../assets/img/cp_bottcorn.gif" width="1017" height="20" alt="" class="flt1" />

  </div>

</div>


<?php 

include '../inc/fotter.php';
?>