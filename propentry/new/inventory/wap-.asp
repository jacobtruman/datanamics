<%ptype = "WAP Information"
CTYHO = request.querystring("CTYHO")
SERIAL = request.querystring("PSERIAL")
arrFields = Array("SERIAL", "SNAME", "IP", "SUBNET", "GATEWAY", "SSID", "MAC", "IOS", "ANTENNA", "MOUNTED", "ROOMNUM", "MEDIA", "POWINJ", "VLAN", "RPORTDIR", "CHANNEL", "DNSUP")
arrFieldnames = Array("Serial Number", "WAP Name", "IP Address", "Subnet Mask", "Default Gateway", "SSID", "MAC Address", "IOS", "Antenna", "Location Mounted", "Rooms Covered", "Ethernet Media Type", "Power Injector", "VLAN", "IP NAT Redirected Port", "Channel", "Does Datanamics Support?")
arrFieldts = Array("TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT")
arrFieldgs = Array("test1", "test2", "test3")
argLen = UBound(arrFieldgs)
arLen = UBound(arrFields)
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
CTYHO = Request("CTYHO")

	fp_rs.Open "WAPS", fp_conn, 1, 3, 2 ' adOpenKeySet, adLockOptimistic, adCmdTable
	FP_DumpError strErrorUrl, "Cannot open record set"

	Dim arFormFields0(100)
	Dim arFormDBFields0(100)
	Dim arFormValues0(100)

	fp_rs.AddNew
	FP_DumpError strErrorUrl, "Cannot add new record set to the database"

For i = 0 to arLen
	arFormFields0(i) = arrFields(i)
	arFormDBFields0(i) = arrFields(i)
	arFormValues0(i) = Request(arrFields(i))
Next

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
<FORM METHOD='POST' action='wap.asp' onsubmit='return vcheck(this)' name='formname'>
<input TYPE='hidden' NAME='VTI-GROUP' VALUE='0'>
<!--#include virtual='/support_web/_fpclass/fpdbform.inc'-->
<TABLE align='center' border='1' bordercolor='C0C0C0' cellpadding='0' cellspacing='0' width='80%'>
<TR>
<TD>
<font size='1' face='verdana'>
<b>
CTYHO
</b>
</font>
</TD>
<TD>
<% if isempty(CTYHO) then
response.write "<INPUT NAME='CTYHO' SIZE='5' CLASS='formfield'>"
else
response.write "<INPUT TYPE='hidden' NAME='CTYHO' VALUE='"&CTYHO&"'>"
response.write "<font size='1' face='verdana' color='blue'>"
response.write CTYHO
response.write "</font>"
response.write "</TD></TR>"
end if

For i = 0 to arLen
fld = arrFields(i)
fldn = arrFieldnames(i)
fldt = arrFieldts(i)
rfld = request.querystring(fld)
if isempty(rfld) then
	if (fldt = "TXT") then
		response.write "<TR>"
		response.write "<TD>"
		response.write "<font size='1' face='verdana'>"
		response.write "<b>"
		response.write fldn
		response.write "</b>"
		response.write "</font>"
		response.write "</TD><TD><INPUT NAME='"
		response.write fld
		response.write "' SIZE='25' CLASS='formfield'></TD></TR>"
	elseif (fldt = "DATE") then
		response.write "<TR>"
		response.write "<TD>"
		response.write "<font size='1' face='verdana'>"
		response.write "<b>"
		response.write fldn
		response.write "</b>"
		response.write "</font>"
		response.write "</TD><TD><INPUT NAME='"
		response.write fld
		response.write "' SIZE='25' CLASS='formfield'><img src='/support_web/components/calendar.gif' onMouseUp='getCalendarFor(document.formname."
		response.write fld
		response.write ")' class='cal_hand' align='absbottom'></TD></TR>"
	elseif (fldt = "MEMO") then
		response.write "<TR>"
		response.write "<TD align='center' colspan='2'>"
		response.write "<font size='1' face='verdana'>"
		response.write "<b>"
		response.write fldn
		response.write "</b>"
		response.write "</font>"
		response.write "</TD></TR><TR><TD align='center' colspan='2'><TEXTAREA NAME='"
		response.write fld
		response.write "' ROWS='5' COLS='60' WRAP='PHYSICAL' CLASS='formfield'></TEXTAREA></TD></TR>"
	elseif (fldt = "YESNO") then
		response.write "<TR>"
		response.write "<TD>"
		response.write "<font size='1' face='verdana'>"
		response.write "<b>"
		response.write fldn
		response.write "</b>"
		response.write "</font>"
		response.write "</TD><TD><select size='1' NAME='"
		response.write fld
		response.write "' CLASS='formfield'><option selected>Select One</option>"
		response.write "<option value='Yes'>Yes</option>"
		response.write "<option value='No'>No</option>"
		response.write "</select></TD></TR>"
	elseif (fldt = "MENU") then
		response.write "<TR>"
		response.write "<TD>"
		response.write "<font size='1' face='verdana'>"
		response.write "<b>"
		response.write fldn
		response.write "</b>"
		response.write "</font>"
		response.write "</TD><TD><select size='1' NAME='"
		response.write fld
		response.write "' CLASS='formfield'><option selected>Select One</option>"
		For j = 0 to argLen
		fldg = arrFieldgs(j)
		response.write "<option value='"
		response.write fldg
		response.write "'>"
		response.write fldg
		response.write "</option>"
		next
		response.write "</select></TD></TR>"
	end if
	else
	response.write "<TR>"
	response.write "<TD>"
	response.write "<font size='1' face='verdana'>"
	response.write "<b>"
	response.write fldn
	response.write "</b>"
	response.write "</font>"
	response.write "</TD><TD><INPUT TYPE='hidden' NAME='"
	response.write fld
	response.write "' VALUE='"
	response.write rfld
	response.write "'>"
	response.write "<font size='1' face='verdana' color='blue'>"
	response.write rfld
	response.write "</font>"
	response.write "</TD></TR>"
end if
Next
%>
<!--#include virtual='/support_web/propentry/new/footer.asp'-->