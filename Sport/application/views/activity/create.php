
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../../../public/css/common.css" rel="stylesheet" type="text/css" />
    <link href="../../../public/css/act.css" rel="stylesheet" type="text/css"/>
    <link href="../../../public/css/info.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../../../public/css/slide.css" rel="stylesheet" type="text/css" media="all" />


    </head>
<body>

<div class="header">
    <div class="wrap">
        <div class="logo"> <a href="/index.php/main"><img src="../../../public/images/icon/logo.png" alt=""/></a> </div>
        <div class="header-right">
            <div id='cssmenu'>
                <ul>
                    <li class="active"><a href='/index.php/activity' ><span>活动列表</span></a></li>
                    |
                    <li><a href='/index.php/mine'><span>我的活动</span></a>
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

    <div id="down_left">
        <div class="menu">
            <div class="menu_item">
                <div class="menu_item_title">
                    创建活动
                </div>
                <div class="blank5"></div>

            </div>

        </div>
    </div>
    <!--    <div class="act-list" style="float:left" id="act_list"></div>-->
    <div id="down_right">
        <div id="main_content" style="margin-left:20px;margin-right:20px;">
            <?php echo validation_errors(); ?>
            <div class="blank20"></div>
            <form method="post" accept-charset="utf-8" action="/index.php/activity/create">

                <dl class="profile_list">
                    <dt class="inputtop">名称</dt>
                    <dd>
                        <input name="name" id="name" type="text" />
                        <div class="blank0"></div>
                    </dd>
                </dl>

                <div class="blank20"></div>

                <dl class="profile_list">
                    <dt class="inputtop">描述</dt>
                    <dd>
                        <textarea name="text" id="text" style="height: 100px;width: 50%;border-radius: 5px"></textarea>
                        <div class="blank0"></div>
                    </dd>
                </dl>

                <div class="blank20"></div>

                <dl class="profile_list">
                    <dt class="inputtop">模式</dt>
                    <dd>
                        <select name="mold" id="mold" style="height:35px;padding:5px 0;">
                            <option value="运动">运动</option>
                            <option value="竞赛">竞赛</option>
                        </select>
                        <div class="blank0"></div>
                    </dd>
                </dl>

                <div class="blank20"></div>

                <dl class="profile_list">
                    <dt class="inputtop">种类</dt>
                    <dd>
                        <select name="type" id="type" style="height:35px;padding:5px 0;">
                            <option value="球类">球类</option>
                            <option value="骑行">骑行</option>
                            <option value="健身">健身</option>
                            <option value="登山">登山</option>
                            <option value="游泳">游泳</option>
                            <option value="跑步">跑步</option>
                            <option value="其他">其他</option>
                        </select>
                        <div class="blank0"></div>
                    </dd>
                </dl>

                <div class="blank20"></div>

                <dl class="profile_list">
                    <dt class="inputtop">人数</dt>
                    <dd>
                        <input name="limitnum" id="limitnum"/>
                        <div class="blank0"></div>
                    </dd>
                </dl>

                <div class="blank20"></div>

                <dl class="profile_list">
                    <dt class="inputtop">地点</dt>
                    <dd>
                        <input name="location" id="location"/>
                        <div class="blank0"></div>
                    </dd>
                </dl>

                <div class="blank30"></div>
                <input type="submit" name="submit" class="update" value="确定"/>
                <div class="blank30"></div>
            </form>


        </div>
    </div>
    <div class="blank20"></div>
</div>
</div>
<div class="footer"></div>
<div class="edge edge-buttom"/>


</body>
</html>
