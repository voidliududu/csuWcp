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
    for(l=0; l<uploadCheck.length; l++){
        click2uploadFile(uploadCheck[l],l);
    }
    for(m=0; m<proAddPage.length; m++){
        click2showAddPro(proAddPage[m],m);
    }
});

function bindClick2list(name,i) {
    $('#'+name).unbind('click').on('click',function () {
        click2display_none();
        if(i == nameZN_forPHP.gzs){
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
        url = basicUrl + '/admin/studio/all/0/100';
        cateList = 'studio_table'
    }
    else{
        url =  basicUrl + '/common/product/all/'+i+'/0/100';
        cateList = 'product_table'
    }
   $('#product_next').html('<span class="glyphicon glyphicon-link"></span>'+click2listCN[i]);

    $.ajax({
        processData : false,
        contentType : false,
        url : url,
        async : true,
        cache : true,
        success:function (result) {
            length = result.data.length;
            string ='';
            if(page == 'all_studio_page'){
                string +=
                    '<tr>'+
                    '<th style="max-width: 50px">工作室ID</th>'+
                    '<th>工作室名</th>'+
                    '<th>工作室所属部门</th>'+
                    '<th colspan="3">操作</th>'+
                    ' </tr>';
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
                string +=
                    '<tr>'+
                    '<th style="max-width: 50px">产品ID</th>'+
                    '<th>产品名</th>'+
                    '<th>所属工作室ID</th>'+
                    '<th>产品类型</th>'+
                    '<th colspan="3">操作</th>'+
                    '</tr>';
                for(j=0; j<length; j++) {
                    $('#product_next').attr('next',result.next);
                    string +=
                        '<tr>' +
                        '<td class="pro_id">'+result.data[j].id+'</td>' +
                        '<td class="pointer pro_detail" role="" id="">'+result.data[j].pname+'</td>' +
                        '<td>'+result.data[j].studio+'</td>' +
                        '<td>'+nameZN[result.data[j].cate]+'</td>' +
                        '<td class="pointer pro_change"  >修改/详细</td>' +
                        '<td class="pointer pro_delete" del="'+basicUrl+'/admin/product/delete/'+result.data[j].id+'">删除</td>' +
                        '</tr>'
                }
            }
            $('#'+cateList).html('').append(string);
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
                        if(name1 == 'all_studio_page'){
                            $('#studio_name').text(result.data.studio_name);
                            $('#studio_id').text(result.data.id);
                            $('#studio_department').text(result.data.department);
                            $('#studio_img').attr('src', result.data.logo);
                            $('#studio_intro').text(result.data.description);
                            $('#studio_info_page').children('.a').attr('href',result.data.info_page);
                            $('#studio_change_check').attr('change',result.modify);
                            $('#studio_del_check').attr('del',result.delete);
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
                            $('#product_del_check').attr('del',result.delete);
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
        url = basicUrl + $(this).attr('del');
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
    $('#'+click2inf[i]).on('click','.'+delCheck2[i],function () {
        if(!confirm("确认删除吗？")){
            return;
        }
        if(!confirm("确认不是手抖点了删除啊？")){
            return;
        }
        url = basicUrl + $(this).attr('del');
        $.ajax({
            url : url,
            async : true,
            cache : true,
            success:function (result) {
                if(result.err == 0){
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

        if($('#all_studio_page').css('display') == 'block'){
            next = $('#studio_next').attr('next');
            cateList = 'studio_table';
        }
        else if($('#all_product_page').css('display') == 'block'){
            next = $('#product_next').attr('next');
            cateList = 'product_table';
        }
        else{
            return;
        }
        url = basicUrl + next;
        $.ajax({
            processData : false,
            contentType : false,
            url : url,
            async : true,
            cache : true,
            success:function (result) {
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
    $('#add_product_page').css('display','none');
}

function click2uploadFile(name,i) {
    $('#'+name).on('click','.upload_img',function () {
        thisObj = $(this);
        imgFile = thisObj.prev()[0].files;
        if(imgFile.length == 0){
            thisObj.next().text('请选择文件').css('display','inline-block');
            return false;
        }
        thisObj.next().css('display','none');
        if(imgFile[0].type != 'image/jpeg' && imgFile[0].type != 'image/png'){
            thisObj.next().text('请选择jpg、jpeg或png文件').css('display','inline-block');
            return false;
        }
        thisObj.next().css('display','none');
        if(thisObj.attr('class') == 'upload_img cover'){
            name = 'cover';
            description = 'cover';
            imageFile =  thisObj.prev().get(0).files[0];
        }
        else if(thisObj.attr('class') == 'upload_img cartoon'){
            name = 'pic';
            description = 'cartoon';
            imageFile =  thisObj.prev().get(0).files[0];
        }
        textarea = thisObj.parent().next().next();
        try{
            if(textarea[0].localName == 'textarea'){
                name = 'pic';
                description = textarea.val();
                imageFile =  thisObj.prev().get(0).files[0];
            }
        }
        catch(err){}
        var formData = new FormData();
        formData.append("name", name);
        formData.append("description",description);
        formData.append("imageFile", imageFile);
        $.ajax({
            processData : false,
            contentType : false,
            url : basicUrl+'/admin/upload/2',
            async : true,
            cache : true,
            type : 'POST',
            data : formData,
            beforeSend:function(result){
                thisObj.next().text('正在上传中,请稍后......').css('display','inline-block')
            },
            success:function (result) {
                if(result.err == 0){
                    thisObj.next().text('上传成功！').css('display','inline-block').css('color','green').prev().attr('url',result.link);
                    if(thisObj.prev().prev().attr('class') == 'info_img'){

                      thisObj.prev().prev().attr('src',basicUrl+result.link)
                    }
                }
                else{
                    thisObj.next().text('上传失败，请确认文件格式是否正确或检查网络。').css('display','inline-block')
                        .css('color','red')
                }
            }
        })
    })
        .on('click','.upload_mp4',function () {
        thisObj = $(this);
        videoFile = thisObj.prev()[0].files;
        if(videoFile.length == 0){
            thisObj.next().text('请选择文件').css('display','inline-block');
            return false;
        }
        thisObj.next().css('display','none');
        if(videoFile[0].type != 'video/mp4'){
            thisObj.next().text('请选择mp4').css('display','inline-block');
            return false;
        }
        thisObj.next().css('display','none');
        vFile =  thisObj.prev().get(0).files[0];
        var formData = new FormData();
        formData.append("name", 'mp4');
        formData.append("description", 'mp4');
        formData.append("vedioFile",vFile );
        $.ajax({
            processData : false,
            contentType : false,
            url : basicUrl+'/admin/upload/1',
            async : true,
            cache : true,
            type : 'POST',
            data : formData,
            beforeSend:function(result){
                thisObj.next().text('正在上传中,请稍后......').css('display','inline-block')
            },
            success:function (result) {
                if(result.err == 0){
                    thisObj.next().text('上传成功！').css('display','inline-block').css('color','green').prev().attr('url',result.link);
                    if(thisObj.prev().prev().attr('class') == 'info_img'){
                        thisObj.prev().prev().attr('src',basicUrl+result.link)
                    }
                }
                else{
                    thisObj.next().text('上传失败，请确认文件格式是否正确或检查网络。').css('display','inline-block')
                        .css('color','red')
                }
            }
        })
    })
        .on('click','.upload_other',function () {
        thisObj = $(this);
        otherFile = thisObj.prev()[0].files;
        oFile =  thisObj.prev().get(0).files[0];

        if(otherFile.length == 0){
            thisObj.next().text('请选择文件').css('display','inline-block');
            return false;
        }
        thisObj.next().css('display','none');
        if(otherFile[0].type != 'application/pdf' && otherFile[0].type != 'audio/mpeg'){
            thisObj.next().text('微音乐请选择mp3文件，微杂志请选择pdf文件。').css('display','inline-block');
            return false;
        }
        thisObj.next().css('display','none');
        var formData = new FormData();
        formData.append("name", 'other');
        formData.append("description", 'other');
        formData.append("otherFile", oFile);
        $.ajax({
            processData : false,
            contentType : false,
            url : basicUrl+'/admin/upload/3',
            async : true,
            cache : true,
            type : 'POST',
            data : formData,
            beforeSend:function(result){
                thisObj.next().text('正在上传中,请稍后......').css('display','inline-block')
            },
            success:function (result) {
                if(result.err == 0){
                    thisObj.next().text('上传成功！').css('display','inline-block').css('color','green').prev().attr('url',result.link);
                }
                else{
                    thisObj.next().text('上传失败，请确认文件格式是否正确或检查网络。').css('display','inline-block')
                        .css('color','red')
                }
            }
        })
    })
}

function click2showAddPro(name,i){
    $('#'+name).on('click',function () {
        $('#page_main_all').load(proAddPagePHP[i],'',function (a,b) {
            if(b == 'success'){
                if(i == 5){
                    name = $('#music_name');
                    description = $('#music_description');
                    studio = $('#music_studio');
                    img = $('#music_img');
                    music= $('#music_file');
                    click2addMusicMovieMag(name,description,music,studio,img,10,nameZN_forPHP.wyy,'');
                }
                else if(i == 4){
                    name = $('#movie_name');
                    description = $('#movie_description');
                    studio = $('#movie_studio');
                    img = $('#movie_img');
                    movie= $('#movie_file');
                    movieTemplate = $('#movie_template');

                    $('.preview').click(function (e) {
                        $(this).siblings().stop().fadeTo(500,0.4);
                        $(this).stop().fadeTo(500,1);
                        movieTemplate.attr('name',$(this).attr('name'))
                    });
                    click2addMusicMovieMag(name,description,movie,studio,img,7,nameZN_forPHP.wdy,movieTemplate);
                }
                else if(i == 3){
                    name = $('#mag_name');
                    description = $('#mag_description');
                    studio = $('#mag_studio');
                    img = $('#mag_img');
                    mag= $('#mag_file');
                    click2addMusicMovieMag(name,description,mag,studio,img,11,nameZN_forPHP.wzz,'');
                }
                else if(i == 2){
                    name = $('#pro_name');
                    img = $('#pro_img');
                    studio = $('#pro_studio');
                    cartoon = $('.cartoon');
                    click2addActAppStudioCartoon(name,'',cartoon,studio,img,9,nameZN_forPHP.wmh);
                }
                else if(i ==1){
                    name = $('#pro_name');
                    img = $('#pro_img');
                    studio = $('#pro_studio');
                    $('.preview').click(function (e) {
                        $(this).siblings().stop().fadeTo(500,0.4);
                        $(this).stop().fadeTo(500,1);
                        $(this).parent().attr('name',$(this).attr('name'));
                    });
                    template = $('.pro_template');
                    pic = $('.pro_pic');
                    description = $('.add_intro');
                    click2addActAppStudioCartoon(name,description,pic,studio,img,template,nameZN_forPHP.app);
                }
                else if(i == 0){
                    name = $('#pro_name');
                    img = $('#pro_img');
                    studio = $('#pro_studio');
                    $('.preview').click(function (e) {
                        $(this).siblings().stop().fadeTo(500,0.4);
                        $(this).stop().fadeTo(500,1);
                        $(this).parent().attr('name',$(this).attr('name'));
                    });
                    template = $('.pro_template');
                    pic = $('.pro_pic');
                    description = $('.add_intro');
                    click2addActAppStudioCartoon(name,description,pic,studio,img,template,nameZN_forPHP.whd);
                }
            }
        })
    });
    $("#add_studio").on('click',function () {
        $("#add_studio_page").load( 'add.php','',function (a,b) {
            if(b == 'success'){
                name = $('#stu_name');
                img = $('#pro_img');
                department = $('#stu_department');
                $('.preview').click(function (e) {
                    $(this).siblings().stop().fadeTo(500,0.4);
                    $(this).stop().fadeTo(500,1);
                    $(this).parent().attr('name',$(this).attr('name'));
                });
                template = $('.stu_template');
                pic = $('.stu_pic');
                description = $('.add_intro');
                click2addActAppStudioCartoon(name,description,pic,department,img,template,nameZN_forPHP.app);
            }
        })
    })
}

function click2addMusicMovieMag(Name,Description,file,Studio,Img,Template,Cate,movieTemplate){
    $('#add_product_page').on('click','#music_add_check',function () {
        thisObj = $(this);
        addMusicMovieMag(thisObj,Name,Description,file,Studio,Img,Template,Cate)
    }).on('click','#movie_add_check',function () {
        thisObj = $(this);
        template = movieTemplate.attr('name');
        addMusicMovieMag(thisObj,Name,Description,file,Studio,Img,template,Cate)
    }).on('click','#mag_add_check',function () {
        thisObj = $(this);
        addMusicMovieMag(thisObj,Name,Description,file,Studio,Img,Template,Cate)
    })
}

function addMusicMovieMag(thisObj,Name,Description,file,Studio,Img,Template,Cate){
    if(!Name.val()){
        Name.next().text("请输入名字！").css('display','inline-block');
        return false;
    }
    Name.next().css('display','none');
    if(!Description.val()){
        Description.css('display','inline-block');
        return false;
    }
    Description.next().css('display','none');
    if(!Img.attr('url')){
        Img.next().text("请上传封面！").css('display','inline-block');
        return false;
    }
    $.ajax({
        url : basicUrl+'/admin/page/add',
        async : true,
        cache : true,
        type : 'POST',
        data : {
            name:Name.val(),
            template:Template,
            data:{
                file:basicUrl+file.attr('url')
            }
        },
        beforeSend:function () {
            thisObj.next().text("正在生成模板中......").css('display','inline-block');
        },
        success:function (result) {
            console.log(result);
            thisObj.next().text(result.msg);
            if(result.err == 0){
                thisObj.next().text("生成模板成功！正在生成页面......").css('display','inline-block');
                link = result.link;
                $.ajax({
                    url : basicUrl+'/admin/product/add',
                    async : true,
                    cache : true,
                    type : 'POST',
                    data : {
                        pname:Name.val(),
                        studio:Studio.val(),
                        cate:Cate,
                        img:basicUrl + Img.attr('url'),
                        description:Description.val(),
                        info_page: basicUrl + link
                    },
                    beforeSend:function () {
                    },
                    success:function (result) {
                        if(result.err == 0){
                            thisObj.next().text("页面生成成功！产品已经添加！").css('display','inline-block');
                        }
                    }
                })
            }
        }
    });
}

function click2addActAppStudioCartoon(Name,Description,pic,Studio,Img,Template,Cate) {
    $('#add_product_page').on('click','#act_add_check',function () {
        thisObj = $(this);
        addActApp(thisObj,Name,Description,pic,Studio,Img,Template,Cate)
    })
    .on('click','#cartoon_add_check',function () {
        console.log('n')
        thisObj = $(this);
        if(!Name.val()){
            Name.next().text("请输入名字！").css('display','inline-block');
            return false;
        }
        Name.next().text("请输入名字！").css('display','none');
        if(!Img.attr('url')){
            Img.next().text("请上传封面！").css('display','inline-block');
            return false;
        }
        length = pic.length;
        add = [];
        for(i=0;i<length;i++){
            add[i]=0;
            if($(pic[i]).attr('url')){
                add[i]=1;
            }
        }
        var formData = new FormData();
        formData.append("name", Name.val());
        formData.append("template", Template);
        var formDataPage = new FormData();
        for(k=0;k<length;k++){
            formDataPage.append("cartoon", $(pic[i]).attr('url') );
            if(add[0] == 0){
                $('#last_text2').text('请上传图片。').css('display','inline-block');
                return false;
            }
            if(add[k] == 0 && add[k+1] != 0 && k != length-1){
                $('#last_text2').text('添加的图片要按照顺序添加，中间不能跳过。请完整添加页面。').css('display','inline-block');
                return false;
            }
            $('#last_text2').css('display','none')
        }
        ajax2uploadProStu(thisObj,Name,formData,Studio,Cate,Img,'pro')

    })
    .on('click','#app_add_check',function () {
        thisObj = $(this);
        addActApp(thisObj,Name,Description,pic,Studio,Img,Template,Cate)
    });
    $('#add_studio_page').on('click','#studio_add_check',function () {
        thisObj = $(this);
        console.log('v')
        if(!Name.val()){
            Name.next().text("请输入名字！").css('display','inline-block');
            return false;
        }
        Name.next().text("请输入名字！").css('display','none');
        if(!Img.attr('url')){
            Img.next().text("请上传封面！").css('display','inline-block');
            return false;
        }
        picData = [];
        descriptionData = [];
        templateData = [];
        add = [];
        for(i=0;i<length;i++){
            add[i] = 0;
        }
        length = pic.length;
        console.log('b')
        for(i=0;i<length;i++){
            if(!$(pic[i]).attr('url')){
                picData[i] = 0;
            }
            else{
                picData[i] = 1;
            }
            if(!$(Template[i]).attr('name')){
                templateData[i] = 0;
            }
            else{
                templateData[i] = 1;
            }
            if(!$(Description[i]).val()){
                descriptionData[i] = 0;
            }
            else{
                descriptionData[i] = 1;
            }
            add[i] =  picData[i] + templateData[i] + descriptionData[i];
            if(add[i] == 1 || add[i] == 2){
                $('#last_text').text('如果想添加新的页面，请完整输入介绍图片、介绍内容，选择模版。').css('display','inline-block')
                return false;
            }
            $('#last_text').css('display','none')
        }

        for(k=0;k<length;k++){
            if(add[k] == 0 && add[k+1] != 0 && k != 9){
                $('#last_text2').text('添加的页面要按照顺序添加，中间不能跳过。请完整添加页面。').css('display','inline-block')
                return false;
            }
            $('#last_text2').css('display','none')
        }
        j=0;
        template ='';
        while(j!=length){
            if($(Template[j]).attr('name') != undefined){
                template += $(Template[j]).attr('name');
            }
            else{
                template += 0;
            }
        }
        console.log('a')
        var formData = new FormData();
        var formDataPage = new FormData();
        var formDataPage_data = new FormData();
        formData.append("name", Name.val());
        formData.append("template", template);
        for(i=0;i<length;i++){
            formDataPage_data.append("img",$(pic[i]).attr('url'));
            formDataPage_data.append("description",$(description[i]).val());
            formDataPage.append(i, formDataPage_data);
        }
        formData.append("data",formDataPage);
        ajax2uploadProStu(thisObj,Name,formData,Studio,Cate,Img,'stu');
    });
}

function addActApp(thisObj,Name,Description,pic,Studio,Img,Template,Cate){
    if(!Name.val()){
        Name.next().text("请输入名字！").css('display','inline-block');
        return false;
    }
    Name.next().text("请输入名字！").css('display','none');
    if(!Img.attr('url')){
        Img.next().text("请上传封面！").css('display','inline-block');
        return false;
    }
    picData = [];
    descriptionData = [];
    templateData = [];
    add = [];
    for(i=0;i<length;i++){
        add[i] = 0;
    }
    length = pic.length;

    for(i=0;i<length;i++){
        if(!$(pic[i]).attr('url')){
            picData[i] = 0;
        }
        else{
            picData[i] = 1;
        }
        if(!$(Template[i]).attr('name')){
            templateData[i] = 0;
        }
        else{
            templateData[i] = 1;
        }
        if(!$(Description[i]).val()){
            descriptionData[i] = 0;
        }
        else{
            descriptionData[i] = 1;
        }
        add[i] =  picData[i] + templateData[i] + descriptionData[i];
        if(add[i] == 1 || add[i] == 2){
            $('#last_text').text('如果想添加新的页面，请完整输入介绍图片、介绍内容，选择模版。').css('display','inline-block')
            return false;
        }
        $('#last_text').css('display','none')
    }

    for(k=0;k<length;k++){
        if(add[k] == 0 && add[k+1] != 0 && k != 9){
            $('#last_text2').text('添加的页面要按照顺序添加，中间不能跳过。请完整添加页面。').css('display','inline-block')
            return false;
        }
        $('#last_text2').css('display','none')
    }
    j=0;
    template ='';
    while(j!=length){
        if($(Template[j]).attr('name') != undefined){
            template += $(Template[j]).attr('name');
        }
        else{
            template += 0;
        }
        j++;
    }
    console.log(template);
    var formData = new FormData();
    var formDataPage = new FormData();
    var formDataPage_data = new FormData();
    formData.append("name", Name.val());
    formData.append("template", template);
    for(i=0;i<length;i++){
        formDataPage_data.append("img",$(pic[i]).attr('url'));
        formDataPage_data.append("description",$(description[i]).val());
        formDataPage.append(i, formDataPage_data);
    }
    formData.append("data",formDataPage);
    ajax2uploadProStu(thisObj,Name,formData,Studio,Cate,Img,'pro');
}

function ajax2uploadProStu(thisObj,Name,formData,Studio,Cate,Img,type){
    var formData2 = new FormData();
    if(type == 'pro'){
        formData2.append('pname',Name.val());
        formData2.append('studio',Studio.val());
        formData2.append('cate',Cate);
        formData2.append('img',basicUrl + Img.attr('url'));
        formData2.append('description','');
        console.log(Name.val());
    }
    else if(type == 'stu'){
        formData2.append('studio_name',Name.val());
        formData2.append('department',Studio.val());
        formData2.append('logo',basicUrl + Img.attr('url'));
        formData2.append('description','');
    }
    $.ajax({
        processData : false,
        contentType : false,
        url : basicUrl+'/admin/page/add',
        async : true,
        cache : true,
        type : 'POST',
        data : formData,
        beforeSend:function () {
            thisObj.next().text("正在生成模板中......").css('display','inline-block');
        },
        success:function (result) {
            console.log(result);
            thisObj.next().text(result.msg);
            if(result.err == 0){
                thisObj.next().text("生成模板成功！正在生成页面......").css('display','inline-block');
                link = result.link;
                formData2.append('info_page',basicUrl + link);

                $.ajax({
                    processData : false,
                    contentType : false,
                    url : basicUrl+'/admin/product/add',
                    async : true,
                    cache : true,
                    type : 'POST',
                    data : formData2,
                    beforeSend:function () {
                    },
                    success:function (result) {
                        console.log(result);
                        if(result.err == 0){
                            thisObj.next().text("页面生成成功！产品已经添加！").css('display','inline-block');
                        }
                    }
                })
            }
        }
    });

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