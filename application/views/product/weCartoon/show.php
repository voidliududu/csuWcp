<?php
/*微漫画*/
?>
<?php
/**
 * $items 图片信息
 * */
?>
<!--微漫画用这个div-->
<div class="wmh-page scroll" style="display: none;z-index: 9">
    <img src="img/close.png" alt="" class="mh-page-close page-close" style="right:20%">
    <div style="width:100%;height:60px"></div>
    <div class="mh-page-whole height">
        <?php
        foreach($items as $key => $item) {
            ?>
            <div class="mh-page-one mh-page-com">
                <div class="mh-page-contain"><img src="<?php echo $item->COVER;?>"></div>
                <div class="mh-page-number"><span><?php echo $key + 1 ;?></span></div>
            </div>
            <?php
        }
        ?>

    </div>
</div>