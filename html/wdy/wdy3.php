<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/templet/wdy3.css">
    <link href="../../css/video-js.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <script src="../../js/templet/jquery-1.11.3.min.js"></script>
    <script src="../../js/templet/wdy1js.js"></script>
    <script src="../../js/video.min.js"></script>
    <script src="../../js/define.js"></script>
    <script src="../../js/rgbaster.js"></script>
    <script src="../../js/zh-CN.js"></script>
    <script src="../../js/videojs-ie8.min.js"></script>
    <script> var thisID = '<?php echo $_GET['id'] ?>'</script>
    <script src="../../js/templet/wdyAjax.js?ver=1.1"></script>

    <title></title>
</head>
<body>
<div class="bg" id="bg"></div>
<div class="main">
    <div class="top">
        <div class="bar" id="bar"></div>
    </div>
    <div class="middle">
        <div class="mid-right">
            <video id="my-video" class="video-js" controls preload="auto"  style="height:100%;width:100%"
                   poster="m.png" data-setup="{}">
                <source src="" type="video/mp4">
                <p class="vjs-no-js"> To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a> </p>
            </video>
        </div>
        <div class="mid-left" id="description"></div>
    </div>
    <!--<div class="foot">-->
        <!--<div class="block"></div>-->
        <!--<div class="block"></div>-->
        <!--<div class="block"></div>-->
        <!--<div class="block"></div>-->
        <!--<div class="block"></div>-->
        <!--<div class="block"></div>-->
        <!--<div class="block"></div>-->
        <!--<div class="block"></div>-->
    <!--</div>-->
</div>

</body>
</html>