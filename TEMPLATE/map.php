<?php
include ($root.'/support_web/components/gLinkGen.php');

echo "<map name='FPMap0'>\n";
echo "<area href='".$rctype.$rtr."' target='".$target."' shape='poly' coords='301,43,300,14,316,1,336,1,353,12,355,40,337,53,319,53'>\n";
echo "<area href='".$cStr."' target='_blank' shape='rect' coords='360,13,500,46'>\n";
if ($lvl == '1'){

}
if ($lvl == '2'){

	$gtway = $$redir;
	$which = 'link'; // Link type (map or link)
	include ($root.'/support_web/forms/getEqu.php');
	include ($root."/support_web/forms/mkmylinks.php");

}

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