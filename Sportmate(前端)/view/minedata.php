<!DOCTYPE HTML>
<html>
<head>
    <title>我的活动</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../public/css/common.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../public/css/slide.css" rel="stylesheet" type="text/css">
    <script src="../public/js/chart/echarts.js"></script>



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
                    <li class="active"><a href='mine.php'><span>我的活动</span></a>
                        <ul>
                            <li class='has-sub'><a href='mine.php'><span>活动</span></a></li>
                            <li class='has-sub'><a href='minedata.php'><span>运动信息</span></a></li>
                        </ul>
                    </li>
                    |
                    <li><a href='friends.php'><span>我的好友</span></a></li>
                    |
                    <li ><a href='info.php'><span>个人信息</span></a>
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

    <div id="down" class="">
        <div id="down_left" class="">
            <div class="menu">
                <div class="menu_item">
                    <div class="menu_item_title">
                        活动
                    </div>
                    <div class="blank5"></div>
                    <a href="mine.php">
                    <div id="my_join" class="menu_item_span">
                        我参与的活动
                    </div>
                    </a>
                    <div class="blank5"></div>
                    <div id="my_hold" class="menu_item_span">
                        我发起的活动
                    </div>
                    <div class="blank5"></div>

                </div>
                <div class="menu_item">
                    <div class="menu_item_title">
                        运动信息
                    </div>
                    <div class="blank5"></div>

                    <div id="my_data" class="menu_item_span  my_active">
                        运动分析
                    </div>
                    <div class="blank5"></div>

                    <div id="my_sug" class="menu_item_span">
                        运动建议
                    </div>
                    <div class="blank5"></div>
                </div>

            </div>
        </div>
        <div id="down_right" class="">
            <div class="sub_title" style="padding-left:20px;">运动数据</div>
            <div id="main_content1">
                <p class="text-center">
                   一周消耗卡路里量(C)
                </p>

                <div class="chart">
                    <div id="barchart" class="chart"></div>
                </div>
                <div class="my_sub_left">
                    <p class="text-center">
                    运动种类分布
                    </p>

                    <div class="chart">
                        <div id="piechart1" class="chart"></div>
                    </div>
                </div>
                <div class="my_sub_right">
                    <p class="text-center">
                    运动时间段分布
                    </p>

                    <div class="chart">
                        <div id="piechart2" class="chart" ></div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
<div class="blank40"></div>
<div class="blank40"></div>
<div class="edge edge-buttom" ></div>

<script src="../public/js/chart/barchart.js"></script>
<script src="../public/js/chart/piechart.js"></script>

</body>

</html>