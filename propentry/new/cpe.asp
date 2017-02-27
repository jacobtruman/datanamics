<%
ptype = "CPE Information"
CTYHO = request.querystring("CTYHO")
SERIAL = request.querystring("SERIAL")
arrFields = Array("MOUNT", "LITVIS", "FILTER", "SPLIT", "PHONE_NUM", "LINE_NUM", "ENET_CABLE")
arLen = UBound(arrFields)
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
CTYHO = Request("CTYHO")

	fp_rs.Open "CPE", fp_conn, 1, 3, 2 ' adOpenKeySet, adLockOptimistic, adCmdTable
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
<FORM METHOD='POST' action='cpe.asp' onsubmit='return vcheck(this)' name='formname'>
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
                Where Mounted?
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='MOUNT' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Are LEDs Visible?
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='LITVIS' CLASS='formfield'>
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
                Is there a DSL Filter?
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='FILTER' CLASS='formfield'>
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
                Is there a Splitter?
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='SPLIT' CLASS='formfield'>
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
                Number of Phones in Room
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PHONE_NUM' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Number of Phone Lines in Room
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='LINE_NUM' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Ethernet Cable in Room?
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='ENET_CABLE' CLASS='formfield'>
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