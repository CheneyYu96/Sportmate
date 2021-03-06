<!DOCTYPE HTML>
<html>
<head>
    <title>个人信息</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../public/css/common.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../public/css/slide.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../public/css/info.css" rel="stylesheet" type="text/css" media="all" />


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
                    <li><a href='friends.php'><span>我的好友</span></a></li>
                    |
                    <li class=' active' ><a href='info.php'><span>个人信息</span></a>

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
                        账户信息
                    </div>
                    <div class="blank5"></div>

                    <div id="vol_profile" class="menu_item_span my_active">
                        个人资料
                    </div>
                    <div class="blank5"></div>

                    <div id="change_profile" class="menu_item_span">
                        我的设备
                    </div>
                    <div class="blank5"></div>

                </div>
                <div class="menu_item">
                    <div class="menu_item_title">
                        通知
                    </div>
                    <div class="blank5"></div>

                    <div id="new_notice" class="menu_item_span">
                        新通知
                    </div>
                    <div class="blank5"></div>

                    <div id="notice_record" class="menu_item_span">
                        历史通知
                    </div>
                    <div class="blank5"></div>

                </div>

            </div>
        </div>
        <div id="down_right">
            <div  class="sub_title" style="padding-left:20px;">个人资料</div>
            <div id="main_content" style="margin-left:20px;margin-right:20px;">
                <div class="blank20"></div>
                <dl class="profile_list photo">
                    <dt class="inputtop">头像</dt>
                    <dd>
                        <div class="pic">
                            <img src="../public/images/icon/sport2.png">
                        </div>
                        <div class="blank20"></div>
                        <form action="" method="post" enctype="multipart/form-data" onsubmit="return check_port(this)">
                            <div class="tr">
                                <input type="file" name="img" id="file_protriait">
                                <div class="tr"></div>
                            </div>
                            <div class="tr ">
                                <div class="greenBtn" id="up_file_bu">
                                    <input class="more-but"  type="submit" hidefocus="true" value="上传">
                                </div>
                            </div>
                        </form>
                    </dd>
                </dl>

                <div class="blank30"></div>

                <dl class="profile_list">
                    <dt class="inputtop">昵称</dt>
                    <dd>
                        <input name="nick" id="nick_tb" type="text" value="Jane">
                        <label id="err_nick" for="nick_tb"></label>
                        <!--<div class="blank0"></div>-->
                    </dd>
                </dl>
                <dl class="profile_list">
                    <dt class="inputtop">性别</dt>
                    <dd>

                        <input name="gender" type="radio" value="0" checked="checked">&nbsp;女 &nbsp; <input name="gender" type="radio" value="1">&nbsp;男

                    </dd>
                </dl>
                <dl class="profile_list">
                    <dt class="inputtop">生日</dt>
                    <dd>
                        <!--<p style="float: left"></p>-->
                        <input name="birth_year" max="2014" min="1915" id="birthday_year_select" type="text"  value="1990">
                        <div style="float: left;margin-right: 10px"></div>
                        <select name="birth_month" class="select" id="birthday_month_select">
                            <option value="8" selected="">8</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <span id="birthday_day_holder" style="float: left">
                            <select name="birth_day" class="select">
                                <option value="1" selected="">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </span>
                        <!--<div class="blank0"></div>-->
                    </dd>
                </dl>
                <dl class="profile_list">
                    <dt class="inputtop">所在地</dt>
                    <dd>
                        <select name="province_sel" id="province_sel" style="height:35px;padding:5px 0;">
                            <option value="广东">广东</option>
                            <option value="江苏">江苏</option>
                            <option value="浙江">浙江</option>
                            <option value="湖北">湖北</option>
                            <option value="辽宁">辽宁</option>
                            <option value="山东">山东</option>
                            <option value="四川">四川</option>
                            <option value="福建">福建</option>
                            <option value="湖南">湖南</option>
                            <option value="陕西">陕西</option>
                            <option value="江西">江西</option>
                            <option value="安徽">安徽</option>
                            <option value="河北">河北</option>
                            <option value="黑龙江">黑龙江</option>
                            <option value="广西">广西</option>
                            <option value="吉林">吉林</option>
                            <option value="山西">山西</option>
                            <option value="云南">云南</option>
                            <option value="甘肃">甘肃</option>
                            <option value="贵州">贵州</option>
                            <option value="新疆">新疆</option>
                            <option value="海南">海南</option>
                            <option value="内蒙古">内蒙古</option>
                            <option value="宁夏">宁夏</option>
                            <option value="青海">青海</option>
                            <option value="西藏">西藏</option>
                            <option value="河南">河南</option>
                            <option value="北京" selected="">北京</option>
                            <option value="上海">上海</option>
                            <option value="天津">天津</option>
                            <option value="重庆">重庆</option>
                            <option value="香港">香港</option>
                            <option value="澳门">澳门</option>
                            <option value="台湾">台湾</option>
                            <option value="国外">国外</option>
                        </select> &nbsp; <select name="city_sel" style="height: 35px; display: none;" id="city_sel"></select>
                    </dd>
                </dl>
                <dl class="profile_list">
                    <dt class="inputtop">兴趣</dt>
                    <dd>
                        <select name="hobby" id="hobby" style="height:35px;padding:5px 0;">
                            <option value="跑步">跑步</option>
                            <option value="登山">登山</option>
                            <option value="足球">足球</option>
                            <option value="篮球">篮球</option>
                            <option value="羽毛球">羽毛球</option>
                            <option value="乒乓球">乒乓球</option>
                            <option value="自行车">自行车</option>
                            <option value="极限">极限</option>
                            <option value="其他">其他</option>
                        </select>
                    </dd>
                </dl>

                <div class="blank30"></div>
                <div class="update">确定</div>
                <div class="blank30"></div>

            </div>
        </div>
    </div>

</div>

<div class="blank30" ></div>
<div class="edge edge-buttom" ></div>

</body>
</html>