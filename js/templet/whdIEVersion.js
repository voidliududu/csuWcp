var DEFAULT_VERSION = "8.0"; 
var ua = navigator.userAgent.toLowerCase(); 
var isIE = ua.indexOf("msie")>-1; 
var safariVersion; 
if(isIE){ 
    safariVersion =  ua.match(/msie ([\d.]+)/)[1]; 
    if(safariVersion <= DEFAULT_VERSION ){ 
			var box = document.getElementById("main");  
			box.parentNode.removeChild(box); 
    }
}