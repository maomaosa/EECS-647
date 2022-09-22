<?php
include('conn.php');
session_start();

if(!isset($_SESSION['userid'])){
	alert('Please Login!','login.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOGIN PAGE</title>
<style type="text/css">
<?php
  if($_SESSION['t']==1){
            ?>
            body {font:normal 12px Arial;background:rgb(170,170,170) url(images/right_bg.gif) repeat-x top;margin:0px;}
        <?php }else if($_SESSION['t']==2){?>
          body {font:normal 12px Arial;background:#3179bd url(images/right_bg.gif) repeat-x top;margin:0px;}
            
       <?php }else if($_SESSION['t']==3){?>
        body {font:normal 12px Arial;background:rgb(156,233,192) url(images/right_bg.gif) repeat-x top;margin:0px;}

                <?php }?>  

td,p{font-size:12px;}


#top_menu a{padding-top:10px;}
#menu_big{font:bold 20px Arial;color:#FFF;padding-left:20px;}
a.main:link, a.main:visited {
font: normal 120% Verdana, Arial, Helvetica, sans-serif;
color: black;
text-decoration: none;
}
a:link, a:visited, a:hover {
font: normal 12px Verdana, Arial, Helvetica, sans-serif;
color: black;
text-decoration: none;
}
a:-webkit-any-link {
color: -webkit-link;
text-decoration: underline;
cursor: auto;
}
</style>
</head>
<body leftmargin="0" topmargin="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="90" id="main_table">
  <tr height="41">
    <?php
  if($_SESSION['t']==1){ ?>
    <td width="300" align="center"><font size="+2" color="#FFFFFF">MERCHANT PAGE</font></td>
       <?php }else if($_SESSION['t']==2){?>
         <td width="300" align="center"><font size="+2" color="#FFFFFF">USER PAGE</font></td>
       
            <?php }?>  
    <td valign="bottom" align="left">
	
	</td>
  </tr>
  <tr height="17">
    <td colspan="2"></td>
  </tr>
  <tr height="32">
   
   <td>
   <table width="100%" border="0" cellspacing="0" cellpadding="0" height="32">
    <tr>
     <td width="10" style=" "></td>
     <td style="">
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
       <tr>
        <td width="15"><img></td>

        
       </tr>
      </table>
	 </td>
     <td ></td>
	 <td width="15"></td>
    </tr>
   </table>
   </td>
  </tr>
</table>
</body>
</html>
