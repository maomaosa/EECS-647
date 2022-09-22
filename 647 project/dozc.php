<?php
include('conn.php');

$username=$_POST['username'];
$password=$_POST['password'];
$c=$_POST['ads'];
$p=$_POST['phone'];
$t=$_POST['t'];
$s=$_POST['sex'];







$sql="select * from user where username='$username'";
$rs=mysqli_query($conn,$sql);

if($row=mysqli_fetch_assoc($rs)){
	echo "<script>alert('user already exist');location.href='login.php'</script>";die;
	
}
else{
$stmt = mysqli_prepare($conn, "insert into user (username,password,phone,idcard,type,sex,money) VALUES (?,?,?,?,?,?,?)");
if ( !$stmt ) {
    die('mysqli error: '.mysqli_error($conn));
}
$ms=1000;


mysqli_stmt_bind_param($stmt, 'sssssss', $username,$password,$p,$c,$t,$s,$ms);
mysqli_stmt_execute($stmt);
if(mysqli_stmt_affected_rows($stmt)){
    echo "<script>alert('success');</script>";
}else{
    echo "<script>alert('false');</script>";
}
echo "<script>location.href='login.php'</script>";
}
