$(document).ready(function(){
    bodyChange();
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
$('body').on('resize',function () {
    bodyChange();

});
function bodyChange() {
    a = $(window);
    console.log(a.width());
    console.log(a.height());
    if(a.height() >= a.width()){
        $('#background').css('height','100%').css('width','auto')

    }
    else{
        $('#background').css('width','100%').css('height','auto')
    }
}