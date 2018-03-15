window.onload = function () {
    function getBrowser() {
        var ua = window.navigator.userAgent;
        var isIE = userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1 && !isOpera;
        // var isIE = !!window.ActiveXObject || "ActiveXObject" in window;
        var isFirefox = ua.indexOf("Firefox") != -1;
        var isOpera = window.opr != undefined;
        var isChrome = ua.indexOf("Chrome") && window.chrome;
        var isSafari = ua.indexOf("Safari") != -1 && ua.indexOf("Version") != -1;
        var isEdge = ua.indexOf("Windows NT 6.1; Trident/7.0;\") ") != -1 && !isIE;

        if (isIE) {
            return "IE";
        } else if (isFirefox) {
            return "Firefox";
        } else if (isOpera) {
            return "Opera";
        } else if (isChrome) {
            return "Chrome";
        } else if (isSafari) {
            return "Safari";
        } else if (isEdge) {
            return "Edge";
        }
        else {
            return "Unkown";
        }
    }

    var linkNode = document.createElement("link"), scriptNode = document.createElement("script");
    linkNode.setAttribute("rel", "stylesheet");
    linkNode.setAttribute("type", "text/css");
    scriptNode.setAttribute("type", "text/javascript");


    if (getBrowser() == "IE") {
        // var reIE = new RegExp("MSIE (\\d+\\.\\d+);");
        // reIE.test(userAgent);
        // var fIEVersion = parseFloat(RegExp["$1"]);
        linkNode.setAttribute("href", "../../css/templet/wyy2.css");
        document.getElementById('background_img').innerHTML = "";
        $("#music_name").css("color", "black");
        $("#lyric").css("color", "black");
        // $("#background_img").css("opacity", "0.7");
    } else if (getBrowser() == "Firefox") {
        linkNode.setAttribute("href", "../../css/templet/wyy.css");
    } else if (getBrowser() == "Opera") {
        linkNode.setAttribute("href", "../../css/templet/wyy.css");
    } else if (getBrowser() == "Chrome") {
        linkNode.setAttribute("href", "../../css/templet/wyy.css");
    } else if (getBrowser() == "Safari") {
        linkNode.setAttribute("href", "../../css/templet/wyy.css");
    } else if (getBrowser() == "Edge") {
        linkNode.setAttribute("href", "../../css/templet/wyy2.css");
        document.getElementById('background_img').innerHTML = "";
        $('#background_img').html("");
    }
    else {
        linkNode.setAttribute("href", "../../css/templet/wyy2.css");
        $("#background_img").css("opacity", "0.7");
        $("#music_name").css("color", "black");
        $("#lyric").css("color", "black");
        document.getElementById('background_img').innerHTML = "";
    }
    document.head.appendChild(linkNode);
}
;


