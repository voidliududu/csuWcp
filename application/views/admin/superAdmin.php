
<?php
//    if(!$this->session->userdata('username')){
//        show_404();
//        exit();
//    }
?>
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
    <!--<link rel="stylesheet" href="css/site.css">-->
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" rel="script" src="<?php echo base_url('asset/');?>js/jquery-1.10.1.js"></script>
    <script type="text/javascript" rel="script" src="<?php echo base_url('asset/');?>js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" rel="script" src="<?php echo base_url('asset/');?>/js/define.js"></script>
    <script type="text/javascript" rel="script" src="<?php echo base_url('asset/');?>js/adminJS.js"></script>
    <script type="text/javascript" rel="script" src="<?php echo base_url('asset/');?>js/superAdminJS_display.js"></script>

</head>
<body style="font-family: 'Microsoft YaHei UI', sans-serif;width: 100%;background-color: #eaeef7" >


<!--顶栏-->
    <div id="headline">
        <div id="administratorImg">
            <img src="<?php echo base_url('asset/');?>img/logo.png">
        </div>
        <div id="adminInfo">
            <p id="user_name">你好，超级管理员</p>
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
                    <li id="we_studio">微工作室
                        <span class="glyphicon glyphicon-chevron-up"></span>
                        <span class="glyphicon glyphicon-chevron-down" style="display: none"></span>
                    </li>
                </ul>
                <ul class="sub_ul" id="studio_toggle">
                    <li class="sub_ul_li" id="all_studio">全部工作室</li>
                    <li class="sub_ul_li" id="add_studio">添加工作室</li>
                </ul>
                <ul class="main_ul">
                    <li id="we_product">微产品
                    <span class="glyphicon glyphicon-chevron-up"></span>
                    <span class="glyphicon glyphicon-chevron-down" style="display: none"></span>
                </ul>
                <div id="product_toggle">
                    <ul class="sub_ul">
                        <li class="sub_ul_li" id="classify">分类
                        <span class="glyphicon glyphicon-chevron-up"></span>
                        <span class="glyphicon glyphicon-chevron-down" style="display: none"></span>
                    </ul>
                    <ul class="three_ul" id="classify_toggle">
                        <li class="sub_ul_li" id="all_product" name="0">全部</li>
                        <li class="sub_ul_li" id="we_movie" name="1">微电影</li>
                        <li class="sub_ul_li" id="we_app" name="3">app</li>
                        <li class="sub_ul_li" id="we_cartoon" name="5">微漫画</li>
                        <li class="sub_ul_li" id="we_mv" name="2">微音乐</li>
                        <li class="sub_ul_li" id="we_magazine" name="4">微杂志</li>
                        <li class="sub_ul_li" id="we_activity" name="6">微活动</li>
                        <!--<li class="sub_ul_li" id="we_vote">微投票</li>-->
                    </ul>
                    <ul class="sub_ul">
                        <li class="sub_ul_li" id="operation">操作
                        <span class="glyphicon glyphicon-chevron-up"></span>
                        <span class="glyphicon glyphicon-chevron-down" style="display: none"></span>
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
                    <span>微产品工作室超级管理员后台</span>
                </div>
                <div class="background">
                    <img src="<?php echo base_url('asset/');?>img/background.png">
                </div>
            </div>

            <!--微工作室-->

            <!--全部工作室-->
            <div id="all_studio_page" style="display: none">

            </div>

            <!--某个工作室的具体信息-->
            <div class="studio_info_page" id="studio1_info" style="display: none">
                <header class="page_head"><span class="glyphicon glyphicon-file"></span>studio1 </header>
                <!--工作室信息-->
                <div class="info_show">
                    <div class="info_text">工作室名:小弟弟工作室</div>
                    <div class="info_text">代表图片:<img src="<?php echo base_url('asset/');?>img/profile.png" class="info_img"> </div>
                    <div class="info_text">工作室介绍:</div>
                    <div class="studio_intro" id="studio_intro">
                        <p>蚂蚁工作室成立于2001年5月，是由一群追求创业的爱好者共同发起成立的。成立之初，其宗旨定位为“求实，创新，开拓”，
                            社团业务主要有广告策划和中介代理。在广告策划方面，多通过报纸、海报、媒体等进行全方位的广告宣传。工作室分工方面，
                            社团由室长负责工作室的总体规划，下设创作组、活动组、外联组和财务组四个部门，各部门相互发展，相互交流，
                            共同探索前进之路。工作室一直注重绘画技巧和创意的融合与运用，之后逐渐以制作校园海报为工作重心，
                            并且在03年工作室引进了商业海报制作技术，力求使校园海报的创作能够精益求精，以期丰富同学们的精神文化生活
                        </p>
                    </div>
                    <div class="info_text">所属部门:升华网</div>
                </div>
            </div>

            <!--添加工作室-->
            <div id="add_studio_page" style="display: none">
                <header class="page_head add_studio"><span class="glyphicon glyphicon-plus"></span>添加工作室 </header>
                <header class="page_head change_studio"><span class="glyphicon glyphicon-edit"></span>修改工作室信息 </header>
                <!--添加工作室内容填写-->
                <div id="studio_add" class="cate_add add">
                    <form action="" method="post" enctype="MULTIPART/FORM-DATA">
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
                        <input type="submit" value="确认" id="studio_add_check" class="check_add"/>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>



            <!--微产品-->

            <!--全部微产品-->
            <div id="all_product_page" style="display: none">
                <!--微产品列表-->

            </div>

            <!--某个微产品具体信息-->
            <div class="product_info_page" id="product1_info" style="display: none">
                <header class="page_head"><span class="glyphicon glyphicon-file"></span>product1 </header>
                <!--微产品信息-->
                <div class="info_show">
                    <div class="info_text">产品:小弟弟</div>
                    <div class="info_text">代表图片:<img src="<?php echo base_url('asset/');?>img/profile.png" class="info_img"> </div>
                    <div class="info_text">产品介绍:</div>
                    <div class="product_intro" id="product_intro">
                        <p>蚂蚁工作室成立于2001年5月，是由一群追求创业的爱好者共同发起成立的。成立之初，其宗旨定位为“求实，创新，开拓”，
                            社团业务主要有广告策划和中介代理。在广告策划方面，多通过报纸、海报、媒体等进行全方位的广告宣传。工作室分工方面，
                            社团由室长负责工作室的总体规划，下设创作组、活动组、外联组和财务组四个部门，各部门相互发展，相互交流，
                            共同探索前进之路。工作室一直注重绘画技巧和创意的融合与运用，之后逐渐以制作校园海报为工作重心，
                            并且在03年工作室引进了商业海报制作技术，力求使校园海报的创作能够精益求精，以期丰富同学们的精神文化生活
                        </p>
                    </div>
                    <div class="info_text">来源:网络</div>
                    <div class="info_text">所属分类:微电影</div>
                    <div class="info_text">创建时间:2017.7.22</div>
                    <div class="info_text">点击量:666</div>
                </div>
            </div>

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
                    <div id="page_main_all"></div>

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
<!--                    <br><br><br>-->
<!--                    <button id="product_add_check" class="check_add">确认添加</button>-->
<!--                    <button id="product_change_check" class="check_add" style="display: none">确认修改</button>-->
<!--                    <div class="clearfix"></div>-->
                </div>
            </div>
        </div>
    </div>

<script src="<?php echo base_url('asset/');?>js/require.js"></script>
<script>
    require.config({
        baseUrl: 'js',
        // To get timely, correct error triggers in IE, force a define/shim exports check.
        enforceDefine: true
    });
    require(['<?php echo base_url('asset/');?>js/pikaday.js'], function(Pikaday)
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