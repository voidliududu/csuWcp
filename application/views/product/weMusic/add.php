<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-13
 * Time: 上午9:30
 */
?>
<?php echo form_open('Admin/addMedia',["enctype" => "MULTIPART/FORM-DATA",'target' => 'hidden_frame']);?>
<div id="page_main_music" style="display:block">
    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微产品 </header>
    <!--添加微产品内容填写-->
    <div class="cate_add add">
        <div class="add_text"> 音乐名:<span class="glyphicon glyphicon-pencil"></span>
            <input placeholder="请输入微音乐名" class="add_input"/>
        </div>
        <div class="add_text">&nbsp来 源 :<span class="glyphicon glyphicon-pushpin"></span>
            <input placeholder="请输入来源" class="add_input"/>
            <input type="hidden" name="cate" value="2">
        </div>
        <div class="add_text">&nbsp音 乐 图 片 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="音乐图片" name="screenshoot" class="add_input"/>
        </div>
        <div class="add_text">&nbsp音 乐 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="请输入来源" name="media" class="add_input"/>
        </div>
        <div class="add_text">&nbsp描 述 :<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"></textarea>
    </div>
</div>
<input type="submit" value="确认" id="studio_add_check" class="check_add" />
</form>
<br><br><br>
<iframe id="hidden_frame" name="hidden_frame" style="display:none"></iframe>
<div class="clearfix"></div>