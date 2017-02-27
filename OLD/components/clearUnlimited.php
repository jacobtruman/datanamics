<HEAD>
<Title>
  Clear Unlimited and Expired useres from Nomadix
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<?php
set_time_limit(900);
ini_set ('display_errors', 'on');
$root = 'D:/inetpub/support';
include ($root.'/support_web/vargen.php');

$file = fopen ("http://".$lgn.":".$pswd."@".$ip."/rpm/aaaprof/users.htm", "r");
if (!$file) {
  echo "<p>Unable to open remote file.\n";
  exit;
}
$k = 0;
$l = 0;
while (!feof ($file)){
	$line = fgets ($file, 1024);
	if (eregi ("<td>(.*)</td>", $line, $out)){
		for($i = 0; $i < count($out); $i++){
			$out[$i] = str_replace(" nowrap>", "", $out[$i]);
			$out[$i] = str_replace("</td>", "", $out[$i]);
			$out[$i] = str_replace("&nbsp;", "", $out[$i]);
			$out[$i] = explode("<td", $out[$i]);
			
			if(!empty($out[$i][0]) && !strpos(" ".$out[$i][0], '<a href=')){
				$mac[$k] = $out[$i][0];
				$uip[$k] = str_replace(">", "", $out[$i][1]);
				$status[$k++] = $out[$i][2];
			}
			for($j = 0; $j < count($out[$i]); $j++){
				if (eregi (">(.*)<", $out[$i][$j], $next)){
					if (!strpos(" ".$next[1], '<a href=')){
						$name[$l++] = $next[1];
					}
				}
			}
		}
	}
}
echo "<table align='right' cellpadding='2' cellspacing='2' width='80%' bgcolor='#000000' class='alldottedUR'>
	<thead>
		<tr>
			<td class='alldotted' align='center'>
				<b>
					<font color='#FFFFF' size='3'>
						Username
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
						IP Address
					</font>
				</b>
			</td>
			<td class='alldotted' align='center'>
				<b>
					<font color='#FFFFF' size='3'>
						Status
					</font>
				</b>
			</td>
			<td class='alldotted' align='center'>
				<b>
					<font color='#FFFFF' size='3'>
						Action Taken
					</font>
				</b>
			</td>
			<td class='alldotted' align='center'>
				<b>
					<font color='#FFFFF' size='3'>
						Remove
					</font>
				</b>
			</td>
		</tr>
	</thead>\n";
$r = 0;
$t = 0;
$e = 0;
$u = 0;
$q = 0;
for($i = 0; $i < count($name); $i++){
	if($i % 2 == 0){
		$ucolor = '#0F9F00';
		$rcolor = '#FF0000';
		$ecolor = '#FFB400';
		$color = '#C0C0C0';
	}else{
		$ucolor = '#18FF00';
		$rcolor = '#FF5F5F';
		$ecolor = '#F9F000';
		$color = '#FFFFFF';
	}
	$t++;
	
	if(($mac[$i] == "00:00:00:00:00:00") && (!empty($name[$i]) || ($name[$i] != 'null'))){
		$url = "http://".$lgn.":".$pswd."@".$ip."/forms/subproc.htm?WINDWEB_URL=%2Ffs%2Fforms%2Fsubproc.htm&wMsgClear=0&sub_type=0&sub_public_ip=0&sub_dev_vlan=0&sub_id=".$mac[$i]."&sub_ip=&sub_subnet=&sub_uname=".$name[$i]."&sub_passwd=&sub_exp_hr=0&sub_hid_hr=0&sub_hid_min=0&sub_hid_exp=0&sub_exp_min=0&sub_hid_countdown=0&sub_paid=0.00&sub_f1=&sub_f2=&sub_bwup=0&sub_bwdown=0&wSubAction=3&wMetaClear=0";
	}else{
		$url = "http://".$lgn.":".$pswd."@".$ip."/forms/subproc.htm?WINDWEB_URL=%2Ffs%2Fforms%2Fsubproc.htm&wMsgClear=0&sub_type=0&sub_public_ip=0&sub_dev_vlan=0&sub_id=".$mac[$i]."&sub_ip=&sub_subnet=&sub_uname=&sub_passwd=&sub_exp_hr=0&sub_hid_hr=0&sub_hid_min=0&sub_hid_exp=0&sub_exp_min=0&sub_hid_countdown=0&sub_paid=0.00&sub_f1=&sub_f2=&sub_bwup=0&sub_bwdown=0&wSubAction=3&wMetaClear=0";
	}
	if((empty($name[$i]) || ($name[$i] == "(null)")) && (($status[$i] == "Unlimited") || ($status[$i] == "Maximum")) || ($status[$i] == "Expired")){
		$remFlag = 1;
		echo "<iframe src='".$url."' width='0' height='0'></iframe>\n";
		if($status[$i] == "Expired"){
			printOut($name[$i], $mac[$i], $uip[$i], $status[$i], "Removed", $ecolor, $url, $lgn, $pswd, $ip, $remFlag);
			$e++;
		}else{
			printOut($name[$i], $mac[$i], $uip[$i], $status[$i], "Removed", $rcolor, $url, $lgn, $pswd, $ip, $remFlag);
			$u++;
		}
		$r++;
	}else{
		$remFlag = 0;
		if((($status[$i] == "Unlimited") || ($status[$i] == "Maximum")) && ((!strpos(" ".$name[$i], $prop)) && (!strpos(" ".$name[$i], "DSLAM")) && (!strpos(" ".$name[$i], "1100AP")) && (!strpos(" ".$name[$i], "1200AP")) && (!strpos(" ".$name[$i], "MDF")) && (!strpos(" ".$name[$i], "IDF")) && (!strpos(" ".$name[$i], "WAP")))){
			printOut($name[$i], $mac[$i], $uip[$i], $status[$i], "Not Removed", $ucolor, $url, $lgn, $pswd, $ip, $remFlag);
			$q++;
		}else{
			printOut($name[$i], $mac[$i], $uip[$i], $status[$i], "Not Removed", $color, $url, $lgn, $pswd, $ip, $remFlag);
		}
	}
}

function printOut($name, $mac, $uip, $status, $act, $color, $url, $lgn, $pswd, $gip, $remFlag){
	if(empty($name)){
		$name = "(null)";
	}
	echo "<tr>
		<td class='alldotted' bgcolor='".$color."'>
			<b>
				<a href='http://".$lgn.":".$pswd."@".$gip."/rpm/getsub/".$mac."@".$name."' target='_blank'>".$name."</a>
			</b>
		</td>
		<td class='alldotted' bgcolor='".$color."' align='center'>
			".$mac."
		</td>
		<td class='alldotted' bgcolor='".$color."' align='center'>
			".$uip."
		</td>
		<td class='alldotted' bgcolor='".$color."' align='center'>
			".$status."
		</td>
		<td class='alldotted' bgcolor='".$color."' align='center'>
			".$act."
		</td>
		<td class='alldotted' bgcolor='".$color."' align='center'>\n";
			if($remFlag == 1){
				echo "<a href='".$url."' target='remun'>-</a>\n";
			}else{
				echo "<a href='".$url."' target='remun'>Remove</a>\n";
			}
		echo "</td>
	</tr>\n";
}
fclose($file);
?>
</table>

<div id='removed' style='position:absolute; left:10px; top:10px; z-index:0;'>
	<table bgcolor='#000000' class='alldotted'>
		<tr>
			<td class='alldotted' align='center' bgcolor='#000000' colspan='6'>
				<font color='#FFFFFF' size='3'>
					<b>
						Legend/Stats
					</b>
				</font>
			</td>
		</tr>
		<tr>
			<td bgcolor='#FFB400' colspan='2' width='20'>
			</td>
			<td bgcolor='#F9F000' colspan='2' width='20'>
			</td>
			<td class='alldotted' align='center' bgcolor='#FFFFFF'>
				Expired Removed:
			</td>
			<td class='alldotted' align='center' bgcolor='#FFFFFF'>
				<?php echo $e;?>
			</td>
		</tr>
		<tr>
			<td bgcolor='#FF0000' colspan='2'>
			</td>
			<td bgcolor='#FF5F5F' colspan='2'>
			</td>
			<td class='alldotted' align='center' bgcolor='#FFFFFF'>
				Unlimited Removed:
			</td>
			<td class='alldotted' align='center' bgcolor='#FFFFFF'>
				<?php echo $u;?>
			</td>
		</tr>
		<tr>
			<td bgcolor='#FFB400' width='10'>
			</td>
			<td bgcolor='#F9F000' width='10'>
			</td>
			<td bgcolor='#FF0000' width='10'>
			</td>
			<td bgcolor='#FF5F5F' width='10'>
			</td>
			<td class='alldotted' align='center' bgcolor='#FFFFFF'>
				Total Removed:
			</td>
			<td class='alldotted' align='center' bgcolor='#FFFFFF'>
				<?php echo $r;?>
			</td>
		</tr>
		<tr>
			<td bgcolor='#0F9F00' colspan='2'>
			</td>
			<td bgcolor='#18FF00' colspan='2'>
			</td>
			<td class='alldotted' align='center' bgcolor='#FFFFFF'>
				Questionable:
			</td>
			<td class='alldotted' align='center' bgcolor='#FFFFFF'>
				<?php echo $q;?>
			</td>
		</tr>
		<tr>
			<td bgcolor='#C0C0C0' colspan='2'>
			</td>
			<td bgcolor='#FFFFFF' colspan='2'>
			</td>
			<td class='alldotted' align='center' bgcolor='#FFFFFF'>
				Total:
			</td>
			<td class='alldotted' align='center' bgcolor='#FFFFFF'>
				<?php echo $t;?>
			</td>
		</tr>
	</table>
</div>
<iframe name='remun' width='0' height='0'></iframe>