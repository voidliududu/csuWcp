
<div id="page_main_mag" style="display: block">
    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微杂志 </header>
    <!--添加微产品内容填写-->
    <div class="cate_add add">
        <div class="add_text">杂志名:<span class="glyphicon glyphicon-pencil"></span>
            <input placeholder="请输入微杂志名" class="add_input" id="mag_name"/>
            <div class="add_text" style="display:none;color:red"></div>
        </div>
        <div class="add_text">工作室ID :<span class="glyphicon glyphicon-pushpin"></span>
            <input placeholder="请输入工作室ID,没有可不填" class="add_input" id="mag_studio"/>
            <input type="hidden" name="cate" value="6" />
        </div>
        <div class="add_text" style="color:red"> (请先点击“上传”将文件上传后再按“确认”添加产品。)</div>
        <div class="add_text"> (异步上传每一个资源，不用担心上传的时候网页被挂起了。)</div>
        <div class="add_text"> (当然，只有所有资源完成上传才能提交添加产品。)</div>
        <div class="add_text"> (不用担心模板的配色，我们会选择图片主色调作为配色。)</div>
        <div class="add_text">&nbsp作 品 封 面 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="作品封面" name="cover" class="add_input" accept="image/jpeg, image/jpg, image/png"/>
            <input type="button" value="上传" name="1" class="upload_img cover" style="display:inline-block;" id="mag_img"/>
            <div class="add_text" style="display:none;color:red"></div>
        </div>
        <div class="add_text">&nbsp作 品 内 容 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="作品内容 " name="cover" class="add_input" accept="application/pdf"/>
            <input type="button" value="上传" name="1" class="upload_other" style="display:inline-block;" id="mag_file"/>
            <div class="add_text" style="display:none;color:red"></div>
        </div>
        <div class="add_text">&nbsp描 述 :<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro" id="mag_description"></textarea>
        <div class="add_text" style="display:none;color:red" id="last_text"></div>
        <br>
        <div class="add_text" style="display:none;color:red" id="last_text2"></div>

    </div>
    <input type="button" value="确认" id="mag_add_check" class="check_add" />
    <div class="add_text" style="display:none;color:red"></div>

</div>
 <br><br><br>
<iframe id="hidden_frame" name="hidden_frame" style="display:none"></iframe>
<div class="clearfix"></div>
