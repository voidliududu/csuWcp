volume_video = function () {
    $("#volume_button").css("display", "block");
    $("#silence_button").css("display", "none");
    myvideo.muted = false;
};

silence_video = function () {
    $("#silence_button").css("display", "block");
    $("#volume_button").css("display", "none");
    myvideo.muted = true;
};

show_silence = function () {
    $("#volume_button").css({
        "background": "url(\"../../img/templet/images/silence1.png\")",
        "background-repeat": "no-repeat",
        "background-size":"100% 100%"});
};

show_volume = function () {
    $("#volume_button").css({
        "background": "url(\"../../img/templet/images/volume.png\")",
        "background-repeat": "no-repeat",
        "background-size":"100% 100%"});
};
/*

var btn = document.getElementsByTagName("button");
var myvideo = document.getElementById("js-video");
var ran = document.getElementById("ran");

// 拖动range进行调音量大小
function setvalue() {
    myvideo.volume = ran.value / 100;
    myvideo.muted = false;
/!*    $("#silence_button").css("display", "none");
    $("#volume_button").css("display", "block");*!/
}


*/

var btn=document.getElementsByTagName("button");
var myvideo=document.getElementById("js-video");
var ran=document.getElementById("ran");

//关闭声音
function silence_video(){
    myvideo.muted=true;
    /*    btn[0].disabled=true;
        btn[1].disabled=false;*/
}

//打开声音
function volume_video(){
    myvideo.muted=false;
    /*    btn[0].disabled=false;
        btn[1].disabled=true;*/
}


//拖动range进行调音量大小
function setvalue(){
    myvideo.volume=ran.value/100;
    myvideo.muted=false;
}


