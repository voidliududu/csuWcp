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
    <?php
    foreach ($items->result() as $item){
    ?>
    <div class="pic">
        <div class="p_pic">
            <?php
            if($cate == 0){
                $getID = $item->LOGO;
            }elseif (array_key_exists($cate,[3=>'',4=>'',5=>'',6 =>''])){
                $getID = $item->COVER;
            }elseif(array_key_exists($cate,[1=>'',2=>''])){
                $getID = $item->SCREENSHOOT;
            } ?>
            <img class="p_p_p" id="<?php echo $getID ?>" src="<?php echo $getID ?>">
            <script>
                    setPic('<?php echo $getID ?>');
            </script>
            <div class="p_title"><?php echo $item->NAME;?></div>
            <div class="p_introduce">这里放介绍呀~~~~~我会控制输出多少个字aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div>
        </div>
    </div>

        <?php
    }
    ?>
