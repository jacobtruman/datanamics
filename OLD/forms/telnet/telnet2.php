<head>
	<title>
		Telnet
	</title>
	<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/telnet.css'>
</head>
<body>
<?php
if (isset($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);
	$ip = $vars['ip'];
	$sip = $vars['sip'];
	$port = $vars['port'];
	$rport = $vars['rport'];
	$command = $vars['command'];
}

$cmd1 = "show interface dsl ".$port." status\r";
$cmd2 = "sho cdp ne\r";
$cmd3 = "sho cdp ne det\r";

$command = $$command;

if (!isset($command)){
	$command = $cmd1;
}

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
fputs($fp,"datadmin\r");
sleep(1);
fputs($fp,"zinck2240\r");
sleep(1);


//fputs($fp,"config t\r");
//fputs($fp,"int fa0/10\r");
//fputs($fp,"speed auto\r");
//fputs($fp,"exit\r");
//fputs($fp,"exit\r");


//fputs($fp,$command);
fputs($fp,$sip."\r");
sleep(1);
fputs($fp,"datadmin\r");
sleep(1);
fputs($fp,"zinck2240\r");
sleep(1);
fputs($fp,"priv\r");
sleep(1);
fputs($fp,"zinck2240\r");
sleep(1);
fputs($fp,$command."\r");
fputs($fp," ");
fputs($fp,"exit\r");
sleep(1);
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


/*
$output = explode("\n", $output);
$ocnt = count($output);
unset($output[$ocnt-1]);
$dname = str_replace("#         exit", "", rtrim($output[$ocnt-2]));
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

*/

//$output = str_replace("\n", "<br>", $output);
$output = str_replace("ÿ", "", $output);
$output = str_replace("û", "", $output);
$output = str_replace("ı", "", $output);
$output = str_replace("ş", "", $output);
$output = str_replace("ğ", "", $output);
$output = str_replace("ú", "", $output);
$output = str_replace("'", "", $output);
$output = explode("\n", $output);
echo "<pre>";
print_r($output);
echo "</pre>";

fclose($fp);
?>
</body>