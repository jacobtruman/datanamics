<%
ptype = "XML/MRS PC Information"
CTYHO = request.querystring("CTYHO")
arrFields = Array("SERIAL", "IP", "SUBNET", "GATEWAY", "OS", "SOFTVER", "LOCATION", "GUESTP", "ROOMSP", "PCINSTALLED", "MRS", "XML", "DNSUP", "PRINTER", "PBMM", "PDNSUP")
arLen = UBound(arrFields)
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
CTYHO = Request("CTYHO")
ETYPE = Request("ETYPE")
SERIAL = Request("SERIAL")

	fp_rs.Open "MRSXML", fp_conn, 1, 3, 2 ' adOpenKeySet, adLockOptimistic, adCmdTable
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
<FORM METHOD='POST' action='mrsxmlpcinfo.asp' onsubmit='return vcheck(this)' name='formname'>
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
<% if isempty(SERIAL) then
response.write "<INPUT NAME='SERIAL' SIZE='5' CLASS='formfield'>"
else
response.write "<INPUT TYPE='hidden' NAME='SERIAL' VALUE='"&SERIAL&"'>"
response.write "<font size='1' face='verdana' color='blue'>"
response.write SERIAL
response.write "</font>"
response.write "</TD></TR>"
end if
%>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                IP Address
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='IP' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Subnet Mask
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='SUBNET' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Default Gateway
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='GATEWAY' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Operating System
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='OS' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Software Version
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='SOFTVER' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Location
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='LOCATION' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Guset Payment Program Installed?
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='GUESTP' CLASS='formfield'>
            <option value='' selected>
                Select One
            </option>
            <option value='Yes'>
                Yes
            </option>
            <option value='No'>
                No
            </option>
        </select>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Room Set Program Installed?
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='ROOMSP' CLASS='formfield'>
            <option value='' selected>
                Select One
            </option>
            <option value='Yes'>
                Yes
            </option>
            <option value='No'>
                No
            </option>
        </select>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                What PC are programs Installed on?
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PCINSTALLED' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                MRS PC?
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='MRS' CLASS='formfield'>
            <option value='' selected>
                Select One
            </option>
            <option value='Yes'>
                Yes
            </option>
            <option value='No'>
                No
            </option>
        </select>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                XML PC?
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='XML' CLASS='formfield'>
            <option value='' selected>
                Select One
            </option>
            <option value='Yes'>
                Yes
            </option>
            <option value='No'>
                No
            </option>
        </select>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Datanamics Support?
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='DNSUP' CLASS='formfield'>
            <option value='' selected>
                Select One
            </option>
            <option value='Yes'>
                Yes
            </option>
            <option value='No'>
                No
            </option>
        </select>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Is a Printer attached
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='PRINTER' CLASS='formfield'>
            <option value='' selected>
                Select One
            </option>
            <option value='Yes'>
                Yes
            </option>
            <option value='No'>
                No
            </option>
        </select>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Printer Brand Make/Model
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PBMM' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Datanamics Support Printer?
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='PDNSUP' CLASS='formfield'>
            <option value='' selected>
                Select One
            </option>
            <option value='Yes'>
                Yes
            </option>
            <option value='No'>
                No
            </option>
        </select>
    </TD>
</TR>
<!--#include virtual='/support_web/propentry/new/footer.asp'-->