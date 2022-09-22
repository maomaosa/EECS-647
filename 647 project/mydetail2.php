<?php
include('conn.php');
session_start();
$id=$_GET['id'];


$sql="select * from admin where id=$id";
$rs=mysqli_query($conn,$sql);

if(mysqli_num_rows($rs)){
      $row=mysqli_fetch_assoc($rs);
}
else{
      echo'no data';exit;
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

      		<h4>Shop Detail</h4>
                    <a href="my2.php">Edit</a><br><br>
      		<form action="aupd.php" method="post">
      			<table width="70%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC" style="border: 1px solid black;border-radius: 5px;padding: 20px 0px">
      				<tr>
                <td align="right" bgcolor="#FFFFFF" style="width:50%"><?php if(empty($row['img'])):?><img src="images/D1.jpg" style="width: 80px"><?php else:?><img src="uplode/<?php echo $row['img']?>" style="width: 80px"><?php endif?></td>    
                 <td align="left" bgcolor="#FFFFFF" style="padding-left: 20px">
                  Username:<?php echo $row['username']?><br><br>
                 
                  Address:<?php echo $row['address']?><br>
                  Phone:<?php echo $row['phone']?><br>
                 
                  
               
            </td>                
                              </tr>	
                              
				</table>
      			 </form>
      	</div>

      </div>