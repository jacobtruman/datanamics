<?php
$ptype = 'IP Info Update';
$root = 'D:/inetpub/support';
include ($root.'/support_web/propentry/update/header.php');
$prop = $_POST['prop'];

$link = ado_connect( $dsn );

$sql = "SELECT * FROM ipscope where (prop = '".$prop."')";
$res = $link->Execute($sql);

$titles = 'Private Pool Start,Private Pool End,Public Pool Start,Public Pool End,Private Pool Subnet Mask,Public Pool Subnet Mask,Private Pool Gateway,Public Pool Gateway,DNS1,DNS2,Private Pool Title,Public Pool Title,DNS3,Second Private Pool Start,Second Private Pool End,Second Public Pool Start,Second Public Pool End,Second Private Pool Subnet Mask,Second Public Pool Subnet Mask,Second Private Pool Gateway,Second Public Pool Gateway,Second Private Pool Title,Second Public Pool Title,ISP Name,Circuit #,Date Last Modified,Update Log';
$list = 'privb,prive,pubb,pube,privmask,pubmask,privgate,pubgate,dns1,dns2,privtitle,pubtitle,dns3,priv2b,priv2e,pub2b,pub2e,priv2mask,pub2mask,priv2gate,pub2gate,priv2title,pub2title,isp_name,isp_circuit,mdate,ulog';
$fields = explode(',', $list);

if (($res->EOF) && ($res->BOF)){
//	echo "IP info is not there";
	$link2 = ado_connect( $dsn );
	$sql2 = "INSERT INTO ipscope (prop) VALUES ('".$prop."')";
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
		<TD ALIGN='right' width='25%'>
			Private Pool Title
		</TD>
		<TD width='25%'>
			<INPUT NAME='privtitle' VALUE='<?php echo $privtitle;?>' SIZE='25' CLASS='formfield'>
		</TD>
		<TD ALIGN='right' width='25%'>
			Public Pool Title
		</TD>
		<TD width='25%'>
			<INPUT NAME='pubtitle' VALUE='<?php echo $pubtitle;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Private Pool Start
		</TD>
		<TD>
			<INPUT NAME='privb' VALUE='<?php echo $privb;?>' SIZE='25' CLASS='formfield'>
		</TD>
		<TD ALIGN='right'>
			Public Pool Start
		</TD>
		<TD>
			<INPUT NAME='pubb' VALUE='<?php echo $pubb;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Private Pool End
		</TD>
		<TD>
			<INPUT NAME='prive' VALUE='<?php echo $prive;?>' SIZE='25' CLASS='formfield'>
		</TD>
		<TD ALIGN='right'>
			Public Pool End
		</TD>
		<TD>
			<INPUT NAME='pube' VALUE='<?php echo $pube;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Private Pool Subnet Mask
		</TD>
		<TD>
			<INPUT NAME='privmask' VALUE='<?php echo $privmask;?>' SIZE='25' CLASS='formfield'>
		</TD>
		<TD ALIGN='right'>
			Public Pool Subnet Mask
		</TD>
		<TD>
			<INPUT NAME='pubmask' VALUE='<?php echo $pubmask;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Private Pool Gateway
		</TD>
		<TD>
			<INPUT NAME='privgate' VALUE='<?php echo $privgate;?>' SIZE='25' CLASS='formfield'>
		</TD>
		<TD ALIGN='right'>
			Public Pool Gateway
		</TD>
		<TD>
			<INPUT NAME='pubgate' VALUE='<?php echo $pubgate;?>' SIZE='25' CLASS='formfield'>
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
		<TD ALIGN='right'>
			Second Private Pool Title
		</TD>
		<TD>
			<INPUT NAME='priv2title' VALUE='<?php echo $priv2title;?>' SIZE='25' CLASS='formfield'>
		</TD>
		<TD ALIGN='right'>
			Second Public Pool Title
		</TD>
		<TD>
			<INPUT NAME='pub2title' VALUE='<?php echo $pub2title;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Second Private Pool Start
		</TD>
		<TD>
			<INPUT NAME='priv2b' VALUE='<?php echo $priv2b;?>' SIZE='25' CLASS='formfield'>
		</TD>
		<TD ALIGN='right'>
			Second Public Pool Start
		</TD>
		<TD>
			<INPUT NAME='pub2b' VALUE='<?php echo $pub2b;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Second Private Pool End
		</TD>
		<TD>
			<INPUT NAME='priv2e' VALUE='<?php echo $priv2e;?>' SIZE='25' CLASS='formfield'>
		</TD>
		<TD ALIGN='right'>
			Second Public Pool End
		</TD>
		<TD>
			<INPUT NAME='pub2e' VALUE='<?php echo $pub2e;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Second Private Pool Subnet Mask
		</TD>
		<TD>
			<INPUT NAME='priv2mask' VALUE='<?php echo $priv2mask;?>' SIZE='25' CLASS='formfield'>
		</TD>
		<TD ALIGN='right'>
			Second Public Pool Subnet Mask
		</TD>
		<TD>
			<INPUT NAME='pub2mask' VALUE='<?php echo $pub2mask;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Second Private Pool Gateway
		</TD>
		<TD>
			<INPUT NAME='priv2gate' VALUE='<?php echo $priv2gate;?>' SIZE='25' CLASS='formfield'>
		</TD>
		<TD ALIGN='right'>
			Second Public Pool Gateway
		</TD>
		<TD>
			<INPUT NAME='pub2gate' VALUE='<?php echo $pub2gate;?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD colspan='4'>
			<BR>
		</TD>
	</TR>
		<TD ALIGN='right'>
			<a href='/support_web/propentry/isp/index.php?isp_name=<?php echo $isp_namecurr;?>' target='_blank'>ISP Name</a>
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
			Account/PIN/Circuit/DSL #
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
<?php
if($_SESSION['a_perm'] == 'admin'){
?>
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
<?php
}
?>
</TABLE>
<INPUT TYPE='hidden' VALUE='' id='isp'>
<INPUT TYPE='hidden' VALUE='' id='cuircuit'>
</FORM>
<HR>
</BODY>