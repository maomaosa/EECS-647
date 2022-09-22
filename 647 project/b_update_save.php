<?php
include('conn.php');
$id=$_POST['id'];
$name=$_POST['bname'];
$n=$_POST['num'];
$x=$_POST['xq'];
$c=$_POST['comp'];


$sql="update  ban set bname='$name',num='$n',xq='$x',comp='$c' where id ='$id'";


$r=mysqli_query($conn,$sql);

if($r){
    echo "<script>alert('success');</script>";
}else{
    echo "<script>alert('fail');</script>";
}
echo "<script>location.href='b_list.php'</script>";
?>
