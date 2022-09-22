<?php
include('conn.php');
session_start();
$uid=$_SESSION['userid'];

?>
<nav>
    <div>
    <div>
        <a>Order List</a>
       
    </div>
    <div>
        <ul class="nav navbar-nav">
        	<form>
        		  name <input type="text" name="n">  
        		  <input type="submit" value="search">
        	</form>
       
           
<div>
	<div>
		
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<thead>
			<tr>
			
			</tr>
				<tr>
					<td align="center" bgcolor="#FFFFFF" height="27">Food Picture</td>
					
					<td align="center" bgcolor="#FFFFFF">Food Name</td>
					
					<td align="center" bgcolor="#FFFFFF">price</td>
					<td align="center" bgcolor="#FFFFFF">Created Time</td>
					<td align="center" bgcolor="#FFFFFF">Address</td>
					<td align="center" bgcolor="#FFFFFF">Username</td>
					<td align="center" bgcolor="#FFFFFF">Stauts</td>
					
					
					
					
				</tr>
			</thead>
		<tbody>
			<?php

					$n=isset($_GET['n'])?$_GET['n']:'';
					
						if(empty($n)){
						$sql="select `order`.*,s.username,s.idcard from `order` left join user s on s.id=`order`.uid where  `order`.slid=$uid  ";
					}else{
						$sql="select `order`.*,s.username,s.idcard from `order` left join user s on s.id=`order`.uid where `order`.slid=$uid and `order`.name like '%{$n}%'  ";
					}
					
					
				
				
				
				$rs=mysqli_query($conn,$sql);

				while($row=mysqli_fetch_assoc($rs)){
					echo '<tr>';
					echo '<td align="center" bgcolor="#FFFFFF"><img style="width:100px" src=./uplode/'.$row['img'].'></td>';
					echo '<td align="center" bgcolor="#FFFFFF">'.$row['name'].'</td>';
					switch ($row['status']) {
						case '1':
						  $a='Paid by customer';
							break;
							case '2':
						  $a='Paid by customer';
							break;
								case '3':
						  $a='Refuse by merchant';
							break;
						
					}
					echo '<td align="center" bgcolor="#FFFFFF">'.$row['price'].'</td>';
					echo '<td align="center" bgcolor="#FFFFFF">'.$row['created'].'</td>';
					echo '<td align="center" bgcolor="#FFFFFF">'.$row['idcard'].'</td>';
					echo '<td align="center" bgcolor="#FFFFFF">'.$row['username'].'</td>';
					
					echo '<td align="center" bgcolor="#FFFFFF">'.$a.'</td>';
					echo '<td align="center" bgcolor="#FFFFFF">';

					
					echo '</td>';
					
					  
				
					echo '</tr>';
				}
				?>

		<tbody>
		</table>
		
			</div>
			</div>