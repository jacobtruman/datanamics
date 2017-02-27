<head>
	<title>
		<?php echo $ptype; ?>
	</title>
	<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body marginwidth='0' marginheight='0' scroll='yes' vlink='#0000FF' alink='#0000FF'>
<table class='sw-main<?php echo $style_class_suffix; ?>' cellpadding='0' cellspacing='0' border='0' width='100%'
       height='100%'>
	<tr valign='top'>
		<td WIDTH='100%' height='29' colspan='3'>
			<table class='sw-bannerframe<?php echo $style_class_suffix; ?>' border='0' cellspacing='0' cellpadding='3'
			       width='100%'>
				<tr>
					<td nowrap valign='middle' align='left' height='30'>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td height='78' valign='top' colspan='3'>
			<?php include("mainheader2.php"); ?>
		</td>
	</tr>
	<tr>
		<td valign='top' rowspan='2' bgcolor="#F0F0F0">

			<table border='0' width='250'>
				<tr>
					<td>
						<?php
						include('supportmenu.php');
						$start = $logoheight + $base + 130;
						echo "<div id='datanam' style='position:absolute; left:10px; top:{$start}px; z-index:0;'>\n<hr>";
						$search_params = array("pcode", "name", "gip", "rtr", "addr", "phone", "special", "shtype");
						foreach($search_params as $param) {
							if(isset($_REQUEST[$param])) {
								$$param = $_REQUEST[$param];
							} else {
								$$param = null;
							}
						}
						?>
						<form method='POST' action='<?= $_SERVER['PHP_SELF'] ?>'>
							<label>
								Property Name
								<br/>
								<input type='text' name='name' value='<?php echo $name; ?>' size='20' class='formfield'>
								<br/>
							</label>
							<label>
								Property Code
								<br/>
								<input type='text' name='pcode' value='<?php echo $pcode; ?>' size='20'
								       class='formfield' style='text-transform:uppercase;'>
								<br/>
							</label>
							<label>
								Gateway IP
								<br/>
								<input type='text' name='gip' value='<?php echo $gip; ?>' size='20' class='formfield'>
								<br/>
							</label>
							<label>
								Router IP
								<br/>
								<input type='text' name='rtr' value='<?php echo $rtr; ?>' size='20' class='formfield'>
								<br/>
							</label>
							<label>
								Property Address
								<br/>
								<input type='text' name='addr' value='<?php echo $addr; ?>' size='20' class='formfield'>
								<br/>
							</label>
							<label>
								Property Phone
								<br/>
								<input type='text' name='phone' value='<?php echo $phone; ?>' size='20'
								       class='formfield'>
								<br/>
							</label>
							<label>
								Specialty Search
								<br/>
								<select size='1' name='special' class='formfield'>
									<?php
									$special_options = array(
										"11wireless" => "Eleven Wireless",
										"alltransitioned" => "Transitioned Properties",
										"notinnagios" => "Not In Nagios",
										"allusg" => "All Nomadix",
										"allip3" => "All IP3",
										"allsolutionip" => "All Solution IP"
									);
									if($special !== null) {
										echo "<option></option>" . PHP_EOL;
									} else {
										echo "<option selected></option>" . PHP_EOL;
									}
									foreach($special_options as $key => $value) {
										if($special == $key) {
											$selected = " selected";
										} else {
											$selected = "";
										}
										echo "<option value='{$key}'{$selected}>{$value}</option>" . PHP_EOL;
									}
									?>
								</select>
								<br/>
							</label>

							<?php
							$db = new DBConn("datanamics");
							$sql = "SELECT name FROM property_type";
							$res = $db->query($sql);

							if($res->num_rows) {
								echo "Property Type
								<br />
								<select size='1' name='shtype' class='formfield'>
								<option value='{$shtype}'>{$shtype}</option>" . PHP_EOL;
								if($shtype != '') {
									echo "<option value=''></option>" . PHP_EOL;
								}
								foreach($res as $record) {
									echo "<option value='{$record['id']}' class='formfield'>{$record['name']}</option>" . PHP_EOL;
								}
								echo "</select>";
							}
							?>
							<br/>
							<input type='Submit' class='formbutton'>
							<br/>
							<br/>
						</form>
					</td>
				</tr>
			</table>
		</td>
		<td bgcolor='#D8D8D8' align='center' height='50px'>
			<h2>
				<?php echo $ptype; ?>
			</h2>
		</td>
	</tr>
	<tr valign='top'>
		<td valign='top' height='720' width=100% colspan='2'>
			<table border='0' width='100%'>
				<?php include("contactlinks.php"); ?>
			</table>

			<?php
			$start += 375;
			echo "<form name='nostform' method='POST' action='tickets/index.php' target='_blank'>
<div id='nost' style='position:absolute; left:10px; top:{$start}px; z-index:0;'>
	<input type='submit' value='No Service Type' class='logout'>
	<input type='hidden' name='uname' value='{$user->getUsername()}'>
</div>
</form>\n";
			if($user->getPermissions() == 'admin' || $user->getPermissions() == 'mgr') {
				$start += 30;
				echo "<form name='allnostform' method='POST' action='tickets/users.php' target='_blank'>
<div id='allnost' style='position:absolute; left:10px; top:{$start}px; z-index:0;'>
	<input type='submit' value='All No Service Type' class='logout'>
</div>
</form>
\n";
			}
			$start += 30;
			echo "<form name='swrequests' method='POST' action='swrequests/index.php' target='_blank'>
<div id='swrequests' style='position:absolute; left:10px; top:{$start}px; z-index:0;'>
	<input type='submit' value= 'Support Web Update' class='logout'>
</div>
</form>\n";

			$start += 30;
			echo "<form name='topreport' method='POST' action='/support_web/topreport.php' target='_blank'>
<div id='nost' style='position:absolute; left:10px; top:{$start}px; z-index:0;'>
	<input type='submit' value='Top Report' class='logout'>
</div>
</form>\n";

			if($user->getPermissions() == 'admin') {
				$start += 30;
				echo "<form name='newpropform' method='POST' action='/support_web/propentry/index.php' target='_blank'>
<div id='newprop' style='position:absolute; left:10px; top:{$start}px; z-index:0;'>
	<input type='submit' value='New Property' class='logout'>
</div>
</form>\n";

				$start += 30;
				echo "<form name='createform' method='POST' action='/support_web/propentry/login/createprofile.php' target='_blank'>\n";
				echo "<div id='createprofile' style='position:absolute; left:10px; top:" . $start . "px; z-index:0;'>\n";
				echo "<input type='submit' value='Create Profile' class='logout'>\n";
				echo "</div>\n";
				echo "</form>\n";

				$start += 30;
				echo "<form name='lookupform' method='POST' action='/support_web/propentry/login/lookup.php' target='_blank'>\n";
				echo "<div id='lookup' style='position:absolute; left:10px; top:" . $start . "px; z-index:0;'>\n";
				echo "<input type='submit' value='Lookup Profile' class='logout'>\n";
				echo "</div>\n";
				echo "</form>\n";
			}
			?>
			<form name='profileform' method='POST' action='/support_web/propentry/login/profile.php' target='_blank'>
				<div id='uprofile' style='position:absolute; left:10px; top:<?php echo $start += 30; ?>px; z-index:0;'>
					<input type='submit' value='Update Profile' class='logout'>
				</div>
			</form>
			<form name='logoutform' method='POST' action='/support_web/propentry/login/logout.php'>
				<div id='logout' style='position:absolute; left:10px; top:<?php echo $start += 30; ?>px; z-index:0;'>
					<input type='submit' value='Logout' class='logout'>
				</div>
			</form>