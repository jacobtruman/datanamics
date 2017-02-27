<%
ptype = "Property Info"
CTYHO = request.querystring("CTYHO")
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
CTYHO = Request("CTYHO")

	fp_rs.Open "PROPERTYINFO", fp_conn, 1, 3, 2 ' adOpenKeySet, adLockOptimistic, adCmdTable
	FP_DumpError strErrorUrl, "Cannot open record set"

	fp_rs.AddNew
	FP_DumpError strErrorUrl, "Cannot add new record set to the database"
	Dim arFormFields0(22)
	Dim arFormDBFields0(22)
	Dim arFormValues0(22)

	arFormFields0(0) = "GROOMS"
	arFormDBFields0(0) = "GROOMS"
	arFormValues0(0) = Request("GROOMS")
	arFormFields0(1) = "PMS"
	arFormDBFields0(1) = "PMS"
	arFormValues0(1) = Request("PMS")
	arFormFields0(2) = "BILL_GUEST_INF"
	arFormDBFields0(2) = "BILL_GUEST_INF"
	arFormValues0(2) = Request("BILL_GUEST_INF")
	arFormFields0(3) = "SEC_PORT"
	arFormDBFields0(3) = "SEC_PORT"
	arFormValues0(3) = Request("SEC_PORT")
	arFormFields0(4) = "BILL_MEET"
	arFormDBFields0(4) = "BILL_MEET"
	arFormValues0(4) = Request("BILL_MEET")
	arFormFields0(5) = "BILL_WIRE"
	arFormDBFields0(5) = "BILL_WIRE"
	arFormValues0(5) = Request("BILL_WIRE")
	arFormFields0(6) = "SUPLEVEL"
	arFormDBFields0(6) = "SUPLEVEL"
	arFormValues0(6) = Request("SUPLEVEL")
	arFormFields0(7) = "BILL_GUEST"
	arFormDBFields0(7) = "BILL_GUEST"
	arFormValues0(7) = Request("BILL_GUEST")
	arFormFields0(8) = "MROOMS_JACKS"
	arFormDBFields0(8) = "MROOM_JACKS"
	arFormValues0(8) = Request("MROOMS_JACKS")
	arFormFields0(9) = "BILL_MEET_INF"
	arFormDBFields0(9) = "BILL_MEET_INF"
	arFormValues0(9) = Request("BILL_MEET_INF")
	arFormFields0(10) = "MROOMS_MEDIA"
	arFormDBFields0(10) = "MROOMS_MEDIA"
	arFormValues0(10) = Request("MROOMS_MEDIA")
	arFormFields0(11) = "BILL_WIRE_INF"
	arFormDBFields0(11) = "BILL_WIRE_INF"
	arFormValues0(11) = Request("BILL_WIRE_INF")
	arFormFields0(12) = "SUPAREAS"
	arFormDBFields0(12) = "SUPAREAS"
	arFormValues0(12) = Request("SUPAREAS")
	arFormFields0(13) = "CTYHO"
	arFormDBFields0(13) = "CTYHO"
	arFormValues0(13) = Request("CTYHO")
	arFormFields0(14) = "MROOMS"
	arFormDBFields0(14) = "MROOMS"
	arFormValues0(14) = Request("MROOMS")
	arFormFields0(15) = "BILL_GUEST_PLAN"
	arFormDBFields0(15) = "BILL_GUEST_PLAN"
	arFormValues0(15) = Request("BILL_GUEST_PLAN")
	arFormFields0(16) = "VPNSUP"
	arFormDBFields0(16) = "VPNSUP"
	arFormValues0(16) = Request("VPNSUP")
	arFormFields0(17) = "MRL2_DEVICE"
	arFormDBFields0(17) = "MRL2_DEVICE"
	arFormValues0(17) = Request("MRL2_DEVICE")
	arFormFields0(18) = "GROOMS_MEDIA"
	arFormDBFields0(18) = "GROOMS_MEDIA"
	arFormValues0(18) = Request("GROOMS_MEDIA")
	arFormFields0(19) = "WIRELESS"
	arFormDBFields0(19) = "WIRELESS"
	arFormValues0(19) = Request("WIRELESS")
	arFormFields0(20) = "BILL_WIRE_PLAN"
	arFormDBFields0(20) = "BILL_WIRE_PLAN"
	arFormValues0(20) = Request("BILL_WIRE_PLAN")
	arFormFields0(21) = "VPN"
	arFormDBFields0(21) = "VPN"
	arFormValues0(21) = Request("VPN")

nextpage = "inventory.asp?CTYHO="&CTYHO
%>
<!--#include virtual='/support_web/propentry/new/db/bottom.asp'-->
<!--#include virtual='/support_web/propentry/new/header.asp'-->
<script>
function vcheck(formname)
{

  if ((formname.CTYHO.value == "") || (formname.CTYHO.value.length < 4) || (formname.CTYHO.value.length > 5))
  {
    alert('Please enter at least 4 and no more than 5 characters in the "CTYHO" field.');
    formname.CTYHO.focus();
    return (false);
  }

  if ((formname.GROOMS.value == "") || (formname.GROOMS.value.length < 1) || (formname.GROOMS.value.length > 5))
  {
    alert('Please enter at least 1 and no more than 5 characters in the "GROOMS" field.');
    formname.GROOMS.focus();
    return (false);
  }

  var checkOK = "0123456789-.,";
  var checkStr = formname.GROOMS.value;
  var allValid = true;
  var decPoints = 0;
  var allNum = "";
  for (i = 0;  i < checkStr.length;  i++)
  {
    ch = checkStr.charAt(i);
    for (j = 0;  j < checkOK.length;  j++)
      if (ch == checkOK.charAt(j))
        break;
    if (j == checkOK.length)
    {
      allValid = false;
      break;
    }
    if (ch == ".")
    {
      allNum += ".";
      decPoints++;
    }
    else if (ch != ",")
      allNum += ch;
  }

  if ((!allValid) || (decPoints > 1))
  {
    alert('Please enter a valid number in the "GROOMS" field.');
    formname.GROOMS.focus();
    return (false);
  }

  if ((formname.MROOMS.value == "") || (formname.MROOMS.value.length < 1) || (formname.MROOMS.value.length > 5))
  {
    alert('Please enter at least 1 and no more than 5 characters in the "MROOMS" field.');
    formname.MROOMS.focus();
    return (false);
  }

  var checkOK = "0123456789-.,";
  var checkStr = formname.MROOMS.value;
  var allValid = true;
  var decPoints = 0;
  var allNum = "";
  for (i = 0;  i < checkStr.length;  i++)
  {
    ch = checkStr.charAt(i);
    for (j = 0;  j < checkOK.length;  j++)
      if (ch == checkOK.charAt(j))
        break;
    if (j == checkOK.length)
    {
      allValid = false;
      break;
    }
    if (ch == ".")
    {
      allNum += ".";
      decPoints++;
    }
    else if (ch != ",")
      allNum += ch;
  }

  if ((!allValid) || (decPoints > 1))
  {
    alert("Please enter a valid number in the \"MROOMS\" field.");
    formname.MROOMS.focus();
    return (false);
  }

  if ((formname.MROOMS_JACKS.value == "") || (formname.MROOMS_JACKS.value.length < 1) || (formname.MROOMS_JACKS.value.length > 5))
  {
    alert('Please enter at least 1 and no more than 5 characters in the "MROOMS_JACKS" field.');
    formname.MROOMS_JACKS.focus();
    return (false);
  }

  var checkOK = "0123456789-.,";
  var checkStr = formname.MROOMS_JACKS.value;
  var allValid = true;
  var decPoints = 0;
  var allNum = "";
  for (i = 0;  i < checkStr.length;  i++)
  {
    ch = checkStr.charAt(i);
    for (j = 0;  j < checkOK.length;  j++)
      if (ch == checkOK.charAt(j))
        break;
    if (j == checkOK.length)
    {
      allValid = false;
      break;
    }
    if (ch == ".")
    {
      allNum += ".";
      decPoints++;
    }
    else if (ch != ",")
      allNum += ch;
  }

  if ((!allValid) || (decPoints > 1))
  {
    alert('Please enter a valid number in the "MROOMS_JACKS" field.');
    formname.MROOMS_JACKS.focus();
    return (false);
  }

  if ((formname.MRL2_DEVICE.value == "") || (formname.MRL2_DEVICE.value.length < 1) || (formname.MRL2_DEVICE.value.length > 20))
  {
    alert('Please enter at least 1 and no more than 20 characters in the "MRL2_DEVICE" field.');
    formname.MRL2_DEVICE.focus();
    return (false);
  }
  return (true);
}
</script>
<FORM METHOD='POST' action='propertyinfo.asp' onsubmit='return vcheck(this)' name='formname' webbot-action='--WEBBOT-SELF--'>
<input TYPE='hidden' NAME='VTI-GROUP' VALUE='0'>
<!--#include virtual='/support_web/_fpclass/fpdbform.inc'-->
<BLOCKQUOTE>
<TABLE>
<tr>
<TD ALIGN='right'>
<em>CTYHO</em></TD>
<TD>
<% if isempty(CTYHO) then
response.write "<INPUT NAME='CTYHO' SIZE='25' CLASS='formfield'>"
else
response.write "<INPUT TYPE='hidden' NAME='CTYHO' VALUE='"&CTYHO&"'>"
response.write "<B>"&CTYHO&"</B>"
end if
%>
</TD>
</tr>
<tr>
<TD ALIGN='right'>
<em>Number Of Guest Rooms</em></TD>
<TD>
<INPUT NAME='GROOMS' SIZE='11' maxlength='5' CLASS='formfield'>
</TD>
</tr>
<tr>
<TD ALIGN='right'>
<em>Type Of Cabling For Guest Rooms</em></TD>
<TD>
<select size='1' name='GROOMS_MEDIA' CLASS='formfield'>
  <option value='CAT 5'>CAT 5</option>
  <option value='CAT 5 / xDSL'>CAT 5 / xDSL</option>
  <option value='CAT 5 / Over Voice'>CAT 5 / Over Voice</option>
  <option value='CAT 5 / Wireless'>CAT 5 / Wireless</option>
  <option value='xDSL'>xDSL</option>
  <option value='xDSL / Wireless'>xDSL / Wireless</option>
  <option value='Over Voice'>Over Voice</option>
  <option value='Wireless'>Wireless</option>
</select>
</TD>
</tr>
<tr>
<TD ALIGN='right'>
<em>Number Of Meeting Rooms</em></TD>
<TD>
<INPUT NAME='MROOMS' SIZE='11' maxlength='5' CLASS='formfield'>
</TD>
</tr>
<tr>
<TD ALIGN='right'>
<em>Type Of Cabling For Meeting Rooms</em></TD>
<TD>
<select size='1' name='MROOMS_MEDIA' CLASS='formfield'>
  <option value='CAT 5'>CAT 5</option>
  <option value='CAT 5 / xDSL'>CAT 5 / xDSL</option>
  <option value='CAT 5 / Over Voice'>CAT 5 / Over Voice</option>
  <option value='CAT 5 / Wireless'>CAT 5 / Wireless</option>
  <option value='xDSL'>xDSL</option>
  <option value='xDSL / Wireless'>xDSL / Wireless</option>
  <option value='Over Voice'>Over Voice</option>
  <option value='Wireless'>Wireless</option>
</select>
</TD>
</tr>
<tr>
<TD ALIGN='right'>
<em>Number Of Jacks In Meeting Rooms</em></TD>
<TD>
<INPUT NAME='MROOMS_JACKS' SIZE='11' maxlength='5' CLASS='formfield'>
</TD>
</tr>
<tr>
<TD ALIGN='right'>
<em>Is There A Switch In Meeting Room</em></TD>
<TD>
<INPUT NAME='MRL2_DEVICE' SIZE='19' maxlength='20' CLASS='formfield'>
</TD>
</tr>
<tr>
<TD ALIGN='right'>
<em>Billing For Guest Rooms</em></TD>
<TD>
<select size='1' name='BILL_GUEST' CLASS='formfield'>
  <option value='1'>Yes</option>
  <option value='0'>No</option>
</select>
</TD>
</tr>
<tr>
<TD ALIGN='right'>
<em>Billing Type</em></TD>
<TD>
<select size='1' name='BILL_GUEST_INF' CLASS='formfield'>
  <option value='Access Codes'>Access Codes</option>
  <option value='PMS'>PMS</option>
  <option value='XML'>XML</option>
  <option selected value='N/A'>N/A</option>
</select>
</TD>
</tr>
<TR>
<TD ALIGN='right'>
<em>List Different Billing Plans</em></TD>
<TD>
<INPUT NAME='BILL_GUEST_PLAN' SIZE='25' MAXLENGTH='25' CLASS='formfield'>
I.E $9.95 / Day Private, $12.95 / Day Public
</TD>
</TR>
<tr>
<TD ALIGN='right'>
<em>Billing For Meeting Rooms</em></TD>
<TD>
<select size='1' name='BILL_MEET' CLASS='formfield'>
  <option value='1'>Yes</option>
  <option value='0'>No</option>
</select>
</TD>
</tr>
<tr>
<TD ALIGN='right'>
<em>Billing Type</em></TD>
<TD>
<select size='1' name='BILL_MEET_INF' CLASS='formfield'>
  <option value='Access Codes'>Access Codes</option>
  <option value='PMS'>PMS</option>
  <option value='Property Billing'>Property Billing</option>
  <option value='XML'>XML</option>
  <option selected value='N/A'>N/A</option>
</select>
</TD>
</tr>
<TR>
<TD ALIGN='right'>
<em>Billing For Wireless</em></TD>
<TD>
<select size='1' name='BILL_WIRE' CLASS='formfield'>
  <option value='1'>Yes</option>
  <option value='0'>No</option>
</select>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Billing Type</em></TD>
<TD>
<select size='1' name='BILL_WIRE_INF' CLASS='formfield'>
  <option value='Access Codes'>Access Codes</option>
  <option value='PMS'>PMS</option>
  <option value='XML'>XML</option>
  <option selected value='N/A'>N/A</option>
</select>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>List Different Billing Plans</em></TD CLASS='formfield'>
<TD>
<INPUT NAME='BILL_WIRE_PLAN' SIZE='25' MAXLENGTH='25' CLASS='formfield'>
I.E $9.95 / Day Private, $12.95 / Day Public
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>PMS Type</em></TD>
<TD>
<select size='1' name='PMS' CLASS='formfield'>
  <option value='SYS 21'>SYS 21</option>
  <option value='H3 / TTS'>H3 / TTS</option>
  <option value='H1'>H1</option>
  <option value='H2'>H2</option>
  <option selected value='N/A'>N/A</option>
</select>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Type Of Ports</em></TD>
<TD>
<select size='1' name='SEC_PORT' CLASS='formfield'>
  <option value='SNMP'>SNMP</option>
  <option value='Port Protected'>Port Protected</option>
  <option value='VLAN'>VLAN</option>
  <option value='None' selected>None</option>
</select>
</TD>
</TR>
<TR>
<TD ALIGN='right' width='240'>
<em>Does Property Have Wireless</em></TD>
<TD width='500'>
<select size='1' name='WIRELESS' CLASS='formfield'>
  <option value='1'>Yes</option>
  <option value='0'>No</option>
</select>
</TD>
</TR>
<TR>
<TD ALIGN='right' width='240'>
<em>Areas We Support For HSIA</em></TD>
<TD width='500'>
<INPUT NAME='SUPAREAS' SIZE='35' CLASS='formfield'>
I.E Lobby, Guest Rooms, Lounge
</TD>
</TR>
<TR>
<TD ALIGN='right' width='240'>
<em>Level Of Support</em></TD>
<TD width='500'>
<select size='1' name='SUPLEVEL' CLASS='formfield'>
  <option value='Level 1'>Level 1</option>
  <option value='Level 1, 2'>Level 1, 2</option>
  <option value='Level 1, 2, 3'>Level 1, 2, 3</option>
</select>
</TD>
</TR>
<TR>
<TD ALIGN='right' width='240'>
<em>Does Property Support VPN</em></TD>
<TD width='500'>
<select size='1' name='VPN' CLASS='formfield'>
  <option value='1'>Yes</option>
  <option value='0'>No</option>
</select>
</TD>
</TR>
<TR>
<TD ALIGN='right' width='240'>
<em>What Areas Support VPN</em></TD>
<TD width='500'>
<INPUT NAME='VPNSUP' SIZE='35' CLASS='formfield'>
I.E Lobby, Guest Rooms, Lounge
</TD>
</TR>
<!--#include virtual='/support_web/propentry/new/footer.asp'-->