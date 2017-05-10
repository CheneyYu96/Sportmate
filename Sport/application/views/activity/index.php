
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../public/css/common.css" rel="stylesheet" type="text/css" />
    <link href="../public/css/act.css" rel="stylesheet" type="text/css"/>
    <script src="../public/js/act.js"></script>
    <script src="../public/js/jquery-2.1.4.min.js"></script>

</head>
<body>

<div class="header">
    <div class="wrap">
        <div class="logo"> <a href="main"><img src="../public/images/icon/logo.png" alt=""/></a> </div>
        <div class="header-right">
            <div id='cssmenu'>
                <ul>
                    <li class="active"><a href='activity' ><span>活动列表</span></a></li>
                    |
                    <li><a href='mine'><span>我的活动</span></a>
                        <ul>
                            <li class='has-sub'><a href='mine'><span>活动</span></a></li>
                            <li class='has-sub'><a href='minedata'><span>运动信息</span></a></li>
                        </ul>
                    </li>
                    |
                    <li><a href='friend'><span>我的好友</span></a></li>
                    |
                    <li><a href='info'><span>个人信息</span></a>

                    </li>
                    |
                    <li class='last'>欢迎你  <?php echo $_SESSION['username']?><a href='login'><span>退出</span></a></li>
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

<div class="search-result" id="result" style="display:block">
    <div class="edge"></div>
    <div class="grayline"></div>

    <!--<div style="height:30px;float:left;width:100%;background-color:#DDD;">-->
    <!--<div style="padding-top:5px;padding-left:10px" id="result-bar"></div>-->
    <!--</div>-->
    <div class="type">
        <div class="type-title">活动类型:</div>
         <script> selectedat(<?php echo $mold?>)</script>
        <a class="type-list" href="javascript:searchacttype(0)" id="t0">全部活动</a>
        <a class="type-list" href="javascript:searchacttype(1)" id="t1">相约运动</a>
        <a class="type-list" href="javascript:searchacttype(2)" id="t2">运动竞赛</a>
    </div>
    <div class="type">
        <div class="type-title">运动种类:</div>
        <script> selectedst(<?php echo $type?>)</script>
        <a class="type-list" href="javascript:searchsporttype(0)" id="a0">全部类型</a>
        <a class="type-list" href="javascript:searchsporttype(1)" id="a1">球类</a>
        <a class="type-list" href="javascript:searchsporttype(2)" id="a2">骑行</a>
        <a class="type-list" href="javascript:searchsporttype(3)" id="a3">健身</a>
        <a class="type-list" href="javascript:searchsporttype(4)" id="a4">登山</a>
        <a class="type-list" href="javascript:searchsporttype(5)" id="a5">游泳</a>
        <a class="type-list" href="javascript:searchsporttype(6)" id="a6">跑步</a>
    </div>
    <div class="type">
        <div class="type-title">活动状态:</div>
        <script> selectedts(<?php echo $state?>)</script>
        <a class="type-list" href="javascript:searchactstate(0)" id="s0">所有状态</a>
        <a class="type-list" href="javascript:searchactstate(1)" id="s1">待进行</a>
        <a class="type-list" href="javascript:searchactstate(2)" id="s2">已结束</a>
        <a class="type-list" href="javascript:searchactstate(3)" id="s3">进行中</a>
    </div>
    <div class="edge"></div>
    <div class="grayline"></div>

        <?php foreach ($activity as $activity_item): ?>

            <div class="summary">
                <div class="act_img">
                    <img onclick="" src="../public/images/sport1.jpg" width="172">
                </div>
                <div class="words">
                    <div>
                        <h2><a href="<?php echo '/index.php/activity/'.$activity_item['id']; ?>" class="act-title"><?php echo $activity_item['name']; ?></a><span class="atc_state"><?php echo $activity_item['state']; ?></span></h2>
                    </div>
                    <span class="act-info">
                        <?php echo $activity_item['content']; ?>
                    </span>
                    <div class="blank0"></div>
                    <div class="otherInfo">
                        <span class="first">活动时间：<?php echo $activity_item['begintime'].' - '.$activity_item['endtime']; ?></span>
                        <span>活动地点：<?php echo $activity_item['location']; ?></span>
                        <span>报名人数：<em><?php echo $activity_item['limitnum']; ?></em></span>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
        <a href="<?php echo '/index.php/activity'; ?>" class="more" id="more">
            <div class="more-but">更多</div>
        </a>
</div>

</div>

<div class="footer"></div>
<div class="edge edge-buttom"/>

<script>
var a = document.getElementsByTagName("id");
    for(var i =0; i<a.length; i++){
        a[i].onclick = (function(i){
            return function(){change(i);}
        })(i);
    }

</script>

</body>
    </html>