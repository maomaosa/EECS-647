<?php
include('conn.php');


$id=$_GET['id'];

if(!is_numeric($id)){
	alert('ID is not a number','zy_list.php');exit;
}	
	
	$sql="delete from product where id=$id";
	$r=mysqli_query($conn,$sql);
	
	if($r){
    echo "<script>alert('success');</script>";
}else{
    echo "<script>alert('false');</script>";
}
echo "<script>location.href='f_list.php'</script>";

