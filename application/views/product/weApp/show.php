<?php
/*
app
*/
?>
<?php
/**
 * product 5个
 * */
?>
<!--微APP、工作室、微活动用这个div-->
<div class="wcp-page" style="display: none;z-index:9;">
    <img src="<?php echo base_url('asset/');?>img/close.png" alt="" class="zz-page-close page-close">
    <div id="container"></div>
    <div id="whole">
        <div id="body-two">
            <div id="central" >
                <div class="le" ><img src="<?php echo base_url('asset/');?>img/0.jpg" style="height: 380px;width: 580px;"></div>
                <div class="ri"></div>
                <?php foreach ($product->result() as $key => $item) { ?>
                    <div class="text" style="display: block">
                        <?php echo $item->CONTENT;?>
                    </div>
                <?}?>
            </div>
        </div>
    </div>
    <div id="footer" >
        <div id="foot">
            <div id="PRE" style="cursor:pointer;width: 5%;height: 100%;"><img src="<?php echo base_url('asset/');?>img/6.jpg" style="height: 100%;"></div>
            <ul id="longPic">
                <?php foreach ($product->result() as $key => $item) {?>
                    <li><img src="<?php echo $item->COVER;?>" class=" active img" style="height: 90%;width: 80%; top: 5%;left: 10%;opacity: 1;"></li>
                <?php }?>
            </ul>
            <div id="NEX" style="cursor:pointer;width: 5%;height: 100%;"><img src="<?php echo base_url('asset/');?>img/6.jpg" style="height: 100% ;" class="Iright"></div>
        </div>
    </div>
</div>
<img src="<?php echo base_url('asset/');?>img/close.png" alt="" class="zz-page-close page-close">
    <div id="container"></div>
    <div id="whole">
        <div id="body-two">
            <div id="central" >
                <div class="le" ><img src="<?php echo base_url('asset/');?>img/0.jpg" style="height: 380px;width: 580px;"></div>
                <div class="ri"></div>
                <?php foreach ($product->result() as $key => $item) { ?>
                    <div class="text" style="display: block">
                        <?php echo $item->CONTENT;?>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div id="footer" >
        <div id="foot">
            <div id="PRE" style="cursor:pointer;width: 5%;height: 100%;"><img src="<?php echo base_url('asset/');?>img/6.jpg" style="height: 100%;"></div>
            <ul id="longPic">
                <?php
                foreach ($product->result() as $key => $item) {?>
                    <li><img src="<?php echo $item->COVER;?>" class=" active img" style="height: 90%;width: 80%; top: 5%;left: 10%;opacity: 1;"></li>
                <?php }?>
            </ul>
            <div id="NEX" style="cursor:pointer;width: 5%;height: 100%;"><img src="<?php echo base_url('asset/');?>img/6.jpg" style="height: 100% ;" class="Iright"></div>
        </div>
    </div>
<script>
    $(function () {
        $('.page-close').on('click',function () {
            $('.page-bac').css('display','none');
            $(this).parent().css('display','none');
            scrollTop = 0;
        });
        scrollTop = 0;
        $('.bodyScroll').on('mousewheel',function (event,delta) {
            if(delta === -1){
                if(800 - $(window).height() -50 > scrollTop )
                    scrollTop +=50;
                $('body').scrollTop(scrollTop);
            }
            else{
                if(0 > scrollTop)
                    return;
                scrollTop -=50;
                $('body').scrollTop(scrollTop);
            }
        });
        //图片滚动
        var unslider04 = $('#b03').unslider({
                dots: true
            }),
            data04 = unslider04.data('unslider');
        $('.unslider-arrow04').click(function() {
            var fn = this.className.split(' ')[1];
            data04[fn]();
        });
        //
        function move(direction, obj) {
            if (obj) {
                NOW = obj.index;
            }
            oIm
                .css('left','20%')
                .css('width', '60%')
                .css('height', '70%')
                .css('top','15%')
                .css('opacity', 0.7)
                .css('filter', 'blur('+1+'px)');
            text.css('display','none');
            if (direction == 'pre'){
                NOW--;
                if (NOW<0){
                    NOW = oIm.length-1;
                }
            }else if (direction == 'next'){
                NOW++;
                if (NOW >= oIm.length){
                    NOW = 0;
                }
            }
            text.eq(NOW).css('display','block');
            $('.le img').attr('src',pic[NOW]);
            $('#container').css('backgroundImage',"url("+pic[NOW]+")");
            oIm.eq(NOW)
                .css('left','10%')
                .css('width', '80%')
                .css('height', '90%')
                .css('top','5%')
                .css('opacity', 1)
                .css('filter', 'blur('+0+')');
        }
        var oIm = $('#foot ul li img');
        var text = $('.text');
        var NOW = 0;
        var pic = ["http://localhost/wcp/page/img/0.jpg","http://localhost/wcp/page/img/1.jpg","http://localhost/wcp/page/img/2.jpg","http://localhost/wcp/page/img/3.jpg","http://localhost/wcp/page/img/4.jpg"]
        for (var i = 0;i<oIm.length;i++){
            oIm[i].index = i;
            oIm[i].onmouseover = function () {
                move(false,this)
            }
        }
        $('#p').click(function () {
            move('pre');
        });
        $('#n').click(function () {
            move('next');
        });

//----------------------------------------大翻页--------------------------------------------------------
        var p = 1;
        function ajax(obj, fun) {
            $(obj).click(function () {
                $(obj).attr('num',p);
                if (obj == '#NEX'){
                    p+=5 ;
                }else if(obj == '#PRE'){
                    p-=5;
                }
                $.ajax({
                    type: 'GET',
                    url: 'http://localhost/wcp/Cooperate/category.php?t='+new Date().getTime(),
                    dataType: 'json',
                    async:false,
                    data: {
                        'i': i,
                        'm': 4,
                        'id': 7,
                        'num': 5
                    },
                    success:fun,
                    error: function () {
                        alert('啊啊啊啊啊啊，出错了！')
                    }
                })
            })
        }
        var sImg = $('.img');
        ajax('#PRE', function (response) {
            alert(response[3].cateinfo);
            // alert('http://localhost'+response[0].cateimg);
            // pic = [];
            pic = ['http://localhost'+response[0].cateimg,'http://localhost'+response[1].cateimg,'http://localhost'+response[2].cateimg,'http://localhost'+response[3].cateimg,'http://localhost'+response[4].cateimg]
            // $('.le').html(pic);
            sImg.eq(0).attr('src', pic[0]);
            sImg.eq(1).attr('src', pic[1]);
            sImg.eq(2).attr('src', pic[2]);
            sImg.eq(3).attr('src', pic[3]);
            sImg.eq(4).attr('src', pic[4]);
            $('.le img').attr('src',pic[NOW]);
            $('#container').css('backgroundImage','url('+pic[NOW]+')');
        });
        ajax('#NEX', function (response) {
            // pic = [];
            pic = ['http://localhost'+response[0].cateimg,'http://localhost'+response[1].cateimg,'http://localhost'+response[2].cateimg,'http://localhost'+response[3].cateimg,'http://localhost'+response[4].cateimg]
            sImg.eq(0).attr('src','http://localhost'+response[0].cateimg);
            sImg.eq(1).attr('src','http://localhost'+response[1].cateimg);
            sImg.eq(2).attr('src','http://localhost'+response[2].cateimg);
            sImg.eq(3).attr('src','http://localhost'+response[3].cateimg);
            sImg.eq(4).attr('src','http://localhost'+response[4].cateimg);
            $('.le img').attr('src',pic[NOW]);
            $('#container').css('backgroundImage','url('+pic[NOW]+')');
        });
    });

</script>
