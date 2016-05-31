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
            $query ="INSERT INTO `pre_user` (`id`, `username`, `password`, `email`, `fullname`, `phone`, `mota`,`level`) VALUES (NULL , '".$_POST['username']."', '".md5($_POST['password'])."', '".$_POST['email']."', '".$_POST['fullname']."', '".$_POST['phone']."', '".$_POST['mota']."','1')";
        }


        if ($link->query($query))
        {
            echo "<div style='color: #000000; font-size: 50px;margin : 0 auto;'>Dang ky thanh cong</div>";
        }
        else
        {
            echo "co loi xay ra";
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
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
<script>
    jQuery(document).ready(function ($) {

        var jssor_1_SlideoTransitions = [
            [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
            [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
            [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
            [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
            [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
            [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
            [{b:10000,d:2000,x:-379,e:{x:7}}],
            [{b:10000,d:2000,x:-379,e:{x:7}}],
            [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
        ];

        var jssor_1_options = {
            $AutoPlay: true,
            $SlideDuration: 1000,
            $SlideEasing: $Jease$.$OutQuint,
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);



    });
</script>
<style>

    /* jssor slider bullet navigator skin 05 css */
    /*
    .jssorb05 div           (normal)
    .jssorb05 div:hover     (normal mouseover)
    .jssorb05 .av           (active)
    .jssorb05 .av:hover     (active mouseover)
    .jssorb05 .dn           (mousedown)
    */
    .jssorb05 {
        position: absolute;
    }
    .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
        position: absolute;
        /* size of bullet elment */
        width: 16px;
        height: 16px;
        background-color: #dddddd;
        border-radius: 8px;
        overflow: hidden;
        cursor: pointer;
    }
    .jssorb05 div { background-position: -7px -7px; }
    .jssorb05 div:hover, .jssorb05 .av:hover { background-color: red }
    .jssorb05 .av { background-color: red }
    .jssorb05 .dn, .jssorb05 .dn:hover { background-color: red }

</style>
<div id="header">
    <div id="h-top" style="background-color:#3b5998;width: 100%;height: 80px">
        <div style="height: 80px;width: 1000px;margin: 0 auto">
            <div id="h-t-left">
                <ul>
                    <li style="margin-top: 10px; margin-left: 0px"><img src="css/img/javislogo.png"></li>
                    <li style="margin-top: 15px"><input type="text" placeholder="search everything you want" class="input"/></li>
                    <li style="margin-top: 20px"><input type="button" style="height: 35px;width: 75px;border-radius: 5px;color: #3b5998 ; background-color: #ffffff" value="Search"></li>
                </ul>
            </div>
            <div id="h-t-right">
                <ul>
                    <li><img src="css/img/phone.png"></li>
                    <li><a href="">01664628565</a></li>
                    <li><img src="css/img/mail.png"></li>
                    <li><a href="">dai12051997@gmail.com</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div style="height: 140px;width: 1000px;margin: 0 auto;padding-top: 10px;padding-bottom: 10px">
        <div style="float: left"><img src="css/img/logo.png"></div>
        <div style="float: right" id="right-plus">
            <ul>
                <li><img src="css/img/home.png"></li>
                <li><a href="home.php">Home</a></li>
                <li><a href="">Libruary</a></li>
                <li><a href="">image</a><li>
                <li><a href="">profile</a></li>
            </ul>
        </div>
    </div>
    <div id="h-body" style="height: 380px;width: 100%;background: linear-gradient(#3b5998,#ffffff);">
        <div id="option-h-b">
            <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1000px; height: 350px; overflow: hidden; visibility: hidden;">

                <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1000px; height: 350px; overflow: hidden;">
                    <div data-p="225.00" style="display: none;">
                        <img data-u="image" src="css/img/minhhoa1.jpg" />
                        <div style="height: 100px; width: 300px; background-color: #ffffff;position: absolute; opacity: 0.7 ;margin-top: 60px">
                            <ul style="list-style-type: none;padding-left: 10px;opacity: 1;">
                                <li style="color: #3b5998 ;font-size: 25pt; opacity: 1">Anime wonder word</li>
                            </ul>
                        </div>
                        <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;"></div>
                        <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;"></div>
                    </div>
                    <div data-p="225.00" style="display: none;">
                        <img data-u="image" src="css/img/20035_anime_scenery.jpg" />
                    </div>
                    <div data-p="225.00" style="display: none;">
                        <img data-u="image" src="css/img/20040_anime_scenery.jpg" />
                    </div>

                </div>

                <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" >

                    <div data-u="prototype" style="width:16px;height:16px;"></div>
                </div>


            </div>
        </div>
    </div>
</div>
<div id="body-a" style="background-color: #dcdcdcdc">
    <div style="height: auto;width: 1200px; background-color: #dcdcdcdc;margin: 0 auto; ">
        <div class="b-title" style="margin-top: 20px">
            <ul>
                <li><div><a href="">Tin tức<a></div></li>
                <li><div><a href="">Ảnh & Bình ảnh</a></div></li>
                <li><div><a href="">Hỗ trợ</a></div></li>
                <li><div><a href="">Noi Quy</a></div></li>
            </ul>
        </div>
        <div>
            <div class="b-t-left">
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
                <div style="width: 338px; height: 196px;float: right" id="body-r">Connect with all people of the world</div>
            </div>
            <div class="b-t-right">
                <div>
                    <?php
                    if (isset($_SESSION['username']) && $_SESSION['username']){
                        echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
                        echo 'Click vào đây để <a href="login.php">Logout</a>';
                    }
                    else{
                        echo"<div>";
                        echo 'Bạn chưa đăng nhập';
                        echo"</div>";
                        echo"<a href='login.php'>Login</a>";
                    }
                    ?>
                </div>
                <div style="margin-top: 20px; border-radius: 10px 10px 0px 0px ; background-color: #3b5998;height: 20px;width: 100px;text-align: center; color: #ffffff">
                    Tin chinh
                </div>
                <div style="height: 100px;width: 250px; background-color: #3b5998;padding: 5px;">
                    <div style="height: 100px; width: 250px;background-color: #ffffff;">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ender">
    <div class="e-top"></div>
    <div class="e-body"></div>
    <div class="e-bottom"></div>
</div>

</body>
</html>
