<BR>
<BR>
<font face='verdana' size='1'>
<?php

if (isset($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);
	$cmd = $vars['cmd'];
}

if (!isset($cmd)){
	$cmd = 'sho ver | include MAC';
}

$gtway = '66.243.46.242'; // Gateway address
$lgn = 'datadmin'; // Login Name
$pswd = 'zinck2240'; // Password

echo "Gateway<BR><a href='telnet:".$gtway."'>".$gtway."</a><BR><BR>\n";

//cisco switches
echo "Cisco Switches<BR>\n";
$nsw = 1; // Number of switches
$bport = 23230; // Beginning Port Number
for ($i = 0; $i < $nsw; $i++){
$c1 = $i * 18;
$c2 = 18 + ($i * 18);
$port = $bport + $i;
$n = $i + 88;
$ip = '172.27.172.'.$n;
$dnmoff = $i + 84;
$d_name = "SFOFH-MDF-".$dnmoff;
//echo "<a href='../telnettest.php?ip=".$gtway."&rport=".$port."&command=cmd2' target='_blank'>".$ip."</a>\n";
echo "<a href='telnet:".$gtway." ".$port."'>".$d_name." ".$ip."</a>\n";
echo "<iframe src='telnet3.php?ip=".$gtway."&rport=".$port."&command=".$cmd."&cip=".$ip."&d_name=".$d_name."' width='100%' height='500'></iframe>\n";
echo "<BR>\n";
}

?>
</font>