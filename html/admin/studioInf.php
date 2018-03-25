<header class="page_head"><span class="glyphicon glyphicon-file"></span>studio1 </header>
<!--工作室信息-->
<div class="info_show">
    <fieldset>
        <legend>双击进行修改</legend>
        <dl class="info_text" >
            <dt>工作室名:</dt>
            <dd  id="studio_name" ondblclick="ShowElement(this)"></dd>
        </dl>
        <dl class="info_text" >
            <dt>工作室ID:</dt>
            <dd  id="studio_id"></dd>
        </dl>
        <dl class="info_text" >
            <dt>工作室所属:</dt>
            <dd  id="studio_department" ondblclick="ShowElement(this)"></dd>
        </dl>
        <dl class="info_text" >
            <dt>代表图片:</dt>
            <dd  id="" >
                <img src="" class="info_img" id ='studio_img'>
                <input type="file" placeholder=" " name="cover" class="add_input" accept="image/jpeg, image/jpg, image/png"/>
                <input type="button" value="上传" name="1" class="upload_img cover" style="display:inline-block;"/>
                <div class="add_text" style="display:none;color:red"></div>
            </dd>
        </dl>
        <dl class="info_text" >
            <dt>工作室介绍:</dt>
            <dd  id="studio_intro" ondblclick="ShowElement(this)"></dd>
        </dl>
        <div class="info_text" id="studio_info_page"><a class="a" href="http://www.baidu.com" target="view_window">页面地址</a></div>
        <input type="submit" value="返回" id="studio_return_check" class="check_add" />
        <input type="submit" value="确认修改" id="studio_change_check" class="check_add" />
        <input type="submit" value="删除" id="studio_del_check" class="check_add" />
    </fieldset>
</div>