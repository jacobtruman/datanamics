<?php
$ptype = 'IP Info Entry';
$root = 'D:/inetpub/support';
include ($root.'/support_web/propentry/header.php');

$prop = $_POST['prop'];
$pdb = $_POST['dbname'];
?>
<HR>
<center>
	<font face='Verdana' size='2'>
		<?php echo $ptype;?>
	</font>
</center>
<FORM METHOD='POST' action='oindex.php'>
<INPUT TYPE='hidden' NAME='mdate' VALUE='<?php echo date('m/d/Y H:i');?>'>
<BLOCKQUOTE>
<TABLE>
<TR>
<TD ALIGN='right' colspan='2'>
Property Code</TD>
<TD clospan='2'>
			<?php
			if (!isset($prop)){
				echo "<INPUT NAME='prop' SIZE='25' CLASS='formfield'>";
			}else{
				echo "<INPUT TYPE='hidden' NAME='prop' VALUE='".$prop."'>";
				echo '<B>'.$prop.'</B>';
			}
			?>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
Private Pool Title</TD>
<TD>
<INPUT NAME='privtitle' VALUE='Private:' TABINDEX='1' SIZE='25' CLASS='formfield'>
</TD>
<TD ALIGN='right'>
Public Pool Title</TD>
<TD>
<INPUT NAME='pubtitle' VALUE='Public:' TABINDEX='6' SIZE='25' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
Private Pool Start</TD>
<TD>
<INPUT NAME='privb' TABINDEX='2' SIZE='25' CLASS='formfield'>
</TD>
<TD ALIGN='right'>
Public Pool Start</TD>
<TD>
<INPUT NAME='pubb' SIZE='25' TABINDEX='7' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
Private Pool End</TD>
<TD>
<INPUT NAME='prive' TABINDEX='3' SIZE='25' CLASS='formfield'>
</TD>
<TD ALIGN='right'>
Public Pool End</TD>
<TD>
<INPUT NAME='pube' SIZE='25' TABINDEX='8' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
Private Pool Subnet Mask</TD>
<TD>
<INPUT NAME='privmask' VALUE='255.255.254.0' TABINDEX='4' SIZE='25' CLASS='formfield'>
</TD>
<TD ALIGN='right'>
Public Pool Subnet Mask</TD>
<TD>
<INPUT NAME='pubmask' TABINDEX='9' SIZE='25' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
Private Pool Gateway</TD>
<TD>
<INPUT NAME='privgate' VALUE='172.28.172.1' TABINDEX='5' SIZE='25' CLASS='formfield'>
</TD>
<TD ALIGN='right'>
Public Pool Gateway</TD>
<TD>
<INPUT NAME='pubgate' TABINDEX='10' SIZE='25' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<BR>
</TD>
<TD>
<BR>
</TD>
<TD ALIGN='right'>
<BR>
</TD>
<TD>
<BR>
</TD>
</TR>
<TR>
<TD ALIGN='right' colspan='2'>
DNS1</TD>
<TD>
<INPUT NAME='dns1' VALUE='12.127.16.67' TABINDEX='11' SIZE='25' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right' colspan='2'>
DNS2</TD>
<TD>
<INPUT NAME='dns2' VALUE='12.127.17.71' TABINDEX='12' SIZE='25' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right' colspan='2'>
DNS3</TD>
<TD>
<INPUT NAME='dns3' TABINDEX='13' SIZE='25' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<BR>
</TD>
<TD>
<BR>
</TD>
<TD ALIGN='right'>
<BR>
</TD>
<TD>
<BR>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
Second Private Pool Title</TD>
<TD>
<INPUT NAME='priv2title' TABINDEX='14' SIZE='25' CLASS='formfield'>
</TD>
<TD ALIGN='right'>
Second Public Pool Title</TD>
<TD>
<INPUT NAME='pub2title' TABINDEX='19' SIZE='25' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
Second Private Pool Start</TD>
<TD>
<INPUT NAME='priv2b' SIZE='25' TABINDEX='15' CLASS='formfield'>
</TD>
<TD ALIGN='right'>
Second Public Pool Start</TD>
<TD>
<INPUT NAME='pub2b' SIZE='25' TABINDEX='20' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
Second Private Pool End</TD>
<TD>
<INPUT NAME='priv2e' SIZE='25' TABINDEX='16' CLASS='formfield'>
</TD>
<TD ALIGN='right'>
Second Public Pool End</TD>
<TD>
<INPUT NAME='pub2e' SIZE='25' TABINDEX='21' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
Second Private Pool Subnet Mask</TD>
<TD>
<INPUT NAME='priv2mask' TABINDEX='17' SIZE='25' CLASS='formfield'>
</TD>
<TD ALIGN='right'>
Second Public Pool Subnet Mask</TD>
<TD>
<INPUT NAME='pub2mask' TABINDEX='22' SIZE='25' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
Second Private Pool Gateway</TD>
<TD>
<INPUT NAME='priv2gate' TABINDEX='18' SIZE='25' CLASS='formfield'>
</TD>
<TD ALIGN='right'>
Second Public Pool Gateway</TD>
<TD>
<INPUT NAME='pub2gate' TABINDEX='23' SIZE='25' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD colspan='4' align='center'>
<BR>
<b>
ISP Information
</b>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<a href='/support_web/propentry/isp/index.php' target='_blank'>ISP Name</a>
</TD>
<TD>
	<?php
	$dtype = "Access";
	$dsn = $root.'/support_web/fpdb/propinfo.mdb';
	$link = ado_connect($dsn,$dtype);
	$sql = "SELECT DISTINCT * FROM isp ORDER BY isp_name";
	$res = $link->Execute($sql);

	if (!isset($res)){
	}else{
		echo "<select size='1' NAME='isp_name' TABINDEX='24' CLASS='formfield'>";
		echo "<option selected></option>";
		if ($shtype != ''){
			echo "<option value=''></option>";
		}
		while (!$res->EOF){
			$isp_name = $res->Fields['isp_name']->Value;
			$isp_number = $res->Fields['isp_number']->Value;
			echo "<option value='".$isp_name."' class='formfield'>".$isp_name." - ".$isp_number."</option>";
			$res->MoveNext();
		}
		$htype = '';
		echo '</select>';
	}
	ado_free_result( $res );
	ado_close( $link );
	?>
</TD>
<td colspan=2>
</td>
</TR>
<TR>
<TD ALIGN='right'>
Account/PIN/Circuit/DSL #</TD>
<TD>
<INPUT NAME='isp_circuit' TABINDEX='25' SIZE='25' CLASS='formfield'>
</TD>
</TD>
<td colspan=2>
</TD>
</TR>
<TR>
<TD colspan='4' align='center'>
<BR>
<INPUT TYPE='submit' VALUE='Submit' TABINDEX='26' CLASS='formbutton'>
<INPUT TYPE='reset' VALUE='Reset' TABINDEX='27' CLASS='formbutton'>
</FORM>
</TD>
</TR>
</TABLE>
</BLOCKQUOTE>
<HR>
</BODY>
<?php
if (isset($prop)){

$link = ado_connect( $dsn );

$table = 'contact';
include ("insDB.php");

ado_free_result( $res );
ado_close( $link );
}
?>