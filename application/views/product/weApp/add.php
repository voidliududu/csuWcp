<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-13
 * Time: 上午9:27
 */
?>
<?php echo form_open('Admin/addArticle',["enctype" => "MULTIPART/FORM-DATA",'target' => 'hidden_frame']);?>
<div id="page_main_app" style="display: block">
    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微产品 </header>
    <!--添加微产品内容填写-->
    <div class="cate_add add">
        <div class="add_text"> APP 名 :<span class="glyphicon glyphicon-pencil"></span>
            <input placeholder="请输入微产品名" class="add_input" name="name"/>
        </div>
        <div class="add_text">&nbsp&nbsp&nbsp来 源 :<span class="glyphicon glyphicon-pushpin"></span>
            <input placeholder="请输入来源" class="add_input" name="author"/>
            <input type="hidden" name="cate" value="3" />
        </div>
        <div class="add_text">&nbsp&nbsp&nbsp示 例 图 片 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" name="cover">
        </div>
        <div class="add_text">&nbsp产 品 描 述 :<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"></textarea>
</div>
    <input type="submit" value="确认" id="studio_add_check" class="check_add" />
</form>
 <br><br><br>
</div>
<iframe id="hidden_frame" name="hidden_frame" style="display: none"></iframe>
<div class="clearfix"></div>