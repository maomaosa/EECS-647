<?php
session_start();
include('conn.php');
/* check if sqli works */
$stmt = mysqli_prepare($conn, "insert into product (product_name,stock,price,img,uid) VALUES (?,?,?,?,?)");
if ( !$stmt ) {
    die('mysqli error: '.mysqli_error($conn));
}
/* get posted data */
$name=$_POST['bname'];
$uid=$_SESSION['userid'];
$x=$_POST['xq'];
$c=$_POST['comp'];

if(!empty($_FILES["file"]["name"])){
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);     // get file name
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 2048000)   // < 200 kb
&& in_array($extension, $allowedExts))
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "error：: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
      
        if (file_exists("uplode/" . $_FILES["file"]["name"]))
        {
            $fname=time();
        	$img=$fname.'.'.$extension;
            // if upload data not int the file, then upload to file
            move_uploaded_file($_FILES["file"]["tmp_name"], "./uplode/" . $img);
        }
        else
        {
            $fname=time();
        	$img=$fname.'.'.$extension;
            // if upload data not int the file, then upload to file
            move_uploaded_file($_FILES["file"]["tmp_name"], "./uplode/" . $img);
        }
    }
}

}else{
    echo "please upload file";die;
}


mysqli_stmt_bind_param($stmt, 'sssss', $name,$x,$c,$img,$uid);

/* running sql */
mysqli_stmt_execute($stmt);

if(mysqli_stmt_affected_rows($stmt)){
    echo "<script>alert('success');</script>";
}else{
    echo "<script>alert('flase');</script>";
}
echo "<script>location.href='f_list.php'</script>";
?>