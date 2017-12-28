<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>注册检查界面</title>
</head>

<body>
<?php
  if(isset($_POST))  
    {  
        $name = $_POST["name"];  
        $psw = $_POST["password"];  
        $psw_confirm = $_POST["confirm"];
        if(($name== "" )||($psw =="")||($psw_confirm== ""))  
        {  
            echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
        }  
        else  
        {  
            if($psw == $psw_confirm)  
            {  
               $connect =  mysql_connect("localhost","root","root");   //连接数据库  
                mysql_select_db("yhf");  //选择数据库  
				
                mysql_query("set names 'utf-8'"); //设定字符集  
				
                $sql = "select * from test where name = '$_POST[name]'"; //SQL语句
                
                $result = mysql_query($sql,$connect );    //执行SQL语句  
                $num = mysql_num_rows($result); //统计执行结果影响的行数  
                if($num)    //如果已经存在该用户  
                {  
                    echo "<script>alert('用户名已存在'); history.go(-1);</script>";  
                }  
                else    //不存在当前注册用户名称  
                {  
                    $sql_insert = "insert into test (name,password) values('$_POST[name]','$_POST[password]')";  
                    $res_insert = mysql_query($sql_insert,$connect);  
                    //$num_insert = mysql_num_rows($res_insert);  
                    if($res_insert)  
                    {  
                        echo "<script>alert('注册成功！'); history.go(-1);</script>";  
                    }  
                    else  
                    {  
                        echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                    }  
                }  
            }  
            else  
            {  
                echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
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