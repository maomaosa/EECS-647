<?php
include('conn.php');
session_start();
if(!isset($_SESSION['userid'])){
echo "<script>alert('please login');location.href='login.php'</script>";die;
}
?>
<!DOCTYPE html>
<html>
<head>		
<title>backend</title>	
</head> 	      
<frameset rows="90,*" frameborder=1 border=10>                 
<frame src="top.php" name="top" noresize > 	          
<frameset cols="160,*">	                  
<frame src="menu.php" name="left" scrolling=no noresize>		          
<frame src="import.php" name="right" noresize>		  
</frameset> 
<frame src="footer.html" frameborder="0" noresize="noresize" scrolling="no" />
</frameset><noframes></noframes>		
   </html>           
</html>
