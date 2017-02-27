<?php
parse_str($_SERVER['QUERY_STRING'],$vars);
$isp_name = $vars['isp_name'];

if (!isset($isp_name) OR $isp_name == ''){
	$pagetype = 'create';
	$ptype = 'IP Info Entry';
}else{
	$pagetype = 'update';
	$ptype = 'ISP Info Update';
}

$root = 'D:/inetpub/support';
include ($root.'/support_web/propentry/isp/header.php');

if ($pagetype == 'update'){
	
	$link = ado_connect( $dsn );

	$sql = "SELECT * FROM isp where (isp_name = '".$isp_name."')";
	$res = $link->Execute($sql);

	$isp_number = $res->Fields['isp_number']->Value;
	$isp_contact = $res->Fields['isp_contact']->Value;
	$isp_hours = $res->Fields['isp_hours']->Value;
	$mdate = $res->Fields['mdate']->Value;
	$isp_notes = $res->Fields['isp_notes']->Value;

	ado_free_result( $res );
	ado_close( $link );
}
?>
	<FORM METHOD='POST' name='formname' action='res.php'>
	<INPUT TYPE='hidden' NAME='mdate' VALUE='<?php echo date('m/d/Y H:i');?>'>
<BLOCKQUOTE>
<TABLE align='center' border='0' cellpadding='0' cellspacing='4'>
	<TR>
		<TD colspan='2'>
			<BR>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			ISP Name
		</TD>
		<TD>
			<?php
			if ($pagetype == 'create'){
				echo "<INPUT NAME='isp_name' SIZE='25' CLASS='formfield'>";
				echo "<INPUT TYPE='hidden' NAME='page' VALUE='create'>";
			}else{
				echo "<INPUT NAME='isp_name' VALUE='".$isp_name."' SIZE='25' CLASS='formfield'>";
				echo "<INPUT TYPE='hidden' NAME='page' VALUE='update'>";
			}
			?>
		</TD>
		<TD colspan='2'>
			<BR>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			ISP Phone Number
		</TD>
		<TD>
			<INPUT NAME='isp_number' VALUE='<?php echo $isp_number;?>' SIZE='25' CLASS='formfield'>
		</TD>
		<TD colspan='2'>
			<BR>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			ISP Contact
		</TD>
		<TD>
			<INPUT NAME='isp_contact' VALUE='<?php echo $isp_contact;?>' SIZE='25' CLASS='formfield'>
		</TD>
		<TD colspan='2'>
			<BR>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			ISP Hours
		</TD>
		<TD>
			<INPUT NAME='isp_hours' VALUE='<?php echo $isp_hours;?>' SIZE='25' CLASS='formfield'>
		</TD>
		<TD colspan='2'>
			<BR>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='center' colspan='3'>
			Notes
		</TD>
	</TR>
	<TR>
		<TD ALIGN='center' colspan='3'>
			<TEXTAREA NAME='isp_notes' ROWS='10' COLS='60' WRAP='PHYSICAL' CLASS='formfield'><?php echo $isp_notes;?></TEXTAREA>
		</TD>
	</TR>
	<TR>
		<TD colspan='2' align='center'>
			<BR>
			<?php
				echo "<INPUT TYPE='submit' VALUE='".ucfirst($pagetype)."' CLASS='formbutton'>";
			?>
			<INPUT TYPE='reset' VALUE='Reset' CLASS='formbutton'>
			</FORM>
		</TD>
	</TR>
</TABLE>
</BLOCKQUOTE>
<HR>
</BODY>