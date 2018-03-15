window.onresize=function() {
    if (window.innerWidth > "1024") {
        $("#header").css({/*"background-color": "yellow",*/ "font-size": "48px"});
    }
    else{
        $("#header").css({/*"background-color": "red",*/ "font-size": "300%"});
    }
};