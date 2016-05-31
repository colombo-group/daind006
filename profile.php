<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body style="margin: 0px">
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
                <?php
class Pagination
{
    protected $_config = array(
        'current_page'  => 1, // Trang hiện tại
        'total_record'  => 1, // Tổng số record
        'total_page'    => 1, // Tổng số trang
        'limit'         => 10,// limit
        'start'         => 0, // start
        'link_full'     => '',// Link full có dạng như sau: domain/com/page/{page}
        'link_first'    => '',// Link trang đầu tiên
    );

    /*
     * Hàm khởi tạo ban đầu để sử dụng phân trang
     */
    function init($config = array())
    {
        /*
         * Lặp qua từng phần tử config truyền vào và gán vào config của đối tượng
         * trước khi gán vào thì phải kiểm tra thông số config truyền vào có nằm
         * trong hệ thống config không, nếu có thì mới gán
         */
        foreach ($config as $key => $val){
            if (isset($this->_config[$key])){
                $this->_config[$key] = $val;
            }
        }

        /*
         * Kiểm tra thông số limit truyền vào có nhỏ hơn 0 hay không?
         * Nếu nhỏ hơn thì gán cho limit = 0, vì trong mysql không cho limit bé hơn 0
         */
        if ($this->_config['limit'] < 0){
            $this->_config['limit'] = 0;
        }

        /*
         * Tính total page, công tức tính tổng số trang như sau:
         * total_page = ciel(total_record/limit).
         * Tại sao lại như vậy? Đây là công thức tính trung bình thôi, ví
         * dụ tôi có 1000 record và tôi muốn mỗi trang là 100 record thì
         * đương nhiên sẽ lấy 1000/100 = 10 trang đúng không nào :D
         */
        $this->_config['total_page'] = ceil($this->_config['total_record'] / $this->_config['limit']);

        /*
         * Sau khi có tổng số trang ta kiểm tra xem nó có nhỏ hơn 0 hay không
         * nếu nhỏ hơn 0 thì gán nó băng 1 ngay. Vì mặc định tổng số trang luôn bằng 1
         */
        if (!$this->_config['total_page']){
            $this->_config['total_page'] = 1;
        }

        /*
         * Trang hiện tại sẽ rơi vào một trong các trường hợp sau:
         *  - Nếu người dùng truyền vào số trang nhỏ hơn 1 thì ta sẽ gán nó = 1
         *  - Nếu trang hiện tại người dùng truyền vào lớn hơn tổng số trang
         *    thì ta gán nó bằng tổng số trang
         * Đây là vấn đề giúp web chạy trơn tru hơn, vì đôi khi người dùng cố ý
         * thay đổi tham số trên url nhằm kiểm tra lỗi web của chúng ta
         */
        if ($this->_config['current_page'] < 1){
            $this->_config['current_page'] = 1;
        }

        if ($this->_config['current_page'] > $this->_config['total_page']){
            $this->_config['current_page'] = $this->_config['total_page'];
        }

        /*
         * Tính start, Như bạn biết trong mysql truy vấn sẽ có limit và start
         * Muốn tính start ta phải dựa vào số trang hiện tại và số limit trên mỗi trang
         * và áp dụng công tức start = (current_page - 1)*limit
        */
        $this->_config['start'] = ($this->_config['current_page'] - 1) * $this->_config['limit'];
    }

    /*
     * Hàm lấy link theo trang
     */
    private function __link($page)
    {
        // Nếu trang < 1 thì ta sẽ lấy link first
        if ($page <= 1 && $this->_config['link_first']){
            return $this->_config['link_first'];
        }
        // Ngược lại ta lấy link_full
        // Như tôi comment ở trên, link full có dạng domain.com/page/{page}.
        // Trong đó {page} là nơi bạn muốn số trang sẽ thay thế vào
        return str_replace('{page}', $page, $this->_config['link_full']);
    }
    function profile()
    {
        $conn= mysqli_connect("localhost","root","daiyeulinh") or die("can't connect this database");
        $link = mysqli_connect("localhost","root","daiyeulinh","demo1");
        mysqli_select_db("demo1",$conn);
        $query= $link->query("select * from pre_user order by id ASC ");
        if(mysqli_num_rows($query) == "")
        {
            echo "<tr><td colspan='5' align='center'>Chua co username nao</td></tr>";
        }
        else
        {
            $conn = mysqli_connect("localhost", "root", "daiyeulinh") or die("can't connect this database");
            $link = mysqli_connect("localhost", "root", "daiyeulinh", "demo1");
            mysqli_select_db("demo1", $conn);
            $query = $link->query("select * from pre_user order by id ASC ");
            if (mysqli_num_rows($query) == "")
                $stt = 0;
            while ($row = mysqli_fetch_array($query)) {
                $stt++;
                echo "<div class='option-profile'>";
                echo "<ul>";
                echo "<li><div>$stt</div></li>";
                echo "<li><div>$row[username]</div></li>";
                if ($row['level'] == "1") {
                    echo "<li><div>Member</div></li>";
                } else {
                    echo "<div>Admin</div>";
                }
                echo"<li><div>$row[email]</div></li>";
                echo"<li><div>$row[fulname]</div></li>";
                echo"<li><div>$row[mota]</div></li>";
                echo"<li><div>$row[phone]</div></li>";
                echo "<li><div><a href='edit_user.php?userid=$row[id]'>Edit</a></div></li>";
                echo "<li><div><a href='del_user.php?userid=$row[id]'>Del</a></div></li>";
                echo "</ul>";
                echo "</div>";
            }
        }
    }
    /*
     * Hàm lấy mã html
     * Hàm này ban tạo giống theo giao diện của bạn
     * tôi không có config nhiều vì rất rối
     * Bạn thay đổi theo giao diện của bạn nhé
     */
    function html()
    {
        $p = '';
        // Kiểm tra tổng số trang lớn hơn 1 mới phân trang
        if ($this->_config['total_record'] > $this->_config['limit'])
        {
            $p = '<ul>';

            // Nút prev và first
            if ($this->_config['current_page'] > 1)
            {
                $p .= '<li><a href="'.$this->__link('1').'">First</a></li>';
                $p .= '<li><a href="'.$this->__link($this->_config['current_page']-1).'">Prev</a></li>';
            }

            // lặp trong khoảng cách giữa min và max để hiển thị các nút
            for ($i = 1; $i <= $this->_config['total_page']; $i++)
            {
                // Trang hiện tại
                if ($this->_config['current_page'] == $i){
                    $p .= '<li><span>'.$i.'</span></li>';
                }
                else{
                    $p .= '<li><a href="'.$this->__link($i).'">'.$i.'</a></li>';
                }
            }

            // Nút last và next
            if ($this->_config['current_page'] < $this->_config['total_page'])
            {
                $p .= '<li><a href="'.$this->__link($this->_config['current_page'] + 1).'">Next</a></li>';
                $p .= '<li><a href="'.$this->__link($this->_config['total_page']).'">Last</a></li>';
            }

            $p .= '</ul>';
        }
        return $p;
    }
}
?>
                <?php
                if(isset($_SESSION['username']) && $_SESSION['level'] == 2)
                {
                    // tại đây thực thi code cua user admin


                }
                if(isset($_SESSION['username']) )
                {
                    $conn= mysqli_connect("localhost","root","daiyeulinh") or die("can't connect this database");
                    $link = mysqli_connect("localhost","root","daiyeulinh","demo1");
                    mysqli_select_db("demo1",$conn);
                    $query= $link->query("select * from pre_user order by id ASC ");
                    // tai day thuc hien co de cua user nomal

                        // thuc hien co de khi co so du lieu co du lieu
                        $config = array(
                            'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1, // Trang hiện tại
                            'total_record'  => mysqli_num_rows($query), // Tổng số record
                            'limit'         => 10,// limit
                            'link_full'     => 'profile.php?page={page}',// Link full có dạng như sau: domain/com/page/{page}
                            'link_first'    => 'profile.php',// Link trang đầu tiên
                        );
                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $paging = new Pagination();

                        $paging->init($config);
                            $stt=0;
                    if(mysql_num_rows($query)>10)
                    {
                        $row = mysqli_fetch_array($query);
                        for ($i = 10*$current_page-1; $i < $current_page*10; $i++) {
                            $stt++;
                            echo "<div class='option-profile'>";
                            echo "<ul>";
                            echo "<li><div>$stt</div></li>";
                            echo "<li><div>$row[username]</div></li>";
                            if ($row['level'] == "1") {
                                echo "<li><div>Member</div></li>";
                            } else {
                                echo "<div>Admin</div>";
                            }
                            echo"<li><div>$row[email]</div></li>";
                            echo"<li><div>$row[fulname]</div></li>";
                            echo"<li><div>$row[mota]</div></li>";
                            echo"<li><div>$row[phone]</div></li>";
                            echo "<li><div><a href='edit_user.php?userid=$row[id]'>Edit</a></div></li>";
                            echo "<li><div><a href='del_user.php?userid=$row[id]'>Del</a></div></li>";
                            echo "</ul>";
                            echo "</div>";
                        }
                        echo $paging->html();
                    }
                    else
                    {
                        echo $paging->profile();
                    }




                }
                else
                {
                    echo "<div>Nope!</div>";
                }
                ?>
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