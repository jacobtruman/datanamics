<BR>
<BR>
<font face='verdana' size='1'>
<?php

if(!empty($gtway)){
	if(!isset($eqlgn)){
		$lgn = 'datadmin'; // Login Name
	}else{
		$lgn = $eqlgn; // Login Name
	}
	if(!isset($eqpswd)){
		$pswd = 'zinck2240'; // Password
	}else{
		$pswd = $eqpswd; // Password
	}
	if(!isset($which)){
		$which = 'link'; // Link type (map or link)
	}
	
	if(!isset($ipscope)){
		$ipscope = '172.27.172.'; // IP Scope
	}
	
	if(!isset($scopeb)){
		$scopeb = '5'; // Scope Beginning IP
	}
	
// Router
	echo "Router<BR>\n";

	if (empty($rtrtype)){
		$rtrtype = 'na';
	}
	if ($rtrtype == '1700'){
		if ($which == 'map'){
			echo "&lt;area href='".$rctype.$rtr."' target='".$target."' shape='rect' coords='328, 128, 436, 169'&gt;\n";
		}else{
			echo "<a href='".$rctype.$rtr."' target='".$target."'>".$rtr."</a>\n";
		}
	}elseif($rtrtype == '1841'){
		if ($which == 'map'){
			echo "&lt;area href='".$rctype.$rtr."' target='".$target."' shape='rect' coords='327, 135, 459, 153'&gt;\n";
		}else{
			echo "<a href='".$rctype.$rtr."' target='".$target."'>".$rtr."</a>\n";
		}
	}elseif($rtrtype == '2600'){
		if ($which == 'map'){
			echo "&lt;area href='".$rctype.$rtr."' target='".$target."' shape='rect' coords='254, 137, 422, 155'&gt;\n";
		}else{
			echo "<a href='".$rctype.$rtr."' target='".$target."'>".$rtr."</a>\n";
		}
	}elseif($rtrtype == '3700'){
		if ($which == 'map'){
			echo "&lt;area href='".$rctype.$rtr."' target='".$target."' shape='rect' coords='295, 119, 463, 170'&gt;\n";
		}else{
			echo "<a href='".$rctype.$rtr."' target='".$target."'>".$rtr."</a>\n";
		}
	}elseif($rtrtype == 'na'){
		if ($which == 'map'){
			echo "&lt;area href='".$rctype.$rtr."' target='".$target."' shape='poly' coords='363, 162, 364, 121, 391, 104, 411, 104, 437, 121, 436, 161, 417, 177, 383, 177'&gt;\n";
		}else{
			echo "<a href='".$rctype.$rtr."' target='".$target."'>".$rtr."</a>\n";
		}
	}
	echo "<BR><BR>Gateway<BR>\n";
	if ($which == 'map'){
		echo "&lt;area href='".$cStr."' target='_blank' shape='rect' coords='760, 10, 899, 39'&gt;\n";
	}else{
		echo "<a href='".$cStr."' target='_blank' shape='rect' coords='760, 10, 899, 39'>".$cStr."</a>\n";
	}
	
	echo "<BR><BR>\n";

// Cisco switches
	if(!isset($ncsw)){
		$ncsw = 0; // Number of switches
	}else{
		if(!isset($ncswbport)){
			$ncswbport = 23230; // Beginning Port Number
		}
		if ($ncsw > 0){
			echo "Cisco Switches<BR>\n";
		}
		for ($i = 0; $i < $ncsw; $i++){
			$c1 = $i * 18;
			$c2 = 18 + ($i * 18);
			$port = $ncswbport + $i;
			$dif = $port - 23230;
			$n = $dif + $scopeb;
			$ip = $ipscope.$n;
			$lnk = $gtway." ".$port;
			if ($which == 'map'){
				echo "&lt;area href='telnet:".$lnk."' shape='rect' coords='0,".$c1.",168,".$c2."'&gt;\n";
			}else{
				echo "<a href='telnet:".$lnk."'>".$ip."</a>\n";
			}
			echo "<BR>\n";
		}
		echo "<BR>\n";
	}

// Paradyne switches
	if(!isset($npsw)){
		$npsw = 0; // Number of switches
	}else{
		if(!isset($npswbport)){
			$npswbport = 23231; // Beginning Port Number
		}
		if ($npsw > 0){
			echo "Paradyne Switches<BR>\n";
		}
		for ($i = 0; $i < $npsw; $i++){
			$c1 = $i * 18;
			$c2 = 18 + ($i * 18);
			$port = $npswbport + $i;
			$dif = $port - 23230;
			$n = $dif + $scopeb;
			$ip = $ipscope.$n;
			$lnk = $lgn.":".$pswd."@".$gtway.":".$port;
			if ($which == 'map'){
				if ($npswint == 'telnet'){
					echo "&lt;area href='telnet:".$gtway.":".$port."' shape='rect' coords='169,".$c1.",337,".$c2."'&gt;\n";
				}else{
					echo "&lt;area href='http://".$lnk."' target='_blank' shape='rect' coords='169,".$c1.",337,".$c2."'&gt;\n";
				}
			}else{
				if ($npswint == 'telnet'){
					echo "<a href='telnet:".$gtway.":".$port."'>".$ip."</a>\n";
				}else{
					echo "<a href='http://".$lnk."' target='_blank'>".$ip."</a>\n";
				}
			}
			echo "<BR>\n";
		}
		echo "<BR>\n";
	}
	
// Zyxel switches
	if(!isset($nzsw)){
		$nzsw = 0; // Number of switches
	}else{
		if(!isset($nzswbport)){
			$nzswbport = 23231; // Beginning Port Number
		}
		if ($nzsw > 0){
			echo "Zyxel Switches<BR>\n";
		}
		for ($i = 0; $i < $nzsw; $i++){
			$c1 = $i * 22;
			$c2 = 22 + ($i * 22);
			$port = $nzswbport + $i;
			$dif = $port - 23230;
			$n = $dif + $scopeb;
			$ip = $ipscope.$n;
			if ($which == 'map'){
				if ($nzint == 'telnet'){
					echo "&lt;area href='telnet:".$gtway.":".$port."' shape='rect' coords='173,".$c1.",328,".$c2."'&gt;\n";
				}else{
					echo "&lt;area href='http://".$lgn.":".$pswd."@".$gtway.":".$port."' target='_blank' shape='rect' coords='173,".$c1.",328,".$c2."'&gt;\n";
				}
			}else{
				if ($nzint == 'telnet'){
					echo "<a href='telnet:".$gtway.":".$port."'>".$ip."</a>\n";
				}else{
					echo "<a href='http://".$lgn.":".$pswd."@".$gtway.":".$port."' target='_blank'>".$ip."</a>\n";
				}
			}
			echo "<BR>\n";
		}
		echo "<BR>\n";
	}

// Cisco 1100 waps
	if(!isset($n1100)){
		$n1100 = 0; // Number of 1100 waps
	}else{
		if(!isset($n1100bport)){
			$n1100bport = 23231; // Beginning Port Number
		}
		if ($n1100 > 0){
			echo "Cisco 1100 WAPs<BR>\n";
		}
		for ($i = 0; $i < $n1100; $i++){
			$c1 = $i * 53;
			$c2 = 53 + ($i * 53);
			$port = $n1100bport + $i;
			$dif = $port - 23230;
			$n = $dif + $scopeb;
			$ip = $ipscope.$n;
			if ($which == 'map'){
				if ($n1100int == 'telnet'){
					echo "&lt;area href='telnet:".$gtway." ".$port."' shape='rect' coords='338,".$c1.",366,".$c2."'&gt;\n";
				}else{
					echo "&lt;area href='http://".$lgn.":".$pswd."@".$gtway.":".$port."' target='_blank' shape='rect' coords='338,".$c1.",366,".$c2."'&gt;\n";
				}
			}else{
				if ($n1100int == 'telnet'){
					echo "<a href='telnet:".$gtway." ".$port."'>".$ip."</a>\n";
				}else{
					echo "<a href='http://".$lgn.":".$pswd."@".$gtway.":".$port."' target='_blank'>".$ip."</a>\n";
				}
			}
			echo "<BR>\n";
		}
		echo "<BR>\n";
	}

// Cisco 1200 waps
	if(!isset($n1200)){
		$n1200 = 0; // Number of 1200 waps
	}else{
		if(!isset($n1200bport)){
			$n1200bport = 23231; // Beginning Port Number
		}
		if ($n1200 > 0){
			echo "Cisco 1200 WAPs<BR>\n";
		}
		for ($i = 0; $i < $n1200; $i++){
			$c1 = $i * 34;
			$c2 = 34 + ($i * 34);
			$port = $n1200bport + $i;
			$dif = $port - 23230;
			$n = $dif + $scopeb;
			$ip = $ipscope.$n;
			if ($which == 'map'){
				if ($n1200int == 'telnet'){
					echo "&lt;area href='telnet:".$gtway." ".$port."' shape='rect' coords='367,".$c1.",397,".$c2."'&gt;\n";
				}else{
					echo "&lt;area href='http://".$lgn.":".$pswd."@".$gtway.":".$port."' shape='rect' target='_blank' coords='367,".$c1.",397,".$c2."'&gt;\n";
				}
			}else{
				if ($n1200int == 'telnet'){
					echo "<a href='telnet:".$gtway." ".$port."'>".$ip."</a>\n";
				}else{
					echo "<a href='http://".$lgn.":".$pswd."@".$gtway.":".$port."' target='_blank'>".$ip."</a>\n";
				}
			}
			echo "<BR>\n";
		}
	}

// Netopia waps
	if(!isset($ntw)){
		$ntw = 0; // Number of Netopia waps
	}else{
		if(!isset($ntwbport)){
			$ntwbport = 23231; // Beginning Port Number
		}
		if ($ntw > 0){
			echo "Netopia WAPs<BR>\n";
		}
		for ($i = 0; $i < $ntw; $i++){
			$c1 = 39 + $i * 43;
			$c2 = 20 + ($i * 43);
			$c3 = 11 + ($i * 43);
			$c4 = 0 + ($i * 43);
			$c5 = 11 + ($i * 43);
			$c6 = 21 + ($i * 43);
			$port = $ntwbport + $i;
			$dif = $port - 23230;
			$n = $dif + $scopeb;
			$ip = $ipscope.$n;
			if ($which == 'map'){
				if ($ntint == 'telnet'){
					echo "&lt;area href='telnet:".$gtway." ".$port."' shape='poly' coords='258, ".$c1.", 227, ".$c2.", 227, ".$c3.", 270, ".$c4.", 301, ".$c5.", 301, ".$c6."'&gt;\n";
				}else{
					echo "&lt;area href='http://".$lgn.":".$pswd."@".$gtway.":".$port."' target='_blank' shape='poly' coords='258, ".$c1.", 227, ".$c2.", 227, ".$c3.", 270, ".$c4.", 301, ".$c5.", 301, ".$c6."'&gt;\n";
				}
			}else{
				if ($ntint == 'telnet'){
					echo "<a href='telnet:".$gtway." ".$port."'>".$ip."</a>\n";
				}else{
					echo "<a href='http://".$lgn.":".$pswd."@".$gtway.":".$port."' target='_blank'>".$ip."</a>\n";
				}
			}
			echo "<BR>\n";
		}
	}

// Paradyne waps
	if(!isset($npw)){
		$npw = 0; // Number of Paradyne waps
	}else{
		if(!isset($npwbport)){
			$npwbport = 23231; // Beginning Port Number
		}
		if ($npw > 0){
			echo "Paradyne WAPs<BR>\n";
		}
		$ldif = 37;
		for ($i = 0; $i < $npw; $i++){
			$c1 = 36 + $i * $ldif;
			$c2 = 23 + ($i * $ldif);
			$c3 = 12 + ($i * $ldif);
			$c4 = 0 + ($i * $ldif);
			$c5 = 9 + ($i * $ldif);
			$c6 = 22 + ($i * $ldif);
			$port = $npwbport + $i;
			$dif = $port - 23230;
			$n = $dif + $scopeb;
			$ip = $ipscope.$n;
			if ($which == 'map'){
				if ($ntint == 'telnet'){
					echo "&lt;area href='telnet:".$gtway." ".$port."' shape='poly' coords='636, ".$c1.", 579, ".$c2.", 578, ".$c3.", 619, ".$c4.", 667, ".$c5.", 667, ".$c6."'&gt;\n";
				}else{
					echo "&lt;area href='http://".$lgn.":".$pswd."@".$gtway.":".$port."' target='_blank' shape='poly' coords='636, ".$c1.", 579, ".$c2.", 578, ".$c3.", 619, ".$c4.", 667, ".$c5.", 667, ".$c6."'&gt;\n";
				}
			}else{
				if ($ntint == 'telnet'){
					echo "<a href='telnet:".$gtway." ".$port."'>".$ip."</a>\n";
				}else{
					echo "<a href='http://".$lgn.":".$pswd."@".$gtway.":".$port."' target='_blank'>".$ip."</a>\n";
				}
			}
			echo "<BR>\n";
		}
	}
}
?>
</font>