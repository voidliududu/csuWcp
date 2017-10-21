<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-13
 * Time: 下午3:55
 */
?>

<div class="product_info_page" id="product1_info" style="display: none">
    <header class="page_head"><span class="glyphicon glyphicon-file"></span>product1 </header>
    <!--微产品信息-->
    <div class="info_show">
        <div class="info_text">产品:<?php echo $product->PRO_NAME;?></div>
        <div class="info_text">代表图片:<img src="<?php echo $product->LINK;?>" class="info_img"> </div>
        <div class="info_text">产品介绍:</div>
        <div class="product_intro" id="product_intro">
            <p><?php echo $product->CONTENT;?></p>
        </div>
        <div class="info_text">来源:网络</div>
        <div class="info_text">所属分类:<?php echo $product->CATE_NAME;?></div>
        <div class="info_text">创建时间:<?php echo $product->CREATED;?></div>
        <div class="info_text">点击量:<?php echo $product->READ_COUNT;?></div>
    </div>
</div>
