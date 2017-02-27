<%
ptype = "USG Information"
CTYHO = request.querystring("CTYHO")
SERIAL = request.querystring("SERIAL")
arrFields = Array("SERIAL", "NETIP", "SUBIP", "iNATS", "iNATE", "PRIDHCPS", "PRIDHCPE", "PRISUB", "PRIGATE", "PUBDHCPS", "PUBDHCPE", "PUBSUB", "PUBGATE")
arLen = UBound(arrFields)
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
CTYHO = Request("CTYHO")

	fp_rs.Open "USG", fp_conn, 1, 3, 2 ' adOpenKeySet, adLockOptimistic, adCmdTable
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
<FORM METHOD='POST' action='usg.asp' onsubmit='return vcheck(this)' name='formname'>
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
                Network Side IP
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='NETIP' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Subscriber Side IP
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='SUBIP' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                iNAT Start
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='iNATS' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                iNAT End
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='iNATE' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Private DHCP Start
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PRIDHCPS' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Private DHCP End
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PRIDHCPE' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Private Subnet Mask
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PRISUB' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Private Gateway
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PRIGATE' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Public DHCP Start
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PUBDHCPS' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Public DHCP End
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PUBDHCPE' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Public Subnet Mask
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PUBSUB' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Public Gateway
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PUBGATE' SIZE='25' CLASS='formfield'>
    </TD>
</TR>

<!--#include virtual='/support_web/propentry/new/footer.asp'-->