
<div id="page_main_movie" style="display:block">
    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微电影 </header>
    <!--添加微产品内容填写-->
    <div class="cate_add add">
        <div class="add_text"> 电影名:<span class="glyphicon glyphicon-pencil"></span>
            <input placeholder="请输入微电影名" class="add_input" name="name"/>
        </div>
        <div class="add_text">工作室ID :<span class="glyphicon glyphicon-pushpin"></span>
            <input placeholder="请输入工作室ID" class="add_input" name="author"/>
            <input type="hidden" name="cate" value="6" />
        </div>
        <div class="add_text"> (异步上传每一个资源，不用担心上传的时候网页被挂起了。)</div>
        <div class="add_text"> (当然，只有所有资源完成上传才能提交添加产品。)</div>
        <div class="add_text"> (电影越大，上传的时间就会越长，所以请耐心等待。)</div>
        <div class="add_text">&nbsp视 频 截 图 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="音乐图片" name="screenshoot" class="add_input"/>
            <input type="button" value="上传" name="1" class="" style="display:inline-block;"/>
        </div>
        <div class="add_text">&nbsp视 频 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="请输入来源" name="media" class="add_input"/>
            <input type="button" value="上传" name="1" class="" style="display:inline-block;"/>
        </div>
        <div class="add_text">&nbsp描 述 :<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"></textarea>
        <div class="add_text"> (你可以外接网站或者直接上传电影文件)</div>
    </div>
</div>
 <br><br><br>
<input type="submit" value="确认" id="studio_add_check" class="check_add" />
</form>
<iframe id="hidden_frame" name="hidden_frame" style="display:none"></iframe>
                    <div class="clearfix"></div>
