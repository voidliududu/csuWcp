<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-13
 * Time: 下午3:12
 */
?>

<?
/*
 * 工作室详细信息页
 * 接口：webroot/
 * */
?>
<!--某个工作室的具体信息-->
<div class="studio_info_page" id="studio1_info" style="display: none">
    <header class="page_head"><span class="glyphicon glyphicon-file"></span>studio1 </header>
    <!--工作室信息-->
    <div class="info_show">
        <div class="info_text">工作室名:<?php echo $studio->STU_NAME;?></div>
        <div class="info_text">代表图片:<img src="<?php echo $studio->LINK;?>" class="info_img"> </div>
        <div class="info_text">工作室介绍:</div>
        <div class="studio_intro" id="studio_intro">
            <p><?php echo $studio->CONTENT;?></p>
        </div>
        <div class="info_text">所属部门:<?php echo $studio->STU_DEPARTMENT?></div>
    </div>
</div>
