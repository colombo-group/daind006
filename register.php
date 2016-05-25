<?php
if(isset($_POST['username'])&& isset($_POST['password'])&& isset($_POST['email']) && isset($_POST['fullname']) && isset($_POST['phone']))
    {
        $link = mysqli_connect("localhost","root","daiyeulinh","demo1");
        if(mysqli_connect_errno())
        {
            echo "Failsed";
            exit();
        }
        $username=$_POST['username'];
        $conn=mysqli_connect("localhost","root","daiyeulinh") or die("can't connect this database");
        mysqli_select_db("demo1",$conn);
        $num = mysqli_num_rows($link->query("SELECT username FROM pre_user WHERE username ='$username'"));
        if (
             $num > 0
            )
        {
            echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        else
        {
            $query ="INSERT INTO `pre_user` (`id`, `username`, `password`, `email`, `fullname`, `phone`, `mota`,`lever`) VALUES (NULL , '".$_POST['username']."', '".md5($_POST['password'])."', '".$_POST['email']."', '".$_POST['fullname']."', '".$_POST['phone']."', '".$_POST['mota']."', '1')";
        }


        if ($link->query($query))
        {
            echo "<div style='color: #000000; font-size: 50px;margin : 0 auto;'>insert!</div>";
        }
        else
        {
            echo "wrong!";
        }
    }
else
    {
        $error = "You have enter username and password";
    }
?>
<html>
<head>
    <title>form</title>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="body">
    <div id="body-l">
        <form method="post" class="all">
            <div style="padding-top: 20px">
                <div></div>
                <div class="form">
                    <ul>
                        <li>FullName</li>
                        <li1><input name="fullname" type="text" placeholder="Tên đầy đủ" class="input" id="fullname"/></li1>
                    </ul>
                </div>
                <div class="form">
                    <ul>
                        <li>Phone</li>
                        <li1><input name="phone" type="text" placeholder="Số điện thoại" class="input" id="phone"/></li1>
                    </ul>
                </div>
                <div class="form">
                    <ul>
                        <li>Email</li>
                        <li1><input name="email" type="text" placeholder="Email của bạn" class="input" id="email"/></li1>
                    </ul>
                </div>
                <div class="form">
                    <ul>
                        <li>UserName</li>
                        <li1><input name="username" type="text" placeholder="Tên đăng nhập" class="input" id="username"/></li1>
                    </ul>
                </div>
                <div class="form">
                    <ul>
                        <li>Password</li>
                        <li1><input name="password" type="password" placeholder="mật khẩu của bạn" class="input" id="password"/></li1>
                    </ul>
                </div>
                <div class="form">
                    <ul>
                        <li>Mô tả</li>
                        <li1><input name="mota" type="text" placeholder="mô tả về bản thân" class="input" id="mota"/></li1>
                    </ul>
                </div>
                <div>
                    <input name="register" type="submit" class="button" id="button" value="Đăng ký"/>
                </div>
                <div>
                    <?php
                    echo(isset($error))? $error:"";
                    ?>
                </div>
            </div>
        </form>
    </div>

    <div id="body-right">
    
    </div>    
</div>    
</body>
</html>
