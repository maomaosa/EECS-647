
<?php
include('conn.php');
?>
 <!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8" />
<title>new product</title>	
<style>
.tr {
	font-family: "Monaco,Verdana, Monaco";
	color:black;
	font-size:21px;
	font-weight:bolder;
	background:#a8c7ce;
</style>
</head> 	
 <div>
      	<div>
      		
      		<form action="f_new_save.php" method="post" enctype="multipart/form-data">
      			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
      				<tr>
			<td colspan="2" align="left" class="tr"> Product New</td>
			</tr>
                               <tr>
                                    <td align="right" bgcolor="#FFFFFF">Img：</td>
                                    <td align="left" bgcolor="#FFFFFF"><input type="file" name="file"/></td>           
                              </tr>
					<tr>
      					<td align="right" bgcolor="#FFFFFF">Name：</td>
      					<td align="left" bgcolor="#FFFFFF"><input type="text" name="bname"/></td>		
      				</tr>
                              
                               <tr>
                                    <td align="right" bgcolor="#FFFFFF">Num：</td>
                                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="xq"/></td>           
                              </tr>
                              <tr>
                                    <td align="right" bgcolor="#FFFFFF">Price：</td>
                                    <td align="left" bgcolor="#FFFFFF"><input type="text" name="comp"/></td>           
                              </tr>
                              
 
      				  <tr>
                 
                  </tr>
      				
      				<td width="30%" align="right"><input type="submit" value="submit"/></td>
					<td align="left">	
					<input type="reset" name="button2" id="button2" value="reset" />
					</td>
				</table>
      			 </form>
      	</div>
      </div>