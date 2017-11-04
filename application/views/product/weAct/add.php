<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-13
 * Time: 上午9:26
 */
?>
<?php echo form_open('Admin/addArticle',["enctype" => "MULTIPART/FORM-DATA",'target' => 'hidden_frame']);?>
<div id="page_main_act" style="display: block">
    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微产品 </header>
    <!--添加微产品内容填写-->
    <div class="cate_add add">
        <div class="add_text">活动名:<span class="glyphicon glyphicon-pencil"></span>
            <input placeholder="请输入微产品名" class="add_input" name="name"/>
        </div>
        <div class="add_text">&nbsp来 源 :<span class="glyphicon glyphicon-pushpin"></span>
            <input placeholder="请输入来源" class="add_input" name="author"/>
            <input type="hidden" name="cate" value="6" />
        </div>
        <div class="add_text">&nbsp活 动 图 片 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="作品封面" name="cover" class="add_input"/>
        </div>
        <div class="add_text">&nbsp活 动 内 容 :<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"></textarea>
    </div>
</div>
<input type="submit" value="确认" id="studio_add_check" class="check_add" />
</form>
<iframe name="hidden_frame" id="hidden_frame" style="display: none;"></iframe>
 <br><br><br>
<div class="clearfix"></div>