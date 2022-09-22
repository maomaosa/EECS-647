<?php
header('content-type:text/html;charset=utf-8');

$conn=mysqli_connect('mysql.eecs.ku.edu','y900f401','ooz9ahKa','y900f401') or die('数据库连接出错！');
mysqli_query($conn,'set names utf8');

