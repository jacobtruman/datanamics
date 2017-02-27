<BR>
<BR>
<font face='verdana' size='1'>
<?php
$gtway = '12.161.194.234'; // Gateway address
$lgn = 'datadmin'; // Login Name
$pswd = 'zinck2240'; // Password
$which = 'map'; // Link type (map or link)

echo "Gateway<BR><a href='telnet:".$gtway."'>".$gtway."</a><BR><BR>\n";

//cisco switches
$nsw = 8; // Number of switches
if ($nsw > 0){
	echo "Cisco Switches<BR>\n";
}
$bport = 23230; // Beginning Port Number
for ($i = 0; $i < $nsw; $i++){
$c1 = $i * 18;
$c2 = 18 + ($i * 18);
$port = $bport + $i;
$n = $i + 5;
$ip = '172.27.172.'.$n;
if ($which == 'map'){
	echo "&lt;area href='telnet:".$gtway." ".$port."' shape='rect' coords='0,".$c1.",168,".$c2."'&gt;\n";
}else{
	echo "<a href='telnet:".$gtway." ".$port."'>".$ip."</a>\n";
}
echo "<BR>\n";
}
echo "<BR>\n";

//cisco 1100 waps
$n1100 = 4; // Number of 1100 waps
if ($n1100 > 0){
	echo "Cisco 1100 WAPs<BR>\n";
}
$bport = 23240; // Beginning Port Number
for ($i = 0; $i < $n1100; $i++){
$c1 = $i * 30;
$c2 = 30 + ($i * 30);
$port = $bport + $i;
$n = $i + 71;
$ip = '12.41.221.'.$n;
if ($which == 'map'){
	echo "&lt;area href='http://".$lgn.":".$pswd."@".$gtway.":".$port."' target='_blank' shape='rect' coords='169,".$c1.",209,".$c2."'&gt;\n";
}else{
	echo "<a href='http://".$lgn.":".$pswd."@".$gtway.":".$port."' target='_blank'>".$ip."</a>\n";
}
echo "<BR>\n";
}
echo "<BR>\n";

//cisco 1200 waps
$n1200 = 6; // Number of 1200 waps
if ($n1200 > 0){
	echo "Cisco 1200 WAPs<BR>\n";
}
$bport = 23270; // Beginning Port Number
for ($i = 0; $i < $n1200; $i++){
$c1 = $i * 34;
$c2 = 34 + ($i * 34);
$port = $bport + $i;
$n = $i + 21;
$ip = '172.27.172.'.$n;
if ($which == 'map'){
	echo "&lt;area href='http://".$lgn.":".$pswd."@".$gtway.":".$port."' shape='rect' target='_blank' coords='210,".$c1.",240,".$c2."'&gt;\n";
}else{
	echo "<a href='http://".$lgn.":".$pswd."@".$gtway.":".$port."' target='_blank'>".$ip."</a>\n";
}
echo "<BR>\n";
}


//netopia waps
$ntw = 0; // Number of netopia waps
if ($ntw > 0){
	echo "Netopia WAPs<BR>\n";
}
$bport = 23232; // Beginning Port Number
for ($i = 0; $i < $ntw; $i++){
$c1 = 39 + $i * 43;
$c2 = 20 + ($i * 43);
$c3 = 11 + ($i * 43);
$c4 = 0 + ($i * 43);
$c5 = 11 + ($i * 43);
$c6 = 21 + ($i * 43);
$port = $bport + $i;
$n = $i + 19;
$ip = '172.27.172.'.$n;
if ($which == 'map'){
	echo "&lt;area href='telnet:".$gtway.":".$port."' shape='poly' coords='258, ".$c1.", 227, ".$c2.", 227, ".$c3.", 270, ".$c4.", 301, ".$c5.", 301, ".$c6."'&gt;\n";
}else{
	echo "<a href='telnet:".$gtway.":".$port."'>".$ip."</a>\n";
}
echo "<BR>\n";
}
echo "<BR>\n";

?>
</font>