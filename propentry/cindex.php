<?php
$ptype = 'Contact Info Entry';
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
<FORM METHOD='POST' action='iindex.php'>
<INPUT TYPE='hidden' NAME='mdate' VALUE='<?php echo date('m/d/Y H:i');?>'>
<BLOCKQUOTE>
<TABLE align='center'>
	<TR>
		<TD ALIGN='right'>
			Property Code
		</TD>
		<TD>
			<?php
			if ($prop == ''){
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
			Contact Name
		</TD>
		<TD>
			<INPUT NAME='contact' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Contact Email
		</TD>
		<TD>
			<INPUT NAME='email' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Street Address
		</TD>
		<TD>
			<INPUT NAME='staddr' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			City, State Zip
		</TD>
		<TD>
			<INPUT NAME='csz' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Front Desk Phone
		</TD>
		<TD>
			<INPUT NAME='phone' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Contact Phone
		</TD>
		<TD>
			<INPUT NAME='cphone' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Contact Cell
		</TD>
		<TD>
			<INPUT NAME='cell' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Fax
		</TD>
		<TD>
			<INPUT NAME='fax' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD>
			<BR>
		</TD>
		<TD>
			<BR>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			2nd Contact Name
		</TD>
		<TD>
			<INPUT NAME='contact2' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			2nd Contact email
		</TD>
		<TD>
			<INPUT NAME='email2' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			2nd Contact Phone
		</TD>
		<TD>
			<INPUT NAME='cphone2' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			2nd Contact Cell
		</TD>
		<TD>
			<INPUT NAME='cell2' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>	
		<TD colspan='2' align='center'>
			<BR>
			<INPUT TYPE=SUBMIT VALUE='Submit' CLASS='formbutton'>
			<INPUT TYPE=RESET VALUE='Reset' CLASS='formbutton'>
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

$table = 'equipment';
include ("insDB.php");

ado_free_result( $res );
ado_close( $link );
}
?>