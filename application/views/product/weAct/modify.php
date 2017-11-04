<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-31
 * Time: 下午9:49
 */
?>
<?php
/**
 * $product
 * */
?>
<div id="page_main_act" style="display: block">
<!--    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微产品 </header>-->
    <header class="page_head change_product"><span class="glyphicon glyphicon-edit"></span> 修改微产品信息 </header>
    <!--添加微产品内容填写-->
    <div class="cate_add add">
        <div class="add_text">活动名:<span class="glyphicon glyphicon-pencil"></span>
            <input placeholder="请输入微产品名" value="<?php echo $product->NAME;?>" class="add_input" name="name"/>
        </div>
        <div class="add_text">&nbsp来 源 :<span class="glyphicon glyphicon-pushpin"></span>
            <input placeholder="请输入来源" class="add_input" value="<?php echo $product->AUTHOR;?>" name="author"/>
            <input type="hidden" name="cate" value="6" />
        </div>
        <div class="add_text">&nbsp活 动 图 片 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="作品封面" name="cover" class="add_input"/>
        </div>
        <div class="add_text">&nbsp活 动 内 容 :<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"><?php echo $product->CONTENT;?></textarea>
    </div>
</div>
 <br><br><br>
<!--                    <button id="product_add_check" class="check_add">确认添加</button>-->
<!--                    <button id="product_change_check" class="check_add" style="display: none">确认修改</button>-->
                    <div class="clearfix"></div>