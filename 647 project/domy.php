<?php
include('conn.php');
session_start();
$id=$_SESSION['userid'];
$e=$_POST['email'];
$n=$_POST['age'];
$x=$_POST['phone'];
$c=$_POST['ads'];
$d=$_POST['db'];
$p=$_POST['pr'];
$sex=$_POST['sex'];
$na=$_POST['name'];
if(!empty($_FILES["file"]["name"])){
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);     
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 204800)  
&& in_array($extension, $allowedExts))
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "error: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
      
        if (file_exists("uplode/" . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " already exist! ";
        }
        else
        {
            $fname=time();
        	$img=$fname.'.'.$extension;
            move_uploaded_file($_FILES["file"]["tmp_name"], "./uplode/" . $img);
        }
    }
}
	$sql="update  user set email='$e',age='$n',phone='$x',idcard='$c',db='$d',pr='$p',name='$na',sex='$sex',img='$img' where id ='$id'";
}else{
 $sql="update  user set email='$e',age='$n',phone='$x',idcard='$c',db='$d',pr='$p',name='$na',sex='$sex' where id ='$id'";
}




$r=mysqli_query($conn,$sql);

if($r){
    echo "<script>alert('success');</script>";
}else{
    echo "<script>alert('false');</script>";
}
echo "<script>location.href='my.php'</script>";
?>
