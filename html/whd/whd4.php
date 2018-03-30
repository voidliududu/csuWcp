<div id="rside">
    <header>XXX工作室</header>
    <article>
            XXXXXXXXXXXXXXXXXXXXXXXXXXXX
        <br>
        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
    </article>
</div>
<div id="lside">
    <div id="picture">
        <img src="../../img/templet/whd2.jpg" style="border:15px solid #fff;width: 100%;">
    </div>
</div>
<footer>
    <div id="footer-div">
        <a class="colored" href="#"><img src="../../img/templet/whd_left-arrow.png" class="arrow-left"></a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a class="colored" href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">7</a>
        <a href="#">8</a>
        <a href="#">9</a>
        <a href="#">10</a>
        <a class="colored" href="#"><img src="../../img/templet/whd_right-arrow.png" class="arrow-right"></a>
    </div>
</footer>
<img id="bcground" src="../../img/templet/whd2.jpg" class="blur">
<script>
    var height=($("footer").height()-44)/2+"px";
    $("#footer-div").css("top",height);
    console.log(height);
    function aa() {
        var b_name = navigator.appName;
        var b_version = navigator.appVersion;
        var version = b_version.split(";");
        var trim_version = version[1].replace(/[ ]/g, "");
        if (b_name === "Microsoft Internet Explorer") {
            /*如果是IE6或者IE7*/
            if (trim_version === "MSIE7.0" || trim_version === "MSIE6.0") {
               var img=document.getElementById('bcground');
               img.src='';
            }
        }
    }
    aa();
</script>