<?php
include('conn.php');
session_start();
$uid=$_SESSION['userid'];

?>
<nav>
    <div>
    <div>
        <a>My Favorite</a>
       
    </div>
    <div>
        <ul class="nav navbar-nav">
        	<form>
        		  name <input type="text" name="n">  
        		  <input type="submit" value="search">
        	</form>
  
           
<div>
	<div>
		
		<table width="100%" b`order`="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<thead>
			<tr>
			
			</tr>
				<tr>
					<td align="center" bgcolor="#FFFFFF" height="27">Picture</td>
					<td align="center" bgcolor="#FFFFFF">Name</td>
					<td align="center" bgcolor="#FFFFFF">price</td>
					<td align="center" bgcolor="#FFFFFF">Num</td>
					
					
					
					
				</tr>
			</thead>
		<tbody>
			<?php

					$n=isset($_GET['n'])?$_GET['n']:'';
					
					
						if(empty($n)){
						$sql="select `favorite`.*,p.* from `favorite` left join product p  on p.id=`favorite`.product_id where `favorite`.user_id={$uid} ";
					}else{
						$sql="select `favorite`.*,p.* from `favorite` left join product p on p.id=`favorite`.product_id where `favorite`.user_id={$uid} and `p`.product_name like '%{$n}%'  ";
					}
					
					
					
				
				
				$rs=mysqli_query($conn,$sql);

				while($row=mysqli_fetch_assoc($rs)){
					echo '<tr>';
					echo '<td align="center" bgcolor="#FFFFFF"><img style="width:100px" src=./uplode/'.$row['img'].'></td>';
					echo '<td align="center" bgcolor="#FFFFFF">'.$row['product_name'].'</td>';
					
					echo '<td align="center" bgcolor="#FFFFFF">'.$row['price'].'</td>';
					echo '<td align="center" bgcolor="#FFFFFF">'.$row['stock'].'</td>';
					
						
					
					
					
					  
				
					echo '</tr>';
				}
				?>
		<tbody>
		</table>	
			</div>
			</div>