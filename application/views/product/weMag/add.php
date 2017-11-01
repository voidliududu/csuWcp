<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-13
 * Time: 上午9:29
 */
?>
<?php echo form_open('Admin/addArticle',["enctype" => "MULTIPART/FORM-DATA","target" => "hidden_frame"]);?>
<div id="page_main_mag" style="display: block">
    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微产品 </header>
    <!--添加微产品内容填写-->
    <div class="cate_add add">
        <div class="add_text">杂志名:<span class="glyphicon glyphicon-pencil"></span>
            <input placeholder="请输入微产品名" class="add_input" name="name"/>
        </div>
        <div class="add_text">&nbsp作 者 :<span class="glyphicon glyphicon-pushpin"></span>
            <input placeholder="请输入作者" class="add_input" name="author"/>
            <input type="hidden" name="cate" value="4" />
        </div>
        <div class="add_text">&nbsp作 品 封 面 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="作品封面" name="cover" class="add_input"/>
        </div>
        <div class="add_text">&nbsp作 品 内 容 :<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"></textarea>
    </div>
</div>
 <br><br><br>
<input type="submit" value="确认" id="studio_add_check" class="check_add" />
</form>
<iframe id="hidden_frame" name="hidden_frame" style="display:none"></iframe>
<div class="clearfix"></div>
