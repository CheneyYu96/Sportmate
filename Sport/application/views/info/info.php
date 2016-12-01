<!DOCTYPE HTML>
<html>
<head>
    <title>个人信息</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../../../public/css/common.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../../../public/css/slide.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../../../public/css/info.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../../../public/css/act.css" rel="stylesheet" type="text/css"/>

</head>
<body>

<div class="header">
    <div class="wrap">
        <div class="logo"> <a href="/index.php/main"><img src="../../../public/images/icon/logo.png" alt=""/></a> </div>
        <div class="header-right">
            <div id='cssmenu'>
                <ul>
                    <li><a href="/index.php/activity" ><span>活动列表</span></a></li>
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
                    <li class="active"><a href='/index.php/info'><span>个人信息</span></a>

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
                <?php echo validation_errors(); ?>
                <form method="post" accept-charset="utf-8" action="/index.php/info/modify">
                    <div class="blank20"></div>
                    <dl class="profile_list photo">
                        <dt class="inputtop">头像</dt>
                        <dd>
                            <div class="pic">
                                <img src="../../../public/images/icon/sport2.png">
                            </div>
                            <div class="blank20"></div>
                            <div class="tr">
                                <input type="file" name="img" id="file_protriait">
                                <div class="tr"></div>
                            </div>
                            <div class="tr ">

                            </div>
                        </dd>
                    </dl>

                    <div class="blank30"></div>

                    <dl class="profile_list">
                        <dt class="inputtop">昵称</dt>
                        <dd>
                            <input name="name" id="name" type="text" value="<?php echo $info['username']?>">
                            <div class="blank0"></div>
                        </dd>
                    </dl>
                    <dl class="profile_list">
                        <dt class="inputtop">性别</dt>
                        <dd>
                            <?php if($info['sex']=='男'){ ?>
                                <input name="sex" type="radio" value="女">女
                                <input name="sex" type="radio" value="男" checked="checked">男
                            <?php }else{ ?>
                                <input name="sex" type="radio" value="女" checked="checked">&nbsp;女
                                <input name="sex" type="radio" value="男">男
                            <?php } ?>
                        </dd>
                    </dl>
                    <dl class="profile_list">
                        <dt class="inputtop">生日</dt>
                        <dd>
                            <?php
                            if(empty($info['birthday'])){
                                $year = 1990;
                                $month = 1;
                                $day = 1;
                            }
                            else{
                                list($year,$month,$day) = explode('-',$info['birthday']);
                            }

                            function getday($month){
                                if($month<8){
                                    if($month%2==1) {
                                        return 31;
                                    }
                                    else if($month==2){
                                        return 28;
                                    }
                                    else{
                                        return 30;
                                    }
                                }
                                else{
                                    if($month%2==1) {
                                        return 30;
                                    }
                                    else{
                                        return 31;
                                    }
                                }
                            }
                            ?>
                            <input name="birth_year" max="2016" min="1915" id="birthday_year_select" type="text"  value="<?php echo $year ?>">
                            <div style="float: left;margin-right: 10px"></div>
                            <select name="birth_month" class="select" id="birthday_month_select">
                                <option value="<?php echo $month ?>" selected=""><?php echo $month ?></option>
                                <?php for($index=1;$index<=12;$index++){if($month!=$index){?>
                                    <option value="<?php echo $index ?>"><?php echo $index ?></option>
                                <?php }}?>
                            </select>
                            <span id="birthday_day_holder" style="float: left">
                                <select name="birth_day" class="select">
                                    <option value="<?php echo $day ?>" selected=""><?php echo $day ?></option>
                                    <?php for($index=1;$index<=getday($month);$index++){if($day!=$index){?>
                                        <option value="<?php echo $index ?>"><?php echo $index ?></option>
                                    <?php }}?>

                                </select>
                            </span>
                            <!--<div class="blank0"></div>-->
                        </dd>
                    </dl>

                    <dl class="profile_list">
                        <dt class="inputtop">身高</dt>
                        <dd>
                            <input name="height" id="height" type="text" value="<?php echo $info['high']?>">
                            <div class="blank0"></div>
                        </dd>
                    </dl>

                    <dl class="profile_list">
                        <dt class="inputtop">体重</dt>
                        <dd>
                            <input name="weight" id="weight" type="text" value="<?php echo $info['weight']?>">
                            <div class="blank0"></div>
                        </dd>
                    </dl>

                    <dl class="profile_list">
                        <dt class="inputtop">所在地</dt>
                        <dd>
                            <select name="province_sel" id="province_sel" style="height:35px;padding:5px 0;">
                                <?php
                                $loc = array("广东","江苏","浙江","湖北","辽宁","山东","四川","福建","湖南","陕西","江西","安徽","河北","黑龙江",
                                    "广西","吉林","山西","云南","甘肃","贵州","新疆","海南","内蒙古","宁夏","青海","西藏",
                                    "河南","北京","上海","天津","重庆","香港","澳门","台湾","国外");
                                ?>
                                <option value="<?php echo $info['location'] ?>" selected=""><?php echo $info['location'] ?></option>
                                <?php foreach ($loc as $lo){
                                        if($lo!=$info['location']){
                                    ?>
                                    <option value="<?php echo $lo ?>"><?php echo $lo ?></option>
                                <?php } } ?>
                            </select>
                        </dd>
                    </dl>

                    <div class="blank20"></div>
                    <input type="submit" name="submit" class="update" value="确定"/>
                    <div class="blank30"></div>

                </form>
            </div>
        </div>
    </div>

</div>

<div class="blank30" ></div>
<div class="edge edge-buttom" ></div>

</body>
</html>