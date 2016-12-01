<!DOCTYPE HTML>
<html>
<head>
    <title>Sportmate</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../public/css/common.css" rel="stylesheet" type="text/css" media="all" />


</head>
<body>

<div class="header">
    <div class="wrap">
        <div class="logo"> <a href="main.html"><img src="../public/images/icon/logo.png" alt=""/></a> </div>
        <div class="header-right">
            <div id='cssmenu'>
                <ul>
                    <li><a href='activities.php'><span>活动列表</span></a></li>
                    |
                    <li><a href='mine.php'><span>我的活动</span></a>
                        <ul>
                            <li class='has-sub'><a href='mine.php'><span>活动</span></a></li>
                            <li class='has-sub'><a href='minedata.php'><span>运动信息</span></a></li>
                        </ul>
                    </li>
                    |
                    <li><a href='friends.php'><span>我的好友</span></a></li>
                    |
                    <li><a href='info.php'><span>个人信息</span></a>

                    </li>
                    |
                    <li class='last'><a href='#'><span>退出</span></a></li>
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

<div class="bg-header">


</div>

<div class="main home-tab">
    <div class="flexbox index-menue-tab">
        <div class="flex share share-lxx">
            <div class="title">
                <a href="activities.php" class="zc-btn"><img src="../public/images/icon/activities.png" style="width: 51px"></a>
                <div class="zc-icon"><span class="fontw50-18">活动列表</span></div>

            </div>
        </div>
        <div class="flex share find">
            <div class="title">
                <a href="mine.php" class="zc-btn"><img src="../public/images/icon/mine.png" style="width: 51px; margin: 20px auto;"></a>
                <div class="zc-icon zc-icon-w"><span class="fontw50-18">我的活动</span></div>
            </div>

        </div>
        <div class="flex share contest">
            <div class="title">

                <a href="friends.php" class="zc-btn"><img src="../public/images/icon/friends.png" style="width:35px; margin: 26px auto;"></a>

                <div class="zc-icon"><span class="fontw50-18">我的好友</span></div>
            </div>
        </div>

        <div class="flex share px500">
            <div class="title zc-br">
                <a href="info.php" target="_blank" class="zc-btn"><img src="../public/images/icon/info.png" style="width:35px; margin: 26px auto;"></a>
                <div class="zc-icon zc-icon-w"><span class="fontw50-18">个人信息</span></div>
            </div>
        </div>
        <div style="clear:both;"></div>


    </div>
</div>

<div class="edge edge-buttom"></div>



</body>
</html>