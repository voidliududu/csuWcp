<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-13
 * Time: 上午9:28
 */
?>

<div id="page_main_cartoon" style="display: none">
    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微产品 </header>
    <header class="page_head change_product"><span class="glyphicon glyphicon-edit"></span> 修改微产品信息 </header>
    <!--添加微产品内容填写-->
    <div class="cate_add add">
        <div class="add_text"> 漫 画 名:<span class="glyphicon glyphicon-pencil"></span>
            <input placeholder="请输入微漫画名" name="name" value="<?php echo $product->NAME;?>" class="add_input"/>
        </div>
        <div class="add_text">&nbsp&nbsp&nbsp来 源 :<span class="glyphicon glyphicon-pushpin"></span>
            <input placeholder="请输入来源" class="add_input" name="author" value="<?php echo $product->AUTHOR;?>" />
        </div>
        <div class="add_text">漫画介绍:<span class="glyphicon glyphicon-tag"></span> </div>
        <textarea class="add_intro"></textarea>
        <div class="add_main">
            <div class="add_text add_title"> (主要内容，可以添加多个图片)</div>
            <div class="add_text">图片:<span class="glyphicon glyphicon-picture add_pic"></span>
                <span class="add_pic_tip">点击添加图片</span>
                <img src="" class="add_pic_pre">
            </div>
            <button class="check_delete" style="float:left;display: none">删除</button>
        </div>
        <button id="cartoon_add" class="check_add" style="float:left;margin-left:50px">继续添加</button>
    </div>
</div>
 <br><br><br>
<!--                    <button id="product_add_check" class="check_add">确认添加</button>-->
<!--                    <button id="product_change_check" class="check_add" style="display: none">确认修改</button>-->
                    <div class="clearfix"></div>
