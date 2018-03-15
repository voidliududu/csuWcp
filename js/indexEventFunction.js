/**
 * Created by hesongxian on 2017/12/9.
 */
function setPic(pic){
    document.getElementById(pic).onload = function() {
        oPic = $(document.getElementById(pic));
        urlPic = pic.toString();
        picId = $(oPic).attr('id').split('/upload/')[1].split('.png')[0];
        $(oPic).attr('id',picId);
        setWidth(picId,urlPic);
    };
}

//主页的齿轮旋转
function rotateGear() {
    var angle=0;
    setInterval(function(){
        angle += 1;
        $('.gear').rotate(angle);
        $('.gear2').rotate(-angle);
    },20);
}
//回主导航页
function showIndex() {
    $(window).unbind('scroll');
    $('#Index').css('display','block');
    $('#all').css('display','none');
}

//加载瀑布流
function showWater(id){
    $('.l_b_middle').css('display','none');
    thisList = $('#l_b_middle-'+id);
    $('#l_body').attr('now',id);
    if(thisList.attr('click')){
        $('#l_b_middle-'+id).css('display','block');
    }
    else{
        myfall = getMyfall(id,thisList);
        iniPic(id,1,myfall,false);
        $(window).unbind('scroll').on('scroll',function () {
            if($(this).scrollTop() >= parseInt($(document).height()-$(this).height())){
                getPic(id,myfall);
            }
        }).unbind('resize').on('resize',function () {
            judge = myfall.moveWater();
            if(judge == 0){
                getPic(id,myfall);
            }
        });
    }
}

function getMyfall(id,thisList){
    windowWidth = $(document).width();
    if(windowWidth <= 480){
        waterWidth = parseInt(windowWidth*0.9/2);
    }
    else if(windowWidth > 480  && windowWidth <= 750){
        waterWidth = parseInt(windowWidth*0.9/3);
    }
    else if(windowWidth > 750  && windowWidth <= 1024){
        waterWidth = parseInt(windowWidth*0.9/4);
    }
    if(windowWidth <= 320){
        myfall = new waterFall(id, thisList,thisList.parent(),waterWidth,windowWidth);
    }
    else if(windowWidth > 320 && windowWidth <= 480){
        myfall = new waterFall(id, thisList,thisList.parent(),waterWidth,windowWidth);
    }
    else if(windowWidth >480 && windowWidth <= 750){
        myfall = new waterFall(id, thisList,thisList.parent(),waterWidth,windowWidth);
    }
    else if(windowWidth > 750 && windowWidth <= 1024){
        myfall = new waterFall(id, thisList,thisList.parent(),230,windowWidth);
    }
    else if(windowWidth > 1024){
        myfall = new waterFall(id, thisList,thisList.parent(),237,1024);
    }
    return myfall;
}

function setBackGroundSize(){
    windowWidth = $(window).width();
    windowWidthPX =  $(window).width() + 'px';
    b03Height = parseInt(windowWidth/2.55) + 'px';
    imgHeight = (parseInt(windowWidth/2.55)-3) + 'px';
    if(windowWidth <= 321){
        $('#b03').css('height',b03Height).css('width',windowWidthPX);
        $('.l_b_img').css('height',imgHeight).css('width',windowWidthPX);
    }
    else if(windowWidth > 321 && windowWidth <= 480){
        $('#b03').css('height',b03Height).css('width',windowWidthPX);
        $('.l_b_img').css('height',imgHeight).css('width',windowWidthPX);
    }
    else if(windowWidth >480 && windowWidth <= 750){
        $('#b03').css('height',b03Height).css('width',windowWidthPX);
        $('.l_b_img').css('height',imgHeight).css('width',windowWidthPX);
    }
    else if(windowWidth > 750 && windowWidth <= 1024){

        $('#b03').css('height',b03Height).css('width',windowWidthPX);
        $('.l_b_img').css('height',imgHeight).css('width',windowWidthPX);
    }
    else if(windowWidth > 1024){
        $('#b03').css('height',b03Height).css('width',windowWidthPX);
        $('.l_b_img').css('height',imgHeight).css('width',windowWidthPX);
    }
}

//浏览器大小变化改变文字大小
function resize_changeFont(){
    if($(document).width() > 750){
        $('#b03').css('height','723px');
        $('.l_b_img').css('wdith','1920px').css('height','723px');
    }
    if($(document).width() < 750 && $(document).width() >= 480){
        $('.l_b_img').css('wdith','1024px').css('height','384px');
        $('#b03').css('height','281px')
    }
    else if($(document).width() < 480 && $(document).width() >= 0){
        $('.l_b_img').css('wdith','480px').css('height','170px');
        $('#b03').css('height','170px')
    }

    if($('#Index').css('display') != 'none'){
        if(document.getElementById("Index").clientHeight > 500 && document.getElementById('Index').clientWidth > 1024){
            $('#c_l1_row2').css("font-size",'1.6vmax');
            $('#c_l1_row3').css("font-size",'1.6vmax');
            $('#c_l1_row4').css("font-size",'1.6vmax');
            $('#c_l2_row2').css("font-size",'3.2vmax');
            $('.c_r1_bg_font').css("font-size",'1.8vmax');
            $('.c_r1_bg_left').css("left",'3vmax');
            $('.c_r1_bg_right').css("right",'3vmax');
            $('.c_r1_bg_bottom').css("bottom",'2.7vmax');
        }
        else{
            $('#c_l1_row2').css("font-size",'20px');
            $('#c_l1_row3').css("font-size",'20px');
            $('#c_l1_row4').css("font-size",'20px');
            $('#c_l2_row2').css("font-size",'40px');
            $('.c_r1_bg_font').css("font-size",'20px');
            $('.c_r1_bg_left').css("left",'30px');
            $('.c_r1_bg_right').css("right",'30px');
            $('.c_r1_bg_bottom').css("bottom",'30px');
        }
    }
}