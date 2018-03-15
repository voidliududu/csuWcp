$(document).ready(function(){
    function autoheight(){
        var txtheight=$(".bottom").height();
        $(".txt-bg").height(txtheight);
        var imgheight=$(".img1").height();
        $(".middle").height(imgheight/0.8)
        $(".middle-img").height(imgheight);
    }
    autoheight();
    $(window).resize(function(){
        autoheight();
    });

});