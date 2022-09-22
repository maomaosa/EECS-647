<?php
include('conn.php');
session_start();
$id=$_GET['id'];


$sql="select * from product where id=$id";
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
<title>good detail</title>	
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js">
</script>
</head> 	
 <div>
      	<div>

      		<h4>DETAILS</h4>
                 
      		<form action="b_update_save.php" method="post">
      			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC" style="border: 1px solid black;border-radius: 5px;padding: 20px 0px">
      				<tr>
                <td  bgcolor="#FFFFFF" colspan="2"><center><img src="uplode/<?php echo $row['img']?>" style="width:150px"></center></td>    
               
                
                  
               
            </td>                
                              </tr>	
                              <tr>
                                    <td  align="right" bgcolor="#FFFFFF" style="width:50%" >
                                          Name:<br>
                                          Num:<br>
                                          price:<br>
                                        
                                    </td>
                                     <td align="left" bgcolor="#FFFFFF" style="padding-left: 20px">
                  <?php echo $row['product_name']?><br>
                 <?php echo $row['stock']?><br>
                 <?php echo $row['price']?><br>
                
               
                  
               
            </td>   
            <tr>
                <td  bgcolor="#FFFFFF" colspan="2"><center> <a href="fjy_save.php?id=<?php echo $row['id']?>">Buy</a> <a href="fsc_save.php?id=<?php echo $row['id']?>">Collection</a></td>                
                              </tr>
				</table>
      			 </form>
      	</div>

      </div>