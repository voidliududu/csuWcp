<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../../css/templet/wyy.css">
    <script src="../../js/templet/jquery-1.11.3.min.js"></script>
    <script src="../../js/define.js"></script>
    <script src="../../js/rgbaster.js"></script>
    <script> thisID =  '<?php echo $_GET['id'] ?>' </script>
    <script src="../../js/templet/wyyAjax.js"></script>
    <script src="../../js/templet/wyy_vol.js"></script>
</head>
<body onresize="Change();">
<div id="background_img_wrapper">
    <img src="" id="background_img" class="blur">
</div>

<div id="wrapper">
    <div id="headline_wrapper">
        <div id="headline"></div>
    </div>

    <div id="main_part_wrapper">
        <div id="main_part_left">
            <div id="cover_wrapper">
                <img id="cover" src="">
                <div id="music_name"></div>
            </div>
        </div>

        <div id="main_part_right">
            <div id="lyric">

            </div>
        </div>
    </div>
    <div id="player_wrapper">
        <div id="player">
            <div id="button_left">
                <a class="btn btn_left btn_small" id="last_button" title="上一首"></a>
                <a class="btn btn_left btn_big" id="player_button" href="javascript:void(0);"></a>
                <a class="btn btn_left btn_big" id="pause_button" href="javascript:void(0);"></a>
                <a class="btn btn_left btn_small" id="next_button"></a>
            </div>
            <div id="middle_wrapper">
                <a id="small_cover"></a>
                <div id="progress_base">
                    <div id="information_wrapper">
                        <div id="name"></div>
                        <div id="timer">
                            <span class="size">00:00</span>/<span class="timeshow">00:00</span>
                        </div>
                    </div>
                    <div id="progress_wrapper">
                        <!--<div id="progress_below">-->
                        <!--<div id="progress_above"></div>-->
                        <!--<div id="dot"></div>-->
                        <!--</div>-->
                        <p id="progress_below"><span style=""></span></p>
                    </div>
                </div>
            </div>
            <div id="button_right">
                <div style="">
                    <a onclick="silence_video();" class="btn btn_right" id="volume_button" onmouseover="show_silence();"
                       onmouseout="show_volume();"></a>
                    <a onclick="volume_video();" class="btn btn_right" id="silence_button"></a>
                    <input type="range" min="0" max="100" value="50" onchange="setvalue()" id="ran"/>
                </div>
                <a class="btn btn_right" id="order_button" onclick="unloop();"></a>
                <a class="btn btn_right" id="download_button"></a>
                <a class="btn btn_right" id="share_button"></a>
                <div id="music_list_wrapper">
                    <a class="btn" id="music_list_button"></a>
                    <span id="list_number">1</span>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="video" style="display: none">
    <video loop id="js-video">
        <source src="" type="video/mp4">
    </video>
</div>
</body>
</html>

<script src="../../js/templet/jquery-PlayBar.min.js"></script>
<script src="../../js/templet/Browser_judgement.js"></script>
<script src="../../js/templet/wyyMusic_JQ.js"></script>
