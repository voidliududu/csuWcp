<header class="page_head"><span class="glyphicon glyphicon-file"></span>product1 </header>
<!--微产品信息-->
<div class="info_show">
    <fieldset>
        <legend>双击进行修改</legend>
        <dl class="info_text" >
            <dt>产品:</dt>
            <dd  id="product_name" ondblclick="ShowElement(this)"></dd>
        </dl>
        <dl class="info_text" >
            <dt>产品ID:</dt>
            <dd  id="product_id">1</dd>
        </dl>
        <dl class="info_text" >
            <dt>代表图片:</dt>
            <dd  id="">
                <img src="../../img/profile.png" class="info_img" id="product_img">
                <input type="file" placeholder=" " name="cover" class="add_input"/>
                <input type="button" value="上传" name="1" class="" style="display:inline-block;"/>
            </dd>
        </dl>
        <dl class="info_text" >
            <dt>产品介绍:</dt>
            <dd id="product_intro" ondblclick="ShowElement(this)"></dd>
        </dl>

        <dl class="info_text" >
            <dt>工作室ID:</dt>
            <dd  id="product_stu_id" ondblclick="ShowElement(this)">1</dd>
        </dl>
        <dl class="info_text" >
            <dt>所属分类:</dt>
            <dd  id="product_cate" ondblclick="ShowElement(this)">1</dd>
        </dl>
        <dl class="info_text" >
            <dt>创建时间:</dt>
            <dd  id="product_create">2017.7.22</dd>
        </dl>
        <dl class="info_text" >
            <dt>修改时间:</dt>
            <dd  id="product_update">2017.7.22</dd>
        </dl>
        <div class="info_text" id="product_info_page"><a class="a" href="http://www.baidu.com" target="view_window">页面地址</a></div>
        <input type="submit" value="返回" id="product_return_check" class="check_add" />
        <input type="submit" value="确认修改" id="product_change_check" class="check_add" />
        <input type="submit" value="删除" id="product_del_check" class="check_add" />
    </fieldset>
</div>
<script type="text/javascript">

</script>