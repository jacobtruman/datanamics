<?php
$ptype = 'Property Info Entry';
$root = 'D:/inetpub/support';
include ($root.'/support_web/propentry/header.php');
?>
<script>
function vcheck(formname)
{
var ptype = formname.htype.options[formname.htype.selectedIndex].value
var ccb = formname.ccbill.options[formname.ccbill.selectedIndex].value
var utype = formname.gtype.options[formname.gtype.selectedIndex].value

  if (formname.prop.value == '')
  {
    alert('Please enter a Property Code in the "Property Code" field.');
    formname.prop.focus();
    return (false);
  }
  if (formname.pname.value == '')
  {
    alert('Please enter a Property Name in the "Property Name" field.');
    formname.pname.focus();
    return (false);
  }
  if (ptype == '')
  {
    alert('Please select a Property Brand from the "Property Brand" field.');
    formname.htype.focus();
    return (false);
  }
  if (utype == '')
  {
    alert('Please select a Gateway Type from the "Gateway Type" field.');
    formname.gtype.focus();
    return (false);
  }
  if (formname.ipaddr.value == '')
  {
    alert('Please enter an IP Address in the "Gateway Address" field.');
    formname.ipaddr.focus();
    return (false);
  }
  if (ccb == '')
  {
    alert('Please select a Credit Card Billing type from the "Credit Card Billing" field.');
    formname.ccbill.focus();
    return (false);
  }
  return (true);
}
</script>
<HR>
<center>
	<font face='Verdana' size='2'>
		<?php echo $ptype;?>
	</font>
</center>
	<FORM METHOD='POST' name='formname' action='uindex.php' onsubmit='return vcheck(this)'>
<BLOCKQUOTE>
<TABLE border='0' cellpadding='2' cellspacing='2' align='center'>
	<TR>
		<TD ALIGN='right'>
			Property Code
		</TD>
		<TD>
			<INPUT NAME='prop' SIZE='5' MAXLEN='5' VALUE='' CLASS='formfield' style='text-transform: uppercase;'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Name
		</TD>
		<TD>
			<INPUT NAME='pname' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Property Brand
		</TD>
		<TD>
			<select size='1' name='htype' CLASS='formfield'>
				<option value='' selected>Select One</option>
				<option value='Hampton Inn'>Hampton Inn</option>
				<option value='Comfort Inn'>Comfort Inn</option>
				<option value='Doubletree'>Doubletree</option>
				<option value='Embassy Suites'>Embassy Suites</option>
				<option value='Embassy Suites'>Fairfield Inn</option>
				<option value='Keswick Hall'>Keswick Hall</option>
				<option value='Hilton'>Hilton</option>
				<option value='Hilton Garden Inn'>Hilton Garden Inn</option>
				<option value='Holiday Inn'>Holiday Inn</option>
				<option value='Holiday Inn Express'>Holiday Inn Express</option>
				<option value='Homestead Suites'>Homestead Suites</option>
				<option value='Homewood Suites'>Homewood Suites</option>
				<option value='Red Lion'>Red Lion</option>
				<option value='Townplace Suites'>Sheraton Four Points</option>
				<option value='Townplace Suites'>Townplace Suites</option>
				<option value='Walnut Knolls'>Walnut Knolls</option>
				<option value='Westin'>Westin</option>
			</select>
		</TD>
	</TR>
	<TR>
	<TR>
		<TD ALIGN='right'>
			Gateway Type
		</TD>
		<TD>
			<select size='1' name='gtype' CLASS='formfield'>
				<option value='' selected>Select One</option>
				<option value='USG I'>USG I</option>
				<option value='USG II'>USG II</option>
				<option value='HSG'>HSG</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Gateway Address
		</TD>
		<TD>
			<INPUT NAME='ipaddr' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Login
		</TD>
		<TD>
			<INPUT NAME='lgn' VALUE='datadmin' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Password
		</TD>
		<TD>
			<INPUT NAME='pswd' VALUE='zinck2240' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Firmware
		</TD>
		<TD>
			<INPUT NAME='firm' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Gateway ID
		</TD>
		<TD>
			<INPUT NAME='uid' VALUE='' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Credit Card Billing
		</TD>
		<TD>
			<select size='1' name='ccbill' CLASS='formfield'>
				<option value='' selected>Select One</option>
				<option value='Yes'>Yes</option>
				<option value='No'>No</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD colspan='2' align='center'>
			<BR>
			<INPUT TYPE='submit' VALUE='Submit' CLASS='formbutton'>
			<INPUT TYPE='reset' VALUE='Reset' CLASS='formbutton'>
		</TD>
	</TR>
</TABLE>
</FORM>
</BLOCKQUOTE>
<HR>
</BODY>
<?php
$prop = $_POST['prop'];
if (isset($prop)){

$link = ado_connect( $dsn );

$sql = "INSERT INTO Gateways (Type, [Property Brand], Login, Password, Property, [USG ID], [Credit Card Billing], Firmware, [IP Address], CTYHO) VALUES ('".$_POST['gtype']."', '".$_POST['htype']."', '".$_POST['lgn']."', '".$_POST['pswd']."', '".$_POST['pname']."', '".$_POST['uid']."', '".$_POST['ccbill']."', '".$_POST['firm']."', '".$_POST['ipaddr']."', '".strtoupper($_POST['prop'])."')";
//echo $sql;
$res = $link->Execute($sql);

ado_free_result( $res );
ado_close( $link );
}
?>