<?php 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> <html lang="zh-CN">

<head>

    <title>中南大学微产品创新工作室</title>

    <meta http-equiv="content-type" content="text/html;charset=utf-8">

    <meta http-equiv="content-language" content="zh-CN">

    <style type="text/css">

        body {background-color:rgb(240,240,245);}

        canvas{background-color:rgb(240,240,245);overflow:hidden}

    </style>
    <link href="<?php echo base_url("asset/");?>css/video-js.css" rel="stylesheet">
    <link href="<?php echo base_url("asset/");?>css/index.css?ver=1.2" rel="stylesheet" media="screen">
    <link href="<?php echo base_url("asset/");?>css/index2.css?ver=1.0" rel="stylesheet" media="screen">
    <link href="<?php echo base_url("asset/");?>css/buju.css?ver=1.0" rel="stylesheet" media="screen">
</head>


<script src="<?php echo base_url("asset/");?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url("asset/");?>js/jquery.rotate.min.js"></script>
<script src="<?php echo base_url("asset/");?>js/jquery.color-2.1.0.min.js"></script>
<script src="<?php echo base_url("asset/");?>js/buju.js"></script>
<script src="<?php echo base_url("asset/");?>js/indexCanvas.js"></script>
<script src="<?php echo base_url("asset/");?>js/define.js?ver=1.0"></script>
<script src="<?php echo base_url("asset/");?>js/index.js?ver=1.1"></script>
<script src="<?php echo base_url("asset/");?>js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url("asset/");?>js/unslider.min.js"></script>
<script src="<?php echo base_url("asset/");?>js/video.min.js"></script>
<!-- If you'd like to support IE8 -->
<script src="<?php echo base_url("asset/");?>js/videojs-ie8.min.js"></script>

<body id="body" onload="start()" onresize="resize()" onorientationchange="resize()" onmousedown="context.fillStyle='rgba(240,240,245,'+opacity+')'" onmouseup="context.fillStyle='rgb(240,240,245)'">

<canvas id="starfield" style="background-color:rgb(240,240,245);left: 0"></canvas>
<div id="adsense" style="position:absolute;background-color:transparent;display:none">

</div>
<div id="Index" class="bodyScroll" style="display: block">
    <div id="cell">
        <div class="headBlank"></div>
        <div id="c_line1" class="cell">
            <div class="c_left"></div>
            <div id="c_l1_row1" class="c_row">
                <div class="c_r_img">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img class="c_r_i_pic gear" src="<?php echo base_url("asset/");?>img/index/BigGear.png">
                </div>
            </div>
            <div class="c_blank"></div>
            <div id="c_l1_row2" class="c_row c_row2">
                <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                <div style="display: inline-block;vertical-align: middle">队伍<br>介绍</div>
            </div>
            <div class="c_blank"></div>
            <div id="c_l1_row3" class="c_row c_row2">
                <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                <div style="display: inline-block;vertical-align: middle">工作室<br>介绍</div>
            </div>
            <div class="c_blank"></div>
            <div id="c_l1_row4" class="c_row c_row2">
                <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                <div style="display: inline-block;vertical-align: middle">实施<br>成效</div>
            </div>
            <div class="c_blank"></div>
            <div id="c_l1_row5" class="c_row">
                <div class="c_r_img">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img class="c_r_i_pic gear2" src="<?php echo base_url("asset/");?>img/index/BigGear.png">
                </div>
                <!--<div class="c_r2_bg"></div>-->
            </div>
            <div class="c_right"></div>
        </div>
        <div class="bodyBlank"></div>
        <div id="c_line2" class="cell">
            <div class="c_left"></div>
            <div id="c_l2_row1" class="c_row">
                <div class="c_r_img">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img class="c_r_i_pic" id="c_r_i_wzz" src="<?php echo base_url("asset/");?>img/index/BigMag.png?ver=1.0">
                </div>
            </div>
            <div id="c_l2_row2">
                <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                <div style="display: inline-block;vertical-align: middle">中南大学微产品创意工作室</div>
            </div>
            <div id="c_l2_row3" class="c_row">
                <div class="c_r_img">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img class="c_r_i_pic" id="c_r_i_wyy" src="<?php echo base_url("asset/");?>img/index/BigMusic.png?ver=1.1">
                </div>
            </div>
            <div class="c_right"></div>
        </div>
        <div class="bodyBlank"></div>
        <div id="c_line3" class="cell">
            <div class="c_left"></div>
            <div id="c_l3_row1" class="c_row c_row3">
                <div class="c_r_img c_r_img_after">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img class="c_r_i_pic" id="c_r_i_whd" src="<?php echo base_url("asset/");?>img/index/BigAct.png?ver=1.0">
                </div>
            </div>
            <div class="c_blank"></div>
            <div id="c_l3_row2" class="c_row c_row3">
                <div class="c_r_img c_r_img_after">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img class="c_r_i_pic" id="c_r_i_app" src="<?php echo base_url("asset/");?>img/index/BigApp.png?ver=1.0">
                </div>
            </div>
            <div class="c_blank"></div>
            <div id="c_l3_row3" class="c_row c_row3">
                <div class="c_r_img c_r_img_after">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img class="c_r_i_pic" id="c_r_i_wdy" src="<?php echo base_url("asset/");?>img/index/BigMoive.png?ver=1.0">
                </div>
            </div>
            <div class="c_blank"></div>
            <div id="c_l3_row4" class="c_row c_row3">
                <div class="c_r_img c_r_img_after">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img class="c_r_i_pic" id="c_r_i_wmh" src="<?php echo base_url("asset/");?>img/index/BigCartoon.png?ver=1.0">
                </div>
            </div>
            <div class="c_blank"></div>
            <div id="c_l3_row5" class="c_row c_row3">
                <div class="c_r_img c_r_img_after">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img class="c_r_i_pic" id="c_r_i_gzs" src="<?php echo base_url("asset/");?>img/index/BigStdio.png?ver=1.0">
                </div>
            </div>
            <div class="c_right"></div>
        </div>
        <div class="bodyBlank"></div>

        <div id="c_footer">
            <div style="position:relative;text-align: center">
                <br>
                Copyright©2001-2017 中南大学微产品创意工作室 版权所有
                <br>
                湖南长沙岳麓区麓山南路932号 410083
                <br>
                联系方式:0731-88877617
                <br>
            </div>

        </div>
    </div>
</div>
<div id="all" class="bodyScroll" style="display: none;">
    <div id="left">
        <div id="l_head">
            <div id="l_h_png"><img id="l_h_p_img"  src="<?php echo base_url("asset/");?>img/titlePng.png"/></div>
            <div id="l_h_title">中南大学微产品创新工作室</div>
        </div>

            <div class="l_banner" id="b03" >
                <ul>
                    <li><img src="<?php echo base_url("asset/");?>img/head-background.jpg" style="width: 100%;height: 320px;z-index:1"></li>
                    <li><img src="<?php echo base_url("asset/");?>img/head-background.jpg" style="width: 100%;height: 320px;z-index:1"></li>
                    <li><img src="<?php echo base_url("asset/");?>img/head-background.jpg" style="width: 100%;height: 320px;z-index:1"></li>
                    <li><img src="<?php echo base_url("asset/");?>img/head-background.jpg" style="width: 100%;height: 320px;z-index:1"></li>
                    <li><img src="<?php echo base_url("asset/");?>img/head-background.jpg" style="width: 100%;height: 320px;z-index:1"></li>
                </ul>
                <!--<a href="javascript:void(0);" class="unslider-arrow04 prev"><img class="arrow" id="al" src="arrowl.png" alt="prev" width="20" height="35"></a>-->
                <!--<a href="javascript:void(0);" class="unslider-arrow04 next"><img class="arrow" id="ar" src="arrowr.png" alt="next" width="20" height="37"></a>-->
            </div>

        <div id="right">
            <div id="r_index" class="nav">
                <img class="n_n_n" src="<?php echo base_url("asset/");?>img/index/IconIndex.png">
                <div class="n_nav">
                </div>
            </div>
            <div id="r_gzs" class="nav">
                <img class="n_n_n" name="0" src="<?php echo base_url("asset/");?>img/index/IconStudio.png">
                <div class="n_nav"></div>
            </div>
            <div id="r_wyy" class="nav">
                <img class="n_n_n" name="2" src="<?php echo base_url("asset/");?>img/index/IconMusic.png">
                <div class="n_nav">
                </div>
            </div>
            <div id="r_wdy" class="nav">
                <img class="n_n_n" name="1" src="<?php echo base_url("asset/");?>img/index/IconMovie.png">
                <div class="n_nav">
                </div>
            </div>
            <div id="r_wmh" class="nav">
                <img class="n_n_n" name="5" src="<?php echo base_url("asset/");?>img/index/IconCartoon.png">
                <div class="n_nav">
                </div>
            </div>
            <div id="r_app" class="nav">
                <img class="n_n_n" name="3" src="<?php echo base_url("asset/");?>img/index/IconAPP.png">
                <div class="n_nav">
                </div>
            </div>
            <div id="r_wzz" class="nav">
                <img class="n_n_n" name="4" src="<?php echo base_url("asset/");?>img/index/IconMag.png">
                <div class="n_nav">
                </div>
            </div>
            <div id="r_whd" class="nav">
                <img class="n_n_n" name="6" src="<?php echo base_url("asset/");?>img/index/IconAct.png">
                <div class="n_nav">
                </div>
            </div>
        </div>
        <!--产品及工作室列表-->
        <div id="l_body">

        </div>

        <div id="l_foot">
            <br>
            Copyright©2001-2017 中南大学微产品创意工作室 版权所有
            <br>
            湖南长沙岳麓区麓山南路932号 410083
            <br>
            联系方式:0731-88877617
            <br>
        </div>
    </div>

</div>
<div class="page-bac" style="display: none"></div>

<!--微APP、工作室、微活动用这个div-->
<div class="wcp-page" style="display: none;z-index:9;">

</div>

<!--微漫画用这个div-->
<div class="wmh-page scroll" style="display: none;z-index: 9">

</div>

<!--微杂志用这个div-->
<div class="wzz-page" style="display: none;z-index:9">

</div>

<!--微音乐 微电影用这个div-->
<div class="wdy-page" style="display: none;z-index:9">

</div>
</body>

</html>