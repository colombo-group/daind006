<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<div id="header">
    <div id="h-top" style="background-color:#3b5998;width: 100%;height: 60px">

    </div>
    <div id="h-body" style="height: 300px;width: 100%;background: linear-gradient(#3b5998,#ffffff);">
        <div id="h-b-left">

        </div>
        <div id="h-b-right">

        </div>
    </div>
    <div id="h-bottom">

    </div>
</div>
<div id="body">
<?php
if (isset($_SESSION['username']) && $_SESSION['username']){
    echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
    echo 'Click vào đây để <a href="login.php">Logout</a>';
}
else{
    echo 'Bạn chưa đăng nhập';
    echo"<a href='login.php'>Login</a>";
}
?>
</div>
<div id="ender">

</div>
</body>
</html>