/**
 * Created by hesongxian on 2018/3/29.
 */
$(function () {
    $.ajax({
        url : basicUrl + '/common/page/preview/'+ parseInt(thisID),
        async : false,
        cache : true,
        success:function (result) {
            console.log('a');
            $('title').text(result.info.aname);
            $('#headline').text(result.info.aname);
            $('#music_name').text(result.info.aname);
            $('#name').text(result.info.aname);
            str =  result.info.data_info.substring(0,result.info.data_info.length);
            json = JSON.parse(str);
            $('#lyric').text(json.description);
            $('#js-video source').attr('src',json.file);
            $('#background_img').attr('src',json.img);
            $('#small_cover').css('background-image',"url('"+json.img+"')");
            $('#cover').attr('src',json.img);
            RGBaster.colors(json.img, {
                success: function(payload) {
                    console.log(payload);
                    $('#headline').css('background-color',payload.dominant);
                }
            });
            // i=0;
            // while(1){
            //     if(json['cartoon'+i] == 'undefined'){
            //         break;
            //     }
            //     $('#content').append('<img src="'+basicUrl+json['cartoon'+i]+'">')
            //     i++;
            // }
        }
    })
});