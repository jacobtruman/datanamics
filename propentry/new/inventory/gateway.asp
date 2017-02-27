<%ptype = "Gateway"
CTYHO = request.querystring("CTYHO")
SERIAL = request.querystring("PSERIAL")
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
CTYHO = Request("CTYHO")

	fp_rs.Open "GATEWAY", fp_conn, 1, 3, 2 ' adOpenKeySet, adLockOptimistic, adCmdTable
	FP_DumpError strErrorUrl, "Cannot open record set"

	fp_rs.AddNew
	FP_DumpError strErrorUrl, "Cannot add new record set to the database"
	Dim arFormFields0(5)
	Dim arFormDBFields0(5)
	Dim arFormValues0(5)

	arFormFields0(0) = "Serial_Number"
	arFormDBFields0(0) = "SERIAL"
	arFormValues0(0) = Request("Serial_Number")
	arFormFields0(1) = "USG_ID_BBSM_NAME"
	arFormDBFields0(1) = "GW_ID"
	arFormValues0(1) = Request("USG_ID_BBSM_NAME")
	arFormFields0(2) = "Gateway"
	arFormDBFields0(2) = "GATEWAY"
	arFormValues0(2) = Request("Gateway")
	arFormFields0(3) = "Supported"
	arFormDBFields0(3) = "DNSUP"
	arFormValues0(3) = Request("Supported")
	arFormFields0(4) = "Firmware"
	arFormDBFields0(4) = "OSVER"
	arFormValues0(4) = Request("Firmware")
	
nextpage = "donenew.asp?CTYHO="&CTYHO
%>
<!--#include virtual='/support_web/propentry/new/db/bottom.asp'-->
<!--#include virtual='/support_web/propentry/new/header.asp'-->
<script>
function vcheck(formname)
{
  return (true);
}
</script>
<FORM METHOD='POST' action='gateway.asp' onsubmit='return vcheck(this)' name='formname'>
<input TYPE='hidden' NAME='VTI-GROUP' VALUE='0'>
<!--#include virtual='/support_web/_fpclass/fpdbform.inc'-->
<BLOCKQUOTE>
<TABLE height='143'>
<TR>
<TD ALIGN='right' height='25'>
<em>USG ID or BBSM Computer Name</em></TD>
<TD height='25'>
<INPUT NAME='USG_ID_BBSM_NAME' SIZE='15' CLASS='formfield'>
<font size='2' face='Verdana'>
	Enter the USG ID or BBSM Computer Name
</font>
</TD>
</TR>
<tr>
<TD ALIGN='right' height='25'>
<em>Gateway</em></TD>
<TD height='25'>
<select size='1' name='Gateway' CLASS='formfield'>
  <option selected>Select One</option>
  <option value='USG II'>USG II</option>
  <option value='USG Hotspot'>USG Hotspot</option>
  <option value='BBSM'>BBSM</option>
  <option value='BBSM Hotspot'>BBSM Hotspot</option>
</select><font size='2' face='Verdana'>Select Gateway</font>
</TD>
</tr>
<tr>
<TD ALIGN='right' height='23'>
<em>Firmware </em></TD>
<TD height='23'>
<INPUT NAME='Firmware' SIZE='20' CLASS='formfield'>
 <font size='2' face='Verdana'>Enter firmware version </font>
</TD>
</tr>
<TR>
<TD ALIGN='right' height='25'>
<em>Serial Number</em></TD>
<TD height='25'>
<INPUT NAME='Serial_Number' SIZE='20' CLASS='formfield'>
 <font size='2' face='Verdana'>Enter Serial Number </font>
</TD>
</TR>
<TR>
<TD ALIGN='right' height='25'>
<em>Does Datanamics Support this equipment?</em></TD>
<TD height='25'>
<select size='1' name='Supported' CLASS='formfield'>
  <option value='1'>Yes</option>
  <option value='0'>No</option>
  <option selected>Select One</option>
</select>
</TD>
</TR>
<!--#include virtual='/support_web/propentry/new/footer.asp'-->