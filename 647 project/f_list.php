<?php
include('conn.php');
session_start();
$uid=isset($_GET['uid'])?$_GET['uid']:'';
$sid=$_SESSION['userid'];
?>
<nav>
    <div>
    <div>
    	
        <a>product Search</a>
    </div>
    <div>
        <ul class="nav navbar-nav">
           <form method="get">
           	Name:<input type="" name="n">
           	Price:<input type="" name="ps" style="width:50px">-<input type="" name="pn" style="width:50px">
           	<input type="submit" name="">
           </form>
           
<div>
	<div>
		
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<thead>
			<tr>
			
			</tr>
				<tr>
		
					<td align="center" bgcolor="#FFFFFF">Picture</td>
					<td align="center" bgcolor="#FFFFFF">Name</td>
					<td align="center" bgcolor="#FFFFFF">Num</td>
					<td align="center" bgcolor="#FFFFFF">Price</td>
					<td align="center" bgcolor="#FFFFFF">Option</td>
				</tr>
			</thead>
		<tbody>
			<?php
				$n=isset($_GET['n'])?$_GET['n']:'';
				$ps=!empty($_GET['ps'])?$_GET['ps']:0;
				$pn=!empty($_GET['pn'])?$_GET['pn']:999999;
				$where='';
				if(!empty($n)){
					$where = " and product.product_name like '%{$n}%'";
				}
				if(empty($uid)){
					$sql="select product.* from product   where product.price between {$ps} and {$pn} $where ";
				}else{
					$sql="select product.*,a.username,a.address from product  left join admin a on a.id =product.uid where uid={$uid} and product.price between {$ps} and {$pn} $where";
				}
				
				$rs=mysqli_query($conn,$sql);

				while($row=mysqli_fetch_assoc($rs)){
					echo '<tr>';
					echo '<td align="center" bgcolor="#FFFFFF"><img style="width:100px" src=./uplode/'.$row['img'].'></td>';
					echo '<td align="center" bgcolor="#FFFFFF">'.$row['product_name'].'</td>';
					
					echo '<td align="center" bgcolor="#FFFFFF">'.$row['stock'].'</td>';
					$sqla="select AVG(price) as av from product where uid ={$row['uid']}";
					echo '<td align="center" bgcolor="#FFFFFF">'.$row['price'].'</td>';
				
					
					
					  
					echo '<td align="center" bgcolor="#FFFFFF">';
					 if($_SESSION['t']==1 && $row['uid'] == $sid ){
					echo '<a href="f_delete.php?id='.$row['id'].'" onclick="return
					confirm(\'DELETE?\')">Delete</a>';
					}
					else if($_SESSION['t']==1){
						
					}
					else{
						echo '<a href="goodsdetail.php?id='.$row['id'].'">Buy</a> ';
					}
					echo '</td>';
					echo '</tr>';
				}
				?>
		<tbody>
		</table>	
			</div>
			</div>