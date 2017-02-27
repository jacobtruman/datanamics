<?php

if (isset($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);
	$ip = $vars['ip'];
	$lgn = $vars['lgn'];
	$pswd = $vars['pswd'];
}

$root = 'D:/inetpub/support';
include($root.'/support_web/components/dbcon.php');
$link = ado_connect( $dsn );
$order = 'rm';
$sql = "SELECT * FROM usgrmchng ORDER BY ".$order;
$res = ado_query( $link, $sql );

echo "<table border='1' bordercolor='#000000' cellpadding='0' cellspacing='0' width='85%' align='center'>\n";
while (!$res->EOF){
	$rm = $res->Fields['rm']->Value;
	$rmname = $res->Fields['rmname']->Value;
	$vlan = $res->Fields['vlan']->Value;

echo "<iframe src='http://".$lgn.":".$pswd."@".$ip."/forms/roomprocbyport.htm?WINDWEB_URL=%2Ffs%2Fforms%2Froomprocbyport.htm&wMsgClear=0&usg_room_num=".$rm."&usg_room_vlan=".$vlan."&usg_room_subnet=&usg_room_desc=".$rmname."&usg_room_state=1&room_find=error&wRoomAction=2' width='100%' height='500'></iframe>\n";
echo "<BR>\n";
	
$res->MoveNext();
}
echo "</table>\n";
ado_free_result( $res );
ado_close( $link );

?>