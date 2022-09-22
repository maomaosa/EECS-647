<?php
include('conn.php');

$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from staff where email='$username'";
$rs=mysqli_query($conn,$sql);

if($row=mysqli_fetch_assoc($rs)){
	$sql="update staff set password='$password' where id ={$row['id']}";

$r=mysqli_query($conn,$sql);

}else{
	echo "<script>alert('already exist');location.href='login.php'</script>";die;

}


if($r){
    echo "<script>alert('success');</script>";
}else{
    echo "<script>alert('false');</script>";
}
echo "<script>location.href='login.php'</script>";

