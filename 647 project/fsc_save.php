<?php
include('conn.php');
$b=$_GET['id'];
$t=1;
session_start();
$uid=$_SESSION['userid'];


$sql="insert into `favorite`(product_id,user_id) values('{$b}','{$uid}')";
$rs2=mysqli_query($conn,$sql);
if($rs2){
	 echo "<script>alert('success');location.href='sc_list.php'</script>";
}

?>