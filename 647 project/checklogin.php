<?php
include('conn.php');
$username=$_POST['username'];
$password=$_POST['password'];
$t=$_POST['t'];
if($t==1){
$sql="select * from admin where username='$username' and password='$password'";
}else{
	if($t==2){
		$sql="select * from user where username='$username' and password='$password' and type =2";
	}else{
		$sql="select * from user where username='$username' and password='$password'  and type =3";
	}

}

$rs=mysqli_query($conn,$sql);

if($row=mysqli_fetch_assoc($rs)){
	session_start();
	$_SESSION['username']=$row['username'];
	$_SESSION['userid']=$row['id'];
	$_SESSION['shopid']=$row['slid'];
	$_SESSION['t']=$t;
	
	header('Location:index.php');
}
else{
	echo "<script>alert('wrong user name/password');location.href='login.php'</script>";die;
}
