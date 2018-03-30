/**
 * Created by hesongxian on 2018/3/29.
 */
$(function () {
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
});