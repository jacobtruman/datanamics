<?php

echo "<map name='FPMap0'>\n";
echo "<area href='".$rctype.$rtr."' target='".$target."' shape='poly' coords='363, 166, 364, 125, 391, 108, 411, 108, 437, 125, 436, 165, 417, 181, 383, 181'>\n";
//echo"<area href='/support_web/ping.php?theaddr=65.162.123.45' target='_blank' shape='poly' coords='363, 166, 364, 125, 391, 108, 411, 108, 437, 125, 436, 165, 417, 181, 383, 181'>\n";
echo "<area href='/support_web/LANSupportProps/MoapaValley/Moapa2003Server.RDP' shape='rect' coords='825, 322, 882, 427'>\n";
	echo "<area href='#' shape='rect' coords='718, 336, 767, 400' alt='Need to VNC from Server for access'>\n";
	echo"<area href='#' shape='rect' coords='617, 336, 667, 401' alt='Need to VNC from Server for access'>\n";
	echo"<area href='#' shape='rect' coords='519, 333, 569, 399' alt='Need to VNC from Server for access'>\n";
	echo"<area href='#' shape='rect' coords='422, 336, 468, 397' alt='Need to VNC from Server for access'>\n";
	echo"<area href='#' shape='rect' coords='323, 335, 371, 399' alt='Need to VNC from Server for access'>\n";
	echo"<area href='#' shape='rect' coords='221, 334, 270, 398' alt='Need to VNC from Server for access'>\n";
	echo"<area href='#' shape='rect' coords='123, 332, 172, 399' alt='Need to VNC from Server for access'>\n";
	echo"<area href='#' shape='rect' coords='23, 331, 73, 400' alt='Need to VNC from Server for access'>\n";
	echo"<area href='#' shape='rect' coords='675, 12, 757, 77' alt='Not Supported by Datanamics'>\n";
	echo"<area href='#' shape='rect' coords='780, 94, 914, 141' alt='Not Supported by Datanamics'>\n";
	echo"<area href='#' shape='rect' coords='606, 592, 651, 658' alt='Not Supported by Datanamics'>\n";
	echo"<area href='#' shape='rect' coords='715, 593, 779, 669' alt='Not Supported by Datanamics'>\n";
	echo"<area href='#' shape='rect' coords='838, 592, 908, 674' alt='Not Supported by Datanamics'>\n";
/*
** Examples:
To add a  telnet link (Switch, Router, etc):
	echo "<area coords='**,**,**,**' href='telnet:".$$redir." *port*'>\n";

To add a web interface link (WAP, Paradyne, etc):
	echo "<area coords='**,**,**,**' href='http://*login*:*password*@".$$redir.":*port*' target='_blank'>\n";

To add a ping link (Unsupported equipment, equipment with public address for first level page, etc):
	echo "<area coords='**,**,**,**' href='".$ping."*IP address*' target='_blank'>\n";

coords for larger default router
	363, 162, 364, 121, 391, 104, 411, 104, 437, 121, 436, 161, 417, 177, 383, 177

IP3 Connection string:
	https://".$gateway."/login.cgi?username=".$lgn."&password=".$pswd."
	
SolutionIP Connection string:
	https://".$lgn.":".$pswd."@".$gateway."/admin/
*/
echo "</map>\n";
?>