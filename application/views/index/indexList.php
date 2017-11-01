<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-31
 * Time: 下午6:15
 */
?>
<?php
/*
 * $cate 分类id 0为工作室
 * $page 当前页
 * $items
 * */
$classMap = [
    '0' => 'l_b_middle-gzs',
    '1' => 'l_b_middle-wdy',
    '2' => 'l_b_middle-wyy',
    '3' => 'l_b_middle-app',
    '4' => 'l_b_middle-wzz',
    '5' => 'l_b_middle-wmh',
    '6' => 'l_b_middle-whd'
];
?>
            <div id="l_b_left">
                <div style="vertical-align: middle"><img id="l_b_l_leftA" cateId="<?php echo $cate; ?>" page="<?php echo $page;?>" src="<?php echo base_url('asset/');?>img/arrow.png" /></div>
            </div>
                <div class="l_b_middle <?php echo $classMap[$cate];?>" style="display: block;">
                    <?php
                    foreach ($items->result() as $item){
                    ?>
                    <div id="l_b_m_1" class="pic">
                        <div class="p_pic">
                            <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="<?php
                            if($cate == 0){
                                echo $item->LOGO;
                            }elseif (array_key_exists($cate,[3=>'',4=>'',5=>'',6 =>''])){
                                echo $item->COVER;
                            }elseif(array_key_exists($cate,[1=>'',2=>''])){
                                echo $item->SCREENSHOOT;
                            } ?>">
                        </div>
                        <div class="p_title"><?php echo $item->NAME;?></div>
                    </div>
                    <?php
                    }
                    ?>
                </div>

            <div id="l_b_right">
                <div style="vertical-align: middle"><img id="l_b_l_rightA" cateId="<?php echo $cate; ?>" page="<?php echo $page;?>" src="<?php echo base_url('asset/');?>img/arrow.png"></div>
            </div>
<script>
    var scrollTop = 0;
    $('.pic').on('click',function () {
        var name = $(this).parent().attr('class').substring(22,25);
        if(name == "wyy"){
            name = "wdy"
        }else if(name == "gzs"||name == "app"||name == "whd"){
            name = "wcp"
        }
        $('.page-bac').css('display','block');
        $('.'+name+'-page')
            .load(base_url + 'Index/showArticle/' + <?php echo $cate . '/'.$page;?>)
            .css("display","block");
    });
    $('.page-close').on('click',function () {
        $('.page-bac').css('display','none');
        $(this).parent().css('display','none');
        scrollTop = 0;
    });
</script>