<!DOCTYPE HTML>
<html>
<head>
    <title>我的活动</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../../../public/css/common.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../../../public/css/slide.css" rel="stylesheet" type="text/css">
    <script src="../../../public/js/chart/echarts.js"></script>



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
                    <li class="active"><a href='/index.php/mine'><span>我的活动</span></a>
                        <ul>
                            <li class='has-sub'><a href='/index.php/mine'><span>活动</span></a></li>
                            <li class='has-sub'><a href='/index.php/minedata'><span>运动信息</span></a></li>
                        </ul>
                    </li>
                    |
                    <li><a href='/index.php/friend'><span>我的好友</span></a></li>
                    |
                    <li ><a href='/index.php/info'><span>个人信息</span></a></li>
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

    <div id="down" class="">
        <div id="down_left" class="">
            <div class="menu">
                <div class="menu_item">
                    <div class="menu_item_title">
                        活动
                    </div>
                    <div class="blank5"></div>
                    <a href="/index.php/mine">
                    <div id="my_join" class="menu_item_span">
                        我参与的活动
                    </div>
                    </a>
                    <div class="blank5"></div>
                    <div id="my_hold" class="menu_item_span">
                        <a href="/index.php/mine/create" class="menu_item_span_un"> 我发起的活动</a>
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

<script>
    var barchart = echarts.init(document.getElementById("barchart"));

    option = {
        color: ['#91B013'],
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis : [
            {
                type : 'category',
                data : ['周一', '周二', '周三', '周四', '周五', '周六', '周日'],
                axisTick: {
                    alignWithLabel: true
                }
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'运动量',
                type:'bar',
                barWidth: '60%',
                data:[<?php echo $line['周一'] ?>, <?php echo $line['周二'] ?>, <?php echo $line['周三'] ?>, <?php echo $line['周四'] ?>, <?php echo $line['周五'] ?>,<?php echo  $line['周六'] ?>, <?php echo $line['周日'] ?>]
            }
        ],

        backgroundColor: '#F5F5F5',
        textStyle:{
            color : '#9a9b9f',
            fontSize: 18,
        }

    };

    barchart.setOption(option);

</script>
<script src="../../../public/js/chart/piechart.js">


    function drawLeftPie() {

        var piechart1 = echarts.init(document.getElementById("piechart1"));

        option = {
            title : {
                subtext: '单位:运动消耗的卡路里(C)',
                x:'center',
                top:'5%'
            },
            tooltip : {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },

            legend: {
                orient: 'horizontal',
                left: 'left',
                data: ['球类','骑行','健身','登山','游泳','跑步']
            },
            series : [
                {
                    name: '来源',
                    type: 'pie',
                    radius : '55%',
                    center: ['50%', '50%'],
                    data:[
                        {value:<?php echo $pie1['球类'] ?>, name:'球类'},
                        {value:<?php echo $pie1['骑行'] ?>, name:'骑行'},
                        {value:<?php echo $pie1['健身'] ?>, name:'健身'},
                        {value:<?php echo $pie1['登山'] ?>, name:'登山'},
                        {value:<?php echo $pie1['游泳'] ?>, name:'游泳'},
                        {value:<?php echo $pie1['跑步'] ?>, name:'跑步'},
                    ],
                    itemStyle: {
                        emphasis: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ],
            backgroundColor: '#F5F5F5'
        };
        piechart1.setOption(option);


    }

    function drawRightPie() {
        var piechart2 = echarts.init(document.getElementById("piechart2"));
        option = {

            title : {
                subtext: '单位:运动的次数',
                x:'center',
                top:'5%'
            },
            tooltip : {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
                orient: 'horizontal',
                left: 'left',
                data: ['4am-8am','8am-12am','12am-16am','16am-20am','20am以后']
            },
            series : [
                {
                    name: '来源',
                    type: 'pie',
                    radius : '55%',
                    center: ['50%', '50%'],
                    data:[
                        {value:<?php echo $pie2['0'] ?>, name:'4am-8am'},
                        {value:<?php echo $pie2['1'] ?>, name:'8am-12am'},
                        {value:<?php echo $pie2['2'] ?>, name:'12am-16am'},
                        {value:<?php echo $pie2['3'] ?>, name:'16am-20am'},
                        {value:<?php echo $pie2['4'] ?>, name:'20am以后'},
                    ],
                    itemStyle: {
                        emphasis: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ],
            backgroundColor: '#F5F5F5'
        };
        piechart2.setOption(option);

    }


    drawLeftPie();
    drawRightPie();


</script>

</body>

</html>