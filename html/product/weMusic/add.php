
<div id="page_main_music" style="display:block">
    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微音乐 </header>
    <!--添加微产品内容填写-->
    <div class="cate_add add">
        <div class="add_text"> 音乐名:<span class="glyphicon glyphicon-pencil"></span>
            <input placeholder="请输入微音乐名" id="music_name" class="add_input"/>
            <div class="add_text" style="display:none;color:red"></div>

        </div>
        <div class="add_text">工作室ID :<span ="glyphicon glyphicon-pushpin"></span>
            <input placeholder="请输入工作室ID,没有可不填" class="add_input" name="author" id="music_studio"/>
            <input type="hidden" name="cate" value="6" />
        </div>
        <div class="add_text"> (在写描述的时候，也可以试着把歌词写进去，一句歌词一行。)</div>
        <div class="add_text" style="color:red"> (请先点击“上传”将文件上传后再按“确认”添加产品。)</div>
        <div class="add_text"> (异步上传每一个资源，不用担心上传的时候网页被挂起了。)</div>
        <div class="add_text"> (当然，只有所有资源完成上传才能提交添加产品。)</div>
        <div class="add_text"> (不用担心模板的配色，我们会选择图片主色调作为配色。)</div>
        <div class="add_text">&nbsp音乐图片 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="音乐图片" name="screenshoot"  class="add_input" accept="image/jpeg, image/jpg, image/png"/>
            <input type="button" value="上传" name="1" class="upload_img cover" style="display:inline-block;" id="music_img"/>
            <div class="add_text" style="display:none;color:red"></div>
        </div>
        <div class="add_text">&nbsp音 乐 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="请输入来源" name="media" class="add_input" accept="audio/mpeg"/>
            <input type="button" value="上传" name="1" class="upload_other" style="display:inline-block;" id="music_file"/>
            <div class="add_text" style="display:none;color:red"></div>
        </div>
        <div class="add_text">&nbsp描 述 :<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro" id="music_description"></textarea>
        <div class="add_text" style="display:none;color:red" id="last_text"></div>
        <br>
        <div class="add_text" style="display:none;color:red" id="last_text2"></div>

    </div>
    <input type="button" value="确认" id="music_add_check" class="check_add" />
    <div class="add_text" style="display:none;color:red"></div>
</div>


<br><br><br>
<iframe id="hidden_frame" name="hidden_frame" style="display:none"></iframe>
<div class="clearfix"></div>