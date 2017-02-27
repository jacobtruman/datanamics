<?php
//ini_set ('display_errors', 'on');
?>
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
				<?php include($root."/support_web/LANSupportProps/components/mainheader.php");?>
			</td>
		</tr>
		<tr>
			<td valign='top' rowspan='2' bgcolor="#F0F0F0">
				<table border='0' width='180'>
					<tr>
						<td>
							<?php
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
								if (isset($_POST['phone'])){
									$phone = $_POST['phone'];
								}else{
									$phone = '';
								}
							?>
							<form BOTID='0' METHOD='POST' ACTION='/support_web/LANSupportProps/Components/ResultsAdmin.php'>
								�Property Name
								<BR>
								<input TYPE='TEXT' NAME='name' VALUE='<?php echo $name;?>' size='20' class='formfield'><BR>
								Property Code
								<BR>
								<input TYPE='TEXT' NAME='pcode' VALUE='<?php echo $pcode;?>' size='20' class='formfield' STYLE='text-transform:uppercase;'><BR>
								Property Phone
								<BR>
								<input TYPE='TEXT' NAME='phone' VALUE='<?php echo $phone;?>' size='20' class='formfield'><BR>
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
<?php
$start += 375;
echo "<form name='swrequests' method='POST' action='/support_web/swrequests/index.php' target='_blank'>
<div id='swrequests' style='position:absolute; left:10px; top:".$start."px; z-index:0;'>
	<input type='submit' value= 'Support Web Update' class='logout'>
</div>
</form>\n";
/*$start += 30;
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

if ($_SESSION['a_perm'] == 'admin'){
	$start += 30;
	echo "<form name='newpropform' method='POST' action='/support_web/propentry/index.php' target='_blank'>
		<div id='newprop' style='position:absolute; left:10px; top:".$start."px; z-index:0;'>
			<input type='submit' value='New Property' class='logout'>
		</div>
	</form>\n";
}*/
?>
<form name='logoutform' method='POST' action='/support_web/LANSupportProps/Components/logout.php'>
	<div id='logout' style='position:absolute; left:10px; top:<?php echo $start += 30;?>px; z-index:0;'>
		<input type='submit' value='Logout' class='logout'>
	</div>
</form>
