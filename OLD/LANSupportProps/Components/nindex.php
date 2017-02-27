<?php
$ptype = 'Notes Update';
$root = 'D:/inetpub/support';
include ($root.'/support_web/LANSupportProps/components/headeradmin.php');
$prop = $_POST['prop'];

$link = ado_connect( $dsn );

$sql = "SELECT * FROM prop where (prop = '".$prop."')";
$res = $link->Execute($sql);

$titles = 'Notes,Special Notes,Date Last Modified,Update Log';
$list = 'notes,spnote,mdate,nulog';
$fields = explode(',', $list);
$ftitles = explode(',', $titles);

for ($i = 0; $i < count($fields); $i++){
	$$fields[$i] = $res->Fields[$fields[$i]]->Value;
}
ado_free_result( $res );
ado_close( $link );
?>

	<FORM METHOD='POST' name='formname' action='res.php'>
	<INPUT TYPE='hidden' NAME='table' VALUE='prop'>
	<INPUT TYPE='hidden' NAME='log' VALUE='nulog'>
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
<?php

for ($i = 0; $i < count($fields); $i++){
	if (($fields[$i] != 'nulog') && ($fields[$i] != 'mdate')){
	echo "<TR>
		<TD ALIGN='center'>
			<b>
				".$ftitles[$i]."
			</b>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='center'>
			<TEXTAREA NAME='".$fields[$i]."' ROWS='10' COLS='60' WRAP='PHYSICAL' CLASS='formfield'>".$$fields[$i]."</TEXTAREA>
		</TD>
	</TR>\n";
	}
}
?>
	<TR>
		<TD align='center'>
			<BR>
			<INPUT TYPE='submit' VALUE='Update' CLASS='formbutton'>
			<INPUT TYPE='reset' VALUE='Reset' CLASS='formbutton'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='center' colspan='2'>
			<b>
				Log
			</b>
		</TD>
	</tr>
	<tr>
		<TD colspan='2'>
			<?php echo nl2br($nulog);?>
		</TD>
	</TR>
</TABLE>
</FORM>
</BLOCKQUOTE>
<HR>
</BODY>
