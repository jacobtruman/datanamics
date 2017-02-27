<HEAD>
<Title>
	<?php echo $ptype;?>
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<body marginwidth='0' marginheight='0' scroll='yes' vlink='#0000FF' alink='#0000FF'>
	<table class='ms-main' cellpadding='0' cellspacing='0' border='0' bordercolor='green' width='100%' height='100%'>
		<TR valign='top'>
			<TD WIDTH='100%' height='29' colspan='3'>
				<table class='ms-bannerframe' border='0' cellspacing='0' cellpadding='3' width=100%>
					<tr>
						<td nowrap valign='middle' align='left' height='30'>
						</td>
					</tr>
				</table>
			</TD>
		</TR>
		<tr>
			<td height='78' valign='top' colspan='3'>
				<?php include($root."/support_web/components/mainheader2.php");?>
			</td>
		</tr>
		<tr>
			<td valign='top' rowspan='2' bgcolor="#F0F0F0">
				<table border='0' width='250'>
					<tr>
						<td>
							<?php
								include($root.'/support_web/components/supportmenu.php');
								$start = $logoheight + $base + 130;
								echo "<div id='datanam' style='position:absolute; left:10px; top:".$start."px; z-index:0;'>";
								echo '<hr>';
								if (isset($_POST['pcode'])){
									$pcode = $_POST['pcode'];
								}else{
									$pcode = '';
								}
								if (isset($_POST['name'])){
									$name = $_POST['name'];
								}else{
									$name = '';
								}
								if (isset($_POST['gip'])){
									$gip = $_POST['gip'];
								}else{
									$gip = '';
								}
								if (isset($_POST['rtr'])){
									$rtr = $_POST['rtr'];
								}else{
									$rtr = '';
								}
								if (isset($_POST['addr'])){
									$addr = $_POST['addr'];
								}else{
									$addr = '';
								}
								if (isset($_POST['phone'])){
									$phone = $_POST['phone'];
								}else{
									$phone = '';
								}
								if (isset($_POST['special'])){
									$special = $_POST['special'];
								}else{
									$special = '';
								}
								if (isset($_POST['shtype'])){
									$shtype = $_POST['shtype'];
								}else{
									$shtype = '';
								}
							?>
							<form BOTID='0' METHOD='POST' ACTION='/support_web/forms/ResultsAdmin.php'>
								�Property Name
								<BR>
								<input TYPE='TEXT' NAME='name' VALUE='<?php echo $name;?>' size='20' class='formfield'><BR>
								Property Code
								<BR>
								<input TYPE='TEXT' NAME='pcode' VALUE='<?php echo $pcode;?>' size='20' class='formfield' STYLE='text-transform:uppercase;'><BR>
								Gateway IP
								<BR>
								<input TYPE='TEXT' NAME='gip' VALUE='<?php echo $gip;?>' size='20' class='formfield'><BR>
								Router IP
								<BR>
								<input TYPE='TEXT' NAME='rtr' VALUE='<?php echo $rtr;?>' size='20' class='formfield'><BR>
								Property Address
								<BR>
								<input TYPE='TEXT' NAME='addr' VALUE='<?php echo $addr;?>' size='20' class='formfield'><BR>
								Property Phone
								<BR>
								<input TYPE='TEXT' NAME='phone' VALUE='<?php echo $phone;?>' size='20' class='formfield'><BR>
								Specialty Search
								<BR>
								<select size='1' NAME='special' CLASS='formfield'>
									<option selected></option>
									<option value='11wireless'>Eleven Wireless</option>
									<option value='alltransitioned'>Transitioned Properties</option>
									<option value='notinnagios'>Not In Nagios</option>
									<option value='allusg'>All Nomadix</option>
									<option value='allip3'>All IP3</option>
									<option value='allsolutionip'>All Solution IP</option>
									<option value='nocoords'>No Coords</option>
								</select>
								<BR>
							<?php
								$hlink = ado_connect( $dsn );

								$hsql = "SELECT DISTINCT htype FROM prop";
								$hres = $hlink->Execute($hsql);

								if (!isset($hres)){
								}else{
									echo '�Property Type';
									echo '<BR>';
									echo "<select size='1' NAME='shtype' CLASS='formfield'>";
									echo "<option value='".$shtype."'>".$shtype."</option>";
									if ($shtype != ''){
										echo "<option value=''></option>";
									}
									while (!$hres->EOF){
										$htype = $hres->Fields['htype']->Value;
										echo "<option value='".$htype."' class='formfield'>".$htype."</option>";
										$hres->MoveNext();
									}
								$htype = '';
								echo '</select>';
								ado_free_result( $hres );
								ado_close( $hlink );
								}
							?>
								<BR>
								<input TYPE='Submit' class='formbutton'>
								<BR>
								<BR>
							</form>
							</div>
						</td>
					</tr>
				</table>
			</td>
			<td bgcolor='#D8D8D8' align='center' valign='top' class='header3' height='20'>
				<?php echo $ptype;?>
			</td>
		</tr>
		<tr valign='top'>
			<td valign='top' height='720' width=100% colspan='2'>
				<!--<table border='1' bordercolor='red' width='100%'>
					<?php //include($root."/support_web/components/contactlinks.php");?>
				</table>-->
<?php
$start += 375;
echo "<form name='nostform' method='POST' action='/support_web/tickets/index.php' target='_blank'>
<div id='nost' style='position:absolute; left:10px; top:".$start."px; z-index:0;'>
	<input type='submit' value='No Service Type' class='logout'>
	<input type='hidden' name='uname' value='".$_SESSION['a_lgn']."'>
</div>
</form>\n";
if ($_SESSION['a_perm'] == 'admin' OR $_SESSION['a_perm'] == 'mgr'){
$start += 30;
echo "<form name='allnostform' method='POST' action='/support_web/tickets/users.php' target='_blank'>
<div id='allnost' style='position:absolute; left:10px; top:".$start."px; z-index:0;'>
	<input type='submit' value='All No Service Type' class='logout'>
</div>
</form>
\n";
}
$start += 30;
echo "<form name='swrequests' method='POST' action='/support_web/swrequests/index.php' target='_blank'>
<div id='swrequests' style='position:absolute; left:10px; top:".$start."px; z-index:0;'>
	<input type='submit' value= 'Support Web Update' class='logout'>
</div>
</form>\n";
/*
$start += 30;
echo "<form name='oustanding' method='POST' action='/support_web/outstanding/index.php' target='_blank'>
<div id='nost' style='position:absolute; left:10px; top:".$start."px; z-index:0;'>
	<input type='submit' value='Outstanding Issues' class='logout'>
</div>
</form>\n";
$start += 30;
echo "<form name='assigned' method='POST' action='/support_web/outstanding/assigned.php' target='_blank'>
<div id='nost' style='position:absolute; left:10px; top:".$start."px; z-index:0;'>
	<input type='submit' value='Assigned Issues' class='logout'>
</div>
</form>\n";
*/
$start += 30;
echo "<form name='topreport' method='POST' action='/support_web/topreport.php' target='_blank'>
<div id='nost' style='position:absolute; left:10px; top:".$start."px; z-index:0;'>
	<input type='submit' value='Top Report' class='logout'>
</div>
</form>\n";

if ($_SESSION['a_perm'] == 'admin'){
$start += 30;
echo "<form name='newpropform' method='POST' action='/support_web/propentry/index.php' target='_blank'>
<div id='newprop' style='position:absolute; left:10px; top:".$start."px; z-index:0;'>
	<input type='submit' value='New Property' class='logout'>
</div>
</form>\n";

	$start += 30;
	echo "<form name='createform' method='POST' action='/support_web/propentry/login/createprofile.php' target='_blank'>\n";
	echo "<div id='createprofile' style='position:absolute; left:10px; top:".$start."px; z-index:0;'>\n";
	echo "<input type='submit' value='Create Profile' class='logout'>\n";
	echo "</div>\n";
	echo "</form>\n";

	$start += 30;
	echo "<form name='lookupform' method='POST' action='/support_web/propentry/login/lookup.php' target='_blank'>\n";
	echo "<div id='lookup' style='position:absolute; left:10px; top:".$start."px; z-index:0;'>\n";
	echo "<input type='submit' value='Lookup Profile' class='logout'>\n";
	echo "</div>\n";
	echo "</form>\n";
}
?>
<form name='profileform' method='POST' action='/support_web/propentry/login/profile.php' target='_blank'>
<div id='uprofile' style='position:absolute; left:10px; top:<?php echo $start += 30;?>px; z-index:0;'>
	<input type='submit' value='Update Profile' class='logout'>
</div>
</form>
<form name='logoutform' method='POST' action='/support_web/propentry/login/logout.php'>
<div id='logout' style='position:absolute; left:10px; top:<?php echo $start += 30;?>px; z-index:0;'>
	<input type='submit' value='Logout' class='logout'>
</div>
</form>

