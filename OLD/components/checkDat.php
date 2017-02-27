<head>
<title>
	Check Nomadix DAT Table
</title>
<link rel='stylesheet' type='text/css' href='/support_web/swstyle.php'>
</head>
<?php
set_time_limit(900);
ini_set ('display_errors', 'on');
$root = 'D:/inetpub/support';
include ($root.'/support_web/vargen.php');

echo "<div id='removed' style='position:absolute; left:10px; top:10px; z-index:0;'>
<form name='deldat' method='GET' action='http://".$lgn.":".$pswd."@".$ip."/rpm/dat/deleteall.htm?' target='deldat'>
	<input type='submit' value='Delete all sessions' class='formbutton'>
</form>
</div>
<iframe name='deldat' width='0' height='0'></iframe>\n";

$file = fopen ("http://".$lgn.":".$pswd."@".$ip."/config/dat.htm", "r");
if (!$file) {
  echo "<p>Unable to open remote file.\n";
  exit;
}
echo "<table align='right' cellpadding='2' cellspacing='2' width='80%' bgcolor='#000000' class='alldottedUR'>
	<thead>
		<tr>
			<td class='alldotted' align='center'>
				<b>
					<font color='#FFFFF' size='3'>
						Source IP
					</font>
				</b>
			</td>
			<td class='alldotted' align='center'>
				<b>
					<font color='#FFFFF' size='3'>
						MAC Address
					</font>
				</b>
			</td>
			<td class='alldotted' align='center'>
				<b>
					<font color='#FFFFF' size='3'>
						Dest. IP
					</font>
				</b>
			</td>
			<td class='alldotted' align='center'>
				<b>
					<font color='#FFFFF' size='3'>
						Port
					</font>
				</b>
			</td>
			<td class='alldotted' align='center'>
				<b>
					<font color='#FFFFF' size='3'>
						Packet Type
					</font>
				</b>
			</td>
		</tr>
	</thead>\n";
$i = 0;
$j = 0;
$gPorts = array(80, 443, 8080, 25, 110, 1900, 5190, 1863);
$vPorts = array(53, 55, 77, 81, 82, 135, 445, 665, 1034, 1042, 1080, 1433, 1434, 1234, 1549, 1639, 2283, 2339, 2535, 2745, 3127, 3332, 4444, 4751, 5554, 6000, 6777, 6789, 8181, 8594, 8866, 9030, 9995, 9996, 10000, 33333);
$fPorts = array(1214, 3531, 4662, 4672, 6257, 6699, 6346, 6347, 6348, 6349, 6881, 6882, 6969, 16881, 41170);
while (!feof ($file)){
	$line = fgets ($file, 1024);
	if (eregi ("<->", $line, $out)){
		$i++;
		if($i % 2 == 0){
			$color = '#C0C0C0';
			$ucolor = '#0F9F00';
			$rcolor = '#FF0000';
			$ocolor = 'FFFF7E';
		}else{
			$color = '#FFFFFF';
			$ucolor = '#18FF00';
			$rcolor = '#FF5F5F';
			$ocolor = 'FFFF00';
		}

		$line = explode("/", $line);
		$line3 = explode(" ", $line[1]);
		$line3 = explode("(", $line3[1]);
		$line3 = explode(")", $line3[1]);
		$mac = $line3[0];
		$line1 = explode(" ", $line[0]);
		$cip = $line1[1];
		$line3 = explode(" ", $line[2]);
		$dip = $line3[2];
		$line2 = explode(" ", $line[3]);
		$port = $line2[0];
		$line4 = explode(" ", $line[3]);
		$ptype = $line4[1];
		if(in_array($port, $gPorts)){
			$bgColor = $ucolor;
		}elseif(in_array($port, $vPorts)){
			$bgColor = $rcolor;
		}elseif(in_array($port, $fPorts)){
			$bgColor = $ocolor;
		}else{
			$bgColor = $color;
		}
		echo "<tr>
			<td class='alldotted' align='center' bgcolor='".$bgColor."'>
				".$cip."
			</td>
			<td  class='alldotted' align='center' bgcolor='".$bgColor."'>
				".$mac."
			</td>
			<td class='alldotted' align='center' bgcolor='".$bgColor."'>
				".$dip."
			</td>
			<td class='alldotted' align='center' bgcolor='".$bgColor."'>
				".$port."
			</td>
			<td class='alldotted' align='center' bgcolor='".$bgColor."'>
				".$ptype."
			</td>
		</tr>";
	}
}
fclose($file);
?>
</table>