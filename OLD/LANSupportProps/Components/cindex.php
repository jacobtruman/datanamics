<?php
//ini_set ('display_errors', 'on');
$ptype = 'Contact Info Update';
$root = 'D:/inetpub/support';
include ($root.'/support_web/LANSupportProps/components/headeradmin.php');
$prop = $_POST['prop'];

$link = ado_connect( $dsn );

$sql = "SELECT * FROM contact where (prop = '".$prop."')";
$res = $link->Execute($sql);

$titles = 'Contact Name,Contact Email,Street Address,City State Zip,Front Desk Phone,Contact Phone,Contact Cell,fax,2nd Contact Name,2nd Contact Email,2nd Contact Phone,2nd Contact Cell,Contact Notes,Latitude,Longitude,Date Last Modified,Update Log';
$list = 'contact,email,staddr,csz,phone,cphone,cell,fax,contact2,email2,cphone2,cell2,cnotes,lat,lon,mdate,ulog';
$fields = explode(',', $list);

if (($res->EOF) && ($res->BOF)){
//	echo "Contact info is not there";
	$link2 = ado_connect( $dsn );
	$sql2 = "INSERT INTO contact (prop) VALUES ('".$prop."')";
	$res2 = $link->Execute($sql2);
	ado_free_result( $res2 );
	ado_close( $link2 );
	$res = $link->Execute($sql);
}else{
//	echo "Contact info is there";
}

for ($i = 0; $i < count($fields); $i++){
	$$fields[$i] = $res->Fields[$fields[$i]]->Value;
}

ado_free_result( $res );
ado_close( $link );
?>

	<FORM METHOD='POST' name='formname' action='res.php'>
	<INPUT TYPE='hidden' NAME='table' VALUE='contact'>
	<INPUT TYPE='hidden' NAME='log' VALUE='ulog'>
	<INPUT TYPE='hidden' NAME='prop' VALUE='<?php echo $prop;?>'>
	<INPUT TYPE='hidden' NAME='proppw' VALUE='<?php echo $proppw;?>'>
	<INPUT TYPE='hidden' NAME='mdate' VALUE='<?php echo date('m/d/Y H:i');?>'>
	<INPUT TYPE='hidden' NAME='titles' VALUE='<?php echo $titles;?>'>
	<INPUT TYPE='hidden' NAME='list' VALUE='<?php echo $list;?>'>
	<?php
		for ($i = 0; $i < count($fields); $i++){
			echo "<INPUT TYPE='hidden' NAME='OLD".$fields[$i]."' VALUE='".$$fields[$i]."'>\n";
		}
	?>
<BLOCKQUOTE>
<TABLE border='0' cellpadding='2' cellspacing='2' align='center' width='80%' valign='top'>
	<tr>
		<td align='right' width='50%'>
			Property Code
		</td>
		<td width='50%'>
			<b>
				<?php echo $prop;?>
			</b>
		</td>
	</tr>
	<tr>
		<td align='right'>
			Contact Name
		</td>
		<td>
			<INPUT NAME='contact' SIZE='25' VALUE='<?php echo $contact;?>' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right'>
			Contact Email
		</td>
		<td>
			<INPUT NAME='email' SIZE='25' VALUE='<?php echo $email;?>' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right'>
			Street Address
		</td>
		<td>
			<INPUT NAME='staddr' SIZE='25' VALUE='<?php echo $staddr;?>' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right'>
			City, State Zip
		</td>
		<td>
			<INPUT NAME='csz' SIZE='25' VALUE='<?php echo $csz;?>' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right'>
			Front Desk Phone
		</td>
		<td>
			<INPUT NAME='phone' SIZE='25' VALUE='<?php echo $phone;?>' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right'>
			Contact Phone
		</td>
		<td>
			<INPUT NAME='cphone' SIZE='25' VALUE='<?php echo $cphone;?>' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right'>
			Contact Cell
		</td>
		<td>
			<INPUT NAME='cell' SIZE='25' VALUE='<?php echo $cell;?>' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right'>
			Fax
		</td>
		<td>
			<INPUT NAME='fax' SIZE='25' VALUE='<?php echo $fax;?>' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td colspan='2'>
			<BR>
		</td>
	</tr>
	<tr>
		<td align='right'>
			2nd Contact Name
		</td>
		<td>
			<INPUT NAME='contact2' SIZE='25' VALUE='<?php echo $contact2;?>' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right'>
			2nd Contact email
		</td>
		<td>
			<INPUT NAME='email2' SIZE='25' VALUE='<?php echo $email2;?>' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right'>
			2nd Contact Phone
		</td>
		<td>
			<INPUT NAME='cphone2' SIZE='25' VALUE='<?php echo $cphone2;?>' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right'>
			2nd Contact Cell
		</td>
		<td>
			<INPUT NAME='cell2' SIZE='25' VALUE='<?php echo $cell2;?>' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='center' colspan='2'>
			Contact Notes
		</td>
	</tr>
	<tr>
		<td align='center' colspan='2'>
			<TEXTAREA NAME='cnotes' ROWS='10' COLS='60' WRAP='PHYSICAL' CLASS='formfield'><?php echo $cnotes;?></TEXTAREA>
		</td>
	</tr>
	<tr>
		<td align='right'>
			Latitude
		</td>
		<td>
			<INPUT NAME='lat' SIZE='25' VALUE='<?php echo $lat;?>' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right'>
			Longitude
		</td>
		<td>
			<INPUT NAME='lon' SIZE='25' VALUE='<?php echo $lon;?>' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td colspan='2'>
			<BR>
		</td>
	</tr>
	<tr>
		<td colspan='2' align='center'>
			<INPUT TYPE='submit' VALUE='Update' CLASS='formbutton'>
			<INPUT TYPE='reset' VALUE='Reset' CLASS='formbutton'>
		</td>
	</tr>
</FORM>
	<tr>
		<td colspan='2'>
			<BR>
		</td>
	</tr>
	<tr>
		<td align='center' colspan='2'>
			<b>
				Log
			</b>
		</td>
	</tr>
	<tr>
		<td colspan='2'>
			<?php echo $ulog;?>
		</td>
	</tr>
</TABLE>
</BLOCKQUOTE>
<HR>
</BODY>