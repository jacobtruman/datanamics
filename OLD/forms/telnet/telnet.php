<head>
	<title>
		Telnet
	</title>
	<LINK Rel='stylesheet' Type='text/css' HREF='telnet.css'>
</head>
<body>
<?php
if (isset($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);
	$ip = $vars['ip'];
	$port = $vars['port'];
	$rport = $vars['rport'];
	$command = $vars['command'];
	$lgn = $vars['lgn'];
	$pswd = $vars['pswd'];
}else{
	$ip = $_POST['ip'];
	$port = $_POST['port'];
	$rport = $_POST['rport'];
	$command = $_POST['command'];
	$lgn = $_POST['lgn'];
	$pswd = $_POST['pswd'];
}

/*
echo "<PRE>";
print_r($_POST);
echo "</PRE>";
*/

//echo $rport."<BR>";

$cmd1 = "sho int status";

if (!isset($command)){
	$command = $cmd1;
}

if (!isset($lgn)){
	$lgn = 'datadmin';
}

if (!isset($pswd)){
	$pswd = 'zinck2240';
}
//echo $command;

# This is the difficult part, the Telnet header
$header1=chr(0xFF).chr(0xFB).chr(0x1F).chr(0xFF).chr(0xFB).
chr(0x20).chr(0xFF).chr(0xFB).chr(0x18).chr(0xFF).chr(0xFB).
chr(0x27).chr(0xFF).chr(0xFD).chr(0x01).chr(0xFF).chr(0xFB).
chr(0x03).chr(0xFF).chr(0xFD).chr(0x03).chr(0xFF).chr(0xFC).
chr(0x23).chr(0xFF).chr(0xFC).chr(0x24).chr(0xFF).chr(0xFA).
chr(0x1F).chr(0x00).chr(0x50).chr(0x00).chr(0x18).chr(0xFF).
chr(0xF0).chr(0xFF).chr(0xFA).chr(0x20).chr(0x00).chr(0x33).
chr(0x38).chr(0x34).chr(0x30).chr(0x30).chr(0x2C).chr(0x33).
chr(0x38).chr(0x34).chr(0x30).chr(0x30).chr(0xFF).chr(0xF0).
chr(0xFF).chr(0xFA).chr(0x27).chr(0x00).chr(0xFF).chr(0xF0).
chr(0xFF).chr(0xFA).chr(0x18).chr(0x00).chr(0x58).chr(0x54).
chr(0x45).chr(0x52).chr(0x4D).chr(0xFF).chr(0xF0);

$header2=chr(0xFF).chr(0xFC).chr(0x01).chr(0xFF).chr(0xFC).
chr(0x22).chr(0xFF).chr(0xFE).chr(0x05).chr(0xFF).chr(0xFC).chr(0x21);

# connecting
$fp=pfsockopen($ip,$rport);

# sending the Telnet header
fputs($fp,$header1);
sleep(1);
fputs($fp,$header2);
sleep(1);

# login
fputs($fp,$lgn."\r");
sleep(1);
fputs($fp,$pswd."\r");
sleep(1);

$command = explode("^@", $command);

fputs($fp,"ter l 0\r");
for($i = 0; $i < count($command); $i++){
	fputs($fp,$command[$i]."\r");
	sleep(1);
}
fputs($fp,"exit\r");

# we had to wait
sleep(1);

# show the output
#while (!feof($fp)) {
#$output = fgets($fp, 128)."<BR>\n";
#}
$output=fread($fp,128);
$stat=socket_get_status($fp);
$output.=fread($fp, $stat["unread_bytes"]);

# Uncomment these 3 lines to cut out the first line
#$output = explode("\n", $output);
#unset($output['0']); 
#$output = implode("\n", $output);
$default = $output;
$output = explode("\n", $output);
$ocnt = count($output);
unset($output[$ocnt-1]);
$dname = str_replace("#exit", "", rtrim($output[$ocnt-2]));
unset($output[$ocnt-2]);
for ($i = 0; $i < $ocnt; $i++){
	if (strstr($output[$i], 'Port')){
		$titlestr = $output[$i];
		unset($output[$i]);
	}elseif (!strstr($output[$i], '/')){
		unset($output[$i]);
	}
}
$output = implode("\n", $output);
echo $dname."<BR><BR>";

//$output = str_replace("\n", "<br>", $output);

$default = str_replace("\n", "<br>", $default);
include ("funky.php");

//echo $output;

$output = explode("\n", $output);
$ocnt = count($output);

$titlecnt = count($titlestr);

$num = 0;
for ($i = 0; $i < $ocnt; $i++){
$output[$i] = rtrim($output[$i]);
	$newout[$num] = $output[$i];
	$num++;
}
$output = $newout;

include("cmd.php");

fclose($fp);
?>
</body>