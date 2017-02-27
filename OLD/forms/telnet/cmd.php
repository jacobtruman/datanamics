<?php

if ($command[0] == 'sho int status'){

if ($titlestr[8] != ' '){
	$osnum = 0;
}else{
	$osnum = 2;
}
echo "<table border='0' bordercolor='#000000' cellpadding='0' cellspacing='0' width='80%'><tr>\n";
	echo "<tr><td>\n";
	for ($i = 0; $i <= 7 + $osnum; $i++){					// Port
		if ($titlestr[$i] != ''){
			echo $titlestr[$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 7 + $osnum; $i <= 26 + $osnum; $i++){			// Name
		if ($titlestr[$i] != ''){
			echo $titlestr[$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 27 + $osnum; $i <= 39 + $osnum; $i++){		// Status
		if ($titlestr[$i] != ''){
			echo $titlestr[$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 40 + $osnum; $i <= 50 + $osnum; $i++){		// Vlan
		if ($titlestr[$i] != ''){
			echo $titlestr[$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 51 + $osnum; $i <= 58 + $osnum; $i++){		// Duplex
		if ($titlestr[$i] != ''){
			echo $titlestr[$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 59 + $osnum; $i <= 64 + $osnum; $i++){		// Speed
		if ($titlestr[$i] != ''){
			echo $titlestr[$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 65 + $osnum; $i <= 80; $i++){		// Type
		if ($titlestr[$i] != ''){
			echo $titlestr[$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td></tr>\n";

for ($j = 0; $j < count($output); $j++){
	echo "<tr><td>\n";
	for ($i = 0; $i <= 7 + $osnum; $i++){					// Port
		if ($output[$j][$i] != ''){
			echo $output[$j][$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 7 + $osnum; $i <= 26 + $osnum; $i++){			// Name
		if ($output[$j][$i] != ''){
			echo $output[$j][$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 27 + $osnum; $i <= 39 + $osnum; $i++){		// Status
		if ($output[$j][$i] != ''){
			echo $output[$j][$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 40 + $osnum; $i <= 50 + $osnum; $i++){		// Vlan
		if ($output[$j][$i] != ''){
			echo $output[$j][$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 51 + $osnum; $i <= 57 + $osnum; $i++){		// Duplex
		if ($output[$j][$i] != ''){
			echo $output[$j][$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 58 + $osnum; $i <= 64 + $osnum; $i++){		// Speed
		if ($output[$j][$i] != ''){
			echo $output[$j][$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 65 + $osnum; $i <= 80; $i++){		// Type
		if ($output[$j][$i] != ''){
			echo $output[$j][$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td></tr>\n";
}

echo "</table>";

}elseif ($command[0] == 'sho cdp ne'){
echo "<table border='0' bordercolor='#000000' cellpadding='0' cellspacing='0' width='80%'>\n";
	echo "<tr><td>\n";
	for ($i = 0; $i < 16; $i++){
		if ($titlestr[$i] != ''){
			echo $titlestr[$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 17; $i <= 34; $i++){			// Local Intrfce
		if ($titlestr[$i] != ''){
			echo $titlestr[$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 35; $i <= 45; $i++){			// Holdtme
		if ($titlestr[$i] != ''){
			echo $titlestr[$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 46; $i <= 57; $i++){			// Capability
		if ($titlestr[$i] != ''){
			echo $titlestr[$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 58; $i <= 67; $i++){			// Platform
		if ($titlestr[$i] != ''){
			echo $titlestr[$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 68; $i <= 80; $i++){			// Port ID
		if ($titlestr[$i] != ''){
			echo $titlestr[$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td></tr>\n";

for ($j = 0; $j < count($output); $j++){	// Device ID
	echo "<tr><td>\n";
	for ($i = 0; $i <= 16; $i++){
		if ($output[$j][$i] != ''){
			echo $output[$j][$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 17; $i <= 34; $i++){			// Local Intrfce
		if ($output[$j][$i] != ''){
			echo $output[$j][$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 35; $i <= 45; $i++){			// Holdtme
		if ($output[$j][$i] != ''){
			echo $output[$j][$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 46; $i <= 57; $i++){			// Capability
		if ($output[$j][$i] != ''){
			echo $output[$j][$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 58; $i <= 67; $i++){			// Platform
		if ($output[$j][$i] != ''){
			echo $output[$j][$i];
		}else{
			echo "&nbsp";
		}
	}
	echo "</td><td>\n";
	for ($i = 68; $i <= 80; $i++){			// Port ID
		if ($output[$j][$i] != ''){
			echo $output[$j][$i];
		}else{
			echo "&nbsp";
		}
	}
	
	echo "</td></tr>\n";
}

echo "</table>";

}else{
	echo $default;
}

?>