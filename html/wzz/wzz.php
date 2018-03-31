<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>中南大学微产品工作室</title>
    <script src="../../js/templet/jquery-1.11.3.min.js"></script>
    <script src="../../js/define.js"></script>
    <script>
        thisID = '<?php echo $_GET['id'] ?>';
        $.ajax({
            url : basicUrl + '/common/page/preview/'+ parseInt(thisID),
            async : false,
            cache : true,
            success:function (result) {
                str =  result.info.data_info.substring(0,result.info.data_info.length);
                json = JSON.parse(str);
                window.location.href = json.file;
            }
        })
    </script>

</head>

<body>

</body>
</html>