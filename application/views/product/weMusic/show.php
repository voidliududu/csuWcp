<?php ?>
<!--微音乐 微电影用这个div-->
<?php
/**
  * $product
  * */
?>
<div class="wdy-page" style="display: none;z-index:9">
    <img src="img/close.png" alt="" class="zz-page-close page-close">
    <div class="wdy-page-left">
        <div class="wdy-page-left-info"><?php echo $product[0]->NAME;?></div>
        <div class="wdy-page-left-screen">
            <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
                   poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                <source src="<?php echo $product[0]->MOVIE;?>" type="video/mp4">
<!--                <source src="http://vjs.zencdn.net/v/oceans.webm" type="video/webm">-->
<!--                <source src="http://vjs.zencdn.net/v/oceans.ogv" type="video/ogg">-->
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
            </video>
        </div>
        <div class="wdy-page-left-bar">
            <!--<div class="wdy-page-left-bar-button"><img src="img/share.png" alt=""><span>分享</span></div>-->
            <div class="wdy-page-left-bar-button"><img src="<?php echo base_url('asset/');?>img/collect.png" alt=""><span></span></div>
            <div class="wdy-page-left-bar-button"><img src="<?php echo base_url('asset/');?>img/good.png" alt=""><span>10000+</span></div>
        </div>
    </div>
    <div class="wdy-page-right ">
        <div class="wdy-page-right-all scroll">
            <div class="wdy-page-right-movie">
                <img src="" alt="">
                <div class="wdy-page-right-movie-desc">
                    <p>《天使之路》 卢麒烨T台秀意外摔倒</p>
                    <span>播放：89万</span>
                </div>
            </div>
            <div class="wdy-page-right-movie">
                <img src="<?php echo base_url('asset/');?>img/close.png" alt="">
                <div class="wdy-page-right-movie-desc">
                    <p>《天使之路》 卢麒烨T台秀意外摔倒</p>
                    <span>播放：89万</span>
                </div>
            </div>
            <div class="wdy-page-right-movie">
                <img src="<?php echo base_url('asset/');?>img/close.png" alt="">
                <div class="wdy-page-right-movie-desc">
                    <p>《天使之路》 卢麒烨T台秀意外摔倒</p>
                    <span>播放：89万</span>
                </div>
            </div>
            <div class="wdy-page-right-movie">
                <img src="<?php echo base_url('asset/');?>img/close.png" alt="">
                <div class="wdy-page-right-movie-desc">
                    <p>《天使之路》 卢麒烨T台秀意外摔倒</p>
                    <span>播放：89万</span>
                </div>
            </div>
            <div class="wdy-page-right-movie">
                <img src="<?php echo base_url('asset/');?>img/close.png" alt="">
                <div class="wdy-page-right-movie-desc">
                    <p>《天使之路》 卢麒烨T台秀意外摔倒</p>
                    <span>播放：89万</span>
                </div>
            </div>
            <div class="wdy-page-right-movie">
                <img src="<?php echo base_url('asset/');?>img/close.png" alt="">
                <div class="wdy-page-right-movie-desc">
                    <p>《天使之路》 卢麒烨T台秀意外摔倒</p>
                    <span>播放：89万</span>
                </div>
            </div>
            <div class="wdy-page-right-movie">
                <img src="<?php echo base_url('asset/');?>img/close.png" alt="">
                <div class="wdy-page-right-movie-desc">
                    <p>《天使之路》 卢麒烨T台秀意外摔倒</p>
                    <span>播放：89万</span>
                </div>
            </div>
        </div>
    </div>
</div>