<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-13
 * Time: 下午3:55
 */
?>
<?php
/* $cate
 * $product
 * todo 更改属性值
 * */
    $cateMap = [
            '1' => '微电影',
            '2' => '微音乐',
            '3' => 'App',
            '4' => '微杂志',
            '5' => '微漫画',
            '6' => '微活动'
        ];
?>

    <header class="page_head"><span class="glyphicon glyphicon-file"></span>产品信息</header>
    <!--微产品信息-->
    <div class="info_show">
        <div class="info_text">产品:<?php echo $product->NAME;?></div>
        <div class="info_text">代表图片:<img src="<?php
            if($cate == 0){
                echo $product->LOGO;
            }elseif (array_key_exists($cate,[3=>'',4=>'',5=>'',6 =>''])){
                echo $product->COVER;
            }elseif(array_key_exists($cate,[1=>'',2=>''])){
                echo $product->SCREENSHOOT;
            }
            ?>" class="info_img"> </div>
        <div class="info_text">产品介绍:</div>
        <div class="product_intro" id="product_intro">
            <p><?php echo $product->CONTENT;?></p>
        </div>
        <div class="info_text">来源:<?php echo $product->AUTHOR;?></div>
        <div class="info_text">所属分类:<?php echo $cateMap[$cate];?></div>
        <div class="info_text">创建时间:<?php echo $product->TIME;?></div>
        <div class="info_text">点击量:<?php echo @$product->READ_COUNT?0:0;?></div>
    </div>
