
<?php
$array = explode('/',$_GET);
$template = $array[2];
$id = $array[3];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>微动漫</title>
    <link href="../../css/templet/wmh.css" rel="stylesheet" type="text/css" />
    <script src="../../js/templet/jquery-1.11.3.min.js"></script>
    <script src="../../js/templet/wmhFonts.js"></script>
    <script>
        var id ="<?php echo $id ?>";
        var template = "<?php echo $template ?>";
    </script>
    <script src="../../js/templet/wmh.js"></script>
    <link media="screen and (min-device-width:300px) and (max-device-width:900px)" rel="stylesheet" href="../../css/templet/wmh2.css"/>
</head>
<body class="changbody_fontSize" id="">

<!--标题-->
<div id="header">微漫画：</div>

<!--漫画内容-->
<div id="content" >
    <!--<img src="../../img/templet/images/1.jpg">-->
    <!--<img src="../../img/templet/images/2.jpg">-->
    <!--<img src="../../img/templet/images/3.jpg">-->
    <!--<img src="../../img/templet/images/4.jpg">-->
    <!--<img src="../../img/templet/images/5.jpg">-->
    <!--<img src="../../img/templet/images/6.jpg">-->
    <!--<img src="../../img/templet/images/7.jpg">-->
    <!--<img src="../../img/templet/images/8.jpg">-->
    <!--<img src="../../img/templet/images/9.jpg">-->
    <!--<img src="../../img/templet/images/10.jpg">-->
</div>

</body>
</html>




