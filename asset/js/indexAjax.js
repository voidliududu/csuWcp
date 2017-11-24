/**
 * Created by hesongxian on 2017/11/20.
 */
function iniPic(id,n,i,myFall){
    console.log(myFall);
    // myFall = new waterFall(id,$('#l_b_middle'+id),237);
    picID[myFall.name] = 0;
    $('#b03').css('height', '323px').css('width', '100%');
    if(n < i){
        return false;
    }
    $.ajax({
        url: base_url + 'Index/showIndexList/' + nameZN_forPHP[id] + '/' + i + '/' + n,
        async: true,
        cache: true,
        success: function (result) {
            if (result != '    ') {
                picID[myFall.name] += n;
                myFall.father.append(result);
                myFall.initWater();
                $('#b03').css('height', '323px').css('width', '100%');

            }
            else {
                return false;
            }
        }
    })
}

function getPic(id,n,i,myFall){
    if(n < i){
        return false;
    }
    $.ajax({
        url: base_url + 'Index/showIndexList/' + nameZN_forPHP[id] + '/' + i + '/' + n,
        async: true,
        cache: true,
        success: function (result) {
            if (result != '    ') {
                picID[myFall.name] += n;
                myFall.father.append(result);
                myFall.setWater();
                $('#b03').css('height', '323px').css('width', '100%');
            }
            else {
                return false;
            }
        }
    })
}