<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>微产品工作室后台</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="<?php echo base_url('asset/');?>css/indexCSS.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('asset/');?>css/bootstrap.min.css" rel="stylesheet">
    <!--时间选择器-->
    <link rel="stylesheet" href="<?php echo base_url('asset/');?>css/pikaday.css">
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" rel="script" src="<?php echo base_url('asset/');?>js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" rel="script" src="<?php echo base_url('asset/');?>js/define.js"></script>
    <script type="text/javascript" rel="script" src="<?php echo base_url('asset/');?>js/adminJS.js"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/');?>js/adminJS_display.js"></script>

</head>
<body style="font-family: 'Microsoft YaHei UI', sans-serif;width: 100%;background-color: #eaeef7" >
<!--顶栏-->
<div id="headline">
    <div id="administratorImg">
        <img src="<?php echo base_url('asset/');?>img/logo.png">
    </div>
    <div id="adminInfo">
        <p>你好，XXX工作室</p>
        <p class="quit_word">退出</p>
    </div>
</div>


<div id="main">
    <!--左侧栏-->
    <div id="left_line">
        <!--列表-->
        <div id="list">
            <ul class="main_ul">
                <li id="index" class="active">首页</li>
                <li id="we_my_studio">我的工作室
                </li>
            </ul>
            <ul class="main_ul">
                <li id="we_product">我的微产品
                    <span class="glyphicon glyphicon-chevron-down"></span>
                    <span class="glyphicon glyphicon-chevron-up" style="display: none"></span>
            </ul>
            <div id="product_toggle">
                <ul class="sub_ul">
                    <li class="sub_ul_li" id="classify">分类
                        <span class="glyphicon glyphicon-chevron-down"></span>
                        <span class="glyphicon glyphicon-chevron-up" style="display: none"></span>
                </ul>
                <ul class="three_ul" id="classify_toggle">
                    <li class="sub_ul_li" id="all_product">全部</li>
                    <li class="sub_ul_li" id="we_movie">微电影</li>
                    <li class="sub_ul_li" id="we_app">app</li>
                    <li class="sub_ul_li" id="we_cartoon">微漫画</li>
                    <li class="sub_ul_li" id="we_mv">微音乐</li>
                    <li class="sub_ul_li" id="we_magazine">微杂志</li>
                    <li class="sub_ul_li" id="we_activity">微活动</li>
                    <!--<li class="sub_ul_li" id="we_vote">微投票</li>-->
                </ul>
                <ul class="sub_ul">
                    <li class="sub_ul_li" id="operation">操作
                        <span class="glyphicon glyphicon-chevron-down"></span>
                        <span class="glyphicon glyphicon-chevron-up" style="display: none"></span>
                </ul>
                <ul class="three_ul" id="operation_toggle">
                    <li class="sub_ul_li" id="add_product">添加产品</li>
                </ul>
            </div>
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
        <!--首页-->
        <div id="index_page">
            <div class="index_txt">
                <span>微产品工作室管理员后台</span>
            </div>
            <div class="background">
                <img src="<?php echo base_url('asset/');?>img/background.png">
            </div>
        </div>

        <!--添加工作室-->
        <div id="add_studio_page" style="display: none">
            <header class="page_head change_studio"><span class="glyphicon glyphicon-edit"></span>修改工作室信息 </header>
            <!--添加工作室内容填写-->
            <div id="studio_add" class="cate_add add">
                <div id="studio_add_main">
                    <div class="add_text">工作室名:<span class="glyphicon glyphicon-pencil"></span>
                        <input placeholder="请输入工作室名" class="add_input"/>
                    </div>
                    <div class="add_text">所属部门:<span class="glyphicon glyphicon-pushpin"></span>
                        <input placeholder="请输入所属部门" class="add_input"/>
                    </div>
                    <div class="add_main">
                        <div class="add_text add_title"> (主要内容，最多添加10张图片、10份说明)</div>
                        <div class="add_text">图片:<span class="glyphicon glyphicon-picture add_pic"></span>
                            <span class="add_pic_tip">点击添加图片</span>
                            <img src="<?php echo base_url('asset/');?>img/profile.png" class="add_pic_pre">
                        </div>
                        <div class="add_text">工作室介绍:<span class="glyphicon glyphicon-tag"></span> </div>
                        <textarea class="add_intro"></textarea>
                        <button class="check_delete" style="float:left;display: none">删除</button>
                    </div>
                    <button id="studiobut_add" class="check_add" style="float:left;margin-left:50px">继续添加</button>
                </div>
                <br><br><br>
                <button id="studio_change_check" class="check_add" style="display: block">确认修改</button>
                <div class="clearfix"></div>
            </div>
        </div>

        <!--某个工作室的具体信息-->
        <div class="studio_info_page" id="studio1_info" style="display: none"></div>

        <!--微产品-->

        <!--全部微产品-->
        <div id="all_product_page" style="display: none">
            <!--微产品列表-->
            <header class="page_head"><span class="glyphicon glyphicon-link"></span> 全部微产品</header>
            <div id="product-list">
                <table id="product_table">
                    <tr>
                        <th style="max-width: 50px">产品ID</th>
                        <th>产品名</th>
                        <th>产品类型</th>
                        <th colspan="3">操作</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td class="pointer pro_detail">小弟弟</td>
                        
                        <td>微电影</td>
                        <td class="pointer pro_change">修改</td>
                        
                        <td class="pointer pro_delete">删除</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="pointer pro_detail">小弟弟</td>
                        
                        <td>微电影</td>
                        <td class="pointer pro_change">修改</td>
                        
                        <td class="pointer pro_delete">删除</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="pointer pro_detail">小弟弟</td>
                        
                        <td>微电影</td>
                        <td class="pointer pro_change">修改</td>
                        
                        <td class="pointer pro_delete">删除</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td class="pointer pro_detail">小弟弟</td>
                        
                        <td>微电影</td>
                        <td class="pointer pro_change">修改</td>
                        
                        <td class="pointer pro_delete">删除</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td class="pointer pro_detail">小弟弟</td>
                        
                        <td>微电影</td>
                        <td class="pointer pro_change">修改</td>
                        
                        <td class="pointer pro_delete">删除</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td class="pointer pro_detail">小弟弟</td>
                        
                        <td>微电影</td>
                        <td class="pointer pro_change">修改</td>
                        
                        <td class="pointer pro_delete">删除</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td class="pointer pro_detail">小弟弟</td>
                        
                        <td>微电影</td>
                        <td class="pointer pro_change">修改</td>
                        
                        <td class="pointer pro_delete">删除</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td class="pointer pro_detail">小弟弟</td>
                        
                        <td>微电影</td>
                        <td class="pointer pro_change">修改</td>
                        
                        <td class="pointer pro_delete">删除</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td class="pointer pro_detail">小弟弟</td>
                        
                        <td>微电影</td>
                        <td class="pointer pro_change">修改</td>
                        
                        <td class="pointer pro_delete">删除</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td class="pointer pro_detail">小弟弟</td>
                        
                        <td>微电影</td>
                        <td class="pointer pro_change">修改</td>
                        
                        <td class="pointer pro_delete">删除</td>
                    </tr>
                </table>

            </div>
            <!--分页-->
            <div class="Pagination">
                <ul class="pagination pagination-lg">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">...</a> </li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>

        <!--某个微产品具体信息-->
        <div class="product_info_page" id="product1_info" style="display: none"></div>

        <!--添加和修改微产品-->
        <div id="add_product_page" style="display: none">
            <div id="add_product_page_confirm" style="display: block">
                <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 确认添加微产品的种类 </header>
                <div class="page_confirm" id="page_confirm_act"><span class="for_middle"></span><img src="<?php echo base_url('asset/');?>/img/index/IconAct.png" class="page_confirm_img"></div>
                <div class="page_confirm" id="page_confirm_app"><span class="for_middle"></span><img src="<?php echo base_url('asset/');?>/img/index/IconAPP.png" class="page_confirm_img"></div>
                <div class="page_confirm" id="page_confirm_cartoon"><span class="for_middle"></span><img src="<?php echo base_url('asset/');?>/img/index/IconCartoon.png" class="page_confirm_img"></div>
                <br>
                <div class="page_confirm" id="page_confirm_mag"><span class="for_middle"></span><img src="<?php echo base_url('asset/');?>/img/index/IconMag.png" class="page_confirm_img"></div>
                <div class="page_confirm" id="page_confirm_movie"><span class="for_middle"></span><img src="<?php echo base_url('asset/');?>/img/index/IconMovie.png" class="page_confirm_img"></div>
                <div class="page_confirm" id="page_confirm_music"><span class="for_middle"></span><img src="<?php echo base_url('asset/');?>/img/index/IconMusic.png" class="page_confirm_img"></div>
            </div>

            <div id="add_product_page_main" style="display: none">
                <div id="page_main_act" style="display: none">
                    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微产品 </header>
                    <header class="page_head change_product"><span class="glyphicon glyphicon-edit"></span> 修改微产品信息 </header>
                    <!--添加微产品内容填写-->
                    <div class="cate_add add">
                        <div class="add_text">活动名:<span class="glyphicon glyphicon-pencil"></span>
                            <input placeholder="请输入微产品名" class="add_input"/>
                        </div>
                        <div class="add_text">&nbsp来 源 :<span class="glyphicon glyphicon-pushpin"></span>
                            <input placeholder="请输入来源" class="add_input"/>
                        </div>
                        <div class="add_main">
                            <div class="add_text add_title"> (主要内容，最多添加10张图片、10份说明)</div>
                            <div class="add_text">图片:<span class="glyphicon glyphicon-picture add_pic"></span>
                                <span class="add_pic_tip">点击添加图片</span>
                                <img src="" class="add_pic_pre" id="act_img1">
                            </div>
                            <div class="add_text">微产品介绍:<span class="glyphicon glyphicon-tag"></span> </div>
                            <textarea class="add_intro" id="act_text1"></textarea>
                            <button class="check_delete" style="float:left;display: none">删除</button>
                        </div>
                        <button id="act_add" class="check_add" style="float:left;margin-left:50px">继续添加</button>
                    </div>
                </div>
                <div id="page_main_app" style="display: none">
                    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微产品 </header>
                    <header class="page_head change_product"><span class="glyphicon glyphicon-edit"></span> 修改微产品信息 </header>
                    <!--添加微产品内容填写-->
                    <div class="cate_add add">
                        <div class="add_text"> APP 名 :<span class="glyphicon glyphicon-pencil"></span>
                            <input placeholder="请输入微产品名" class="add_input"/>
                        </div>
                        <div class="add_text">&nbsp&nbsp&nbsp来 源 :<span class="glyphicon glyphicon-pushpin"></span>
                            <input placeholder="请输入来源" class="add_input"/>
                        </div>
                        <div class="add_text"> (你可以外接网站或者直接上传APP的安装文件，如果有密码信息，请写到“文件密码里面”)</div>
                        <div class="add_text">文件网站:<span class="glyphicon glyphicon-pushpin"></span>
                            <input placeholder="请输入文件网站" class="add_input"/>
                        </div>
                        <div class="add_text">文件密码:<span class="glyphicon glyphicon-pushpin"></span>
                            <input placeholder="请输入文件密码" class="add_input"/>
                        </div>
                        <div class="add_text"> 安 装 包:<span class="glyphicon glyphicon-picture add_pic"></span>
                            <span class="add_pic_tip">点击添加安装包</span>
                            <img src="" class="add_pic_pre">
                        </div>
                        <div class="add_main">
                            <div class="add_text add_title"> (主要内容，最多添加10张图片、10份说明)</div>
                            <div class="add_text">图片:<span class="glyphicon glyphicon-picture add_pic"></span>
                                <span class="add_pic_tip">点击添加图片</span>
                                <img src="" class="add_pic_pre">
                            </div>
                            <div class="add_text">微产品介绍:<span class="glyphicon glyphicon-tag"></span> </div>
                            <textarea class="add_intro"></textarea>
                            <button class="check_delete" style="float:left;display: none">删除</button>
                        </div>
                        <button id="app_add" class="check_add" style="float:left;margin-left:50px">继续添加</button>
                    </div>
                </div>
                <div id="page_main_cartoon" style="display: none">
                    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微产品 </header>
                    <header class="page_head change_product"><span class="glyphicon glyphicon-edit"></span> 修改微产品信息 </header>
                    <!--添加微产品内容填写-->
                    <div class="cate_add add">
                        <div class="add_text"> 漫 画 名:<span class="glyphicon glyphicon-pencil"></span>
                            <input placeholder="请输入微漫画名" class="add_input"/>
                        </div>
                        <div class="add_text">&nbsp&nbsp&nbsp来 源 :<span class="glyphicon glyphicon-pushpin"></span>
                            <input placeholder="请输入来源" class="add_input"/>
                        </div>
                        <div class="add_text">漫画介绍:<span class="glyphicon glyphicon-tag"></span> </div>
                        <textarea class="add_intro"></textarea>
                        <div class="add_main">
                            <div class="add_text add_title"> (主要内容，可以添加多个图片)</div>
                            <div class="add_text">图片:<span class="glyphicon glyphicon-picture add_pic"></span>
                                <span class="add_pic_tip">点击添加图片</span>
                                <img src="" class="add_pic_pre">
                            </div>
                            <button class="check_delete" style="float:left;display: none">删除</button>
                        </div>
                        <button id="cartoon_add" class="check_add" style="float:left;margin-left:50px">继续添加</button>
                    </div>
                </div>
                <div id="page_main_mag" style="display: none">
                    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微产品 </header>
                    <header class="page_head change_product"><span class="glyphicon glyphicon-edit"></span> 修改微产品信息 </header>
                    <!--添加微产品内容填写-->
                    <div class="cate_add add">
                        <div class="add_text">杂志名:<span class="glyphicon glyphicon-pencil"></span>
                            <input placeholder="请输入微产品名" class="add_input"/>
                        </div>
                        <div class="add_text">&nbsp来 源 :<span class="glyphicon glyphicon-pushpin"></span>
                            <input placeholder="请输入来源" class="add_input"/>
                        </div>
                        <div class="add_text"> (只能上传一份PPT、WORD或PDF文件来展示你的杂志，请您将要展示的信息都显示在杂志上。)</div>
                        <div class="add_text">&nbsp文 件 :<span class="glyphicon glyphicon-picture add_pic"></span>
                            <span class="add_pic_tip">点击添加PPT、WORD、PDF文件</span>
                            <img src="" class="add_pic_pre">
                        </div>

                        <!--</div>-->

                    </div>
                </div>
                <div id="page_main_movie" style="display: none">
                    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微产品 </header>
                    <header class="page_head change_product"><span class="glyphicon glyphicon-edit"></span> 修改微产品信息 </header>
                    <!--添加微产品内容填写-->
                    <div class="cate_add add">
                        <div class="add_text"> 电影名:<span class="glyphicon glyphicon-pencil"></span>
                            <input placeholder="请输入微电影名" class="add_input"/>
                        </div>
                        <div class="add_text">&nbsp来 源 :<span class="glyphicon glyphicon-pushpin"></span>
                            <input placeholder="请输入来源" class="add_input"/>
                        </div>
                        <div class="add_text"> (你可以外接网站或者直接上传电影文件)</div>
                        <div class="add_text">电影网站:<span class="glyphicon glyphicon-pushpin"></span>
                            <input placeholder="请输入电影网站" class="add_input"/>
                        </div>
                        <div class="add_text"> 电 影 :<span class="glyphicon glyphicon-picture add_pic"></span>
                            <span class="add_pic_tip">点击添加电影</span>
                            <img src="" class="add_pic_pre">
                        </div>
                    </div>
                </div>
                <div id="page_main_music" style="display: none">
                    <header class="page_head add_product"><span class="glyphicon glyphicon-plus"></span> 添加微产品 </header>
                    <header class="page_head change_product"><span class="glyphicon glyphicon-edit"></span> 修改微产品信息 </header>
                    <!--添加微产品内容填写-->
                    <div class="cate_add add">
                        <div class="add_text"> 音乐名:<span class="glyphicon glyphicon-pencil"></span>
                            <input placeholder="请输入微音乐名" class="add_input"/>
                        </div>
                        <div class="add_text">&nbsp来 源 :<span class="glyphicon glyphicon-pushpin"></span>
                            <input placeholder="请输入来源" class="add_input"/>
                        </div>
                        <div class="add_text"> (你可以外接网站或者直接上传电影文件)</div>
                        <div class="add_text">音乐网站:<span class="glyphicon glyphicon-pushpin"></span>
                            <input placeholder="请输入音乐网站" class="add_input"/>
                        </div>
                        <div class="add_text"> 音 乐 :<span class="glyphicon glyphicon-picture add_pic"></span>
                            <span class="add_pic_tip">点击添加音乐</span>
                            <img src="" class="add_pic_pre">
                        </div>
                    </div>
                </div>
                <br><br><br>
                <button id="product_add_check" class="check_add">确认添加</button>
                <button id="product_change_check" class="check_add" style="display: none">确认修改</button>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>



</div>


<script src="<?php echo base_url('asset/');?>js/require.js"></script>
<!--时间选择器-->
<script>
    require.config({
        baseUrl: 'js',
        // To get timely, correct error triggers in IE, force a define/shim exports check.
        enforceDefine: true
    });
    require(['<?php echo base_url('asset/js/');?>pikaday.js'], function(Pikaday)
    {
        var picker = new Pikaday(
            {
                field: document.getElementById('datepicker'),
                firstDay: 1,
                minDate: new Date('2000-01-01'),
                maxDate: new Date('2020-12-31'),
                yearRange: [2000,2020]
            });
    });

</script>
</body>
</html>