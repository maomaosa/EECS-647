<?php
include('conn.php');
session_start();

if(!isset($_SESSION['userid'])){
	alert('Please Login!','login.php');
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <title></title>
        <style type="text/css">
            body{margin:0;padding:0;overflow-x:hidden;}
            html, body{height:100%;}
            img{border:none;}
            *{font-family:'Monaco';font-size:12px;color:#626262;}
            dl,dt,dd{display:block;margin:0;}
            a{text-decoration:none;}
            #bg{background-image:url(images/content/dotted.png);}
            .container{width:100%;height:100%;margin:auto;}


            <?php 
            if($_SESSION['t']==1){
            ?>
            .menus_area{width:160px;height:auto !important;overflow:visible !important;position:fixed;height:100% !important;background-color:rgb(170,170,170);}
             .menus_area dt{padding-left:40px;padding-right:10px;background-repeat:no-repeat;background-position:10px center;background-color:rgb(170,170,170);color:#f5f5f5;font-size:14px;position:relative;line-height:48px;cursor:pointer;}
              .menus_area dd{background-color:rgb(170,170,170);;padding-left:40px;display: none}
               dt.on{background-color: rgb(170,170,170);}
        <?php }else if($_SESSION['t']==2){?>
             .menus_area{width:160px;height:auto !important;overflow:visible !important;position:fixed;height:100% !important;background-color:#3992d0;}
             .menus_area dt{padding-left:40px;padding-right:10px;background-repeat:no-repeat;background-position:10px center;background-color: #3992d0;color:#f5f5f5;font-size:14px;position:relative;line-height:48px;cursor:pointer;}
              .menus_area dd{background-color:#317eb4;padding-left:40px;display: none}
               dt.on{background-color: #317eb4}
       <?php }else if($_SESSION['t']==3){?>
 .menus_area{width:160px;height:auto !important;overflow:visible !important;position:fixed;height:100% !important;background-color:rgb(156,233,192);}
             .menus_area dt{padding-left:40px;padding-right:10px;background-repeat:no-repeat;background-position:10px center;background-color:rgb(52,164,133);color:#f5f5f5;font-size:14px;position:relative;line-height:48px;cursor:pointer;}
              .menus_area dd{background-color:rgb(52,164,133);padding-left:40px;display: none}
               dt.on{background-color: rgb(52,164,133)}
                <?php }?>  

                .line{height:2px;width:100%;background-image:url(images/left/line_bg.png);background-repeat:repeat-x;}
           
           
           
        </style>

    </head>
    <body id="bg">

        <div class="container">
            <div class="menus_area" id="menus_area">
               
                <div class="line"></div>
                  <dl class="custom">
                     <?php if($_SESSION['t']==1):?>
                    <dt><a href="mydetail2.php?id=<?php echo $_SESSION['userid']?>" target="right">Information</a></dt>
                   <?php else:?>
                    <dt><a href="mydetail.php" target="right">Information</a></dt>
                   <?php endif?>
                    <dt><a href="logout.php" target="right">Logout</a></dt>
                   
                </dl>
                
                 <?php if($_SESSION['t']!=3):?>
                 <dl class="system_log">
                    <dt class="first_dd"><a href="f_list.php" target="right">Product Search</a></dt>
                     <?php if($_SESSION['t']==1):?>
                    <dt class="first_dd"><a href="f_new.php" target="right">New Product</a></dt>
                 <?php endif?>
                </dl>
                   
            <?php endif?>
                 <dl class="system_log">
                    <?php if($_SESSION['t']==2):?>
                    <dt class="first_dd"><a href="fjy_list.php" target="right">MyOrder</a></dt>
                    <?php endif?>
                     <?php if($_SESSION['t']!=2):?>
                    <dt class="first_dd"><a href="mylist.php" target="right">OrderList</a></dt>
                     <?php endif?>
                      <?php if($_SESSION['t']==2):?>
                    <dt class="first_dd"><a href="sc_list.php" target="right">My Favorite</a></dt>
                     <?php endif?>
                
                </dl>
               

               
               

                
            </div>
        </div>

        <script type="text/javascript" src="js/jquery.js"></script> 
        <script type="text/javascript">

            $(function() {
                $("#menus_area").find("dt").click(function() {
                    if (!$(this).hasClass("on")) {
                        $("#menus_area").find("dt").removeClass("on");
                        $(this).addClass("on");
                        $('dd').slideUp();
                        $(this).nextAll('dd').slideToggle();
                    }
                });
            })
        </script>
		<div style="text-align:center;">
</div>
    </body>
</html>