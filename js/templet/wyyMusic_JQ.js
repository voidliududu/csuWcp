// start_video = function () {
//     $("#pause_button").css("display", "block");
//     $("#player_button").css("display", "none");
// };
//
// pause_video = function () {
//     $("#player_button").css("display", "block");
//     $("#pause_button").css("display", "none");
// };

unloop= function () {
    $("#js-video").removeAttribute("loop");
};



var small_cover = $("#small_cover");
var cover_height = small_cover.css("height");
small_cover.css("width", cover_height);

var player = $("#player");
var player_height = player.css("height");
player_height = player_height.replace("px", "");

var btn_big = $(".btn_big");
var btn_big_height = btn_big.css("height");
btn_big_height = btn_big_height.replace("px", "");
var btn_big_top = (player_height - btn_big_height) / 2;
btn_big.css("top", btn_big_top);

var btn_small = $(".btn_small");
var btn_small_height = btn_small.css("height");
btn_small_height = btn_small_height.replace("px", "");
var btn_small_top = (player_height - btn_small_height) / 2;
btn_small.css("top", btn_small_top);

var btn_right = $(".btn_right");
var btn_right_height = btn_right.css("height");
btn_right_height = btn_right_height.replace("px", "");
var btn_right_top = (player_height - btn_right_height) / 2;
btn_right.css("top", btn_right_top);

var music_list = $("#music_list_wrapper");
var music_list_height = music_list.css("height");
music_list_height = music_list_height.replace("px", "");
var music_list_top = (player_height - music_list_height) / 2;
music_list.css("top", music_list_top);

var ran= $("#ran");
// var vol=$("#volume_button");
var ran_height = ran.css("height");
ran_height = ran_height.replace("px", "");
var ran_top = (player_height - ran_height) / 2+20;
ran.css("top", ran_top);
// var ran_left=vol.css("left");
// ran.css("left", 100);

Change = function () {
    var small_cover = $("#small_cover");
    var cover_height = small_cover.css("height");
    small_cover.css("width", cover_height);

    player = $("#player");
    player_height = player.css("height");
    player_height = player_height.replace("px", "");

    btn_big = $(".btn_big");
    btn_big_height = btn_big.css("height");
    btn_big_height = btn_big_height.replace("px", "");
    btn_big_top = (player_height - btn_big_height) / 2;
    btn_big.css("top", btn_big_top);

    btn_small = $(".btn_small");
    btn_small_height = btn_small.css("height");
    btn_small_height = btn_small_height.replace("px", "");
    btn_small_top = (player_height - btn_small_height) / 2;
    btn_small.css("top", btn_small_top);

    btn_right = $(".btn_right");
    btn_right_height = btn_right.css("height");
    btn_right_height = btn_right_height.replace("px", "");
    btn_right_top = (player_height - btn_right_height) / 2;
    btn_right.css("top", btn_right_top);

    ran= $("#ran");
// var vol=$("#volume_button");
    ran_height = ran.css("height");
    ran_height = ran_height.replace("px", "");
    ran_top = (player_height - ran_height) / 2+20;
    ran.css("top", ran_top);
    music_list = $("#music_list_wrapper");
    music_list_height = music_list.css("height");
    music_list_height = music_list_height.replace("px", "");
    music_list_top = (player_height - music_list_height) / 2;
    music_list.css("top", music_list_top);

};

