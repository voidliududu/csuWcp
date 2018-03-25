/**
 * Created by hesongxian on 2017/9/10.
 */
name = {
    mag : 0,
    music : 1,
    act : 2,
    app : 3,
    movie : 4,
    cartoon : 5,
    studio : 6
};

nameZN = {
    0 : '全部',
    1 : '微电影',
    2 : '微音乐',
    3 : 'app',
    4 : '微杂志',
    5 : '微漫画',
    6 : '微活动',
    7 : '微工作室'
};


nameZN_forPHP = {
    qb : 0,
    wdy : 1,
    wyy : 2,
    app : 3,
    wzz : 4,
    wmh : 5,
    whd : 6,
    gzs : 7
};
var base_url = "http://127.0.0.2/index.php/";
var nowN = 0;
var picID = {
    // gzs:0,
    // wdy:0,
    // wyy:0,
    // app:0,
    // wzz:0,
    // wmh:0,
    // whd:0
};
var storeN_id =[];
// {
//     gzs:0,
//     wdy:0,
//     wyy:0,
//     app:0,
//     wzz:0,
//     wmh:0,
//     whd:0
// };
var oWaterList = {};
var oWater_HL = {};
var oWaterCount ={};
// var oHeight_Width = {
//     left : 0,
//     height: 0
// };

var click2list = ['all_product','we_movie','we_mv','we_app','we_magazine','we_cartoon','we_activity','all_studio'];
var click2listCN = ['全部微产品','微电影','微音乐','微APP','微杂志','微卡通','微活动','微工作室'];
var click2inf = ['all_studio_page','all_product_page'];
var backCheck = ['studio_return_check','product_return_check'];
var changeCheck = ['studio_change_check','product_change_check'];
var delCheck = ['studio_del_check','product_del_check'];
var delCheck2 = ['stu_delete','pro_delete'];
var infChange = ['stu_change','pro_change'];
var infPage = ['studio_info_page','product_info_page'];
var uploadCheck = ['page_main_all','studio_info_page','product_info_page','add_studio_page'];
var proAddPage = ['page_confirm_act','page_confirm_app','page_confirm_cartoon','page_confirm_mag','page_confirm_movie','page_confirm_music',''];
var proAddPagePHP = ['../product/weAct/add.php','../product/weApp/add.php','../product/weCartoon/add.php','../product/weMag/add.php','../product/weMovie/add.php','../product/weMusic/add.php',''];
var basicUrl = 'http://123.207.108.16';