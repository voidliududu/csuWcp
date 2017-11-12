/**
 * Created by hesongxian on 2017/5/3.
 */
var base_url = "http://127.0.0.2/index.php/";
$(function(){
    var angle=0;
    setInterval(function(){
        angle += 1;
        $('.gear').rotate(angle);
        $('.gear2').rotate(-angle);
    },20);

    $('.c_r_i_pic').on('click',function () {
        var id = $(this).attr('id').split('c_r_i_')[1];
        $('#Index').css('display','none');
        $('#l_body').load(base_url + 'Index/showIndexList/' + nameZN_forPHP[id]);
        $('.l_b_middle-'+id).css('display','block');
        $('#all').css('display','block');
        $('#b03').css('height','323px');

    });

    //回主导航页
    $('#r_index').on('click',function () {
        $('#Index').css('display','block');
        $('#all').css('display','none');
        $('#b03').css('height','323px');

    });
    // $('.nav').on('click',function () {
    //     var now = $(this).attr('id').split('r_')[1];
    //     $('.l_b_middle').css({'display':'none'});
    //     $('.l_b_middle-'+now).css('display','block');
    //     $('#b03').css('height','323px');
    // });

    $('.nav').on('click',function (e) {
        // var now = $(this).attr('id').split('r_')[1];
        // $('.l_b_middle').css({'display':'none'});
        // $('.l_b_middle-'+now).css('display','block');
        var cate = e.target.name;
        console.log(e.target);
        $('#l_body').load(base_url + 'Index/showIndexList/' + cate);
        $('#b03').css('height','323px');

    });
    //----------------------------------点击（出现/关闭）产品页-------------------------------------------
    var scrollTop = 0;
    $('.pic').on('click',function () {
        var name = $(this).parent().attr('class').substring(22,25);
        if(name == "wyy"){
            name = "wdy"
        }else if(name == "gzs"||name == "app"||name == "whd"){
            name = "wcp"
        }
        $('.page-bac').css('display','block');
        $('.'+name+'-page').css("display","block");

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
    // if(document.getElementById("all").clientHeight > 600 && document.getElementById('all').clientWidth > 1080) {
    //     $('body').css('overflow','hidden');
    // }
    // else{
    //     $('body').css('overflow','auto');
    // }

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
            console.log(1)
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
            console.log(2)


        }
    }
};