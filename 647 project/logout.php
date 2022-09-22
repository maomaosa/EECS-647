<?php
	session_start();
	$_SESSION['username']='';
	$_SESSION['name']='';
	$_SESSION['userid']='';
	$_SESSION['type']='';
	$_SESSION['t']='';

echo '   <script>  
    if (window.top!=window.self){  
        window.top.location="login.php"; 
    }  
    </script> ';
	
