<HEAD>

<style>
<!--
.skin0 {
position:absolute;
text-align:left;
width:200px;
border:2px solid black;
background-color:menu;
font-family:Verdana;
line-height:20px;
cursor:default;
visibility:hidden;
}
.skin1 {
cursor:default;
font:menutext;
position:absolute;
text-align:left;
font-family: Arial, Helvetica, sans-serif;
font-size: 8pt;
width:120px;
background-color:menu;
border:1 solid buttonface;
visibility:hidden;
border:2 outset buttonhighlight;
}
.menuitems {
padding-left:15px;
padding-right:10px;
}
-->
</style>

<SCRIPT LANGUAGE="JavaScript1.2">

var menuskin = "skin1"; // skin0, or skin1
var display_url = 0; // Show URLs in status bar?
function showmenuie5() {
var rightedge = document.body.clientWidth-event.clientX;
var bottomedge = document.body.clientHeight-event.clientY;
if (rightedge < ie5menu.offsetWidth)
ie5menu.style.left = document.body.scrollLeft + event.clientX - ie5menu.offsetWidth;
else
ie5menu.style.left = document.body.scrollLeft + event.clientX;
if (bottomedge < ie5menu.offsetHeight)
ie5menu.style.top = document.body.scrollTop + event.clientY - ie5menu.offsetHeight;
else
ie5menu.style.top = document.body.scrollTop + event.clientY;
ie5menu.style.visibility = "visible";
return false;
}
function hidemenuie5() {
ie5menu.style.visibility = "hidden";
}
function highlightie5() {
if (event.srcElement.className == "menuitems") {
event.srcElement.style.backgroundColor = "highlight";
event.srcElement.style.color = "white";
if (display_url)
window.status = event.srcElement.url;
   }
}
function lowlightie5() {
if (event.srcElement.className == "menuitems") {
event.srcElement.style.backgroundColor = "";
event.srcElement.style.color = "black";
window.status = "";
   }
}
function jumptoie5() {
if (event.srcElement.className == "menuitems") {
if (event.srcElement.getAttribute("target") != null)
window.open(event.srcElement.url, event.srcElement.getAttribute("target"));
else
window.location = event.srcElement.url;
   }
}
//  End -->
</script>
</HEAD>

<script language="JavaScript">
var sURL = unescape(window.location.pathname);
function refresh(){
    window.location.href = sURL;
}
</script>

<BODY>

<div id="ie5menu" class="skin0" onMouseover="highlightie5()" onMouseout="lowlightie5()" onClick="jumptoie5();">
<!--<div class="menuitems" url="javascript:history.back();">Go Back</div>
<div class="menuitems" url="javascript:refresh();">Refresh</div>
<div class="menuitems" url="http://javascript.internet.com">Go Home</div>
<hr>
<div class="menuitems" url="http://forum.javascriptsource.com">JS Forum</div>
<div class="menuitems" url="http://faq.javascriptsource.com">Site FAQs</div>
<hr>
<div class="menuitems" url="http://javascript.internet.com/link-us.html">Link to Us</div>
<div class="menuitems" url="http://javascript.internet.com/feedback.html">Contact Us</div>-->
<div class="menuitems" url="telnet:<?php echo $gateway;?>">Gateway Telnet</div>
</div>
<script language="JavaScript1.2">
if (document.all && window.print) {
ie5menu.className = menuskin;
document.oncontextmenu = showmenuie5;
document.body.onclick = hidemenuie5;
}
</script>