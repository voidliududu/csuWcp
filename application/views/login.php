<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-9-21
 * Time: 下午11:07
 */
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>login</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .show-border{
            border: solid;
            border-radius: 10px;
            height:400px;
            padding:50px;
        }
        .padding{
            padding:60px;
        }
        .blank-line{
            height:17px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">中南大学微产品工作站</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container"></div>
    <div class="container">
        <div class="row padding">
            <div class="col-md-7"></div>
            <div class="col-md-5 show-border">
<!--                <form class="form-signin">-->
                <?php echo form_open("Admin/login",["class" => "form-signin"]); ?>
                <h2 class="form-signin-heading">登录</h2>
                <label for="inputEmail" class="sr-only">用户名</label>
                <input type="text" id="inputEmail" name="account" class="form-control" placeholder="用户名" required autofocus>
                <div class="blank-line"></div>
                <label for="inputPassword" class="sr-only">密码</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="密码" required>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
              </form>
            </div>

        </div>
    </div><!-- /.container -->

<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php if($flag == false) echo "<script>alert('用户名密码不匹配')</script>"; ?>
</body>
</html>
