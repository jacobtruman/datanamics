<BR>
<BR>
<font face='verdana' size='1'>
<?php

if (isset($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);
	$cmd = $vars['cmd'];
}

if (!isset($cmd)){
	$cmd = 'sho int status';
}

//12.118.157.122
//12.119.90.210
$gtway = '12.127.24.94'; // Gateway address
$lgn = 'datadmin'; // Login Name
$pswd = 'zinck2240'; // Password

echo "Gateway<BR><a href='telnet:".$gtway."'>".$gtway."</a><BR><BR>\n";

//cisco switches
echo "Cisco Switches<BR>\n";
$nsw = 3; // Number of switches
$bport = 23230; // Beginning Port Number
for ($i = 0; $i < $nsw; $i++){
$c1 = $i * 18;
$c2 = 18 + ($i * 18);
$port = $bport + $i;
$n = $i + 5;
$ip = '172.27.172.'.$n;
echo "<a href='telnet:".$gtway." ".$port."'>".$ip."</a>\n";
echo "<iframe src='telnet.php?ip=".$gtway."&rport=".$port."&command=".$cmd."' width='100%' height='500'></iframe>\n";
echo "<BR>\n";
}

?>
</font>