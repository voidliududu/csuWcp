/**
 * Created by hesongxian on 2018/3/29.
 */
$(function () {
    $.ajax({
        url : basicUrl + '/common/page/preview/'+ parseInt(thisID),
        async : false,
        cache : true,
        success:function (result) {
            $('title').text(result.info.aname);
            $('#header').text(result.info.aname);
            str =  result.info.data_info.substring(0,result.info.data_info.length);
            json = JSON.parse(str);
            i=0;
            while(1){
                if(json['cartoon'+i] == 'undefined'){
                    break;
                }
                $('#content').append('<img src="'+basicUrl+json['cartoon'+i]+'">');
                i++;
            }
        }
    })
});