
<div id="page_main_movie" style="display:block">
    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微电影 </header>
    <!--添加微产品内容填写-->
    <div class="cate_add add">
        <div class="add_text"> 电影名:<span class="glyphicon glyphicon-pencil"></span>
            <input placeholder="请输入微电影名" class="add_input" accept="image/jpeg, image/jpg, image/png" name="name" id="movie_name"/>
            <div class="add_text" style="display:none;color:red"></div>
        </div>
        <div class="add_text">工作室ID :<span class="glyphicon glyphicon-pushpin"></span>
            <input placeholder="请输入工作室ID,没有可不填" class="add_input" accept="image/jpeg, image/jpg, image/png" name="author" id="movie_studio"/>
            <input type="hidden" name="cate" value="6" />
        </div>
        <div class="add_text"> (异步上传每一个资源，不用担心上传的时候网页被挂起了。)</div>
        <div class="add_text" style="color:red"> (请先点击“上传”将文件上传后再按“确认”添加产品。)</div>
        <div class="add_text"> (当然，只有所有资源完成上传才能提交添加产品。)</div>
        <div class="add_text"> (电影越大，上传的时间就会越长，所以请耐心等待。)</div>
        <div class="add_text"> (不用担心模板的配色，我们会选择图片主色调作为配色。)</div>
        <div class="add_text">&nbsp视 频 封 面 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="音乐图片" name="screenshoot" class="add_input" accept="image/jpeg, image/jpg, image/png"/>
            <input type="button" value="上传" name="1" class="upload_img cover" style="display:inline-block;" id="movie_img"/>
            <div class="add_text" style="display:none;color:red"></div>
        </div>
        <div class="add_text">&nbsp视 频 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="请输入来源" name="media" class="add_input" accept="video/mp4"/>
            <input type="button" value="上传" name="1" class="upload_mp4" style="display:inline-block;" id="movie_file"/>
            <div class="add_text" style="display:none;color:red"></div>
        </div>
        <div class="add_text"> &nbsp选 择 模 版 :</div>
        <div id="movie_template">
            <img src="../../img/preview/wdy2.jpg" class="info_img preview" name="7">
            <img src="../../img/preview/wdy3.jpg" class="info_img preview" name="8">
        </div>
        <div class="add_text">&nbsp描 述 :<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro" id="movie_description"></textarea>
        <div class="add_text" style="display:none;color:red" id="last_text"></div>
        <br>
        <div class="add_text" style="display:none;color:red" id="last_text2"></div>
    </div>
    <input type="button" value="确认" id="movie_add_check" class="check_add" />
    <div class="add_text" style="display:none;color:red"></div>
</div>
 <br><br><br>


<iframe id="hidden_frame" name="hidden_frame" style="display:none"></iframe>
                    <div class="clearfix"></div>
