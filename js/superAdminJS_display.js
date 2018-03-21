function click2display_none(){
    $('#index_page').css('display','none');
    $('#all_studio_page').css('display','none');
    $('#studio_info_page').css('display','none');
    $('#add_studio_page').css('display','none');
    $('#all_product_page').css('display','none');
    $('#product_info_page').css('display','none');
}
function click2active(obj,thisObj){
    obj.removeClass('active');
    thisObj.addClass('active');
    return thisObj;
}
$(function () {
    var clickActive = $("#index");
    visuable_frame = "#index_page";
    var base_url = "http://127.0.0.2/index.php/";
    $("#manage_source").on('click',function () {
        clickActive = click2active(clickActive, $(this));
        $(visuable_frame).css("display","none");
    });
    $("#all_studio").on('click',function () {
        clickActive = click2active(clickActive, $(this));
        $(visuable_frame).css("display","none");
        $("#all_studio_page")
            // .load('studioList.php' )
            .css("display", "block");
        visuable_frame = "#all_studio_page";
    });
    $("#add_studio").on('click',function () {
        clickActive = click2active(clickActive, $(this));
        $(visuable_frame).css("display","none");
        click2display_none();
        $("#add_studio_page")
            .load( 'add.php')
            .css("display", "block");
        visuable_frame = "#add_studio_page";
    });
    $("#we_my_studio").on('click', function () {
        clickActive = click2active(clickActive, $(this));
        //alert("hello");
        $(visuable_frame).css("display","none");
        $(".studio_info_page")
            .load(base_url + '/')
            .css('display','block');
        //alert("hello");
        visuable_frame = '.studio_info_page';
    });
    $("#index").on('click',function () {
        clickActive = click2active(clickActive, $(this));
        $(visuable_frame).css("display","none");
        $("#index_page")
            .css('display','block');
        visuable_frame = '#index_page';
    });
    $("#all_product").on('click',function (e) {
        clickActive = click2active(clickActive, $(this));
        var cateid = e.target.name;
        $(visuable_frame).css("display","none");
        $('#all_product_page')
            // .load(base_url + 'Admin/listProduct')
            .css('display','block');
        visuable_frame = '#all_product_page';
    });
    $("#we_movie").on('click',function ( e) {
        clickActive = click2active(clickActive, $(this));
        var cateid = e.target.name;
        $(visuable_frame).css("display","none");
        $('#all_product_page')
            // .load(base_url + 'Admin/listProduct/'+1)
            .css('display','block');
        visuable_frame = '#all_product_page';
    });
    $("#we_app").on('click',function (e) {
        clickActive = click2active(clickActive, $(this));
        var cateid = e.target.name;
        $(visuable_frame).css("display","none");
        $('#all_product_page')
            // .load(base_url + 'Admin/listProduct/'+3)
            .css('display','block');
        visuable_frame = '#all_product_page';
    });
    $("#we_cartoon").on('click',function (e) {
        clickActive = click2active(clickActive, $(this));
        var cateid = e.target.name;
        $(visuable_frame).css("display","none");
        $('#all_product_page')
            // .load(base_url + 'Admin/listProduct/'+5)
            .css('display','block');
        visuable_frame = '#all_product_page';
    });
    $("#we_mv").on('click',function (e) {
        clickActive = click2active(clickActive, $(this));
        var cateid = e.target.name;
        $(visuable_frame).css("display","none");
        $('#all_product_page')
            // .load('../product/weMusic/add.php')
            .css('display','    block');
        visuable_frame = '#all_product_page';
    });
    $("#we_magazine").on('click',function (e) {
        clickActive = click2active(clickActive, $(this));
        var cateid = e.target.name;
        $(visuable_frame).css("display","none");
        $('#all_product_page')
            // .load(base_url + 'Admin/listProduct/'+4)
            .css('display','block');
        visuable_frame = '#all_product_page';
    });
    $("#we_activity").on('click',function (e) {
        clickActive = click2active(clickActive, $(this));
        var cateid = e.target.name;
        console.log(e);
        $(visuable_frame).css("display","none");
        $('#all_product_page')
            // .load(base_url + 'Admin/listProduct/'+6)
            .css('display','block');
        visuable_frame = '#all_product_page';
    });
    $("#add_product").on('click',function () {
        clickActive = click2active(clickActive, $(this));
        $(visuable_frame).css("display","none");
        $('#add_product_page').css('display','block');
        $('#add_product_page_confirm').css("display",'block');
        visuable_frame = '#add_product_page';
    });

    $("#page_confirm_act").on('click',function () {
        $("#add_product_page_confirm").css("display","none");
        $("#add_product_page_main").css("display","block");
        $("#page_main_all")
            .load('../product/weAct/add.php')
            .css("display","block");
        visuable_frame = '#add_product_page_main';
    });
    $("#page_confirm_app").on('click',function () {
        $("#add_product_page_confirm").css("display","none");
        $("#add_product_page_main").css("display","block");
        $("#page_main_all")
            .load('../product/weApp/add.php')
            .css("display","block");
        visuable_frame = '#add_product_page_main';
    });
    $("#page_confirm_cartoon").on('click',function () {
        $("#add_product_page_confirm").css("display","none");
        $("#add_product_page_main").css("display","block");
        $("#page_main_all")
            .load('../product/weCartoon/add.php')
            .css("display","block");
        visuable_frame = '#add_product_page_main';
    });
    $("#page_confirm_mag").on('click',function () {
        $("#add_product_page_confirm").css("display","none");
        $("#add_product_page_main").css("display","block");
        $("#page_main_all")
            .load('../product/weMag/add.php')
            .css("display","block");
        visuable_frame = '#add_product_page_main';
    });
    $("#page_confirm_movie").on('click',function () {
        $("#add_product_page_confirm").css("display","none");
        $("#add_product_page_main").css("display","block");
        $("#page_main_all")
            .load('../product/weMovie/add.php')
            .css("display","block");
        visuable_frame = '#add_product_page_main,#page_main_movie';
    });
    $("#page_confirm_music").on('click',function () {
        $("#add_product_page_confirm").css("display","none");
        $("#add_product_page_main").css("display","block");
        $("#page_main_all")
            .load('../product/weMusic/add.php')
            .css("display","block");
        visuable_frame = '#add_product_page_main,#page_main_music';
    });
});
