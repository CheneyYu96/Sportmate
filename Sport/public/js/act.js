/**
 * Created by yuminchen on 16/10/17.
 */
var acttype = 0;
var sporttype = 0;
var actstate = 0;
var old_color = "#9a9b9f"
var new_color = "#91b013"
var filter = {
    "mold":0,
    "type":0,
    "state":0
};


function selectedat(temp) {
    document.getElementById("t" + temp).style.fontWeight = "bolder";
    document.getElementById("t" + temp).style.color = new_color;
}
function removeat(temp) {
    document.getElementById("t" + temp).style.fontWeight = "normal";
    document.getElementById("t" + temp).style.color = old_color;
}

function selectedst(temp) {
    document.getElementById("a" + temp).style.fontWeight = "bolder";
    document.getElementById("a" + temp).style.color = new_color;
}
function removest(temp) {
    document.getElementById("a" + temp).style.fontWeight = "normal";
    document.getElementById("a" + temp).style.color = old_color;
}


function selectedts(temp) {
    document.getElementById("s" + temp).style.fontWeight = "bolder";
    document.getElementById("s" + temp).style.color = new_color;
}
function removets(temp) {
    document.getElementById("s" + temp).style.fontWeight = "normal";
    document.getElementById("s" + temp).style.color = old_color;
}


function searchacttype(temp) {
    removeat(acttype);
    acttype = temp;
    selectedat(acttype);
    //alert(acttype);
    // searchitt();
    filter['mold'] = temp;

    // if(temp==1){
    //     filter['mold'] = '运动';
    // }
    // else if (temp==2){
    //     filter['mold'] = '竞赛';
    // }
    reset_activity(filter);
}

function searchsporttype(temp) {
    removest(sporttype);
    sporttype = temp;
    selectedst(sporttype);
    //alert(attributiontype);
    // searchitt();
    filter['type']=temp;
    // if(temp==1){
    //     filter['type'] = '球类';
    // }
    // else if (temp==2){
    //     filter['type'] = '骑行';
    // }
    // else if (temp==3){
    //     filter['type'] = '健身';
    // }
    // else if (temp==4){
    //     filter['type'] = '登山';
    // }
    // else if (temp==5){
    //     filter['type'] = '游泳';
    // }
    // else if (temp==6){
    //     filter['type'] = '跑步';
    // }
    reset_activity(filter);

}


function searchactstate(temp) {
    removets(actstate);
    actstate = temp;
    selectedts(actstate);
    //alert(acttype);
    // searchitt();
    filter['state'] = temp;
    // if(temp==1){
    //     filter['state'] = '待进行';
    // }
    // else if (temp==2){
    //     filter['state'] = '已结束';
    // }
    // else if (temp==3){
    //     filter['state'] = '进行中';
    // }
    reset_activity(filter);
}

function reset_activity(filter) {
    $.post('http://sport:8888/index.php/activity/filter', filter);
    // $.ajax({
    //     type: "post",
    //     url: "http://sport:8888/index.php/activity/filter",
    //     cache: false,
    //     data: "mold="+filter['mold']+"&type="+filter['type']+ "&state="+filter['state'],
    //     success: function(output) {
    //         if (output == "" || output == undefined) {
    //
    //         }
    //         else {
    //
    //         }
    //     },
    //     error: function(XMLHttpRequest, textStatus, errorThrown) {
    //         alert("获取数据异常");
    //     }
    // });
}