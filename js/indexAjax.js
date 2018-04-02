/**
 * Created by hesongxian on 2017/11/20.
 */
function iniPic(id,myFall,async){
    $('#b03').css('width', '100%');
    if(id == 'gzs'){
        url = basicUrl + '/admin/studio/all/'+ '/' + 0 + '/' + myFall.n;
        name = 'studio_name';
        img = 'logo';
    }
    else{
        url = basicUrl + '/common/product/all/' + nameZN_forPHP[id] + '/' + 0 + '/' + myFall.n;
        name = 'pname';
        img = 'img';
    }
    $.ajax({
        url: url,
        async: false,
        cache: true,
        success: function (result) {
            string ='';
            if (result.err != 0) {
                return false;
            }
            if(result.data.length < myFall.n){
                $('#l_b_middle-'+id).attr('full',1);
            }
            else{
                $('#l_b_middle-'+id).attr('full',0);
            }
            for(i=0; i<result.data.length; i++){
                href='';
                try{
                    str = result.data[i].info_page.split('/');
                    if(result.data[i].cate){
                        href = getTemplate(str[5],result.data[i].cate,str[4]);
                    }
                    else{
                        href = getTemplate(str[5],7,str[4]);
                    }
                }
                catch(err){}
                string +=
                    '<div class="pic">'+
                    '<div class="p_pic" href="'+href+'">'+
                    '<img class="p_p_p" src="'+result.data[i][img]+'">'+
                    '<div class="p_title">'+result.data[i][name]+'</div>'+
                    '<div class="p_introduce">'+result.data[i].description+'</div>'+
                    '</div>'+
                    '</div>';
            }
            picID[myFall.name] += myFall.n;
            myFall.father.append(string);
            myFall.initWater();
            $('#b03').css('width', '100%');
        }
    })
}

function getPic(id,myFall){
    i = storeN_id[myFall.name].num;
    if(id == 'gzs'){
        url = basicUrl + '/admin/studio/all/'+ '/' + i + '/' + myFall.n;
        name = 'studio_name';
        img = 'logo';
    }
    else{
        url = basicUrl + '/common/product/all/' + nameZN_forPHP[id] + '/' + i + '/' + myFall.n;
        name = 'pname';
        img = 'img';
    }
    if(i % myFall.n == 0){
        $('#l_b_middle-'+id).attr('full',0);
    }
    else{
        $('#l_b_middle-'+id).attr('full',1);
    }
    $.ajax({
        // url: base_url + 'Index/showIndexList/' + nameZN_forPHP[id] + '/' + i + '/' + myFall.n,
        //暂时用这个代替触发事件，要改这里的地址。
        url: url,
        async: false,
        cache: true,
        success: function (result) {
            string ='';
            if (result.err == 0) {
                for(i=0; i<result.data.length; i++){
                    str = result.data[i].info_page.split('/');

                    href = getTemplate(str[5],result.data[i].cate,str[4]);
                    string +=
                        '<div class="pic">'+
                        '<div class="p_pic" href="'+href+'">'+
                        '<img class="p_p_p" src="'+result.data[i][img]+'">'+
                        '<div class="p_title">'+result.data[i][name]+'</div>'+
                        '<div class="p_introduce">'+result.data[i].description+'</div>'+
                        '</div>'+
                        '</div>';
                }
                picID[myFall.name] += myFall.n;
                myFall.father.append(string);
                myFall.setWater(result.data.length);
            }
            else {
                return false;
            }
        }
    })
}

function getBanner(){
    $.ajax({
        processData : false,
        contentType : false,
        url : basicUrl + '/common/headbar/getall',
        async : false,
        cache : true,
        success:function (result) {
            console.log(result);
            for(i=0;i<result.data.length;i++){
                $($('.l_b_img')[i]).attr('src',result.data[i].link).attr('pro_id',result.data[i].bar_name)
            }
        }
    })
}

function link2pro(obj) {
    $.ajax({
        processData : false,
        contentType : false,
        url : basicUrl + '/common/product/info/' + obj.attr('pro_id'),
        async : false,
        cache : true,
        success:function (result) {
            href='';
            try{
                str = result.data[0].info_page.split('/');
                if(result.data[0].cate){
                    href = getTemplate(str[5],result.data[0].cate,str[4]);
                }
                else{
                    href = getTemplate(str[5],7,str[4]);
                }
                window.open(href)
            }
            catch(err){}
        }
    })
}

