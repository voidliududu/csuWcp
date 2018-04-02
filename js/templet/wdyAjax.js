$(function () {
    $.ajax({
        url : basicUrl + '/common/page/preview/'+ parseInt(thisID),
        async : false,
        cache : true,
        success:function (result) {
            $('title').text(result.info.aname);
            $('#bar').text(result.info.aname);
            str =  result.info.data_info.substring(0,result.info.data_info.length);
            json = JSON.parse(str);
            console.log(result);
            $('#mp4').attr('src',json.file);
            $('#description').text(json.description);
            $('#bg').css('background-image','url("'+json.img+'")');
            RGBaster.colors(json.img, {
                success: function(payload) {
                    console.log(payload);
                    $('#bar').css('background-color',payload.dominant);
                }
            });
        }
    })

});