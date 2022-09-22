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
<title>detail</title>	
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js">
</script>
</head> 	
 <div>
      	<div>

      		<h4>Personal information</h4>
                   <a href="my.php">Edit</a><br><br>
      		<form action="b_update_save.php" method="post">
      			<table width="70%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC" style="border: 1px solid black;border-radius: 5px;padding: 20px 0px">
      				<tr>
               
                 <td align="right" bgcolor="#FFFFFF" style="width:50%"><?php if(empty($row['img'])):?><img src="images/5.jpg" style="width:100px"><?php else:?><img src="uplode/<?php echo $row['img']?>" style="width:100px"><?php endif?></td>     
                 <td align="left" bgcolor="#FFFFFF" style="padding-left: 20px">
                  Name:<?php echo $row['name']?><br>
                  Username:<?php echo $row['username']?><br>
                  Age:<?php echo $row['age']?><br>
                  Gender:<?php echo $row['sex']?><br>
                  
               
            </td>                
                              </tr>	
                              <tr>
                                    <td  align="right" bgcolor="#FFFFFF">
                                          Email:<br>
                                          Phone:<br>
                                          Sex:<br>
                                          Address:<br>
                                          Date of birth:<br>
                                          Professional:
                                    </td>
                                     <td align="left" bgcolor="#FFFFFF" style="padding-left: 20px">
                  <?php echo $row['email']?><br>
                 <?php echo $row['phone']?><br>
                 <?php echo $row['sex']?><br>
                  <?php echo $row['idcard']?><br>
                  <?php echo $row['db']?><br>
                  <?php echo $row['pr']?><br>
                  
               
            </td>                
                              </tr>
				</table>
      			 </form>
      	</div>

      </div>