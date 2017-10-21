<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>微产品工作室后台登录</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="<?php echo base_url('asset/');?>css/indexCSS.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('asset/');?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="font-family: 'Microsoft YaHei UI', sans-serif;width: 100%;background-color: #eaeef7" >

<!--顶栏-->
<div id="headline">
    <div id="administratorImg">
        <img src="<?php echo base_url('asset/');?>img/logo.png">
    </div>
</div>

<div id="main" class="login">
    <!--左侧栏-->
    <div id="left_line">
        <!--列表-->
        <div id="list">
            <ul class="main_ul active">
                <li>登录</li>
            </ul>
        </div>
        <!--底下附属信息-->
        <div id="some_info">
            <a id="some_word">
                底下附属信息
            </a>
        </div>
    </div>

    <!--主体-->
    <div id="main_part">
        <div id="login_box">
            <div class="login_title"><span>登&nbsp;&nbsp;录</span></div>
<!--            <form id="loginForm" method="post" action="">-->
            <?php echo form_open('Admin/login');?>
                <div class="login_line">
                    <span>帐号</span>
                    <input type="text" class="form-control" id="email" name="account">
                </div>
                <div class="login_line">
                    <span>密码</span>
                    <input type="password" class="form-control" id="pwd" name="password">
                    <span class="glyphicon glyphicon-eye-open" id="seePwd"></span>
                </div>
                <input type="submit" id="loginBtn" value="登&nbsp;&nbsp;录"><br/>
            </form>
<!--            <button type="submit" id="loginBtn">登&nbsp;&nbsp;录</button><br/>-->
        </div>
        <div class="login_background">
            <img src="<?php echo base_url('asset/');?>img/background.png">
        </div>
    </div>
    <?php if($flag == false)
        echo("<script>alert('帐号或密码错误')</script>");?>


</div>

</body>
</html>