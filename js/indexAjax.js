/**
 * Created by hesongxian on 2017/11/20.
 */
function iniPic(id,i,myFall,async){
    // picID[myFall.name] = 0;
    $('#b03').css('width', '100%');
    if(myFall.n < i){
        return false;
    }
    $.ajax({
        url: base_url + 'Index/showIndexList/' + nameZN_forPHP[id] + '/' + 1 + '/' + myFall.n,
        async: true,
        cache: true,
        success: function (result) {
            if (result != '    ') {
                picID[myFall.name] += myFall.n;
                myFall.father.append(result);
                myFall.initWater();
                $('#b03').css('width', '100%');
            }
            else {
                return false;
            }
        }
    })
}

function getPic(id,myFall){
    i = storeN_id[myFall.name].length;
    // console.log(myFall.n);
    // if(myFall.n < i){
    //     return false;
    // }
    $.ajax({
        // url: base_url + 'Index/showIndexList/' + nameZN_forPHP[id] + '/' + i + '/' + myFall.n,
        //暂时用这个代替触发事件，要改这里的地址。
        url: base_url + 'Index/showIndexList/' + nameZN_forPHP[id] + '/' + 1 + '/' + myFall.n,
        async: false,
        cache: true,
        success: function (result) {
            if (result != '    ') {
                picID[myFall.name] += myFall.n;
                myFall.father.append(result);
                myFall.setWater();
            }
            else {
                return false;
            }
        }
    })
}