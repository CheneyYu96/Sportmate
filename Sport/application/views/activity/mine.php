<!DOCTYPE HTML>
<html>
<head>
    <title>我的活动</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../../../public/css/common.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../../../public/css/slide.css" rel="stylesheet" type="text/css">
    <link href="../../../public/css/act.css" rel="stylesheet" type="text/css"/>


</head>
<body>

<div class="header">
    <div class="wrap">
        <div class="logo"> <a href="/index.php/main"><img src="../../../public/images/icon/logo.png" alt=""/></a> </div>
        <div class="header-right">
            <div id='cssmenu'>
                <ul>
                    <li><a href='/index.php/activity' ><span>活动列表</span></a></li>
                    |
                    <li class="active"><a href='/index.php/mine'><span>我的活动</span></a>
                        <ul>
                            <li class='has-sub'><a href='/index.php/mine'><span>活动</span></a></li>
                            <li class='has-sub'><a href='/index.php/minedata'><span>运动信息</span></a></li>
                        </ul>
                    </li>
                    |
                    <li><a href='/index.php/friend'><span>我的好友</span></a></li>
                    |
                    <li ><a href='/index.php/info'><span>个人信息</span></a>
                    </li>
                    |
                    <li class='last'>欢迎你  <?php echo $_SESSION['username']?><a href='/index.php/login'><span>退出</span></a></li>
                </ul>
            </div>
            <div class="search_box">
                <form>
                    <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </form>
            </div>
        </div>

    </div>
</div>
<div class= "edge" style="left: 5%;width: 90%"></div>
<div class= "grayline" style="left: 5%;width: 90%"></div>
