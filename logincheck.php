<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>登录检查用户界面</title>
</head>

<body>
<?php 
      
    if(isset($_POST))        //$_POST用于收集来自表单的值
    {  
        $user = $_POST["name"];  
        $psw = $_POST["password"];   
        if($user == "" || $psw == "")  
        {  
            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
        }  
		
        else  
        {  
            $user = $_POST["name"];  
            $psw = $_POST["password"]; 
           $connect = mysql_connect("localhost","root","root")or die("连接数据库失败！！！");
			//if($connect)
				//echo'已经成功连接数据库！！！<br />';
	       
            mysql_select_db("yhf",$connect);  // mysql_select_db("yhf");  
            mysql_query("set names 'utf-8'");  
            $sql = "select name from test where name ='$user'  and password = '$psw' limit 1";  
            $result = mysql_query($sql);  
            $num = mysql_num_rows($result);          //mysql_num_rows() 返回结果集中行的数目
            if($num)  
            {  
                $row = mysql_fetch_array($result);  //将数据以索引方式储存在数组中  
				
				
                echo $row[0];  
            }  
            else  
            {  
                echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }  
  
?>  
</body>
</html>