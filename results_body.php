<?php
$i = 0;
foreach($res as $record) {
	if($record['active'] == 'Yes') {
		$i++;
	}
}
echo "<center>
	<b>
		NOTE: All refunds, including credit card charges, are handled by the hotel.
	</b>
</center>
<BR>
<BR>
<center>
	{$res->num_rows} Record(s) Found
</center>
<BR>
<center>
	{$i} Active Properties Found
</center>
<BR>";
$dhour = date("H");
?>
<br>
<table width='95%' border='0' cellpadding='1' cellspacing='2' align='center' class='alldashed'
       style='margin-bottom: 10px'>
	<thead>
	<tr>
		<td class='alldotted' align='center' bgcolor='#000000'>
			<font color='#FFFFFF'>
				<b>
					CTYHO
				</b>
			</font>
		</td>
		<td class='alldotted' align='center' colspan='2' bgcolor='#000000'>
			<font color='#FFFFFF'>
				<b>
					Property Type/Contact Info
				</b>
			</font>
		</td>
		<td class='alldotted' align='center' bgcolor='#000000'>
			<font color='#FFFFFF'>
				<b>
					Property Name
				</b>
			</font>
		</td>
		<td class='alldotted' align='center' bgcolor='#000000'>
			<font color='#FFFFFF'>
				<b>
					Notes
				</b>
			</font>
		</td>
		<td class='alldotted' align='center' bgcolor='#000000'>
			<font color='#FFFFFF'>
				<b>
					1st Level
				</b>
			</font>
		</td>
		<td class='alldotted' align='center' bgcolor='#000000'>
			<font color='#FFFFFF'>
				<b>
					2nd Level
				</b>
			</font>
		</td>
		<td class='alldotted' align='center' bgcolor='#000000'>
			<font color='#FFFFFF'>
				<b>
					Property Overview
				</b>
			</font>
		</td>
		<td class='alldotted' align='center' bgcolor='#000000'>
			<font color='#FFFFFF'>
				<b>
					IP Info
				</b>
			</font>
		</td>
	</tr>
	</thead>
	<tbody>
	<script>
		function formopen(subform) {
			subform.submit();
		}
	</script>
	<?php
	$j = 0;

	if(isset($res)) {
		foreach($res as $record) {
			$prop = $record['prop'];
			$property = new Property($prop);

			if($j % 2 == 0) {
				$bgColor = '#E8E8E8';
			} else {
				$bgColor = '#FFFFFF';
			}

			if($record['disable_date']) {
				$today = getdate();
				if(time() >= strtotime($record['disable_date'])) {
					echo "<iframe src='components/disableprop.php?prop={$prop}' width='0' height='0' border='0' frameborder='0'></iframe>";
					$record['active'] = 'No';
				}
			}

			echo "<tr>
					<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n";
			$gateways = $property->getGateways();
			if(($record['active'] == 'Yes') && (!empty($gateways))) {
				$prop_links = array();
				foreach($gateways as $key => $gateway) {
					if($key > 0) {
						$link_suffix = " G{$key}";
					} else {
						$link_suffix = "";
					}
					$prop_links["gateway"][] = "<a href='{$gateway["link"]}' target='_blank'>{$prop}{$link_suffix}</a>";
					//Adds the DAT button and Clear Gateway buttons under the prop code.
					if((strstr($gateway['type'], 'Nomadix')) && ($record['active'] == 'Yes') && ($record['poc'] != 'Yes')) {
						if($user->getPermissions() == 'admin' || in_array($user->getUsername(), array("jharold", "rlittle", "jbarnum", "mwoodard"))) {
							if(!in_array($user->getUsername(), array("mwoodard"))) {
								$prop_links["clear"][] = "<a href='components/clearUnlimited.php?prop={$prop}&lgn={$gateway['username']}&pswd={$gateway['password']}&ip={$gateway["ip"]}' target='_blank'>Clear{$link_suffix}</a>";
							}
							$prop_links["dat"][] = "<a href='components/checkDat.php?prop={$prop}&lgn={$gateway["username"]}&pswd={$gateway['password']}&ip={$gateway['ip']}' target='_blank'>DAT{$link_suffix}</a>";
						}
					}
				}
				foreach($prop_links as $type => $links) {
					echo implode(PHP_EOL . "<br />" . PHP_EOL, $links) . PHP_EOL . "</br>" . PHP_EOL;
				}
			} else {
				echo $prop;
			}

			echo "</td>
		<td align='center' colspan='2' class='alldotted' bgcolor='{$bgColor}'>" . PHP_EOL;
			$logo = $property->getLogo();
			if($logo == $property->getNALogo()) {
				genButton($prop, "contactform", array("prop" => $prop), "forms/ContactInformation.php", $property->getPropertyType(), "green");
			} else {
				echo "<form name='contactform{$prop}' method='POST' action='forms/ContactInformation.php' target='_blank'>
					<input type='hidden' name='prop' value='{$prop}'>
					<button type='submit' class='textbutton'>
						<img src='{$logo}' alt='{$property->getPropertyType()}'>
					</button>
				</form>" . PHP_EOL;
			}
			echo "</td>
			<td align='center' class='alldotted' bgcolor='{$bgColor}'>" . PHP_EOL;
			if($record['active'] == 'No') { //If property is inactive it will make a button on the property name for the 2nd Level Map. (request made by Bill Fearn.)
				genButton($prop, "form2", array("prop" => $prop, "lvl" => 2, "gtype" => $record['gtway_type'], "billing_method" => $record['billing_method']), "/support_web/2nd Level support/forms/NetworkMap.php", $record['name'], "#0000FF");
			} else {
				echo $record['name'];
			}
			echo "</td>" . PHP_EOL;
			if($record['active'] == 'Yes') {
				if($record['poc'] == 'Yes') {
					$btn1Name = wordwrap('Hilton Transitioned Level 1', 15, PHP_EOL);
					$btn2Name = wordwrap('Hilton Transitioned Level 2', 15, PHP_EOL);
				} else {
					$btn1Name = 'Level 1';
					$btn2Name = 'Level 2';
				}
				echo "<td align='center' class='alldotted' bgcolor='{$bgColor}'>" . PHP_EOL;
				if(!empty($record['notes']) || !empty($record['spnote'])) { //Creates a link to the Notes page.
					genButton($prop, "noteform", array("prop" => $prop), "notes.php", "Notes", "#A000BD");
				} else {
					echo "<font size='2' face='Verdana' color='#C0C0C0'>
					No Notes
				</font>\n";
				}
				echo "</td>

			<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n";
				if($record['level1']) { // Link to Level 1 map
					genButton($prop, "form1", array("prop" => $prop, "lvl" => 1, "gtype" => $property->getGatewayType(), "billing_method" => $record['billing_method']), "map.php", $btn1Name, "#FF0000");
				} else {
					echo "<font size='2' face='Verdana' color='#C0C0C0'>
					No 1st Level
				</font>\n";
				}
				echo "</td>

			<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n";
				if($record['level2']) { // Link to 2nd level map
					genButton($prop, "form2", array("prop" => $prop, "lvl" => 2, "gtype" => $property->getGatewayType(), "billing_method" => $record['billing_method']), "map.php", $btn2Name, "#0000FF");
				} else {
					echo "<font size='2' face='Verdana' color='#C0C0C0'>
					No 2nd Level
				</font>\n";
				}
				echo "</td>

			<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link to property overview page.
				genButton($prop, "overform", array("prop" => $prop), "overview.php", "Overview", "green");
				echo "</td>

			<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link to the IP Info page.
				genButton($prop, "ipform", array("prop" => $prop), "ipinfo.php", "IP Info", "green");
				echo "</td>
		</tr>\n";

			} else {
				if($record['poc'] == 'No') {
					echo "<td colspan='5' align='center' class='alldotted' bgcolor='{$bgColor}'>
					<b>This Property is not supported. <font color='red'>Refer guests to the front desk</font></b>\n";

				} elseif($record['poc'] == 'Yes') {
					echo "<td colspan='5' align='center' class='alldotted' bgcolor='{$bgColor}'>
				<b>
					This property is not supported. Have guests call Hilton's call center - 
					<font color='red'>
						877-474-2411
					</font>
				</b>\n";
				}
				echo "</td>\n";
			}
			if($user->getPermissions() == 'admin') { //Buttons for the administrators on the support web.
				echo "<tr>
				<td colspan='9'>
					<table width='100%'>
						<tr>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>
								<a href='update_notes.php?prop={$prop}' target='_blank'>\n"; //link to Not up to date notes.
				if($record['uptodate'] == 'No') {
					echo "<b>
										<font color='#FF0000'>
											Not up to date
										</font>
									</b>\n";
				} elseif($record['uptodate'] == 'Old') {
					echo "<b>
										<font color='#FFCC00'>
											Needs to be re-done
										</font>
									</b>\n";
				} elseif($record['uptodate'] == 'New') {
					echo "<b>
										<font color='#FFCC00'>
											NEW!!
										</font>
									</b>\n";
				} else {
					echo "<b>
										<font color='#008b00'>
											Up to date
										</font>
									</b>\n";
				}
				echo "</a>
								<BR>
								{$record['mdate']}
							</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>";
				//$vfile = "1stLevel/{$record['loc']}/Pictures/NetworkMap.vsd"; //Link to the visio file if S: drive is mapped
				$vfile = "blah";
				if(file_exists("{$root}/{$vfile}")) {
					echo "<a href='file:\\S:/" . $vfile . "' target='_blank'>
										Visio NetMap
									</a>\n";
				} else {
					echo "<font size='2' face='Verdana' color='#C0C0C0'>
										Visio NetMap
									</font>\n";
				}
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link to General Info update page.
				genButton($prop, "prop", array("prop" => $prop), "update_property.php", "General Info", "#A000BD"); //General Info Button
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; // Link to Equipment Summary update page.
				genButton($prop, "equi", array("prop" => $prop), "update_equipment.php", "Equipment Summary", "#A000BD"); //Equipment Summary Button
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; // Link to the Notes update page.
				genButton($prop, "note", array("prop" => $prop), "notes_update.php", "Notes", "#A000BD"); //Notes Button
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //link the the Property Code update page
				genButton($prop, "pcode", array("prop" => $prop), "update_propertycode.php", "Property Code", "orange"); //Property Code Update Button
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link to Contact Info update page
				genButton($prop, "cntct", array("prop" => $prop), "update_contact.php", "Contact Info", "#FF0000"); //Contact Info Button
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link to Overview update page.
				genButton($prop, "over", array("prop" => $prop), "update_overview.php", "Overview", "green"); //Overview Update Button
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link to IP Info update page.
				genButton($prop, "ipinf", array("prop" => $prop), "iindex.php", "IP Info", "#0000FF"); //IP Information Button
				echo "</td>
						</tr>
					</table>
				</td>
			</tr>\n";
			} elseif($user->getPermissions() == 'mgr') { //Buttons for the Managers on the support web.
				echo "<tr>
				<td colspan='9'>
					<table width='100%'>
						<tr>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>";
				//$vfile = "1stlevel/{$record['loc']}/Pictures/NetworkMap.vsd";
				$vfile = "";
				if(file_exists("{$root}/support_web/{$vfile}")) { //Link to visio file of S: drive is mapped.
					echo "<a href='file:\\S:/{$vfile}' target='_blank'>
										Visio NetMap
									</a>\n";
				} else {
					echo "<font size='2' face='Verdana' color='#C0C0C0'>
										Visio NetMap
									</font>\n";
				}
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link to update the General Info page
				genButton($prop, "prop", array("prop" => $prop), "propentry/update/lpindex.php", "General Info", "#A000BD"); //General Info Button
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link ot the Notes update page
				genButton($prop, "note", array("prop" => $prop), "notes_update.php", "Notes", "#A000BD"); //Notes Button
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link to the Contact Info update page.
				genButton($prop, "cntct", array("prop" => $prop), "update_contact.php", "Contact Info", "#FF0000"); //Contact Info Button
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link to the Overview update page.
				genButton($prop, "over", array("prop" => $prop), "update_overview.php", "Overview", "green"); //Overview Update Button
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link to the IP Info update page.
				genButton($prop, "ipinf", array("prop" => $prop), "iindex.php", "IP Info", "#0000FF"); //IP Information Button
				echo "</td>
						</tr>
					</table>
				</td>
			</tr>\n";
			} elseif($user->getPermissions() == '3rd') { //Buttons for the 3rd Level techs on the support web.
				echo "<tr>
				<td colspan='9'>
					<table width='100%'>
						<tr>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>"; //Link to the Visio file if the S: drive is mapped
				//$vfile = "1stlevel/{$record['loc']}/Pictures/NetworkMap.vsd";
				$vfile = "";
				if(file_exists("{$root}/support_web/{$vfile}")) {
					echo "<a href='file:\\S:/{$vfile}' target='_blank'>
										Visio NetMap
									</a>\n";
				} else {
					echo "<font size='2' face='Verdana' color='#C0C0C0'>
										Visio NetMap
									</font>\n";
				}
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link to the General Info update page.
				genButton($prop, "prop", array("prop" => $prop), "propentry/update/lpindex.php", "General Info", "#A000BD"); //General Info Button
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link to the Notes update page.
				genButton($prop, "note", array("prop" => $prop), "notes_update.php", "Notes", "#A000BD"); //Notes Button
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link to the Contact Info update page.
				genButton($prop, "cntct", array("prop" => $prop), "update_contact.php", "Contact Info", "#FF0000"); //Contact Info Button
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link to the Overview update page.
				genButton($prop, "over", array("prop" => $prop), "update_overview.php", "Overview", "green"); //Overview Update Button
				echo "</td>
							<td align='center' class='alldotted' bgcolor='{$bgColor}'>\n"; //Link to the IP Info update page.
				genButton($prop, "ipinf", array("prop" => $prop), "iindex.php", "IP Info", "#0000FF"); //IP Information Button
				echo "</td>
						</tr>
					</table>
				</td>
			</tr>\n";
			}
			$j++;
			$record['gtway_type'] = '';
		}
	}
	echo "</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td bgcolor='#F0F0F0'>
				<BR>
				<BR>
				<BR>
			</td>
		</tr>
	</table>
</body>";

	function genButton($prop, $form, $params, $link, $button_name, $color) {
		echo "<form name='{$form}{$prop}' method='POST' action='{$link}' target='_blank'>\n";
		foreach($params as $param => $value) {
			echo "<input type='hidden' name='{$param}' value='{$value}'>\n";
		}
		echo "<input type='submit' name='submit' value='{$button_name}' class='textbutton' style='color: {$color}'>
	</form>\n";
	}

	function getGateways($record) {
		$gateways = array();
		for($n = 1; $n <= 4; $n++) {
			if(isset($record["gateway{$n}"])) {
				$ip = $record["gateway{$n}"];
				$username = $record["lgn{$n}"];
				$password = str_replace('#', '%23', $record["pswd{$n}"]);
				// default to the dummy link
				$link = "http://lasdn-sd01/support_web/forms/dummy.php";
				if(isset($record["gtway_type"])) {
					if($record["bypassed"] !== 'Yes') {
						if(strstr($record["gtway_type"], 'Nomadix')) {
							$link = "http://{$username}:{$password}@{$ip}";
						} elseif(strstr($record["gtway_type"], 'Solution IP')) {
							$link = "https://{$username}:{$password}@{$ip}/admin/";
						} elseif(strstr($record["gtway_type"], 'IP3')) {
							$link = "https://{$ip}/login.cgi?username={$username}&password={$password}";
						} elseif(strstr($record["gtway_type"], 'BBSM')) {
							$link = "http://{$username}:{$password}@{$ip}:9488/www";
						} else {
							$link = "http://{$ip}";
						}
					}
				}
				$gateways[] = array(
					"gateway" => $ip,
					"login" => $username,
					"password" => $password,
					"link" => $link
				);
			}
		}
		return $gateways;
	}

	?>
