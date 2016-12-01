<!DOCTYPE HTML>
<html>
<head>
    <title>我的动态</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../../../public/css/common.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../../../public/css/slide.css" rel="stylesheet" type="text/css">
    <link href="../../../public/css/friends.css" rel="stylesheet" type="text/css"/>
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
                    <li><a href='/index.php/mine'><span>我的活动</span></a>
                        <ul>
                            <li class='has-sub'><a href='/index.php/mine'><span>活动</span></a></li>
                            <li class='has-sub'><a href='/index.php/minedata'><span>运动信息</span></a></li>
                        </ul>
                    </li>
                    |
                    <li  class="active"><a href='/index.php/friend'><span>我的好友</span></a></li>
                    |
                    <li><a href='/index.php/info'><span>个人信息</span></a>

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
<div class= "edge" style="left: 5%;width: 90%"></div>
<div class= "grayline" style="left: 5%;width: 90%"></div>
<div class="main">
    <div class="my_body">

        <div class="my_right" style="width: 80%">
            <div class="sub_title" style="float: left; width: 48%">我的动态</div>
            <div class="blank30"></div>


            <?php
            function getName(){
                $num = mt_rand(0,2);
                if($num==0){
                    return "run";
                }
                else if($num==1){
                    return "basketball";
                }
                else{
                    return "run1";
                }

            }
            ?>

            <?php if(empty($track)){?>

                <div class="my_table_ele" >
                    <a href="/index.php/friend/track" class="my_table_none">你还没有发布动态,试着发布一个活动</a>
                </div>
            <?php }else{?>

                <?php foreach ($track as $track_item):?>
                    <div class="my_right_item">
                        <div class="my_item_title">
                            <img src="../../../public/images/icon/sport2.png" alt="Product Image">
                            <div class="blank0"></div>
                            <div class="title-font"> <?php echo $_SESSION['username']?></div>

                        </div>
                        <div class="my_item_content">
                            <p style="line-height: 1.5">
                                <?php echo $track_item['content']?>
                            <div class="blank30"></div>
                            <?php if(empty($track_item['pic'])){?>
                                <div class="my_item_img"><img src="../../../public/images/<?php echo getName()?>.jpg" ></div>
                            <?php }else{?>
                                <div class="my_item_img"><img src=" <?php echo $track_item['pic']?>" ></div>
                            <?php }?>
                            <div class="blank0"></div>
                            <div class="blank30"></div>
                            <span class="atc_state"><?php echo $track_item['creattime']; ?></span>
                            <div class="blank10"></div>
                        </div>

                    </div>
                <?php endforeach;?>
            <?php }?>

            <div class="blank0"></div>
            <div class="blank40"></div>
        </div>
    </div>


</div>



<div class="blank30"></div>
<div class="edge edge-buttom"></div>
</body>
</html>