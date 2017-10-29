<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-13
 * Time: 上午10:12
 */
?>
<!--添加工作室-->
    <header class="page_head add_studio"><span class="glyphicon glyphicon-plus"></span>添加工作室 </header>
<!--    <header class="page_head change_studio"><span class="glyphicon glyphicon-edit"></span>修改工作室信息 </header>-->
    <!--添加工作室内容填写-->
    <div id="studio_add" class="cate_add add">
        <?php echo form_open('Admin/addStudio',["enctype" => "MULTIPART/FORM-DATA"]);?>
        <div id="studio_add_main">
            <div class="add_text">工作室名:<span class="glyphicon glyphicon-pencil"></span>
                <input placeholder="请输入工作室名" class="add_input" name="name"/>
            </div>
            <div class="add_text">所属部门:<span class="glyphicon glyphicon-pushpin"></span>
                <input placeholder="请输入所属部门" class="add_input" name="department"/>
            </div>
            <div class="add_main">
                <div class="add_text add_title"> (主要内容，最多添加10张图片、10份说明)</div>
                <div class="add_text">logo:<span class="glyphicon glyphicon-picture add_pic"></span>
                    <span class="add_pic_tip">点击添加图片</span>
                    <input type="file" name="logo" />
                    <img src="<?php echo base_url('asset/');?>img/profile.png" class="add_pic_pre">
                </div>
                <div class="add_text">工作室介绍:<span class="glyphicon glyphicon-tag"></span> </div>
                <textarea class="add_intro" name="intro"></textarea>
                <button class="check_delete" style="float:left;display: none">删除</button>
            </div>
            <button id="studiobut_add" class="check_add" style="float:left;margin-left:50px">继续添加</button>
        </div>
        <br><br><br>
<!--        <button id="studio_add_check" class="check_add">确认添加</button>-->
<!--        <button id="studio_change_check" class="check_add" style="display: none">确认修改</button>-->
        <input type="submit" value="确认" id="studio_add_check" class="check_add" />
        <div class="clearfix"></div>
        </form>
    </div>
