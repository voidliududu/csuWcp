<div id="rside">
    <header></header>
    <article> </article>
</div>
<div id="lside">
    <div id="picture">
        <img src="" style="border:15px solid #fff;width: 100%;" id="img">
    </div>
</div>
<div id="footer"></div>
<img id="bcground" src="" class="blur">
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