/**
 * Created by hesongxian on 2017/5/3.
 */
$(function(){
    //主页的齿轮旋转
    rotateGear();
    //获取横幅
    getBanner();
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
    $('.l_b_img').on('click',function () {
        link2pro($(this));
    });
    //二级页面点击触发事件
    $('.nav').unbind('click').on('click',function () {
        var id = $(this).attr('id').split('r_')[1];
        showWater(id);
    });

    $('#l_body').unbind('click').on('click','.p_pic',function () {
        window.open($(this).attr('href'))
    });

    $(window).on('resize',function () {
        resize_changeFont();
        setBackGroundSize();
        $('#b03').css('width', '100%');
    })
});




