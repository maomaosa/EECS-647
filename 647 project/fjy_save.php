<?php
include('conn.php');
$b=$_GET['id'];

$t=1;
session_start();
$sq="select * from product where id ='{$b}'";
$rs=mysqli_query($conn,$sq);
$row=mysqli_fetch_assoc($rs);

$uid=$_SESSION['userid'];
$t=date('Y-m-d H:i',time());

$sql="insert into `order`(name,price,uid,created,status,img,slid) values('{$row['product_name']}','{$row['price']}','$uid','$t',1,'{$row['img']}','{$row['uid']}')";

$sql2="update staff set money=money-'{$row['price']}' where id=$uid ";
$rs2=mysqli_query($conn,$sql2);
$rs2=mysqli_query($conn,$sql);
if($rs2){
	 echo "<script>alert('success');location.href='f_list.php'</script>";
}

?>