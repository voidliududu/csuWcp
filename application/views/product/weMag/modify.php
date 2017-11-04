<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-13
 * Time: 上午9:29
 */
?>
<?php echo form_open('Admin/addArticle',["enctype" => "MULTIPART/FORM-DATA"]);?>
<div id="page_main_mag" style="display: block">
    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微产品 </header>
    <header class="page_head change_product"><span class="glyphicon glyphicon-edit"></span> 修改微产品信息 </header>
    <!--添加微产品内容填写-->
    <div class="cate_add add">
        <div class="add_text">杂志名:<span class="glyphicon glyphicon-pencil"></span>
            <input placeholder="请输入微产品名" class="add_input" value="<?php echo $product->NAME;?>" name="name"/>
        </div>
        <div class="add_text">&nbsp作 者 :<span class="glyphicon glyphicon-pushpin"></span>
            <input placeholder="请输入作者" class="add_input" value="<?php echo $product->AUTHOR;?>" name="author"/>
            <input type="hidden" name="cate" value="4" />
        </div>
        <div class="add_text">&nbsp作 品 封 面 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="作品封面" name="cover" class="add_input"/>
        </div>
        <div class="add_text">&nbsp作 品 内 容 :<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"><?php echo $product->CONTENT;?></textarea>
<!--        <div class="add_text"> (只能上传一份PPT、WORD或PDF文件来展示你的杂志，请您将要展示的信息都显示在杂志上。)</div>-->
<!--        <div class="add_text">&nbsp文 件 :<span class="glyphicon glyphicon-picture add_pic"></span>-->
<!--            <span class="add_pic_tip">点击添加PPT、WORD、PDF文件</span>-->
<!--            <img src="" class="add_pic_pre">-->
<!--        </div>-->

        <!--</div>-->

    </div>
</div>
 <br><br><br>
<input type="submit" value="确认" id="studio_add_check" class="check_add" />
</form>
<!--                    <button id="product_add_check" class="check_add">确认添加</button>-->
<!--                    <button id="product_change_check" class="check_add" style="display: none">确认修改</button>-->
<div class="clearfix"></div>
