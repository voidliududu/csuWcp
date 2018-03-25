
<!--添加工作室-->
<header class="page_head add_studio"><span class="glyphicon glyphicon-plus"></span>添加工作室 </header>
<!--    <header class="page_head change_studio"><span class="glyphicon glyphicon-edit"></span>修改工作室信息 </header>-->
<!--添加工作室内容填写-->
<div id="studio_add" class="cate_add add">
    <div id="studio_add_main">
        <div class="add_text">工作室名:<span class="glyphicon glyphicon-pencil"></span>
            <input placeholder="请输入工作室名" class="add_input" name="name" id="stu_name"/>
            <div class="add_text" style="display:none;color:red"></div>
        </div>
        <div class="add_text">所属部门:<span class="glyphicon glyphicon-pushpin"></span>
            <input placeholder="请输入所属部门,没有可不填" class="add_input" name="department" id="stu_department"/>
        </div>
        <div class="add_text"> (主要内容，最多添加10张图片、10份说明)</div>
        <div class="add_text"> (每一个工作室都会分配一个专有ID，在添加微产品时，可以绑定在一起。)</div>
        <div class="add_text"> (每一页都可以选择一个模板，不同的模板可以使用不同尺寸、比例的图片。)</div>
        <div class="add_text" style="color:red"> (请先点击“上传”将文件上传后再按“确认”添加产品。)</div>
        <div class="add_text"> (异步上传每一个资源，不用担心上传的时候网页被挂起了。)</div>
        <div class="add_text"> (当然，只有所有资源完成上传才能提交添加产品。)</div>
        <div class="add_text"> (不用担心模板的配色，我们会选择图片主色调作为配色。)</div>
        <div class="add_text"> (横向的图片建议选择前四个模板，纵向的图片建议选择后两个图片。)</div>
        <div class="add_text">&nbsp工作室封面 :<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder="工作室封面" name="cover" class="add_input"/>
            <input type="button" value="上传" name="1" class="upload_img cover" style="display:inline-block;" id="stu_img"/>
            <div class="add_text" style="display:none;color:red"></div>
        </div>
        <div class="add_text">1.工作室图片:<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder=" " name="cover" class="add_input"/>
            <input type="button" value="上传" name="1" class="upload_img stu_pic" style="display:inline-block;"/>
            <div class="add_text" style="display:none;color:red"></div>
            <br>
            <div class="add_text"> &nbsp选 择 模 版 :</div>
            <div class="stu_template">
                <img src="../../img/preview/gzs1.jpg" class="info_img preview" id="product_img" name="1">
                <img src="../../img/preview/gzs2.jpg" class="info_img preview" id="product_img" name="2">
                <img src="../../img/preview/gzs4.jpg" class="info_img preview" id="product_img" name="3">
                <img src="../../img/preview/gzs5.jpg" class="info_img preview" id="product_img" name="4">
                <img src="../../img/preview/gzs6.jpg" class="info_img preview" id="product_img" name="5">
                <img src="../../img/preview/gzs7.jpg" class="info_img preview" id="product_img" name="6">
            </div>        </div>
        <div class="add_text">&nbsp&nbsp工作室描述:<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"></textarea>
        <div class="add_text">2.工作室图片:<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder=" " name="cover" class="add_input"/>
            <input type="button" value="上传" name="1" class="upload_img stu_pic" style="display:inline-block;"/>
            <div class="add_text" style="display:none;color:red"></div>
            <br>
            <div class="add_text"> &nbsp选 择 模 版 :</div>
            <div class="stu_template">
                <img src="../../img/preview/gzs1.jpg" class="info_img preview" id="product_img" name="1">
                <img src="../../img/preview/gzs2.jpg" class="info_img preview" id="product_img" name="2">
                <img src="../../img/preview/gzs4.jpg" class="info_img preview" id="product_img" name="3">
                <img src="../../img/preview/gzs5.jpg" class="info_img preview" id="product_img" name="4">
                <img src="../../img/preview/gzs6.jpg" class="info_img preview" id="product_img" name="5">
                <img src="../../img/preview/gzs7.jpg" class="info_img preview" id="product_img" name="6">
            </div>
        </div>
        <div class="add_text">&nbsp&nbsp工作室描述:<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"></textarea>
        <div class="add_text">3.工作室图片:<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder=" " name="cover" class="add_input"/>
            <input type="button" value="上传" name="1" class="upload_img stu_pic" style="display:inline-block;"/>
            <div class="add_text" style="display:none;color:red"></div>
            <br>
            <div class="add_text"> &nbsp选 择 模 版 :</div>
            <div class="stu_template">
                <img src="../../img/preview/gzs1.jpg" class="info_img preview" id="product_img" name="1">
                <img src="../../img/preview/gzs2.jpg" class="info_img preview" id="product_img" name="2">
                <img src="../../img/preview/gzs4.jpg" class="info_img preview" id="product_img" name="3">
                <img src="../../img/preview/gzs5.jpg" class="info_img preview" id="product_img" name="4">
                <img src="../../img/preview/gzs6.jpg" class="info_img preview" id="product_img" name="5">
                <img src="../../img/preview/gzs7.jpg" class="info_img preview" id="product_img" name="6">
            </div>
        </div>
        <div class="add_text">&nbsp&nbsp工作室描述:<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"></textarea>
        <div class="add_text">4.工作室图片:<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder=" " name="cover" class="add_input"/>
            <input type="button" value="上传" name="1" class="upload_img stu_pic" style="display:inline-block;"/>
            <div class="add_text" style="display:none;color:red"></div>
            <br>
            <div class="add_text"> &nbsp选 择 模 版 :</div>
            <div class="stu_template">
                <img src="../../img/preview/gzs1.jpg" class="info_img preview" id="product_img" name="1">
                <img src="../../img/preview/gzs2.jpg" class="info_img preview" id="product_img" name="2">
                <img src="../../img/preview/gzs4.jpg" class="info_img preview" id="product_img" name="3">
                <img src="../../img/preview/gzs5.jpg" class="info_img preview" id="product_img" name="4">
                <img src="../../img/preview/gzs6.jpg" class="info_img preview" id="product_img" name="5">
                <img src="../../img/preview/gzs7.jpg" class="info_img preview" id="product_img" name="6">
            </div>
        </div>
        <div class="add_text">&nbsp&nbsp工作室描述:<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"></textarea>
        <div class="add_text">5.工作室图片:<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder=" " name="cover" class="add_input"/>
            <input type="button" value="上传" name="1" class="upload_img stu_pic" style="display:inline-block;"/>
            <div class="add_text" style="display:none;color:red"></div>
            <br>
            <div class="add_text"> &nbsp选 择 模 版 :</div>
            <div class="stu_template">
                <img src="../../img/preview/gzs1.jpg" class="info_img preview" id="product_img" name="1">
                <img src="../../img/preview/gzs2.jpg" class="info_img preview" id="product_img" name="2">
                <img src="../../img/preview/gzs4.jpg" class="info_img preview" id="product_img" name="3">
                <img src="../../img/preview/gzs5.jpg" class="info_img preview" id="product_img" name="4">
                <img src="../../img/preview/gzs6.jpg" class="info_img preview" id="product_img" name="5">
                <img src="../../img/preview/gzs7.jpg" class="info_img preview" id="product_img" name="6">
            </div>
        </div>
        <div class="add_text">&nbsp&nbsp工作室描述:<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"></textarea>
        <div class="add_text">6.工作室图片:<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder=" " name="cover" class="add_input"/>
            <input type="button" value="上传" name="1" class="upload_img stu_pic" style="display:inline-block;"/>
            <div class="add_text" style="display:none;color:red"></div>
            <br>
            <div class="add_text"> &nbsp选 择 模 版 :</div>
            <div class="stu_template">
                <img src="../../img/preview/gzs1.jpg" class="info_img preview" id="product_img" name="1">
                <img src="../../img/preview/gzs2.jpg" class="info_img preview" id="product_img" name="2">
                <img src="../../img/preview/gzs4.jpg" class="info_img preview" id="product_img" name="3">
                <img src="../../img/preview/gzs5.jpg" class="info_img preview" id="product_img" name="4">
                <img src="../../img/preview/gzs6.jpg" class="info_img preview" id="product_img" name="5">
                <img src="../../img/preview/gzs7.jpg" class="info_img preview" id="product_img" name="6">
            </div>
        </div>
        <div class="add_text">&nbsp&nbsp工作室描述:<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"></textarea>
        <div class="add_text">7.工作室图片:<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder=" " name="cover" class="add_input"/>
            <input type="button" value="上传" name="1" class="upload_img stu_pic" style="display:inline-block;"/>
            <div class="add_text" style="display:none;color:red"></div>
            <br>
            <div class="add_text"> &nbsp选 择 模 版 :</div>
            <div class="stu_template">
                <img src="../../img/preview/gzs1.jpg" class="info_img preview" id="product_img" name="1">
                <img src="../../img/preview/gzs2.jpg" class="info_img preview" id="product_img" name="2">
                <img src="../../img/preview/gzs4.jpg" class="info_img preview" id="product_img" name="3">
                <img src="../../img/preview/gzs5.jpg" class="info_img preview" id="product_img" name="4">
                <img src="../../img/preview/gzs6.jpg" class="info_img preview" id="product_img" name="5">
                <img src="../../img/preview/gzs7.jpg" class="info_img preview" id="product_img" name="6">
            </div>
        </div>
        <div class="add_text">&nbsp&nbsp工作室描述:<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"></textarea>
        <div class="add_text">8.工作室图片:<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder=" " name="cover" class="add_input"/>
            <input type="button" value="上传" name="1" class="upload_img stu_pic" style="display:inline-block;"/>
            <div class="add_text" style="display:none;color:red"></div>
            <br>
            <div class="add_text"> &nbsp选 择 模 版 :</div>
            <div class="stu_template">
                <img src="../../img/preview/gzs1.jpg" class="info_img preview" id="product_img" name="1">
                <img src="../../img/preview/gzs2.jpg" class="info_img preview" id="product_img" name="2">
                <img src="../../img/preview/gzs4.jpg" class="info_img preview" id="product_img" name="3">
                <img src="../../img/preview/gzs5.jpg" class="info_img preview" id="product_img" name="4">
                <img src="../../img/preview/gzs6.jpg" class="info_img preview" id="product_img" name="5">
                <img src="../../img/preview/gzs7.jpg" class="info_img preview" id="product_img" name="6">
            </div>
        </div>
        <div class="add_text">&nbsp&nbsp工作室描述:<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"></textarea>
        <div class="add_text">9.工作室图片:<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder=" " name="cover" class="add_input"/>
            <input type="button" value="上传" name="1" class="upload_img stu_pic" style="display:inline-block;"/>
            <div class="add_text" style="display:none;color:red"></div>
            <br>
            <div class="add_text"> &nbsp选 择 模 版 :</div>
            <div class="stu_template">
                <img src="../../img/preview/gzs1.jpg" class="info_img preview" id="product_img" name="1">
                <img src="../../img/preview/gzs2.jpg" class="info_img preview" id="product_img" name="2">
                <img src="../../img/preview/gzs4.jpg" class="info_img preview" id="product_img" name="3">
                <img src="../../img/preview/gzs5.jpg" class="info_img preview" id="product_img" name="4">
                <img src="../../img/preview/gzs6.jpg" class="info_img preview" id="product_img" name="5">
                <img src="../../img/preview/gzs7.jpg" class="info_img preview" id="product_img" name="6">
            </div>
        </div>
        <div class="add_text">&nbsp&nbsp工作室描述:<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"></textarea>
        <div class="add_text">10.工作室图片:<span class="glyphicon glyphicon-pushpin"></span>
            <input type="file" placeholder=" " name="cover" class="add_input"/>
            <input type="button" value="上传" name="1" class="upload_img stu_pic" style="display:inline-block;"/>
            <div class="add_text" style="display:none;color:red"></div>
            <br>
            <div class="add_text"> &nbsp选 择 模 版 :</div>
            <div class="stu_template">
                <img src="../../img/preview/gzs1.jpg" class="info_img preview" id="product_img" name="1">
                <img src="../../img/preview/gzs2.jpg" class="info_img preview" id="product_img" name="2">
                <img src="../../img/preview/gzs4.jpg" class="info_img preview" id="product_img" name="3">
                <img src="../../img/preview/gzs5.jpg" class="info_img preview" id="product_img" name="4">
                <img src="../../img/preview/gzs6.jpg" class="info_img preview" id="product_img" name="5">
                <img src="../../img/preview/gzs7.jpg" class="info_img preview" id="product_img" name="6">
            </div>
        </div>
        <div class="add_text">&nbsp&nbsp&nbsp工作室描述:<span class="glyphicon glyphicon-pushpin"></span></div>
        <textarea name="describe" class="add_intro"></textarea>
        <div class="add_text" style="display:none;color:red" id="last_text"></div>
        <br>
        <div class="add_text" style="display:none;color:red" id="last_text2"></div>
    </div>
    <br><br><br>
    <!--        <button id="studio_add_check" class="check_add">确认添加</button>-->
    <!--        <button id="studio_change_check" class="check_add" style="display: none">确认修改</button>-->
    <input type="button" value="确认" id="studio_add_check" class="check_add" />
    <div class="add_text" style="display:none;color:red"></div>
</div>
<div class="clearfix"></div>

<iframe name="hidden_frame" style="display: none;"></iframe>
