﻿<!DOCTYPE html>
	<head>
		<meta charset="utf-8" />
		<title>Register Page</title>
		<style>
			html,body{
				margin: 0;
				padding: 0;
				background-image: url('images/backgrounds.jfif');
				}
			form{
			height:350px;
			margin:100px auto 0;
			
			text-align: center;
			}
		    form h3{
		    	margin: 0 0 50px 0;
		         height: 24px/50px;
		         font: 50px; 
		         font:24px/50px Monaco;
		         background: #dfe0e7;
		         boder-bottom:1px solid;
		        #26272b;
		        border-radius:8px 8px 0 0;
		        }
		    .input1{
		    	font:16px/32px Monaco;
		    	width:240px;
		    	}
		    .btn1{
		    	font:18px/36px Monaco;
		    	width:320px;border: 0;
		    	background: rgb(128,172,235); 
		    	border-radius: 4px;
		    	color: #fff;
		    	}
				p{
					font:18px/36px Monaco;
				}
				.button {
    background: gray;
    border: none;
    color: white;
    padding: 10px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 2px;
    cursor: pointer;
	border-radius: 4px;
}

		</style>
	</head>
	<body>
			<form action="dozc2.php" method="post" style="margin-top: 20px">
			<table width="500" border="0" align="center" cellpadding="5" cellspacing="1"  style="opacity: 0.95;background: rgb(240,240,240);">

		<tr><td><h3 style="font-size:50px;color: white">Merchant Register<style="width:20%;position: relative;top:5px"></h3></td></tr>
			<td><p>Username：<input type="text" name="username" class="input1"/></p></td>
			</tr>
			<tr>
			<td><p>Password：<input type="password" name="password" class="input1"/></p></td>
			</tr>
			
			
			<tr>
				<td><p>Address:&emsp;<input type="text" name="ads" class="input1"/></p></td>
				<input type="hidden" name="t" value="2">
			</tr>
			<tr>
			<td><p><input type="submit" value="Register " class="btn1"/></p></td>

			</tr>
		
	</table>
		</form>
	</body>
</html>
