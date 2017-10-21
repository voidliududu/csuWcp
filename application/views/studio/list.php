<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-13
 * Time: 下午2:46
 */
?>

<!--全部工作室-->
<!--<div id="all_studio_page" style="display: none">-->
    <!--工作室列表-->
    <header class="page_head"><span class="glyphicon glyphicon-link"></span> 全部工作室</header>
    <div id="studio-list">
        <table id="studio_table">
            <tr>
                <th style="max-width: 50px">工作室ID</th>
                <th>工作室名</th>
                <th>工作室所属部门</th>
                <th colspan="3">操作</th>
            </tr>
            <?php
            $count = 1;
            foreach ($studios->result() as $item){?>
            <tr>
                <td><?php echo $count++;?></td>
                <td class="pointer stu_detail"><?php echo $item->STU_NAME;?></td>
                <td><?php echo $item->STU_DEPARTMENT;?></td>
                <td class="pointer stu_change">修改></td>
                <td class="pointer stu_detail">审核</td>
                <td class="pointer stu_delete">删除</td>
            </tr>
            <?php }?>

        </table>

    </div>
    <!--分页-->
    <div class="Pagination">
        <ul class="pagination pagination-lg">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">...</a> </li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>

