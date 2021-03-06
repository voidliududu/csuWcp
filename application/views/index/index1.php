<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> <html lang="zh-CN">

<head>

    <title>中南大学微产品创新工作室</title>

    <meta http-equiv="content-type" content="text/html;charset=utf-8">

    <meta http-equiv="content-language" content="zh-CN">

    <style type="text/css">

        body {background-color:rgb(240,240,245);}

        canvas{background-color:rgb(240,240,245);overflow:hidden}

    </style>
    <link href="<?php echo base_url('asset/');?>css/video-js.css" rel="stylesheet">
    <link href="<?php echo base_url('asset/');?>css/index.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('asset/');?>css/index2.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('asset/');?>css/buju.css" rel="stylesheet" media="screen">
</head>


<script src="<?php echo base_url('asset/');?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url('asset/');?>js/jquery.rotate.min.js"></script>
<script src="<?php echo base_url('asset/');?>js/jquery.color-2.1.0.min.js"></script>
<script src="<?php echo base_url('asset/');?>js/buju.js"></script>
<script src="<?php echo base_url('asset/');?>js/indexCanvas.js"></script>
<script src="<?php echo base_url('asset/');?>js/define.js"></script>
<script src="<?php echo base_url('asset/');?>js/index.js"></script>
<script src="<?php echo base_url('asset/');?>js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url('asset/');?>js/unslider.min.js"></script>
<script src="<?php echo base_url('asset/');?>js/video.min.js"></script>
<!-- If you'd like to support IE8 -->
<script src="<?php echo base_url('asset/');?>js/videojs-ie8.min.js"></script>

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
                    <img class="c_r_i_pic gear" src="<?php echo base_url('asset/');?>img/index/BigGear.png">
                </div>
                <!--<div class="c_r1_bg"  onmouseout="cell_pic_out(this)"></div>-->
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
                    <img class="c_r_i_pic gear2" src="<?php echo base_url('asset/');?>img/index/BigGear.png">
                </div>
                <!--<div class="c_r2_bg" onmouseout="cell_pic_out(this)"></div>-->
            </div>
            <div class="c_right"></div>
        </div>
        <div class="bodyBlank"></div>
        <div id="c_line2" class="cell">
            <div class="c_left"></div>
            <div id="c_l2_row1" class="c_row">
                <div class="c_r_img">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img onmouseover="cell_pic_over(this)" class="c_r_i_pic" id="c_r_i_wzz" src="<?php echo base_url('asset/');?>img/index/BigMag.png">
                </div>
                <div class="c_r1_bg" onmouseout="cell_pic_out(this)" >
                    <div class="c_r1_bg_left">
                        <div style="height:100%;display: inline-block;vertical-align: middle"></div>
                        <div class="c_r1_bg_font">微<br>杂<br>志</div>
                    </div>
                </div>
            </div>
            <div id="c_l2_row2">
                <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                <div onmouseover="cell_title_over(this)" onmouseout="cell_title_out(this)" style="display: inline-block;vertical-align: middle">中南大学微产品创意工作室</div>
            </div>
            <div id="c_l2_row3" class="c_row">
                <div class="c_r_img">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img onmouseover="cell_pic_over(this)" class="c_r_i_pic" id="c_r_i_wyy" src="<?php echo base_url('asset/');?>img/index/BigMusic.png">
                </div>
                <div class="c_r2_bg"  onmouseout="cell_pic_out(this)">
                    <div class="c_r1_bg_right">
                        <div style="height:100%;display: inline-block;vertical-align: middle"></div>
                        <div class="c_r1_bg_font">微<br>音<br>乐</div>
                    </div>
                </div>
            </div>
            <div class="c_right"></div>
        </div>
        <div class="bodyBlank"></div>
        <div id="c_line3" class="cell">
            <div class="c_left"></div>
            <div id="c_l3_row1" class="c_row c_row3">
                <div class="c_r_img">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img onmouseover="cell_pic_over(this)" class="c_r_i_pic" id="c_r_i_whd" src="<?php echo base_url('asset/');?>img/index/BigAct.png">
                </div>
                <div class="c_r3_bg"  onmouseout="cell_pic_out(this)">
                    <div class="c_r1_bg_bottom">
                        <div style="height:100%;display: inline-block;vertical-align: middle"></div>
                        <div class="c_r1_bg_font">微活动</div>
                    </div>
                </div>
            </div>
            <div class="c_blank"></div>
            <div id="c_l3_row2" class="c_row c_row3">
                <div class="c_r_img">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img onmouseover="cell_pic_over(this)" class="c_r_i_pic" id="c_r_i_app" src="<?php echo base_url('asset/');?>img/index/BigApp.png">
                </div>
                <div class="c_r3_bg"  onmouseout="cell_pic_out(this)" >
                    <div class="c_r1_bg_bottom">
                        <div style="height:100%;display: inline-block;vertical-align: middle"></div>
                        <div class="c_r1_bg_font">APP</div>
                    </div>
                </div>
            </div>
            <div class="c_blank"></div>
            <div id="c_l3_row3" class="c_row c_row3">
                <div class="c_r_img">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img onmouseover="cell_pic_over(this)" class="c_r_i_pic" id="c_r_i_wdy" src="<?php echo base_url('asset/');?>img/index/BigMoive.png">
                </div>
                <div class="c_r3_bg" onmouseout="cell_pic_out(this)" >
                    <div class="c_r1_bg_bottom">
                        <div style="height:100%;display: inline-block;vertical-align: middle"></div>
                        <div class="c_r1_bg_font">微电影</div>
                    </div>
                </div>
            </div>
            <div class="c_blank"></div>
            <div id="c_l3_row4" class="c_row c_row3">
                <div class="c_r_img">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img onmouseover="cell_pic_over(this)" class="c_r_i_pic" id="c_r_i_wmh" src="<?php echo base_url('asset/');?>img/index/BigCartoon.png">
                </div>
                <div class="c_r3_bg"  onmouseout="cell_pic_out(this)">
                    <div class="c_r1_bg_bottom">
                        <div style="height:100%;display: inline-block;vertical-align: middle"></div>
                        <div class="c_r1_bg_font">微漫画</div>
                    </div>
                </div>
            </div>
            <div class="c_blank"></div>
            <div id="c_l3_row5" class="c_row c_row3">
                <div class="c_r_img">
                    <span style="height:100%;display: inline-block;vertical-align: middle"></span>
                    <img onmouseover="cell_pic_over(this)" class="c_r_i_pic" id="c_r_i_gzs" src="<?php echo base_url('asset/');?>img/index/BigStdio.png">
                </div>
                <div class="c_r3_bg"  onmouseout="cell_pic_out(this)">
                    <div class="c_r1_bg_bottom">
                        <div style="width:100%;display: inline-block;vertical-align: middle"></div>
                        <div class="c_r1_bg_font">微工作室</div>
                    </div>
                </div>
            </div>
            <div class="c_right"></div>
        </div>
    </div>
</div>

<!--<div id="all" class="bodyScroll" style="display: none;">-->
<!--    <div id="left">-->
<!--        <div id="l_head">-->
<!--            <div id="l_h_png"><img id="l_h_p_img"  src="--><?php //echo base_url('asset/');?><!--img/titlePng.png"/></div>-->
<!--            <div id="l_h_title">中南大学微产品创新工作室</div>-->
<!--        </div>-->
<!---->
<!--            <div class="l_banner" id="b03" >-->
<!--                <ul>-->
<!--                    <li><img src="--><?php //echo base_url('asset/');?><!--img/head-background.jpg" style="width: 100%;height: 320px;z-index:1"></li>-->
<!--                    <li><img src="--><?php //echo base_url('asset/');?><!--img/head-background.jpg" style="width: 100%;height: 320px;z-index:1"></li>-->
<!--                    <li><img src="--><?php //echo base_url('asset/');?><!--img/head-background.jpg" style="width: 100%;height: 320px;z-index:1"></li>-->
<!--                    <li><img src="--><?php //echo base_url('asset/');?><!--img/head-background.jpg" style="width: 100%;height: 320px;z-index:1"></li>-->
<!--                    <li><img src="--><?php //echo base_url('asset/');?><!--img/head-background.jpg" style="width: 100%;height: 320px;z-index:1"></li>-->
<!--                </ul>-->
<!--                <!--<a href="javascript:void(0);" class="unslider-arrow04 prev"><img class="arrow" id="al" src="arrowl.png" alt="prev" width="20" height="35"></a>-->-->
<!--                <!--<a href="javascript:void(0);" class="unslider-arrow04 next"><img class="arrow" id="ar" src="arrowr.png" alt="next" width="20" height="37"></a>-->-->
<!--            </div>-->
<!---->
<!--        <div id="right">-->
<!--            <div id="r_index" class="nav">-->
<!--                <img class="n_n_n" src="--><?php //echo base_url('asset/');?><!--img/index/IconIndex.png">-->
<!--                <div class="n_nav">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="r_gzs" class="nav">-->
<!--                <img class="n_n_n" src="--><?php //echo base_url('asset/');?><!--img/index/IconStudio.png">-->
<!--                <div class="n_nav"></div>-->
<!--            </div>-->
<!--            <div id="r_wyy" class="nav">-->
<!--                <img class="n_n_n" src="--><?php //echo base_url('asset/');?><!--img/index/IconMusic.png">-->
<!--                <div class="n_nav">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="r_wdy" class="nav">-->
<!--                <img class="n_n_n" src="--><?php //echo base_url('asset/');?><!--img/index/IconMovie.png">-->
<!--                <div class="n_nav">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="r_wmh" class="nav">-->
<!--                <img class="n_n_n" src="--><?php //echo base_url('asset/');?><!--img/index/IconCartoon.png">-->
<!--                <div class="n_nav">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="r_app" class="nav">-->
<!--                <img class="n_n_n" src="--><?php //echo base_url('asset/');?><!--img/index/IconAPP.png">-->
<!--                <div class="n_nav">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="r_wzz" class="nav">-->
<!--                <img class="n_n_n" src="--><?php //echo base_url('asset/');?><!--img/index/IconMag.png">-->
<!--                <div class="n_nav">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="r_whd" class="nav">-->
<!--                <img class="n_n_n" src="--><?php //echo base_url('asset/');?><!--img/index/IconAct.png">-->
<!--                <div class="n_nav">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div id="l_body">-->
<!--            <div id="l_b_left">-->
<!--                <div style="vertical-align: middle"><img id="l_b_l_leftA" src="--><?php //echo base_url('asset/');?><!--img/arrow.png" /></div>-->
<!--            </div>-->
<!--            <div class="l_b_middle l_b_middle-gzs">-->
<!--                <div id="l_b_m_1" class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">工作室</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="l_b_middle l_b_middle-wyy">-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微音乐</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微音乐</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="l_b_middle l_b_middle-wdy">-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微电影</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微电影</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微电影</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="l_b_middle l_b_middle-wmh">-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微漫画</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微漫画</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微漫画</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微漫画</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="l_b_middle l_b_middle-app">-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微APP</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微APP</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微APP</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微APP</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微APP</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="l_b_middle l_b_middle-wzz">-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微杂志</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微杂志</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微杂志</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微杂志</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微杂志</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微杂志</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="l_b_middle l_b_middle-whd">-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微活动</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微活动</div>-->
<!--                </div>--><?php //echo base_url('asset/');?>
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微活动</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微活动</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微活动</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微活动</div>-->
<!--                </div>-->
<!--                <div class="pic">-->
<!--                    <div class="p_pic">-->
<!--                        <span style="height:100%;display: inline-block;vertical-align: middle"></span><img onmouseout="hov_pic_out(this)" onmousemove="hov_pic_over(this)" class="p_p_p" src="--><?php //echo base_url('asset/');?><!--img/studio/jilu.png">-->
<!--                    </div>-->
<!--                    <div class="p_title">微活动</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="l_b_right">-->
<!--                <div style="vertical-align: middle"><img id="l_b_l_rightA" src="--><?php //echo base_url('asset/');?><!--img/arrow.png"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div id="l_foot">-->
<!--            <br>-->
<!--            Copyright©2001-2017 中南大学微产品创意工作室 版权所有-->
<!--            <br>-->
<!--            湖南长沙岳麓区麓山南路932号 410083-->
<!--            <br>-->
<!--            联系方式:0731-88877617-->
<!--            <br>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->
<!--<div class="page-bac" style="display: none"></div>-->
<!---->
<!--<!--微APP、工作室、微活动用这个div-->-->
<!--<div class="wcp-page" style="display: none;z-index:9;">-->
<!--    <img src="img/close.png" alt="" class="zz-page-close page-close">-->
<!--    <div id="container"></div>-->
<!--    <div id="whole">-->
<!--        <div id="body-two">-->
<!--            <div id="central" >-->
<!--                <div class="le" ><img src="--><?php //echo base_url('asset/');?><!--img/0.jpg" style="height: 380px;width: 580px;"></div>-->
<!--                <div class="ri"></div>-->
<!--                <div class="text" style="display: block">To further explore the nature of language, we naturally come to the question of what language is for. This unit deepens our understanding of the basics of language by offering refreshing ideas about language functions, which pave the way for the investigation of language in use, language evolution, language acquisition, and other important issues in linguistics</div>-->
<!--                <div class="text" style="display: none">Hundreds of South Koreans who live near the future deployment site of the U.S. THAAD missile defense system staged a protest in Seoul Wednesday.数百名居住在美国萨德导弹防御系统计划部署地点附近的韩国民众周三在首尔举行抗议数百名居住在美国萨德导弹防御系统计划部署地点附近的韩国民众周三在首尔举行抗议数百名居住在美国萨德导弹防御系统计划部署地点附近的韩国民众周三在首尔举行抗议。</div>-->
<!--                <div class="text" style="display: none">Gimcheon Mayor Park Bo-saeng told the protesters that he has tried to dissuade provincial leaders and defense ministry officials from deploying the Terminal High Altitude Area Defense (THAAD) system near his city of 13,000 people, but his pleas fell on deaf ears.金泉市市长朴宝生对抗议者说，他试图说服省级官员和国防部官员，不要在他的城市附近部署末端高空防御体系统（THAAD，简称“萨德”），但没人理睬他的请求。金泉市有13000居民。</div>-->
<!--                <div class="text" style="display: none">Protests over the summer forced the South Korean government to move the planned THAAD location away from one area in Seongju County that was 1.5 kilometers from a population center.今年夏天爆发的抗议迫使韩国政府改变了原计划在星洲郡部署萨德的地点，那个地点距离星洲郡一处人口聚集区仅1.5公里之遥。</div>-->
<!--                <div class="text" style="display: none">The new site, selected in September, is the Lotte Skyhill Country Club golf course, which is in a more rural part of Seongju County, and eight kilometers away from the city of Gimcheon, in the southern end of the Korean Peninsula.9月选出了新的部署地点，位于在星洲郡远郊的乐天天山乡村俱乐部高尔夫球场。这个地点距离金泉市8公里，地处朝鲜半岛的最南端。</div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div id="footer" >-->
<!--        <div id="foot">-->
<!--            <div id="PRE" style="cursor:pointer;width: 5%;height: 100%;"><img src="--><?php //echo base_url('asset/');?><!--img/6.jpg" style="height: 100%;"></div>-->
<!--            <ul id="longPic">-->
<!--                <li><img src="--><?php //echo base_url('asset/');?><!--img/0.jpg" class=" active img" style="height: 90%;width: 80%; top: 5%;left: 10%;opacity: 1;"></li>-->
<!--                <li><img src="--><?php //echo base_url('asset/');?><!--img/1.jpg" class="img"></li>-->
<!--                <li><img src="--><?php //echo base_url('asset/');?><!--img/2.jpg" class="img"></li>-->
<!--                <li><img src="--><?php //echo base_url('asset/');?><!--img/3.jpg" class="img"></li>-->
<!--                <li><img src="--><?php //echo base_url('asset/');?><!--img/4.jpg" class="img"></li>-->
<!--            </ul>-->
<!--            <div id="NEX" style="cursor:pointer;width: 5%;height: 100%;"><img src="--><?php //echo base_url('asset/');?><!--img/6.jpg" style="height: 100% ;" class="Iright"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<!--微漫画用这个div-->-->
<!--<div class="wmh-page scroll" style="display: none;z-index: 9">-->
<!--    <img src="img/close.png" alt="" class="mh-page-close page-close" style="right:20%">-->
<!--    <div style="width:100%;height:60px"></div>-->
<!--    <div class="mh-page-whole height">-->
<!--        <div class="mh-page-one mh-page-com">-->
<!--            <div class="mh-page-contain"></div>-->
<!--            <div class="mh-page-number"><span>1/3</span></div>-->
<!--        </div>-->
<!--        <div class="mh-page-one mh-page-com">-->
<!--            <div class="mh-page-contain"></div>-->
<!--            <div class="mh-page-number"><span>2/3</span></div>-->
<!--        </div>-->
<!--        <div class="mh-page-one mh-page-com">-->
<!--            <div class="mh-page-contain"></div>-->
<!--            <div class="mh-page-number"><span>3/3</span></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<!--微杂志用这个div-->-->
<!--<div class="wzz-page" style="display: none;z-index:9">-->
<!--    <img src="--><?php //echo base_url('asset/');?><!--img/close.png" alt="" class="zz-page-close page-close">-->
<!--    <div class="zz-page-contain"></div>-->
<!--    <div class="zz-page-num">-->
<!--        <ul>-->
<!--            <li class="zz-page-num-first"><img src="--><?php //echo base_url('asset/');?><!--img/last.png" alt=""></li>-->
<!--            <li class="zz-page-num-pre"><img style="width: 100%" src="--><?php //echo base_url('asset/');?><!--img/pre.png" alt=""></li>-->
<!--            <li><div>1</div></li>-->
<!--            <li><div>2</div></li>-->
<!--            <li><div>3</div></li>-->
<!--            <li><div>4</div></li>-->
<!--            <li><div>5</div></li>-->
<!--            <li><div>6</div></li>-->
<!--            <li class="zz-page-num-next"><img src="--><?php //echo base_url('asset/');?><!--img/pre.png" alt=""></li>-->
<!--            <li class="zz-page-num-last"><img src="--><?php //echo base_url('asset/');?><!--img/last.png" alt=""></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<!--微音乐 微电影用这个div-->-->
<!--<div class="wdy-page" style="display: none;z-index:9">-->
<!--    <img src="img/close.png" alt="" class="zz-page-close page-close">-->
<!--    <div class="wdy-page-left">-->
<!--        <div class="wdy-page-left-info">《天使之路》 卢麒烨T台秀意外摔倒</div>-->
<!--        <div class="wdy-page-left-screen">-->
<!--            <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"-->
<!--                   poster="MY_VIDEO_POSTER.jpg" data-setup="{}">-->
<!--                <source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4">-->
<!--                <source src="http://vjs.zencdn.net/v/oceans.webm" type="video/webm">-->
<!--                <source src="http://vjs.zencdn.net/v/oceans.ogv" type="video/ogg">-->
<!--                <p class="vjs-no-js">-->
<!--                    To view this video please enable JavaScript, and consider upgrading to a web browser that-->
<!--                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>-->
<!--                </p>-->
<!--            </video>-->
<!--        </div>-->
<!--        <div class="wdy-page-left-bar">-->
<!--            <!--<div class="wdy-page-left-bar-button"><img src="img/share.png" alt=""><span>分享</span></div>-->-->
<!--            <div class="wdy-page-left-bar-button"><img src="--><?php //echo base_url('asset/');?><!--img/collect.png" alt=""><span></span></div>-->
<!--            <div class="wdy-page-left-bar-button"><img src="--><?php //echo base_url('asset/');?><!--img/good.png" alt=""><span>10000+</span></div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="wdy-page-right ">-->
<!--        <div class="wdy-page-right-all scroll">-->
<!--            <div class="wdy-page-right-movie">-->
<!--                <img src="--><?php //echo base_url('asset/');?><!--img/close.png" alt="">-->
<!--                <div class="wdy-page-right-movie-desc">-->
<!--                    <p>《天使之路》 卢麒烨T台秀意外摔倒</p>-->
<!--                    <span>播放：89万</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="wdy-page-right-movie">-->
<!--                <img src="--><?php //echo base_url('asset/');?><!--img/close.png" alt="">-->
<!--                <div class="wdy-page-right-movie-desc">-->
<!--                    <p>《天使之路》 卢麒烨T台秀意外摔倒</p>-->
<!--                    <span>播放：89万</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="wdy-page-right-movie">-->
<!--                <img src="--><?php //echo base_url('asset/');?><!--img/close.png" alt="">-->
<!--                <div class="wdy-page-right-movie-desc">-->
<!--                    <p>《天使之路》 卢麒烨T台秀意外摔倒</p>-->
<!--                    <span>播放：89万</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="wdy-page-right-movie">-->
<!--                <img src="--><?php //echo base_url('asset/');?><!--img/close.png" alt="">-->
<!--                <div class="wdy-page-right-movie-desc">-->
<!--                    <p>《天使之路》 卢麒烨T台秀意外摔倒</p>-->
<!--                    <span>播放：89万</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="wdy-page-right-movie">-->
<!--                <img src="--><?php //echo base_url('asset/');?><!--img/close.png" alt="">-->
<!--                <div class="wdy-page-right-movie-desc">-->
<!--                    <p>《天使之路》 卢麒烨T台秀意外摔倒</p>-->
<!--                    <span>播放：89万</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="wdy-page-right-movie">-->
<!--                <img src="--><?php //echo base_url('asset/');?><!--img/close.png" alt="">-->
<!--                <div class="wdy-page-right-movie-desc">-->
<!--                    <p>《天使之路》 卢麒烨T台秀意外摔倒</p>-->
<!--                    <span>播放：89万</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="wdy-page-right-movie">-->
<!--                <img src="--><?php //echo base_url('asset/');?><!--img/close.png" alt="">-->
<!--                <div class="wdy-page-right-movie-desc">-->
<!--                    <p>《天使之路》 卢麒烨T台秀意外摔倒</p>-->
<!--                    <span>播放：89万</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
</body>

</html>