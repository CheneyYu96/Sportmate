<div class="main">

    <div id="down" class="">
        <div id="down_left" class="">
            <div class="menu">
                <div class="menu_item">
                    <div class="menu_item_title">
                        活动
                    </div>
                    <div class="blank5"></div>

                    <div id="my_hold" class="menu_item_span">
                        <a href="/index.php/mine" class="menu_item_span_un"> 我参与的活动</a>
                    </div>
                    <div class="blank5"></div>
                    <div id="my_hold" class="menu_item_span my_active">
                        我发起的活动
                    </div>
                    <div class="blank5"></div>

                </div>
                <div class="menu_item">
                    <div class="menu_item_title">
                        运动信息
                    </div>
                    <div class="blank5"></div>
                    <a href="/index.php/minedata">
                        <div id="my_data" class="menu_item_span">
                            运动分析
                        </div>
                    </a>
                    <div class="blank5"></div>

                    <div id="my_sug" class="menu_item_span">
                        运动建议
                    </div>
                    <div class="blank5"></div>
                </div>

            </div>
        </div>
        <div id="down_right" class="">
            <div class="sub_title" style="padding-left:20px;">我发起的活动</div>
            <div id="main_content1">

                <?php if(empty($activity)){ ?>
                    <div class="my_table_ele" >
                        <a href="/index.php/activity/create" class="my_table_none">你还没有发起或活动,试着创建一个活动吧</a>
                    </div>

                <?php }else{ ?>
                    <?php foreach ($activity as $activity_item): ?>

                        <div class="my_table_ele" >
                            <a href="<?php echo '/index.php/mine/create/'.$activity_item['id']; ?>" class="my_table_title"> <?php echo $activity_item['name']?></a>
                            <div class="my_table_info"> 活动时间：<?php echo $activity_item['begintime'].' - '.$activity_item['endtime']; ?></div>
                            <div class="my_table_other"><?php echo $activity_item['state']; ?></div>
                        </div>
                    <?php endforeach; ?>

                    <a href="<?php echo '/index.php/activity/create'; ?>" class="join" style="margin-left: 35%">
                        <div class="join-but">发起活动</div>
                    </a>

                <?php } ?>




            </div>
        </div>

    </div>


</div>
<div class="blank40"></div>
<div class="blank40"></div>
<div class="edge edge-buttom" ></div>

</body>
</html>