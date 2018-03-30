/**
 * Created by hesongxian on 2018/3/30.
 */
$(function () {
    $.ajax({
        url: basicUrl + '/common/page/preview/'+ thisID,
        async: false,
        cache: true,
        success: function (result) {
            if(result.info.temp_id > 100){
                first = result.info.temp_id.toString().substring(0,1);
            }
            else{
                first = template;
            }
            template = result.info.temp_id.toString().split('0');
            template = template[0];
            if(first == 1){
                load = 1;
                $("[rel='stylesheet']").attr('href','../../css/templet/whd.css')
            }
            else if(first == 2){
                load = 0;
                $("[rel='stylesheet']").attr('href','../../css/templet/whd0.css')
            }
            else if(first == 3){
                load = 2;
                $("[rel='stylesheet']").attr('href','../../css/templet/whd2.css')
            }
            else if(first == 4){
                load = 3;
                $("[rel='stylesheet']").attr('href','../../css/templet/whd3.css')
            }
            else if(first == 5){
                load = 4;
                $("[rel='stylesheet']").attr('href','../../css/templet/whd4.css')
            }
            else if(first == 6){
                load = 5;
                $("[rel='stylesheet']").attr('href','../../css/templet/whd5.css')
            }
            php = 'whd'+load+'.php';
            $('body').load(php,'',function (a,b) {
                if(b == 'success'){
                    str =  result.info.data_info.substring(0,result.info.data_info.length);
                    json = JSON.parse(str);
                    console.log(result);
                    $('title').text(result.info.aname);
                    $('#img').attr('src',basicUrl+json.img0);
                    $('#background').attr('src',basicUrl+json.img0);
                    $('#bcground').attr('src',basicUrl+json.img0);
                    $('#titles p').text(result.info.aname);
                    $('#lside header').text(result.info.aname);
                    $('#main-text h1').text(json.description0);
                    $('#lside article').text(json.description0);
                    RGBaster.colors(basicUrl+json.img1, {
                        success: function(payload) {
                            $('#titles').css('background-color',payload.dominant);
                            $('.button:hover').css('background-color',payload.dominant);
                            $('.arrow').css('background-color',payload.dominant);
                            $('#picture').css('background-color',payload.dominant);
                        }
                    });
                    if(first <=4){
                        footStr = '<button class="active" onclick="getPage(this)">1</button>';
                        for(i=2;i<=template.length;i++){
                            footStr += '<button class="button" onclick="getPage(this)>'+i+'</button>';
                        }
                        $('#footer').html(footStr);
                    }
                    else{
                        footStr = '<a class="colored">1</a>';
                        for(i=2;i<=template.length;i++){
                            footStr += '<a>'+i+'</a>';
                        }
                        $('#footer-div').html(footStr);
                    }
                }
            });
        }
    });
});

function getPage() {

}
