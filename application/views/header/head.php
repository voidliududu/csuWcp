<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-29
 * Time: 下午5:04
 */
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
<div id="adsense" style="position:absolute;background-color:transparent;display:none"></div>