/**
 * Created by hesongxian on 2017/5/3.
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
$(function(){
    // nowN = n;
    $('#l_body').unbind().on('resize',function(){
        // resizePic();
    });
    var angle=0;
    setInterval(function(){
        angle += 1;
        $('.gear').rotate(angle);
        $('.gear2').rotate(-angle);
    },20);

    //回主导航页
    $('#r_index').on('click',function () {
        $(window).unbind('scroll');
        $('#Index').css('display','block');
        $('#all').css('display','none');
        $('#b03').css('height','323px');
    });


    $('.c_r_i_pic').unbind('click').on('click',function () {
        $('#all').css('display','block');
        var id = $(this).attr('id').split('c_r_i_')[1];
        $('#Index').css('display','none');
        $('.l_b_middle').css('display','none');
        thisList = $('#l_b_middle-'+id);
        $('#l_body').attr('now',id);
        if(thisList.attr('click')){
            $('#l_b_middle-'+id).css('display','block');
        }
        else{
            myfall = new waterFall(id, thisList,thisList.parent(),237);
            iniPic(id,1,myfall,false);
            getPic(id,myfall);
            // $(window).on('scroll',function () {
            //     getPic(id,1,myfall)
            // });
            // myfall.initWater();
        }
    });

    $('.nav').unbind('click').on('click',function () {
        var id = $(this).attr('id').split('r_')[1];
        $('.l_b_middle').css('display','none');
        thisList = $('#l_b_middle-'+id);
        $('#l_body').attr('now',id);
        if(thisList.attr('click')){
            $('#l_b_middle-'+id).css('display','block');
        }
        else{
            myfall = new waterFall(id, thisList,thisList.parent(),237);
            iniPic(id,1,myfall,false);
            getPic(id,myfall);
            // $(window).on('scroll',function () {
            //     console.log('1')
            // });
            // myfall.initWater();
            // for(m=0;m<n;m++){
            //     $('#' + id + m).toggle('slow');
            // }
        }

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
};



