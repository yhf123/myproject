<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>注册界面</title>
<style type="text/css">
	body{ background:url(images/24.jpg);
	width: 1600px;
	background-repeat:no-repeat;background-position:center
 

	} 
</style>
</head>

<body>
<audio src="music/可爱颂.mp3" autoplay loop="loop"></audio>
<form action="regcheck.php" method ="post" >
<style type="text/css">
.width {
 width: 160px;
}
</style> 
   <table width="100" border="0" align="center">
 <tr>
 	<!--<td><img align="center" src="image/xjq.jpg"></td>-->
 </tr>
 </table> 
<table width="261" border="0" align="center">
    <tr>   
      <td width="67">用户名：</td>
      <td width="100"><input  type="text" name="name" class="width" /></td>
    </tr>
    <tr>
      <td>密码：</td>
      <td><input type="password" name="password"  class="width" /></td>
    </tr>
    <tr>
     <td>确认密码：</td>
      <td><input type="password" name="confirm"  class="width" /></td>
    </tr>
    <tr>
    <td><input type="submit" name="button" value="注册会员" /></td>
    <td><a href="login.php">登录</a></td>
    </tr>
   </table>
</form>  
</body>
</html>