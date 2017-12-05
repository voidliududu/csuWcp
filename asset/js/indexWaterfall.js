/**
 * Created by hesongxian on 2017/11/19.
 */
//瀑布流布局JS。兼容最窗口改变的时候，瀑布位置的变化。用一个waterFall对象进行所有的操作，
// 只需要输入‘名字’、‘父节点（用于操作瀑布）’、‘祖父节点（用获取网页100%宽度或者最大宽度）’和‘宽度’即可进行瀑布流布局，方便简单。
// 前提是父节点下的子节点就是你需要布局的对象。

function waterFall(name,father,grandfather,width){
/*member*/
//public
    //该瀑布流的名字，用于分类不同的瀑布流
    this.name = name;
    //获取要操作的瀑布流的父级节点，方便查找要移动的对象。
    this.father = father;
    //获取要移动对象的宽度，宽度为  margin + padding + width
    this.width = width;
    //获取要操作的瀑布流的父级节点，从而获取最大的列数n。
    this.grandfather = grandfather;
    this.n = parseInt(0.9 * parseInt(this.grandfather.css('width'))/this.width) ;
    //全局变量保存得到相同名字下，有多少个瀑布被获取了。
    storeN_id[this.name] = [];
    //全局变量保存得到相同名字下，每一列下，每一个瀑布的左边距和上边距。
    oWaterList[this.name] = [];
/*method*/
//public
    //初始化当前窗口下列的布局
    this.initWater = function (){
        l = 1;
        for (j = 1; j <= this.getCol(); j++) {
            $(this.father.children()[l-1]).attr('id', this.name + (j - 1));
            oWaterList[this.name][l] = {
                left : 0,
                height: 0
            };
            storeN_id[this.name][j] = (this.name + (j-1));
            if(l == 1){
                oWaterList[this.name][l]['left'] = 0;
            }
            else {
                oWaterList[this.name][l]['left'] = oWaterList[this.name][(l-1)]['left'] + this.width;
            }
            l++;
        }
        this.father.css('display', 'block');
        this.father.children().css('display', 'block');
        this.father.attr('click', true);
        m = 1;
        for (j = 1; j <= this.getCol(); j++) {
            water = $('#' + this.name + (j - 1));
            setWaterLeft(water,oWaterList[this.name],j);
            oWaterList[this.name][m]['height'] = parseInt(water.css('height')) + 60;
                m++;
            water.fadeIn('slow');
        }
    };
    //触发事件后，对加载的对象进行布局
    this.setWater = function (){

    };
    //获取窗口改变后的列数
    this.getCol = function (){
        return Math.ceil((parseInt(this.father.css('width'))/this.width)) -1;
    };
    //移动列
    /* 当窗口改变后的列数小于改变前的列数，把多出的列里面的对象进行移动
       当窗口改变后的列数大于改变前的列数，把最后对象进行补齐 */
    this.move = function (){
        redundancyCol = nowN - this.getCol();
        if(redundancyCol == 0)
            return false;
        if(redundancyCol >=1){
            for(i=1;i<redundancyCol;i++){
                length = storeN_id[this.name][i].length;
            }

        }
        else if(redundancyCol < 0){

        }
    };
    //改变窗口大小的时候进行移动。
    function resizePic(){
        n = Math.ceil(($('#b03').css('width').split('px')[0]-0.1*$('#b03').css('width').split('px')[0])/237)-1 ;
        l_body = $('#l_body');
        id = l_body.attr('now');
        l_b_middle = l_body.children('#l_b_middle-'+id);

        realN = 0;
        if(id){
            realN = l_b_middle.children().length;
            if(realN <= n){
                n = realN;
            }
            // for(k=1;k<n;k++){
            //     if(oWaterList[id][k]['height'] == 0){
            //         oWaterList[id][k]['height'] =  Number(l_b_middle.children('#'+id+(k-1)).css('height').split('px')[0]) + 60;
            //         oWaterList[id][k]['left'] = oWaterList[id][k-1]['left'] + Number($('#'+ id+(k-1)).css('width').split('px')[0]) + 20;
            //     }
            // }
        }
        if(realN > n && n < nowN){
            redundancyRow = Math.ceil(realN/n);
            redundancyPic = realN % n;
            min = findMinArray(oWaterList[id],n);
            k=0;
            for(j=2;j<=redundancyRow;j++){

                // if(j == redundancyRow){
                //     for(k=1;k<=redundancyPic;k++){
                //         l_b_middle.children(('#'+id+((n*(j-1)+k-1)))).css('left',(min['minLeft']-237)+'px').css('top',(min['minHeight'])+'px');
                //         oWaterList[id][min.locate]['height'] = oWaterList[id][min.locate]['height'] + parseInt(l_b_middle.children(('#'+id+((n*(j-1)+k-1)))).css('height')) + 60;
                //         // oWaterList[id][k]['left'] = oWaterList[id][k-1]['left'] + Number($('#'+ id+(n*(j-1)+k-1)).css('width').split('px')[0]) + 20;
                //         // console.log(l_b_middle.children('#'+id+(n*(j-1)+k-1)).css('height'));
                //     }
                //     break;
                // }
                // else{
                //     for(k=1;k<=n;k++){
                //         l_b_middle.children('#'+id+(n*(j-1)+k-1)).css('top',oWaterList[id][k]['height']).css('left',oWaterList[id][k]['left']-237);
                //         oWaterList[id][k]['height'] = oWaterList[id][k]['height'] + Number(l_b_middle.children('#'+id+(n*(j-1)+k-1)).css('height').split('px')[0]) + 60;
                //         oWaterList[id][k]['left'] = oWaterList[id][k-1]['left'] + Number($('#'+ id+(n*(j-1)+k-1)).css('width').split('px')[0]) + 20;
                //         sortArray(oWaterList[id],n)
                //     }
                // }
            }
            nowN = n;
        }
    }

//private
    //对于瀑布流来说，这是个获取最小高度的函数。
    findMinArray = function (array,n){
        minHeight = array[1]['height'];
        minLeft = array[1]['left'];
        getHeight = new Array;
        for(j=1;j<=n;j++){
            getHeight[j] = array[j]['height'];
            if(array[j]['height'] < minHeight){
                minHeight = array[j]['height'];
                minLeft = array[j]['left'];
            }
        }
        locate = getHeight.indexOf(minHeight);
        min = {
            minHeight:minHeight,
            minLeft:minLeft,
            locate:locate
        };
        return min;
    };
    //设置对象的左边距
    setWaterLeft = function (oPic,array,picID){
        oPic.css('left',array[picID]['left'])
    };
}





function setWidth(picId,urlPic){
    var img = new Image();
    img.src = urlPic;
    if(img.width >= img.height*2){
        $('#'+picId).css('height','auto').css('width','100%');
        return 0;
    }
    else{
        return 1;
    }
}

