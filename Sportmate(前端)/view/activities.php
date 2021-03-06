<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../public/css/common.css" rel="stylesheet" type="text/css" />
    <link href="../public/css/act.css" rel="stylesheet" type="text/css"/>
    <script src="../public/js/act.js"></script>
    <title>活动列表</title>

</head>
<body>

<div class="header">
    <div class="wrap">
        <div class="logo"> <a href="main.php"><img src="../public/images/icon/logo.png" alt=""/></a> </div>
        <div class="header-right">
            <div id='cssmenu'>
                <ul>
                    <li class="active"><a href='activities.php' ><span>活动列表</span></a></li>
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
                <?php
                class Index {
                    public function display($output) {
                        // ob_start();
                        echo $output;
                    }
                }
                ?>
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

<div class="search-result" id="result" style="display:block">
    <div class="edge"></div>
    <div class="grayline"></div>

    <!--<div style="height:30px;float:left;width:100%;background-color:#DDD;">-->
        <!--<div style="padding-top:5px;padding-left:10px" id="result-bar"></div>-->
    <!--</div>-->
    <div class="type">
        <div class="type-title">活动类型:</div>
        <a class="type-list" href="javascript:searchacttype(0)" id="t0">全部活动</a>
        <a class="type-list" href="javascript:searchacttype(1)" id="t1">相约运动</a>
        <a class="type-list" href="javascript:searchacttype(2)" id="t2">运动竞赛</a>
    </div>
    <div class="type">
        <div class="type-title">运动种类:</div>
        <a class="type-list" href="javascript:searchsporttype(0)" id="a0">全部类型</a>
        <a class="type-list" href="javascript:searchsporttype(1)" id="a1">球类</a>
        <a class="type-list" href="javascript:searchsporttype(2)" id="a2">骑行</a>
        <a class="type-list" href="javascript:searchsporttype(3)" id="a3">健身</a>
        <a class="type-list" href="javascript:searchsporttype(4)" id="a4">登山</a>
        <a class="type-list" href="javascript:searchsporttype(5)" id="a5">极限</a>
        <a class="type-list" href="javascript:searchsporttype(6)" id="a6">其他</a>
    </div>
    <div class="type">
        <div class="type-title">时间限制:</div>
        <a class="type-list" href="javascript:searchtimelimit(0)" id="l0">全周</a>
        <a class="type-list" href="javascript:searchtimelimit(1)" id="l1">周一</a>
        <a class="type-list" href="javascript:searchtimelimit(2)" id="l2">周二</a>
        <a class="type-list" href="javascript:searchtimelimit(3)" id="l3">周三</a>
        <a class="type-list" href="javascript:searchtimelimit(4)" id="l4">周四</a>
        <a class="type-list" href="javascript:searchtimelimit(5)" id="l5">周五</a>
        <a class="type-list" href="javascript:searchtimelimit(6)" id="l6">周六</a>
        <a class="type-list" href="javascript:searchtimelimit(7)" id="l7">周日</a>
    </div>
    <div class="type">
        <div class="type-title">活动状态:</div>
        <a class="type-list" href="javascript:searchactstate(0)" id="s0">所有状态</a>
        <a class="type-list" href="javascript:searchactstate(1)" id="s1">待进行</a>
        <a class="type-list" href="javascript:searchactstate(2)" id="s2">已结束</a>
        <a class="type-list" href="javascript:searchactstate(3)" id="s3">进行中</a>
    </div>
    <div class="edge"></div>
    <div class="grayline"></div>
    <div class="act-list" style="float:left" id="act_list">

        <div class="summary">
            <div class="act_img">
                <img onclick="window.open('#','_blank')" src="../public/images/sport1.jpg" width="172">
            </div>
            <div class="words">
                <div>
                    <h2><a href="#" target="_blank" class="act-title">iSport跑步比赛</a><span class="atc_state">待进行</span></h2>
                    <span  class="act-info">
                        <p>
                            iSport跑步比赛是一个面向广大跑步爱好者的友谊比赛。只要你对跑步有热情,对运动有热心,就来报名吧。
                            这次比赛总长度为10km,每一位成功跑到终点的爱好者都会收到我们准备的精心小礼物~
                        </p>
                         <p>
                            参加活动只要交10元的活动金,赶快来参与吧!
                        </p>
                    </span>
                </div>
                <div class="blank0"></div>
                <div class="otherInfo">
                    <span class="first">活动时间：2016-10-22 - 2016-10-23</span>
                    <span>活动地点：南京玄武湖</span>
                    <span>报名人数：<em>不限</em></span>
                </div>
            </div>
        </div>
        <div class="summary">
            <div class="act_img">
                <img onclick="window.open('#','_blank')" src="../public/images/sport1.jpg" width="172">
            </div>
            <div class="words">
                <div>
                    <h2><a href="#" target="_blank"  class="act-title">约打羽毛球</a><span class="atc_state">待进行</span></h2>
                    <span class="act-info">
                        我在体育场订了2片羽毛球场,周四下午4点。找球友来一起打球。可以直接联系我:12345678901</span>
                </div>
                <div class="blank0"></div>

                <div class="otherInfo">
                    <span class="first">活动时间：2016-10-20</span>
                    <span>活动地点：五台山羽毛球场</span>
                    <span>报名人数：<em>4</em></span>
                </div>
            </div>
        </div>
        <div class="summary">
            <div class="act_img">
                <img onclick="window.open('#','_blank')" src="../public/images/sport1.jpg" width="172">
            </div>
            <div class="words">
                <div>
                    <h2><a href="#" target="_blank"  class="act-title">篮球三人赛</a><span class="atc_state">进行中</span></h2>
                    <span  class="act-info">
                        <p>三人篮球是在五人篮球比赛的一半场地内进行的一种游戏。活动范围就是在210平方米内只有六个人纵横驰骋。没有五人篮球那样要全场奔跑反击，打快攻等体力较难承受的缺点。</p>
                        <p>欢迎热爱篮球的同学积极报名参加比赛。本次比赛鼓励大家自由组队,先进行小组赛,每组4队,每队的优胜者参加8强淘汰赛</p>
                    </span>
                </div>
                <div class="blank0"></div>

                <div class="otherInfo">
                        <span class="first">活动时间：2016-10-16 —— 2016-10-23</span>
                        <span>活动地点：南大鼓楼篮球场</span>
                        <span>报名人数：<em>42</em></span>
                </div>
            </div>
        </div>
        <div class="summary">
            <div class="act_img">
                <img onclick="window.open('#','_blank')" src="../public/images/sport1.jpg" width="172">
            </div>
            <div class="words">
                <div>
                    <h2><a href="act_dtl.php?act_id=5582" target="_blank" class="act-title" > 相约足球</a><span class="atc_state">已结束</span></h2>
                    <span  class="act-info">周六下午有空的球友来一号体育场踢足球啦!现在已经有16个人啦,大家都可以报名来看看</span>
                </div>
                <div class="blank0"></div>
                <div class="otherInfo">
                    <span class="first">活动时间：2016-10-15</span>
                    <span>活动地点：南京体育场</span>
                    <span>报名人数：<em>10</em></span>
                </div>
            </div>
        </div>
        <div class="more" id="more" onclick="more()">
            <div class="more-but">更多</div>
            <div style=""></div>
        </div>
    </div>

</div>

<div class="footer"></div>
<div class="edge edge-buttom"/>




</body>
</html>