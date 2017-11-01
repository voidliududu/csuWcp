<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-13
 * Time: 上午9:29
 */
?>
<?php echo form_open('Admin/addMedia',["enctype" => "MULTIPART/FORM-DATA"]);?>
<div id="page_main_movie" style="display: none">
    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微产品 </header>
    <header class="page_head change_product"><span class="glyphicon glyphicon-edit"></span> 修改微产品信息 </header>
    <!--添加微产品内容填写-->
    <div class="cate_add add">
        <div class="add_text"> 电影名:<span class="glyphicon glyphicon-pencil"></span>
            <input placeholder="请输入微电影名" value="<?php echo $product->NAME;?>" class="add_input" name="name"/>
        </div>
        <div class="add_text">&nbsp作 者 :<span class="glyphicon glyphicon-pushpin"></span>
            <input placeholder="请输入来源" class="add_input" value="<?php echo $product->AUTHOR;?>" name="author"/>
            <input type="hidden" name="cate" value="1">
        </div>
        <div class="add_text">&nbsp视 频 截 图 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="音乐图片" name="screenshoot" class="add_input"/>
        </div>
        <div class="add_text">&nbsp视 频 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="请输入来源" name="media" class="add_input"/>
        </div>
        <div class="add_text">&nbsp描 述 :<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"><?php echo $product->DESCRIBE;?></textarea>
        <div class="add_text"> (你可以外接网站或者直接上传电影文件)</div>
<!--        <div class="add_text">电影网站:<span class="glyphicon glyphicon-pushpin"></span>-->
<!--            <input placeholder="请输入电影网站" class="add_input"/>-->
<!--            <input type="hidden" name="cate" value="1">-->
<!--        </div>-->
<!--        <div class="add_text"> 电 影 :<span class="glyphicon glyphicon-picture add_pic"></span>-->
<!--            <span class="add_pic_tip">点击添加电影</span>-->
<!--            <img src="" class="add_pic_pre">-->
<!--        </div>-->
    </div>
</div>
 <br><br><br>
<!--                    <button id="product_add_check" class="check_add">确认添加</button>-->
<!--                    <button id="product_change_check" class="check_add" style="display: none">确认修改</button>-->
<input type="submit" value="确认" id="studio_add_check" class="check_add" />
</form>
                    <div class="clearfix"></div>
