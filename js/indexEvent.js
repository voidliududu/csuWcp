/**
 * Created by hesongxian on 2017/5/3.
 */
$(function(){
    //主页的齿轮旋转
    rotateGear();

    //回主导航页
    $('#r_index').on('click',function () {
        showIndex();
    });

    //主页点击触发事件
    $('.c_r_i_pic').unbind('click').on('click',function () {
        var id = $(this).attr('id').split('c_r_i_')[1];
        $('.c_r_i_pic').animate({
            height:'toggle',
            width:'toggle'
        },"slow");
        $('.c_r_i_pic2').animate({
                height:'toggle',
                width:'toggle'
        },'slow');
        $('.c_row').animate({
            opacity:0
        },'fast',function(){
        });
        $('.c_l_r2_title').animate({
            opacity:0
        },'fast',function(){
        });
        $('#c_footer').animate({
            opacity:0
        },'normal',function(){
        });
        setTimeout(function () {
            setBackGroundSize();
            $('#all').css('display','block').animate({
                opacity:1
            },'slow',function () {
                showWater(id);
                $('#Index').css('display','none');
            });
        },1000);

    });

    //二级页面点击触发事件
    $('.nav').unbind('click').on('click',function () {
        var id = $(this).attr('id').split('r_')[1];
        showWater(id)
    });

    //----------------------------------点击（出现/关闭）产品页-------------------------------------------
    var scrollTop = 0;
    $('.l_b_middle').on('click','.pic',function () {
        var name = $(this).parent().attr('class').substring(22,25);
        if(name == "wyy"){
            name = "wdy"
        }else if(name == "gzs"||name == "app"||name == "whd"){
            name = "wcp"
        }
        // $('.page-bac').css('display','block');
        // $('.'+name+'-page').css("display","block");

    });
    $('.page-close').on('click',function () {
        $('.page-bac').css('display','none');
        $(this).parent().css('display','none');
        scrollTop = 0;
    });
    //产品里的滚动条
    $('.scroll').on('mousewheel',function (event,delta) {
        height = $(this).children('.height');
        console.log(height);

        if(delta === -1){
            if(height.length == 0)
                height = $(this);
            if(($(height.children()[1]).height()*$(height).children().length) - $(this).height() +50 > scrollTop)
                scrollTop +=100;
            $(this).scrollTop(scrollTop);
        }
        else{
            if(0 > scrollTop)
                return;
            scrollTop -=100;
            $(this).scrollTop(scrollTop);
        }
    })
});

window.onresize = function(){
    resize_changeFont();
    setBackGroundSize();
};