<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-13
 * Time: 下午3:54
 */
?>
<?php
/**
  * $item 所有微产品 todo 创建所有微产品的视图
  * */
?>
<!--全部微产品-->
<!--<div id="all_product_page" style="display: block">-->
    <!--微产品列表-->
    <header class="page_head"><span class="glyphicon glyphicon-link"></span> 全部微产品</header>
    <div id="product-list">
        <table id="product_table">
            <tr>
                <th style="max-width: 50px">产品ID</th>
                <th>产品名</th>
                <th>所属工作室</th>
                <th>产品类型</th>
                <th colspan="3">操作</th>
            </tr>
            <?php
            foreach ($items->result() as $key => $item) {
            ?>
                <tr>
                    <td><?php echo $item->ID;?></td>
                    <td class="pointer pro_detail" role="<?php echo $item->CATEID;?>" id="<?php echo $item->CATEID;?> <?php echo $item->ID; ?>"><?php echo $item->NAME;?></td>
                    <td><?php echo $item->STUDIO;?></td>
                    <td><?php echo $item->CATENAME?></td>
                    <td class="pointer pro_change" id="<?php echo $item->CATEID;?> <?php echo $item->ID; ?>">修改</td>
                    <td class="pointer pro_detail" id="<?php echo $item->CATEID;?> <?php echo $item->ID; ?>">审核</td>
                    <td class="pointer pro_delete" id="<?php echo $item->CATEID;?> <?php echo $item->ID; ?>">删除</td>
                </tr>
            <?php }
            ?>

        </table>

    </div>
<script>
    $(function () {
        base_url = "http://127.0.0.2/index.php/";
        $(".pro_detail").on('click',function (e) {
            var data = e.target.id;
            var res = data.split(' ');
            $("#all_product_page").css("display",'none');
            $("#add_product_page").css("display",'none');
            console.log(base_url + 'Admin/showProductInformation/' + res[0] +'/' + res[1]);
           $(".product_info_page")
               .load(base_url + 'Admin/showProductInformation/' + res[0] +'/' + res[1])
               .css('display','block');
        });
        $(".pro_change").on('click',function (e) {
            var data = e.target.id;
            var res = data.split(' ');
            $(".product_info_page").css("display",'none');
            $("#all_product_page").css("display",'none');
            $("#add_product_page")
                .load(base_url + 'Admin/modProductView/' + res[0] +'/' + res[1])
                .css("display","block")
        });
        $(".pro_delete").on('click',function (e) {
            var data = e.target.id;
            var res = data.split(' ');
            $("#all_product_page").css("display",'none');
            $(".product_info_page").css("display",'none');
            $("#add_product_page")
                .load(base_url + 'Admin/delProduct/' + res[1])
                .css("display","block")
        })
    })
</script>
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
<!--</div>-->
