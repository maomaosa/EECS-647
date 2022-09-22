<?php
include('conn.php');
session_start();
$id=$_SESSION['userid'];


$sql="select * from user where id=$id";
$rs=mysqli_query($conn,$sql);

if(mysqli_num_rows($rs)){
      $row=mysqli_fetch_assoc($rs);
}
else{
      echo'no data!';exit;
}

?>
 <!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8" />
<title>user detial</title>	
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js">
</script>
</head> 	
 <div>
      	<div>
      		<h4>Edit information</h4>
      		<form action="domy.php" method="post" enctype="multipart/form-data">
      			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
      				 <tr>
                                    <td align="right" bgcolor="#FFFFFF">Img：</td>
                                    <td align="left" bgcolor="#FFFFFF"><input type="file" name="file"/></td>           
                              </tr>
                              <tr>
                                    <td align="right" bgcolor="#FFFFFF">E-mail:</td>
                                    <td align="left" bgcolor="#FFFFFF"><input type="email" name="email"/ value="<?php echo $row['email']?>"></td>    
                              </tr>
                              <tr>
                                     <td align="right" bgcolor="#FFFFFF">Age:</td>
                                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="age"/ value="<?php echo $row['age']?>"></td>           
                              </tr>
                              <tr>
                                     <td align="right" bgcolor="#FFFFFF">Name:</td>
                                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="name"/ value="<?php echo $row['name']?>"></td>           
                              </tr>
                               <tr>
                                     <td align="right" bgcolor="#FFFFFF">phone：</td>
                                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="phone"/ value="<?php echo $row['phone']?>"></td>           
                              </tr>
                               <tr>
                                     <td align="right" bgcolor="#FFFFFF">Address：</td>
                                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="ads"/ value="<?php echo $row['idcard']?>"></td>           
                              </tr>
      				 <tr>
                                     <td align="right" bgcolor="#FFFFFF">Date of birth：</td>
                                    <td align="left" bgcolor="#FFFFFF"><input type="date" name="db"/ value="<?php echo $row['db']?>"></td>           
                              </tr>
                               <tr>
                                     <td align="right" bgcolor="#FFFFFF">Professional：</td>
                                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="pr"/ value="<?php echo $row['pr']?>"></td>           
                              </tr>
                              <tr><td align="right" bgcolor="#FFFFFF">Sex：</td>
                        <td bgcolor="#FFFFFF"><p>Man<input type="radio" name="sex" value="Man" checked="" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWoman <input type="radio" name="sex" value="Woman" /></p></td>
                  </tr>
      				
      				<td width="30%" align="right"><input type="submit" value="submit"/></td>
					<td align="left">	
					<input type="reset" name="button2" id="button2" value="reset" />
					</td>
				</table>
      			 </form>
      	</div>

      </div>