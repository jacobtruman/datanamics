<HEAD>
<Title>
	<?php echo $ptype;?>
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<body marginwidth='0' marginheight='0' scroll='yes' vlink='#0000FF' alink='#0000FF'>
	<table class='ms-main' cellpadding='0' cellspacing='0' border='0' width='100%' height='100%'>
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
		<tr valign=top height=100%>
			<td width='118' height='435' valign='top' rowspan='2' bgcolor="#F0F0F0">
				<table>
					<tr>
						<td>
						<?php
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
						if (isset($_POST['shtype'])){
							$shtype = $_POST['shtype'];
						}else{
							$shtype = '';
						}
						?>
							<form BOTID='0' METHOD='POST' ACTION='/support_web/propentry/update/index.php'>
								<font size='2' face='Verdana'>
									Property Name
									<BR>
									<input TYPE='TEXT' NAME='name' VALUE='<?php echo $name;?>' size='20' class='formfield'>
									<BR>
									Property Phone
									<BR>
									<input TYPE='TEXT' NAME='phone' VALUE='<?php echo $phone;?>' size='20' class='formfield'>
									<BR>
<?php
$link = ado_connect( $dsn );

$sql = "SELECT DISTINCT htype FROM prop";
$res = $link->Execute($sql);

if (!isset($res)){
}else{
	echo 'Property Type';
	echo '<BR>';
	echo "<select size='1' NAME='shtype' CLASS='formfield'>";
	echo "<option value='".$shtype."'>".$shtype."</option>";
	if ($shtype != ''){
		echo "<option value=''></option>";
	}
	while (!$res->EOF){
		$htype = $res->Fields['htype']->Value;
		echo "<option value='".$htype."' class='formfield'>".$htype."</option>";
	$res->MoveNext();
	}
	$htype = '';
	echo '</select>';
ado_free_result( $res );
ado_close( $link );
}
?>
									<BR>
									<input TYPE='Submit' class='formbutton'>
									<BR>
									<BR>
									<a href='/support_web/hsiawebindex.php' target='_blank'>
										HSIA Main
									</a>
								</font>
						</td>
					</tr>
				</table>
			</td>
			<td height='19' bgcolor='#D8D8D8' align='center'>
				<font size='4' face='Times New Roman'>
					<?php echo $ptype;?>
				</font>
			</td>
		</tr>
		<tr valign=top height=100%>
			<td width='100%' height='416' valign='top' colspan='2'>
				<table border='0' width="100%">
					<?php include($root."/support_web/components/contactlinks.php");?>
				</table>