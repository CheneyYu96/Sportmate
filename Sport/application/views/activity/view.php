    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../../../public/css/common.css" rel="stylesheet" type="text/css" />
    <link href="../../../public/css/slide.css" rel="stylesheet" type="text/css" />
    <link href="../../../public/css/act.css" rel="stylesheet" type="text/css"/>

</head>
<body>

<div class="header">
    <div class="wrap">
        <div class="logo"> <a href="/index.php/main"><img src="../../../public/images/icon/logo.png" alt=""/></a> </div>
        <div class="header-right">
            <div id='cssmenu'>
                <ul>
                    <li class="active"><a href="/index.php/activity" ><span>活动列表</span></a></li>
                    |
                    <li><a href="/index.php/mine"><span>我的活动</span></a>
                        <ul>
                            <li class='has-sub'><a href='/index.php/mine'><span>活动</span></a></li>
                            <li class='has-sub'><a href='/index.php/minedata'><span>运动信息</span></a></li>
                        </ul>
                    </li>
                    |
                    <li><a href='/index.php/friend'><span>我的好友</span></a></li>
                    |
                    <li><a href='/index.php/info'><span>个人信息</span></a>

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
<div class="main">
<div id="down" class="">

    <div id="down_left" style="margin-top: 30px">
        <div class="menu">
            <div class="menu_item">
                <div class="menu_item_title">
                    活动详情
                </div>
                <div class="blank5"></div>

            </div>

        </div>
    </div>
<!--    <div class="act-list" style="float:left" id="act_list"></div>-->
    <div id="down_right" class="">

    <div class="summary" style="height: 400px">
        <div class="act_img">
            <img onclick="" src="../../../public/images/sport1.jpg" width="172">
        </div>
        <div class="words" style="height: 80%">
            <div>
                <h2 class="act-title"><?php echo $activity_item['name']; ?><span class="atc_state"><?php echo $activity_item['state']; ?></span></h2>
            </div>
            <div class="blank20"></div>

            <span class="act-title" style="font-size: 15px">
                <?php echo '发起人 : '.$activity_item['holdername']; ?>
            </span>
            <div class="blank10"></div>
            <span class="act-title" style="font-size: 15px">
                活动介绍 :
            </span>
            <div class="blank0"></div>
            <span class="view-info">
                <?php echo $activity_item['content']; ?>
            </span>
            <div class="blank0"></div>
            <div class="tag">
                <?php echo $activity_item['mold']; ?>
            </div>

            <div class="tag">
                <?php echo $activity_item['type']; ?>
            </div>
            <div class="blank0"></div>
            <div class="blank20"></div>
            <div class="otherInfo" style="margin-bottom: 50px;">
                <span class="first">活动时间：<?php echo $activity_item['begintime'].' - '.$activity_item['endtime']; ?></span>
                <div class="blank10"></div>
                <span>活动地点：<?php echo $activity_item['location']; ?></span>
                <div class="blank10"></div>
                <span>报名人数：<em><?php echo $activity_item['limitnum']; ?></em></span>
                <div class="blank10"></div>

            </div>
        </div>
    </div>
    </div>
    <div class="blank20"></div>


