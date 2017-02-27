<%
ptype = "Inventory"
CTYHO = request.querystring("CTYHO")
arrFields = Array("SERIAL", "CTYHO", "PURCHASE_DATE", "PURCHASED_FROM", "INSTALLED_DATE", "ETYPE", "MANF", "MODEL")
arLen = UBound(arrFields)
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
CTYHO = Request("CTYHO")
ETYPE = Request("ETYPE")
SERIAL = Request("SERIAL")

	fp_rs.Open "INVENTORY", fp_conn, 1, 3, 2 ' adOpenKeySet, adLockOptimistic, adCmdTable
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

nextpage = "inventory/"&ETYPE&".asp?CTYHO="&CTYHO&"&SERIAL="&SERIAL
%>
<!--#include virtual='/support_web/propentry/new/db/bottom.asp'-->
<!--#include virtual='/support_web/propentry/new/header.asp'-->
<script>
function vcheck(formname)
{
var manf = formname.MANF.options[formname.MANF.selectedIndex].value
var dev = formname.MANF.options[formname.MANF.selectedIndex].value
var etype = formname.ETYPE.options[formname.ETYPE.selectedIndex].value

  if ((formname.SERIAL.value == '') || (formname.SERIAL.value.length < 1) || (formname.SERIAL.value.length > 25))
  {
    alert('Please enter at least 1 and no more than 25 characters in the "Serial Number" field.');
    formname.SERIAL.focus();
    return (false);
  }
  if ((formname.PURCHASE_DATE.value == '') || (formname.PURCHASE_DATE.value.length < 1) || (formname.PURCHASE_DATE.value.length > 10))
  {
    alert('Please enter at least 1 and no more than 10 characters in the "Purchase Date" field.');
    formname.PURCHASE_DATE.focus();
    return (false);
  }
  if ((formname.PURCHASED_FROM.value == '') || (formname.PURCHASED_FROM.value.length < 1) || (formname.PURCHASED_FROM.value.length > 10))
  {
    alert('Please enter at least 1 and no more than 10 characters in the "Purchased From" field.');
    formname.PURCHASED_FROM.focus();
    return (false);
  }
  if (etype == '')
  {
    alert('Please select an Equipment Type from the "Equipment Type" field.');
    formname.ETYPE.focus();
    return (false);
  }
  if (manf == '')
  {
    alert('Please select an Manufacturer from the "Manufacturer" field.');
    formname.MANF.focus();
    return (false);
  }
  return (true);
}
</script>
<FORM METHOD='POST' action='inventory.asp' onsubmit='return vcheck(this)' NAME='formname'>
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
%>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Serial Number
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='SERIAL' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Date Purchased
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PURCHASE_DATE' SIZE='25' CLASS='formfield'>
        <img src='/support_web/components/calendar.gif' onMouseUp='getCalendarFor(document.formname.PURCHASE_DATE)' class='cal_hand' align='absbottom'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Purchased From
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PURCHASED_FROM' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Date Installed
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='INSTALLED_DATE' SIZE='25' CLASS='formfield'>
        <img src='/support_web/components/calendar.gif' onMouseUp='getCalendarFor(document.formname.INSTALLED_DATE)' class='cal_hand' align='absbottom'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Equipment Type
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='ETYPE' CLASS='formfield'>
			<option value='CPE'>CPE</option>
			<option value='GAD'>GAD</option>
			<option value='Gateway'>Gateway</option>
			<option value='Router'>Router</option>
			<option value='Switch'>Switch</option>
			<option value='WAP'>WAP</option>
			<option selected>Select One</option>
		</select>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Manufacturer
            </b>
        </font>
    </TD>
    <TD>
<%
dim objConn,sql,rs
set objConn = server.createobject("ADODB.connection")
objConn.open application("DNTechShareDB_ConnectionString")
sql = "SELECT MANF FROM MFGR"
set rs = objConn.execute(sql)
if not rs.eof then
  with response
    .write "<select size='1' NAME='MANF' CLASS='formfield'>"
	.write "<option value='' selected>Select One</option>"
    do until rs.eof
      .write "<option value='"& rs("MANF") &"'>" & rs("MANF") & "</option>"
      rs.movenext
    loop
    rs.close
    set rs = nothing
    objConn.close
    set objConn = nothing
    .write "</select>"
  end with
else
  rs.close
  set rs = nothing
  objConn.close
  set objConn = nothing
  response.write "no menu items found"
end if
%>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Model
            </b>
        </font>
    </TD>
    <TD>
		<select size='1' NAME='MODEL' CLASS='formfield'>
			<option value='Cisco'>Cisco</option>
			<option value='2950-12'>2950-12</option>
			<option value='2950-24'>2950-24</option>
			<option value='2950-24T'>2950-24T</option>
			<option value='2950-24G'>2950-24G</option>
			<option value='3550-24'>3550-24</option>
			<option value='3550-48'>3550-48</option>
			<option value='Giga'>Giga</option>
			<option value='TLAN-400'>TLAN-400</option>
			<option value='TLAN-SU400'>TLAN-SU400</option>
			<option selected>Select One</option>
		</select>
    </TD>
</TR>
<!--#include virtual='/support_web/propentry/new/footer.asp'-->
