/**
 * Created by yuminchen on 16/10/17.
 */
var acttype = 0;
var sporttype = 0;
var timelimit = 0;
var actstate = 0;
var old_color = "#9a9b9f"
var new_color = "#91b013"

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

function selectedtl(temp) {
    document.getElementById("l" + temp).style.fontWeight = "bolder";
    document.getElementById("l" + temp).style.color = new_color;
}
function removetl(temp) {
    document.getElementById("l" + temp).style.fontWeight = "normal";
    document.getElementById("l" + temp).style.color = old_color;
}

function selectedts(temp) {
    document.getElementById("s" + temp).style.fontWeight = "bolder";
    document.getElementById("s" + temp).style.color = new_color;
}
function removets(temp) {
    document.getElementById("s" + temp).style.fontWeight = "normal";
    document.getElementById("s" + temp).style.color = old_color;
}


function searchtimelimit(temp) {
    removetl(timelimit);
    timelimit = temp;
    selectedtl(timelimit);
    //alert(timelimit);
    // searchitt();
}

function searchsporttype(temp) {
    removest(sporttype);
    sporttype = temp;
    selectedst(sporttype);
    //alert(attributiontype);
    // searchitt();
}

function searchacttype(temp) {
    removeat(acttype);
    acttype = temp;
    selectedat(acttype);
    //alert(acttype);
    // searchitt();
}
function searchactstate(temp) {
    removets(actstate);
    actstate = temp;
    selectedts(actstate);
    //alert(acttype);
    // searchitt();
}