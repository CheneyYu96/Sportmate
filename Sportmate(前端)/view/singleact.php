<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../public/css/common.css" rel="stylesheet" type="text/css" />
    <link href="../public/css/act.css" rel="stylesheet" type="text/css"/>
    <link href="../public/css/slide.css" rel="stylesheet" type="text/css"/>
    <script src="../public/js/act.js"></script>
    <title>活动信息</title>
</head>
<body>

<div class="main">
    <div class="header">
        <div class="wrap">
            <div class="logo"> <a href="main.php"><img src="../public/images/icon/logo.png" alt=""/></a> </div>
            <div class="header-right">
                <div id='cssmenu'>
                    <ul>
                        <li><a href='activities.php'><span>活动列表</span></a></li>
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

    <div class="my_body">
    <div class="my_left">
        <div class="act_img" style="cursor:pointer;">
            <img id="scan_act_photo" src="../public/images/sport1.jpg" height="244">
            <span id="upload_pic" name="upload_pic">上传图片</span>
        </div>
    </div>
    <div id="right">
        <div id="act_simple">
            <div class="div_title">
                <div id="act_title">南大IT侠电脑维修</div>
                <div id="act_state">正在招募</div>
            </div>
            <div class="div_content">
                <ul>
                    <li><div class="div_content_attr">时间</div>
                        <div id="act_time_share" class="div_content_value">2015-09-01 -- 2017-09-01，晚上6：30-9：30</div></li>
                    <li><div class="div_content_attr">持续</div>
                        <div id="act_keepon_time_share" class="div_content_value">3小时</div></li>
                    <li><div class="div_content_attr">性质</div>
                        <div class="div_content_value">长期活动</div></li>
                    <li><div class="div_content_attr">类型</div>
                        <div id="act_attr_type_share" class="div_content_value">其他</div></li>
                    <li><div class="div_content_attr">地点</div>
                        <div id="act_place_share" class="div_content_value">仙林：大活202；鼓楼：大学生活动中心原学生会办公室。</div></li>
                    <li><div class="div_content_attr">院系限制</div>
                        <div id="act_faculty_limit_share" class="div_content_value">无（这才和谐）</div></li>
                    <li><div class="div_content_attr">报名截止日期</div>
                        <div id="act_deadline_share" class="div_content_value">2017-09-01</div></li>


                </ul>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="apply-state">
            <div style="width:100%;float:left">
                <div class="div_title2" style="margin-top:12px">已报名的人数：<span id="sign_up_num">47</span>/100</div>

                <div id="option" style="float:right">
                    <input type="button" id="take_part_in" name="take_part_in" class="button" style="margin-top:7px" value="报名活动">

                </div>
                <div class="jiathis_style" style=" margin-top:10px;float:right; margin-right:10px">
                    <a class="jiathis_button_tsina" title="分享到微博"><span class="jiathis_txt jtico jtico_tsina"></span></a>
                    <a class="jiathis_button_renren" title="分享到人人网"><span class="jiathis_txt jtico jtico_renren"></span></a>
                    <a class="jiathis_button_qzone" title="分享到QQ空间"><span class="jiathis_txt jtico jtico_qzone"></span></a>

                    <a class="jiathis_button_tqq" title="分享到腾讯微博"><span class="jiathis_txt jtico jtico_tqq"></span></a>

                    <a class="jiathis_counter_style"><span class="jiathis_button_expanded jiathis_counter jiathis_bubble_style" id="jiathis_counter_14" title="累计分享6次">6</span></a>
                </div>
            </div>
        </div>
        <div id="act_detail" class="act-detail">
            <div class="div_title2"><div>活动介绍</div></div>
            <div id="act_introduction">
                <p>
                    报名的同学请注意：
                </p>
                <p>
                    IT侠内部成员才可报名
                </p>
                <p>
                    如果你想加入我们，请扫描下方二维码，我们将对您进行专业的培训
                </p>
                <p>
                    通过培训后您才可以报名哦
                </p>
                <p>
                    <img alt="" src="/info/public/plugin/kindeditor-4.1.5/attached/image/20150902/20150902224005_49993.jpg">
                </p>
                <p>
                    另外
                </p>
                <p>
                    鼓楼校区的地址再说明一下：
                </p>
                <pre><span class="c34"><span class="c37" style="background-color:#E9EBFE;"><span class="c33"><span class="c37" style="background-color:#E9EBFE;"><span class="c34"><span class="c37" style="background-color:#E9EBFE;"><span class="c35"><span class="c37" style="background-color:#E9EBFE;"><span class="c35">鼓楼校区：<span class="c37" style="background-color:#E9EBFE;"> 地点：大学生活动中心原学生会办公室。
     （进大活门，朝你的左前方走[勿上楼]，到达书店门口；
      面对书店门，你的右手侧有个拐角，拐进去；
      朝前走，不能继续往前走时，右手边有一扇门；
      推门进去，上铁楼梯到底，右手侧即到。）
地图： <img alt="http://bbs.nju.edu.cn/file/NoteBook/1410689758caigen1410685451.png" src="http://bbs.nju.edu.cn/file/NoteBook/1410689758caigen1410685451.png" border="0"></span></span></span></span></span></span></span></span></span></span></pre>
            </div>

        </div>
        <div id="act_contact" class="act-detail">
            <div class="div_title2" style="width:400px"><div>联系方式</div></div>
            <div class="div_content">
                <div>
                    <ul>
                        <li><div class="div_content_attr">负责同学</div>
                            <div class="div_content_value">马洒</div></li>
                        <li><div class="div_content_attr">联系电话</div>
                            <div class="div_content_value">18362919587</div></li>
                        <li><div class="div_content_attr">发起组织</div>
                            <div id="act_publisher_share" class="div_content_value">南大IT侠</div></li>
                    </ul>
                </div>
            </div>
            <div style="float:right;margin-top:-45px">
                <img src="./QRCode/3082.png">
            </div>
        </div>
        <div class="act-comment">
            <!--<div id="drop_cover" style="width:400px;height:5px;background:#999;float:left;display:"none";">-->
            <div class="cover-m" id="cover-m" style="display: none; opacity: 0;"></div>
            <div class="upload-m" id="drop_cover" style="display: none; opacity: 0;">
                <div id="px-widget-1" class="px-widget ui-widget"> 				<div class="ui-helper-clearfix"> 					<div id="px-form-1-input" class="px-form-input"><form action="./handle/upload_picture.php" method="post" enctype="multipart/form-data" style="" id="pxupload2" target="pxupload2_frame">

                    <div class="px-input-button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button"><span class="ui-button-icon-primary ui-icon ui-icon-circle-plus"></span><span class="ui-button-text"><span>拖拽至此</span><input type="file" name="userfile" class="fileUpload" multiple=""></span></div>

                    <input type="hidden" name="act_id" value="3082" style="display: none;">
                </form><iframe name="pxupload2_frame" id="pxupload2_frame" src="about:blank" style="display:none"></iframe></div> 					<div id="px-button-1" class="px-buttons"></div> 				</div> 				<div id="px-form-1"><div class="upload-data ui-widget-content ui-corner-all cancel" id="pxupload1_text"> 					<ul class="actions ui-helper-clearfix"> 						<li title="Upload" class="upload ui-state-default ui-corner-all"> 							<span class="ui-icon ui-icon-circle-triangle-e"></span> 						</li> 						<li title="Delete" class="ui-state-default ui-corner-all delete"> 							<span class="ui-icon ui-icon-circle-minus"></span> 						</li> 					</ul> 					<span class="filename">friends.png (14.05MB)</span> 					<div class="progress ui-helper-clearfix" style="display: none;"> 						<div class="progressBar ui-progressbar ui-widget ui-widget-content ui-corner-all" id="progressBar_1" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100"><div class="ui-progressbar-value ui-widget-header ui-corner-left ui-corner-right" style="display: block; width: 100%;"></div></div> 						<div class="percentage">100%</div> 					</div> 					<div class="status">Cancelled</div> 				</div></div> 			</div> 		<form action="./handle/upload_picture.php" method="post" enctype="multipart/form-data" style="display: none;">

                <div class="px-input-button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button"><span class="ui-button-icon-primary ui-icon ui-icon-circle-plus"></span><span class="ui-button-text"><span>拖拽至此</span><input type="file" name="userfile" class="fileUpload" multiple=""></span></div>

                <input type="hidden" name="act_id" value="3082">
            </form>
            </div>

            <ul class="div_title2"><li>活动评论详情</li></ul>

            <div id="comment_list">
                <div class="comment-panel">
                    <div class="comment-title">
                        <div class="comment-name">
                            <a href="indext.php?team_id=nju054">南大IT侠(nju054)</a>
                        </div>
                        <div class="comment-time">[2015-12-06 19:10:34]</div>
                    </div>
                    <div class="comment-content">
                        <div style="width:410px;word-break:break-all">
                            大家好，it侠周六周日不值班。
                        </div>
                        <span class="name-used" style="display:none">nju054</span>
                        <span class="name-used" style="display:none">南大IT侠(nju054)</span>
                        <span class="reply"><a href="#comment-w">回复</a></span>
                    </div>
                </div>
            </div>
            <div style="width:100%;height:10px;float:left"></div>
            <div id="comment_area">
                <a name="comment-w"></a>
                <div class="ke-container ke-container-default" style="width: 460px;"><div style="display:block;" class="ke-toolbar" unselectable="on"><span class="ke-outline" data-name="emoticons" title="插入表情" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-emoticons" unselectable="on"></span></span></div><div style="display: block; height: 110px;" class="ke-edit"><iframe class="ke-edit-iframe" hidefocus="true" frameborder="0" style="width: 100%; height: 110px;"></iframe><textarea class="ke-edit-textarea" hidefocus="true" style="width: 100%; height: 110px; display: none;"></textarea></div><div class="ke-statusbar"><span class="ke-inline-block ke-statusbar-center-icon"></span><span class="ke-inline-block ke-statusbar-right-icon" style="visibility: hidden;"></span></div></div><textarea id="comment_input" name="com_content" style="width: 460px; height: 110px; visibility: hidden; display: none;"></textarea>
            </div>
            <div class="comment_submit" style="width:440px;">
                <input name="com_submit" class="button" id="submit_comment" type="submit" value="评论">
            </div>
        </div>
        <div class="other-act">
            <div class="div_title2"><div>参加过这项活动的人还参加了</div>
                <div style="margin:20px 0 20px 0"><a href="act_dtl.php?act_id=737" target="_blank">爱德</a></div>
                <div style="margin:20px 0 20px 0"><a href="act_dtl.php?act_id=1140" target="_blank">2014回收军训服活动</a></div>
                <div style="margin:20px 0 20px 0"><a href="act_dtl.php?act_id=1148" target="_blank">回收军服</a></div>
            </div>
            <div id="act_same" class="div_content"></div>
        </div>


        <!-- JiaThis Button BEGIN -->


        <!-- JiaThis Button END -->

        <script>
            var jiathis_config = {
                url: "http://volunteer.nju.edu.cn/info/public/quick_participate.php?act_id="+$('#act_id').val(),
                title: "南京大学青年志愿者："+$('#act_title').val(),
                summary:"活动时间："+$('#act_time_share').text()+"；活动地点："+$('#act_place_share').text()+"；院系报名限制："+$('#act_faculty_limit_share').text()+"；发布组织："+$('#act_publisher_share').text()+"。点击链接报名：",
                pic:"http://volunteer.nju.edu.cn/info/public/Upload/picture/"+$('#act_pic').val()
            }
        </script>


     </div><!-- 结束right div -->
    </div>
</div>
</body>
</html>