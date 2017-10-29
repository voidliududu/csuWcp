
$(function () {
    var visuable_frame = '#index_page';
    var base_url = "http://127.0.0.2/index.php"
    $("#we_my_studio").on('click', function () {
        //alert("hello");
        $(visuable_frame).css("display","none");
        $(".studio_info_page")
            .load(base_url + '/')
            .css('display','block');
        //alert("hello");
        visuable_frame = '.studio_info_page';
    });
    $("#index").on('click',function () {
        $(visuable_frame).css("display","none");
        $("#index_page")
            .css('display','block');
        visuable_frame = '#index_page';
    });
    $("#all_product").on('click',function () {
        $(visuable_frame).css("display","none");
        $('#all_product_page').css('display','block');
        visuable_frame = '#all_product_page';
    });
    $("#we_movie").on('click',function ( ) {
        $(visuable_frame).css("display","none");
        $('.product_info_page').css('display','block');
        visuable_frame = '.product_info_page';
    });
    $("#we_app").on('click',function () {
        $(visuable_frame).css("display","none");
        $('.product_info_page').css('display','block');
        visuable_frame = '.product_info_page';
    });
    $("#we_cartoon").on('click',function () {
        $(visuable_frame).css("display","none");
        $('.product_info_page').css('display','block');
        visuable_frame = '.product_info_page';
    });
    $("#we_mv").on('click',function () {
        $(visuable_frame).css("display","none");
        $('.product_info_page').css('display','block');
        visuable_frame = '.product_info_page';
    });
    $("#we_magazine").on('click',function () {
        $(visuable_frame).css("display","none");
        $('.product_info_page').css('display','block');
        visuable_frame = '.product_info_page';
    });
    $("#we_activity").on('click',function () {
        $(visuable_frame).css("display","none");
        $('.product_info_page').css('display','block');
        visuable_frame = '.product_info_page';
    });
    $("#add_product").on('click',function () {
        $(visuable_frame).css("display","none");
        $('#add_product_page').css('display','block');
        visuable_frame = '#add_product_page';
    });

    $("#page_confirm_act").on('click',function () {
        $("#add_product_page_confirm").css("display","none");
        $("#add_product_page_main").css("display","block");
        $("#page_main_act").css("display","block");
        visuable_frame = '#add_product_page_main';
    });
    $("#page_confirm_app").on('click',function () {
        $("#add_product_page_confirm").css("display","none");
        $("#add_product_page_main").css("display","block");
        $("#page_main_app").css("display","block");
        visuable_frame = '#add_product_page_main';
    });
    $("#page_confirm_cartoon").on('click',function () {
        $("#add_product_page_confirm").css("display","none");
        $("#add_product_page_main").css("display","block");
        $("#page_main_cartoon").css("display","block");
        visuable_frame = '#add_product_page_main';
    });
    $("#page_confirm_mag").on('click',function () {
        $("#add_product_page_confirm").css("display","none");
        $("#add_product_page_main").css("display","block");
        $("#page_main_mag").css("display","block");
        visuable_frame = '#add_product_page_main';
    });
    $("#page_confirm_movie").on('click',function () {
        $("#add_product_page_confirm").css("display","none");
        $("#add_product_page_main").css("display","block");
        $("#page_main_movie").css("display","block");
        visuable_frame = '#add_product_page_main';
    });
    $("#page_confirm_music").on('click',function () {
        $("#add_product_page_confirm").css("display","none");
        $("#add_product_page_main").css("display","block");
        $("#page_main_music").css("display","block");
        visuable_frame = '#add_product_page_main';
    });
});