<%
ptype = "WAP Information"
CTYHO = request.querystring("CTYHO")
SERIAL = request.querystring("SERIAL")
arrFields = Array("SERIAL", "SNAME", "IP", "SUBNET", "GATEWAY", "SSID", "MAC", "IOS", "ANTENNA", "MOUNTED", "ROOMNUM", "MEDIA", "POWINJ", "VLAN", "RPORTDIR", "CHANNEL", "DNSUP")
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
                WAP Name
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='SNAME' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
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
                SSID
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='SSID' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                MAC Address
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='MAC' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                IOS
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='IOS' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Antenna
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='ANTENNA' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Location Mounted
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='MOUNTED' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Rooms Covered
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='ROOMNUM' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Ethernet Media Type
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='MEDIA' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Power Injector
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='POWINJ' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                VLAN
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='VLAN' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                IP NAT Redirected Port
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='RPORTDIR' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Channel
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='CHANNEL' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Does Datanamics Support?
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='DNSUP' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<!--#include virtual='/support_web/propentry/new/footer.asp'-->