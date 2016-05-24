<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
if (isset($_POST['dangnhap']))
{
    include('ketnoi.php');
    $link = mysqli_connect("localhost","root","daiyeulinh","demo1");
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    $password = md5($password);
    $query = $link->query("SELECT username, password FROM pre_user WHERE username='$username'");
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    $row = mysqli_fetch_array($query);
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    $_SESSION['username'] = $username;
    echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/style2.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form action='login.php?do=login' method='POST'>
    <table cellpadding='0' cellspacing='0' border='1'>
        <tr>
            <td>
                Tên đăng nhập :
            </td>
            <td>
                <input type='text' name='txtUsername' />
            </td>
        </tr>
        <tr>
            <td>
                Mật khẩu :
            </td>
            <td>
                <input type='password' name='txtPassword' />
            </td>
        </tr>
    </table>
    <input type='submit' name="dangnhap" value='Đăng nhập' />
    <a href='register.php' title='Đăng ký'>Đăng ký</a>
</form>
</body>
</html>