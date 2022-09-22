<?php
include('conn.php');
$id=$_POST['id'];
$name=$_POST['address'];
$n=$_POST['phone'];

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
	$sql="update  admin set address='$name',phone='$n',img='$img' where id ='$id'";
}else{
  $sql="update  admin set address='$name',phone='$n' where id ='$id'";
}





$r=mysqli_query($conn,$sql);

if($r){
    echo "<script>alert('sucess');</script>";
}else{
    echo "<script>alert('false');</script>";
}
echo "<script>location.href='my2.php'</script>";
?>
