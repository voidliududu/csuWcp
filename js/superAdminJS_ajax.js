/**
 * Created by hesongxian on 2018/3/17.
 */
$(function () {
    for(i=0; i<click2list.length; i++){
        bindClick2list(click2list[i],i);
    }
    for(k=0; k<click2inf.length; k++){
        bindClick2inf(click2inf[k],infChange[k],k);
    }
    for(j=0;j<backCheck.length;j++) {
        click2backInf(j);
        click2changeInf(j);
        click2delInf(j);
    }
    scroll2load();
});

function bindClick2list(name,i) {
    $('#'+name).on('click',function () {
        click2display_none();
        if(i == 7){
            page = 'all_studio_page';
            php = 'studioList.php';
            $('#all_studio_page').css('display','block');
        }
        else{
            page = 'all_product_page';
            php = 'productList.php';
            $('#all_product_page').css('display','block');
        }
        $("#"+page).load(php,'',function (respond,state) {
            if(state == 'success'){
                ajaxClick2list(page,i);
            }
        })
    })
}

function ajaxClick2list(page,i){
    if(page == 'all_studio_page'){
        url = basicUrl + '/admin/studio/all/0/10';
        cateList = 'studio_table'
    }
    else{
        url =  basicUrl + '/common/product/all/'+i+'/0/10';
        cateList = 'product_table'
    }
    $.ajax({
        processData : false,
        contentType : false,
        url : url,
        async : true,
        cache : true,
        success:function (result) {
            console.log(result);

            length = result.data.length;
            string ='';
            if(page == 'all_studio_page'){
                $('#studio_next').attr('next',result.next);
                for(j=0; j<length; j++){
                    string +=
                        '<tr>'+
                        '<td class="stu_id">'+result.data[j].id+'</td>'+
                        '<td class="pointer stu_detail">'+result.data[j].studio_name+'</td>'+
                        '<td>'+result.data[j].department+'</td>'+
                        '<td class="pointer stu_change" id="">修改/详细</td>'+
                        '<td class="pointer stu_delete" del="'+basicUrl+'/admin/studio/delete/'+result.data[j].id+'">删除</td>'+
                        '</tr>'
                }
            }
           else{
                for(j=0; j<length; j++) {
                    $('#product_next').attr('next',result.next);
                    string +=
                        '<tr>' +
                        '<td class="pro_id">'+result.data[j].id+'</td>' +
                        '<td class="pointer pro_detail" role="" id="">'+result.data[j].pname+'</td>' +
                        '<td>'+result.data[j].studio+'</td>' +
                        '<td>'+result.data[j].cate+'</td>' +
                        '<td class="pointer pro_change"  >修改/详细</td>' +
                        '<td class="pointer pro_delete" del="'+basicUrl+'/admin/product/delete/'+result.data[j].id+'">删除</td>' +
                        '</tr>'
                }
            }
            $('#'+cateList).append(string);
        }
    })
}

function bindClick2inf(name1,name2,k) {
    $('#'+name1).on('click','.'+name2,function () {
        click2display_none();
        if(name1 == 'all_studio_page'){
            id = $(this).parent().children('.stu_id').text();
            url = basicUrl + '/admin/studio/info/'+id;
            php = 'studioInf.php';
            info_page = 'studio_info_page';
        }
        else if(name1 == 'all_product_page'){
            id = $(this).parent().children('.pro_id').text();
            url = basicUrl + '/common/product/info/'+id;
            php = 'productInf.php';
            info_page = 'product_info_page';
        }
        $('#'+info_page).css('display','block').load(php,'',function (respond,state) {

            if(state == 'success'){
                $.ajax({
                    processData : false,
                    contentType : false,
                    url : url,
                    async : true,
                    cache : true,
                    success:function (result) {
                        console.log(result);
                        if(name1 == 'all_studio_page'){
                            $('#studio_name').text(result.data.studio_name);
                            $('#studio_id').text(result.data.id);
                            $('#studio_department').text(result.data.department);
                            $('#studio_img').attr('src', result.data.logo);
                            $('#studio_intro').text(result.data.description);
                            $('#studio_info_page').children('.a').attr('href',result.data.info_page);
                            $('#studio_change_check').attr('change',result.modify);
                            $('#studio_del_check').attr('change',result.delete);
                        }
                        else if(name1 == 'all_product_page'){
                            $('#product_name').text(result.data[0].pname);
                            $('#product_id').text(result.data[0].id);
                            $('#product_stu_id').text(result.data[0].studio);
                            $('#product_create').text(result.data[0].create_at);
                            $('#product_update').text(result.data[0].update_at);
                            $('#product_cate').text(result.data[0].cate);
                            $('#product_img').attr('src', result.data[0].img);
                            $('#product_intro').text(result.data[0].description);
                            $('#product_info_page').children('.a').attr('href',result.data[0].info_page);
                            $('#product_change_check').attr('change',result.modify);
                            $('#product_del_check').attr('change',result.delete);
                        }
                      }
                })
            }
        });
    })
}

function click2backInf(i) {
    $('#'+infPage[i]).on('click','#'+backCheck[i],function () {
        click2display_none();
        $('#'+click2inf[i]).css('display','block');
    });

}

function click2changeInf(i) {
    $('#'+infPage[i]).on('click','#'+changeCheck[i],function () {
        if(!confirm("确认修改吗？")){
            return;
        }
        var formData = new FormData();
        if(i==0){
            formData.append("studio_name",$('#studio_name').text());
            formData.append("department",$('#studio_department').text());
            formData.append("logo",$('#studio_img').attr('src'));
            formData.append("description",$('#studio_intro').text());
            // formData.append("info_page",$('#studio_info_page').text());
        }
       else if(i==1){
            formData.append("pname",$('#product_name').text());
            formData.append("cate",$('#product_cate').text());
            formData.append("studio",$('#product_stu_id').text());
            formData.append("img",$('#product_img').attr('src'));
            formData.append("description",$('#product_intro').text());
            // formData.append("info_page",$('#product_info_page').text());
        }
        url = basicUrl + $(this).attr('change');
       $.ajax({
           type : 'POST',
           processData : false,
           contentType : false,
           url : url,
           async : true,
           cache : true,
           data:formData,
           success:function (result) {
               if(result.err == 0){
                   alert("修改成功！");
               }
           }
       })
    });
}

function click2delInf(i) {
    $('#'+infPage[i]).on('click','#'+delCheck[i],function () {
        if(!confirm("确认删除吗？")){
            return;
        }
        if(!confirm("确认不是手抖点了删除啊？")){
            return;
        }
        url = basicUrl + $(this).attr('change');
        $.ajax({
            url : url,
            async : true,
            cache : true,
            success:function (result) {
                if(result.err == 0){
                    click2display_none();
                    $('#'+click2inf[i]).css('display','block');
                    alert("删除成功！");
                }
            }
        })
    });

}

function scroll2load() {

    $(window).on('scroll',function () {
        if($(document).scrollTop()+$(window).height() < $(document).height()){
            return;
        }

        console.log('a')
        if($('#all_studio_page').css('display') == 'block'){
            next = $('#studio_next').attr('next');
            cateList = 'studio_table';
        }
        else if($('#all_product_page').css('display') == 'block'){
            next = $('#product_next').attr('next');
            cateList = 'product_table';
        }
        url = basicUrl + next;
        $.ajax({
            processData : false,
            contentType : false,
            url : url,
            async : true,
            cache : true,
            success:function (result) {
                console.log(result);
                if(result.err != 0)
                    return;
                length = result.data.length;
                string ='';
                if(page == 'all_studio_page'){
                    for(j=0; j<length; j++){
                        string +=
                            '<tr>'+
                            '<td class="stu_id">'+result.data[j].id+'</td>'+
                            '<td class="pointer stu_detail">'+result.data[j].studio_name+'</td>'+
                            '<td>'+result.data[j].department+'</td>'+
                            '<td class="pointer stu_change" id="">修改/详细</td>'+
                            '<td class="pointer stu_delete" del="'+basicUrl+'/admin/studio/delete/'+result.data[j].id+'">删除</td>'+
                            '</tr>'
                    }
                }
                else{
                    for(j=0; j<length; j++) {
                        string +=
                            '<tr>' +
                            '<td class="pro_id">'+result.data[j].id+'</td>' +
                            '<td class="pointer pro_detail" role="" id="">'+result.data[j].pname+'</td>' +
                            '<td>'+result.data[j].studio+'</td>' +
                            '<td>'+result.data[j].cate+'</td>' +
                            '<td class="pointer pro_change"  >修改/详细</td>' +
                            '<td class="pointer pro_delete" del="'+basicUrl+'/admin/product/delete/'+result.data[j].id+'">删除</td>' +
                            '</tr>'
                    }
                }
                $('#'+cateList).append(string);
            }
        })

    })
}

function click2display_none(){
    $('#index_page').css('display','none');
    $('#all_studio_page').css('display','none');
    $('#studio_info_page').css('display','none');
    $('#add_studio_page').css('display','none');
    $('#all_product_page').css('display','none');
    $('#product_info_page').css('display','none');
}

function ShowElement(element) {
    var oldhtml = element.innerHTML;
    //如果已经双击过，内容已经存在input，不做任何操作
    if(oldhtml.indexOf('type="text"') > 0){
        return;
    }
    //创建新的input元素
    var newobj = document.createElement('input');
    //为新增元素添加类型
    newobj.type = 'text';
    //为新增元素添加value值
    newobj.value = oldhtml;
    //为新增元素添加光标离开事件
    newobj.onblur = function() {
        element.innerHTML = this.value == oldhtml ? oldhtml : this.value;
        //当触发时判断新增元素值是否为空，为空则不修改，并返回原有值
    };
    //设置该标签的子节点为空
    element.innerHTML = '';
    //添加该标签的子节点，input对象
    element.appendChild(newobj);
    //设置选择文本的内容或设置光标位置（两个参数：start,end；start为开始位置，end为结束位置；如果开始位置和结束位置相同则就是光标位置）
    newobj.setSelectionRange(0, oldhtml.length);
    //设置获得光标
    newobj.focus();
}