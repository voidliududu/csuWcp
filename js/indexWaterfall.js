/**
 * Created by hesongxian on 2017/11/19.
 */
//瀑布流布局JS。兼容最窗口改变的时候，瀑布位置的变化。用一个waterFall对象进行所有的操作，
// 只需要输入‘名字’、‘父节点（用于操作瀑布）’、‘祖父节点（用获取网页100%宽度或者最大宽度）’和‘宽度’即可进行瀑布流布局，方便简单。
// 前提是父节点下的子节点就是你需要布局的对象。

function waterFall(name,father,grandfather,width,minWidth){
/*member*/
//public
    //该瀑布流的名字，用于分类不同的瀑布流
    this.name = name;
    //获取要操作的瀑布流的父级节点，方便查找要移动的对象。
    this.father = father;
    //获取要移动对象的宽度，宽度为  margin + padding + width
    this.width = width;
    //获取要移动对象的最小宽度，最小宽度为  margin + padding + width
    this.minWidth = minWidth;
    //获取要操作的瀑布流的父级节点，从而获取最大的列数n。
    this.grandfather = grandfather;
    this.n =  parseInt(0.9 * parseInt(this.grandfather.css('width'))/this.width);
    // this.n = parseInt(0.9 * (parseInt(this.grandfather.css('width'))>this.minWidth?parseInt(this.grandfather.css('width')):this.minWidth)/this.width) ;
    //全局变量保存得到相同名字下，有多少个瀑布被获取了。
    storeN_id[this.name] = [];
    //全局变量保存得到相同名字下，每一列下，每一个瀑布的左边距和上边距。
    oWaterList[this.name] = [];
    //全局变量保存当前列的最大高度和当前列的左边距。
    oWater_HL[this.name] = [];
/*method*/
//public
    //初始化当前窗口下列的布局
    this.initWater = function (){
        storeN_id[this.name]['num'] = father.children().length;
        l = 1;
        for (j = 1; j <= this.getCol(); j++) {
            $(this.father.children()[l-1]).attr('id', this.name + (j - 1)).length;
            storeN_id[this.name][j] = (this.name + (j-1));
            oWaterList[this.name][l] = [];
            oWaterList[this.name][l][1] = {
                left : 0,
                height: 0,
                id: this.name + (j-1)
            };
            oWater_HL[this.name][l] = {
                left : 0,
                height: 0
            };
            if(l == 1){
                oWaterList[this.name][l][1]['left'] = 0;
                oWater_HL[this.name][l]['left'] = 0;
            }
            else {
                oWaterList[this.name][l][1]['left'] = oWaterList[this.name][(l-1)][1]['left'] + this.width;
                oWater_HL[this.name][l]['left'] = oWater_HL[this.name][(l-1)]['left'] + this.width;
            }
            l++;
        }
        this.father.css('display', 'block');
        this.father.children().css('display', 'block');
        this.father.attr('click', true);
        m = 1;
        for (j = 1; j <= this.getCol(); j++) {
            water = $('#' + this.name + (j - 1));
            setWaterLeft(water,oWater_HL[this.name],j);
            oWaterList[this.name][m][1]['height'] = parseInt(water.css('height')) + parseInt(water.css('margin-bottom')) + parseInt(water.css('margin-top'))+ parseInt(water.css('padding-bottom'))+ parseInt(water.css('padding-top')) ;
            oWater_HL[this.name][m]['height'] = parseInt(water.css('height')) + parseInt(water.css('margin-bottom')) + parseInt(water.css('margin-top'))+ parseInt(water.css('padding-bottom'))+ parseInt(water.css('padding-top')) ;
            if(isNaN(oWater_HL[this.name][m]['height'])){
                oWater_HL[this.name][m]['height'] = 0;
            }
                m++;
            water.fadeIn('slow');
        }
        this.father.css('height',findMaxHeight(oWater_HL[this.name],this.n));
    };
    //触发事件后，对加载的对象进行布局
    this.setWater = function (dataLength){
        storeN_id[this.name]['num'] = father.children().length;
        length = storeN_id[this.name].length - 1;
        for (k = length; k < dataLength+length; k++) {
            oMin = findMinArray(oWater_HL[this.name],this.n);
            $(this.father.children()[k]).attr('id', this.name + k);
            storeN_id[this.name][k+1] = (this.name + (k));
            water = $('#' + this.name + k);
            if(oWaterList[this.name][oMin.locate]){
                listLength = oWaterList[this.name][oMin.locate].length;
                if(listLength==0){
                    oWaterList[this.name][oMin.locate] = [];
                    listLength = 1;
                }
            }
            else{
                oWaterList[this.name][oMin.locate] = [];
                listLength = 1;
            }

            oWaterList[this.name][oMin.locate][listLength] = {
                left : 0,
                height: 0,
                id: this.name + (k)
            };
            setWaterHeight(water,oWater_HL[this.name],oMin.locate);
            oWaterList[this.name][oMin.locate][listLength]['height'] =oWater_HL[this.name][oMin.locate]['height'] + parseInt(water.css('height')) + parseInt(water.css('margin-bottom')) + parseInt(water.css('margin-top'))+ parseInt(water.css('padding-bottom'))+ parseInt(water.css('padding-top')) ;
            oWaterList[this.name][oMin.locate][listLength]['left'] =oWater_HL[this.name][oMin.locate]['left'];
            oWater_HL[this.name][oMin.locate]['height'] =oWater_HL[this.name][oMin.locate]['height'] + parseInt(water.css('height')) + parseInt(water.css('margin-bottom')) + parseInt(water.css('margin-top'))+ parseInt(water.css('padding-bottom'))+ parseInt(water.css('padding-top')) ;
            setWaterLeft(water,oWater_HL[this.name],oMin.locate);
            water.css('display','block');

        }

    };
    //获取窗口改变后的列数
    this.getCol = function (){
        return Math.ceil((parseInt(this.father.css('width'))/this.width)) -1;
    };
    //移动列
    /* 当窗口改变后的列数小于改变前的列数，把多出的列里面的对象进行移动
       当窗口改变后的列数大于改变前的列数，把最后对象进行补齐 */
    moveCol = function (oWater_HL,array,nowN,name,tempN){
        for(q=1;q<array.length;q++){
            oMin = findMinArray(oWater_HL,nowN);
            water = $('#'+array[q].id);
            setWaterHeight(water,oWater_HL,oMin.locate);
            setWaterLeft(water,oWater_HL,oMin.locate);
            oWater_HL[oMin.locate]['height'] = oWater_HL[oMin.locate]['height'] + parseInt(water.css('height')) + parseInt(water.css('margin-bottom')) + parseInt(water.css('margin-top'))+ parseInt(water.css('padding-bottom'))+ parseInt(water.css('padding-top')) ;
            minListLocate = oWaterList[name][oMin.locate].length;
            oWaterList[name][oMin.locate][minListLocate] = {
                height: oWater_HL[oMin.locate]['height'],
                left:oWater_HL[oMin.locate]['left'],
                id:array[q].id
            };
        }
         oWaterList[name].splice(tempN,1);
         oWater_HL.splice(tempN,1);
         return 1;
    };
    this.moveRow = function(oWater_HL,array,nowN,name,tempN){
        oMin = findMinArray(oWater_HL,tempN);
        oWaterList[name][oMin.locate] = [];
        //判断是否为第一行。
        flag = 0;
        for(s=1;s<tempN;s++){
            if(array[s] && array[s].length == 2){
                flag++;
            }
            if(flag == this.n){
                return 0;
            }
        }
        i=1;
        while(oMin.locate == tempN){
            oMax = findMaxArray(oWater_HL,tempN);
            r = array[oMax.locate].length - 1;
            water = $('#'+array[oMax.locate][r].id);
            setWaterHeight(water,oWater_HL,oMin.locate);
            setWaterLeft(water,oWater_HL,oMin.locate);
            oWater_HL[oMin.locate]['height'] =oWater_HL[oMin.locate]['height'] + parseInt(water.css('height')) + parseInt(water.css('margin-bottom')) + parseInt(water.css('margin-top'))+ parseInt(water.css('padding-bottom'))+ parseInt(water.css('padding-top')) ;
            oWater_HL[oMax.locate]['height'] =oWater_HL[oMax.locate]['height'] - parseInt(water.css('height')) - parseInt(water.css('margin-bottom')) - parseInt(water.css('margin-top'))- parseInt(water.css('padding-bottom'))- parseInt(water.css('padding-top')) ;
            oWaterList[name][oMin.locate][i] = {
                height: oWater_HL[oMin.locate]['height'],
                left:oWater_HL[oMin.locate]['left'],
                id:array[oMax.locate][r].id
            };
            oMin = findMinArray(oWater_HL,tempN);
            array[oMax.locate].splice(r,1);
            i++;
        }
        return 1;
    };
    //改变窗口大小的时候进行移动。
    this.moveWater = function (){
        nowN =  parseInt(0.9 * parseInt(this.grandfather.css('width'))/this.width);
        if(nowN == this.n){
            return 3;
        }
        else if(nowN != this.n){
            //当页面列数变小
            if(nowN < this.n){
                if(this.n > storeN_id[this.name]['num']){
                    p = storeN_id[this.name]['num']
                }
                else{
                    p = this.n;
                }
                // console.log(oWaterList[this.name]);
                // console.log(oWaterList[this.name][p]);
                for(p; p>nowN; p--){
                    moveCol(oWater_HL[this.name],oWaterList[this.name][p],nowN,this.name,p);
                    judge = 1;
                }
                // console.log(judge);

            }
            //当页面列数变大
            else{
                for(p=this.n+1; p<=nowN; p++){
                    oWater_HL[this.name][p] = {
                        left : this.width*(p-1),
                        height: 0
                    };
                    judge = this.moveRow(oWater_HL[this.name],oWaterList[this.name],nowN,this.name,p)
                }
            }
            this.n = nowN;
        }
        return judge;

    };

//private
    //对于瀑布流来说，这是个获取最小高度的函数。
    findMinArray = function (array,n){
        minHeight = array[1]['height'];
        minLeft = array[1]['left'];
        getHeight = [];
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
    //对于瀑布流来说，这是个获取最大高度的函数。
    findMaxArray = function (array,n){
        maxHeight = array[1]['height'];
        maxLeft = array[1]['left'];
        getHeight = new Array;
        for(j=1;j<=n;j++){
            getHeight[j] = array[j]['height'];
            if(array[j]['height'] > maxHeight){
                maxHeight = array[j]['height'];
                maxLeft = array[j]['left'];
            }
        }
        locate = getHeight.indexOf(maxHeight);
        max = {
            maxHeight:maxHeight,
            maxLeft:maxLeft,
            locate:locate
        };
        return max;
    };
    //查找高度的最大值
    findMaxHeight = function (array,n){
        maxHeight = array[1]['height'];
        for(j=1;j<=n;j++){
            if(array[j]['height'] > maxHeight){
                maxHeight = array[j]['height'];
            }
        }
        return maxHeight;
    };
    //设置对象的左边距
    setWaterLeft = function (oPic,array,picID){
        oPic.css('left',array[picID]['left'])
    };
    setWaterHeight = function(oPic,array,picID){
        oPic.css('top',array[picID]['height'])
    }
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

