
<div id="page_main_music" style="display:block">
    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微音乐 </header>
    <!--添加微产品内容填写-->
    <div class="cate_add add">
        <div class="add_text"> 音乐名:<span class="glyphicon glyphicon-pencil"></span>
            <input placeholder="请输入微音乐名" class="add_input"/>
        </div>
        <div class="add_text">工作室ID :<span class="glyphicon glyphicon-pushpin"></span>
            <input placeholder="请输入工作室ID" class="add_input" name="author"/>
            <input type="hidden" name="cate" value="6" />
        </div>
        <div class="add_text"> (在写描述的时候，也可以试着把歌词写进去，一句歌词一行。)</div>
        <div class="add_text"> (异步上传每一个资源，不用担心上传的时候网页被挂起了。)</div>
        <div class="add_text"> (当然，只有所有资源完成上传才能提交添加产品。)</div>
        <div class="add_text">&nbsp音乐图片 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="音乐图片" name="screenshoot" class="add_input"/>
            <input type="button" value="上传" name="1" class="" style="display:inline-block;"/>
        </div>
        <div class="add_text">&nbsp音 乐 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="请输入来源" name="media" class="add_input"/>
            <input type="button" value="上传" name="1" class="" style="display:inline-block;"/>
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