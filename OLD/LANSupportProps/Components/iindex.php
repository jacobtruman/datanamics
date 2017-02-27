<?php
$ptype = 'IP Info Update';
$root = 'D:/inetpub/support';
include ($root.'/support_web/LANSupportProps/components/headeradmin.php');
$prop = $_POST['prop'];

$link = ado_connect( $dsn );

$sql = "SELECT * FROM iptable where (prop = '".$prop."')";
$res = $link->Execute($sql);

$titles = 'DHCP Pool Start,DHCP Pool End,DHCP Subnet Mask,DHCP Pool Gateway,DNS1,DNS2,DNS3,ISP Name,Circuit #,Date Last Modified,Update Log';
$list = 'dhcpb,dhcpe,dhcpmask,dhcpgate,dns1,dns2,dns3,isp_name,isp_circuit,mdate,ulog';
$fields = explode(',', $list);

if (($res->EOF) && ($res->BOF)){
//	echo "IP info is not there";
	$link2 = ado_connect( $dsn );
	$sql2 = "INSERT INTO iptable (prop) VALUES ('".$prop."')";
	$res2 = $link->Execute($sql2);
	ado_free_result( $res2 );
	ado_close( $link2 );
	$res = $link->Execute($sql);
}else{
//	echo "IP info is there";
}

for ($i = 0; $i < count($fields); $i++){
	$$fields[$i] = $res->Fields[$fields[$i]]->Value;
	if ($fields[$i] == 'isp_name'){
		$isp_namecurr = $res->Fields[$fields[$i]]->Value;
	}
}

ado_free_result( $res );
ado_close( $link );
?>
	<FORM METHOD='POST' name='formname' action='res.php'>
	<INPUT TYPE='hidden' NAME='table' VALUE='ipscope'>
	<INPUT TYPE='hidden' NAME='log' VALUE='ulog'>
	<INPUT TYPE='hidden' NAME='prop' VALUE='<?php echo $prop;?>'>
	<INPUT TYPE='hidden' NAME='mdate' VALUE='<?php echo date('m/d/Y H:i');?>'>
	<INPUT TYPE='hidden' NAME='titles' VALUE='<?php echo $titles;?>'>
	<INPUT TYPE='hidden' NAME='list' VALUE='<?php echo $list;?>'>
	<?php
		for ($i = 0; $i < count($fields); $i++){
			echo "<INPUT TYPE='hidden' NAME='OLD".$fields[$i]."' VALUE='".$$fields[$i]."'>\n";
		}
	?>
<TABLE border='0' cellpadding='2' cellspacing='2' align='center' width='80%' valign='top'>
	<TR>
		<TD ALIGN='right' width='25%'>
			Property Code
		</TD>
		<TD width='25%'>
			<b>
				<?php echo $prop;?>
			</b>
		</TD>
		<TD colspan='2' width='50%'>
			<BR>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			DHCP Pool Start
		</TD>
		<TD>
			<INPUT NAME='dhcpb' VALUE='<?php echo $dhcpb;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			DHCP Pool End
		</TD>
		<TD>
			<INPUT NAME='dhcpe' VALUE='<?php echo $dhcpe;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			DHCP Pool Subnet Mask
		</TD>
		<TD>
			<INPUT NAME='dhcpmask' VALUE='<?php echo $dhcpmask;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			DHCP Pool Gateway
		</TD>
		<TD>
			<INPUT NAME='dhcpgate' VALUE='<?php echo $dhcpgate;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD colspan='4'>
			<BR>
		</TD>
	</TR>
	<TR>	
		<TD ALIGN='right' colspan='2' width='50%'>
			DNS1	
		</TD>
		<TD colspan='2' width='50%'>
			<INPUT NAME='dns1' VALUE='<?php echo $dns1;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right' colspan='2'>
			DNS2
		</TD>
		<TD colspan='2'>
			<INPUT NAME='dns2' VALUE='<?php echo $dns2;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right' colspan='2'>
			DNS3
		</TD>
		<TD colspan='2'>
			<INPUT NAME='dns3' VALUE='<?php echo $dns3;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD colspan='4'>
			<BR>
		</TD>
	</TR>
	<TR>
		<TD colspan='4'>
			<BR>
		</TD>
	</TR>
		<TD ALIGN='right'>
			<a href='/support_web/LANSupportProps/Components/isp/index.php?isp_name=<?php echo $isp_namecurr;?>' target='_blank'>ISP Name</a>
		</TD>
		<TD colspan='3'>
			<?php
			$link = ado_connect( $dsn );
			$sql = "SELECT * FROM isp ORDER BY isp_name";
			$res = $link->Execute($sql);

			if (!isset($res)){
				}else{
					echo "<select size='1' NAME='isp_name' CLASS='formfield'>";
					echo "<option value='".$isp_namecurr."' class='formfield' selected>".$isp_namecurr." (Current ISP)</option>";
					echo "<option value=''></option>";
				if ($shtype != ''){
					echo "<option value=''></option>";
				}
				while (!$res->EOF){
					$isp_name = $res->Fields['isp_name']->Value;
					$isp_number = $res->Fields['isp_number']->Value;
					echo "<option value='".$isp_name."' class='formfield'>".$isp_name." - ".$isp_number."</option>";
					$res->MoveNext();
				}
				echo '</select>';
			}
			ado_free_result( $res );
			ado_close( $link );
			?>
		</TD>
	</tr>
	<TR>
		<TD ALIGN='right'>
			Circuit #
		</TD>
		<TD colspan='3'>
			<INPUT NAME='isp_circuit' VALUE='<?php echo $isp_circuit;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD colspan='4'>
			<BR>
		</TD>
	</TR>
	<TR>
		<TD colspan='4' align='center'>
			<INPUT TYPE='submit' VALUE='Update' CLASS='formbutton'>
			<INPUT TYPE='reset' VALUE='Reset' CLASS='formbutton'>
		</TD>
	</TR>
	<TR>
		<TD colspan='2'>
			<BR>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='center' colspan='4'>
			<b>
				Log
			</b>
		</TD>
	</tr>
	<tr>
		<TD colspan='4'>
			<?php echo $ulog;?>
		</TD>
	</TR>
</TABLE>
<INPUT TYPE='hidden' VALUE='' id='isp'>
<INPUT TYPE='hidden' VALUE='' id='cuircuit'>
</FORM>
<HR>
</BODY>