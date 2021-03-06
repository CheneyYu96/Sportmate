<!DOCTYPE HTML>
<html>
<head>
    <title>我的好友</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../public/css/common.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../public/css/slide.css" rel="stylesheet" type="text/css">
    <link href="../public/css/friends.css" rel="stylesheet" type="text/css">


</head>
<body>

<div class="header">
    <div class="wrap">
        <div class="logo"> <a href="main.php"><img src="../public/images/icon/logo.png" alt=""/></a> </div>
        <div class="header-right">
            <div id='cssmenu'>
                <ul>
                    <li><a href='activities.php' ><span>活动列表</span></a></li>
                    |
                    <li><a href='mine.php'><span>我的活动</span></a>
                        <ul>
                            <li class='has-sub'><a href='mine.php'><span>活动</span></a></li>
                            <li class='has-sub'><a href='minedata.php'><span>运动信息</span></a></li>
                        </ul>
                    </li>
                    |
                    <li  class="active"><a href='friends.php'><span>我的好友</span></a></li>
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
<div class= "edge" style="left: 5%;width: 90%"></div>
<div class= "grayline" style="left: 5%;width: 90%"></div>
<div class="main">
    <div class="my_body">


        <div class="my_left">
            <div class="sub_title">好友列表</div>
            <div class="my_left_border">
            <div class="box-body" style="display: block;">
                <ul class="products-list product-list-in-box">
                    <li class="item">
                        <div class="product-img">
                            <img src="../public/images/icon/sport2.png" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">Jack</a>
                            <span class="product-description">
                          参加了"isport",很有意义!
                        </span>
                        </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <div class="product-img">
                            <img src="../public/images/icon/sport2.png" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">小宏</a>
                            <span class="product-description">
                          慢跑一小时打卡
                        </span>
                        </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <div class="product-img">
                            <img src="../public/images/icon/sport2.png" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">小明 </a>
                            <span class="product-description">
                          明天早起打球有人一起吗
                        </span>
                        </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <div class="product-img">
                            <img src="../public/images/icon/sport2.png" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">小王</a>
                            <span class="product-description">
                          参加了"篮球三人赛"活动
                        </span>
                        </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                        <div class="product-img">
                            <img src="../public/images/icon/sport2.png" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">小华</a>
                            <span class="product-description">
                                 参加了"篮球三人赛"活动
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
            </div>
            <div class="blank30"></div>
            <div class="update" style="margin-left: 20%;width: 60%">加载全部好友</div>
            <div class="blank30"></div>
        </div>

        <div class="my_right">
            <div class="sub_title" style="float: left; width: 32%">好友动态</div>
            <div class="blank30"></div>
            <div class="my_right_item">
                <div class="my_item_title">
                    <img src="../public/images/icon/sport2.png" alt="Product Image">
                    <div class="blank0"></div>
                    <a href="#">
                    <div class="title-font">Jack</div>
                    </a>

                </div>
                <div class="my_item_content">
                    <p style="line-height: 1.5">
                        今天我参加了"isport"长跑比赛。
                        <br>
                        和小伙伴们一起跑了10km,很有成就感。
                   <br>
                   附上今天拍的照片,下次有这类活动我们再约!</p>
                    <div class="blank30"></div>
                    <div class="my_item_img"><img src="../public/images/run.jpg" ></div>

                </div>
            </div>
            <div class="my_right_item">
                <div class="my_item_title">
                    <img src="../public/images/icon/sport2.png" alt="Product Image">
                    <div class="blank0"></div>
                    <a href="#">
                        <div class="title-font">小华</div>
                    </a>
                </div>
                <div class="my_item_content">
                    <p style="line-height: 1.5">
                        今天我报名了三人篮球赛。
                        <br>
                        三人篮球是在五人篮球比赛的一半场地内进行的一种游戏。活动范围就是在210平方米内只有六个人纵横驰骋。没有五人篮球那样要全场奔跑反击，打快攻等体力较难承受的缺点。
                        <br>
                        明天和队友们好好练练配合,争取比赛拿得好成绩!</p>
                    <div class="blank30"></div>
                    <div class="my_item_img"><img src="../public/images/basketball.jpg" ></div>

                </div>
            </div>
            <div class="my_right_item">
                <div class="my_item_title">
                    <img src="../public/images/icon/sport2.png" alt="Product Image">
                    <div class="blank0"></div>
                    <a href="#">
                    <div class="title-font">小宏</div>
                    </a>
                </div>
                <div class="my_item_content">
                    <p style="line-height: 1.5">
                        今天我参加了"晨跑一小时活动"。
                        <br>
                        感觉挺轻松的,还拿了纪念奖章。今天身体也更舒服了,明天准备继续跑。
                        <br>
                        附张图纪念一下~</p>
                    <div class="blank30"></div>
                    <div class="my_item_img"><img src="../public/images/run1.jpg" ></div>

                </div>
            </div>

            <div class="blank20"></div>
            <div class="update">加载更多</div>
            <div class="blank20"></div>
        </div>
        </div>


</div>



<div class="blank30"></div>
<div class="edge edge-buttom"></div>
</body>
</html>