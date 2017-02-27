<font face='arial' size='1'>
ip=[gateway ip]&lgn=[login]&pswd=[password]&num=[number of waps]&port=[first port]&dip=[device ip]
</font>
<BR>
<?php

if (isset($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);
	$ip = $vars['ip'];
	$lgn = $vars['lgn'];
	$pswd = $vars['pswd'];
	$num = $vars['num'];
	$port = $vars['port'];
	$dip = $vars['dip'];
}

$root = 'D:/inetpub/support';
include($root.'/support_web/components/dbcon.php');

for ($i = 0; $i < $num; $i++){
echo "<a href='http://".$lgn.":".$pswd."@".$ip.":".$port."' target='_blank'>
	".$dip."
</a>
<iframe src='http://".$lgn.":".$pswd."@".$ip.":".$port."/ap_network-if_802-11.shtml' width='100%' height='500'></iframe>
<BR>\n";
$port++;
$dip++;
}

?>