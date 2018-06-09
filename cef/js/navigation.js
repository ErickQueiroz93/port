function kproxy_setCookie(cname, cvalue, cpath) {
    document.cookie = cname + "=" + cvalue + ";path="+cpath;
}

function kproxy_getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i].trim();
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
} 

var kproxy_hiddenBar = false;
var kproxy_timeOutHandler = null;

function kproxy_showBar() {
	kproxy_hiddenBar = false;
	moveKproxyNavbar(false);
	kproxy_setCookie('KPisNavBarHidden', false, '/');
}

function kproxy_hideBar() {
	kproxy_hiddenBar = true;
	moveKproxyNavbar(false);
	kproxy_setCookie('KPisNavBarHidden', true, '/');
}

function moveKproxyNavbar(instant) {
	
	var kProxyNavbar = document.getElementById('kproxy_float_navigation_container'),
		kProxyNavbar_showbutton = document.getElementById('kproxy_float_extension_show_button'),
		kProxyWinWidth = Math.min(document.documentElement.clientWidth, window.innerWidth || screen.width) + 50;
		
	var offset_body = parseInt(kproxyGetCss( document.getElementsByTagName('body')[0], 'margin-left' ) ) + parseInt(kproxyGetCss( document.getElementsByTagName('body')[0], 'padding-left' ) );
	
	var kproxNavbar_start_point = kproxy_hiddenBar ? offset_body: -kProxyWinWidth,
		kproxNavbar_final_point = kproxNavbar_start_point + (kproxy_hiddenBar ? (kProxyWinWidth + offset_body)  : offset_body),
		kproxyShowBtn_start_point = kproxy_hiddenBar ? -(40+offset_body) : -offset_body,
		kproxyShowBtn_final_point = kproxyShowBtn_start_point + (kproxy_hiddenBar ? offset_body : (40+offset_body) ) ,
	    i = 1,
	    count = 20,
	    delay = 20,
	    looped = false;
	
	function loop() {
		if ( i >= count ) { i = 1; if (!looped) loop_sb(); looped = true; return; }
	    i += 1;
	    kProxyNavbar.style.left = (kproxNavbar_start_point - ( kproxNavbar_final_point * i / count ) ) + 'px';
	    
	    if (kproxy_timeOutHandler != null) clearTimeout( kproxy_timeOutHandler );
	    kproxy_timeOutHandler = window.setTimeout( loop, delay );
	}
	
	function loop_sb() {
	    if ( i >= count ) { i = 1; if (!looped) loop(); looped = true; return; }
	    i += 1;
	    kProxyNavbar_showbutton.style.left =  kproxyShowBtn_start_point - ( kproxyShowBtn_final_point * i / count )  + 'px';
	    
	    if (kproxy_timeOutHandler != null) clearTimeout( kproxy_timeOutHandler );
	    kproxy_timeOutHandler = window.setTimeout( loop_sb, delay );
	    
	}
		
	if (instant) { 
		kProxyNavbar.style.left = kproxNavbar_start_point - kproxNavbar_final_point + 'px';
		kProxyNavbar_showbutton.style.left = kproxyShowBtn_start_point - kproxyShowBtn_final_point + 'px';

	} else { kproxy_hiddenBar ? loop(): loop_sb(); }
}

 
 function kproxyGetCss( element, property ) {
	var result = window.getComputedStyle( element, null ) != null ? window.getComputedStyle( element, null ).getPropertyValue( property ) : ""; 
    return result;
 }
 
 window.onresize = (function(){
	   moveKproxyNavbar(true);
 });

 window.onload = function(){
	kproxy_hiddenBar = kproxy_getCookie('KPisNavBarHidden') == 'true';
 	moveKproxyNavbar(true);
 };
 

