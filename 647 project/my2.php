<?php
include('conn.php');
session_start();
$id=$_SESSION['userid'];


$sql="select * from admin where id=$id";
$rs=mysqli_query($conn,$sql);

if(mysqli_num_rows($rs)){
      $row=mysqli_fetch_assoc($rs);
}
else{
      echo'no data！';exit;
}

?>
 <!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8" />
<title>merchant detail</title>	
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js">
</script>
</head> 	
 <div>
      	<div>
      		<h4>Edit information</h4>
      		<form action="aupd.php" method="post" enctype="multipart/form-data">
      			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
      				
                               <tr>
                                    <td align="right" bgcolor="#FFFFFF">Img：</td>
                                    <td align="left" bgcolor="#FFFFFF"><input type="file" name="file"/></td>           
                              </tr>
                              <tr>
                                    <td align="right" bgcolor="#FFFFFF">Address:</td>
                                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="address"/ value="<?php echo $row['address']?>" ></td>
                                    <input type="hidden" name="id" value="<?php echo $row['id']?>">           
                              </tr>
                              <tr>
                                     <td align="right" bgcolor="#FFFFFF">Phone:</td>
                                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="phone"/ value="<?php echo $row['phone']?>"></td>           
                              </tr>
                             
                              
      				
      				<td width="30%" align="right"><input type="submit" value="submit"/></td>
					<td align="left">	
					<input type="reset" name="button2" id="button2" value="reset" />
					</td>
				</table>
      			 </form>
      	</div>

      </div>