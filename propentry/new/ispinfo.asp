<%
ptype = "ISP Information"
CTYHO = request.querystring("CTYHO")
arrFields = Array("CTYHO", "ISP", "CIRCUIT", "SPEED", "DNS1", "DNS2", "DNS3", "SMTP_IP", "SMTP_DNS")
arLen = UBound(arrFields)
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
CTYHO = Request("CTYHO")

	fp_rs.Open "CIRCUIT", fp_conn, 1, 3, 2 ' adOpenKeySet, adLockOptimistic, adCmdTable
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

nextpage = "roomequip.asp?CTYHO="&CTYHO
%>
<!--#include virtual='/support_web/propentry/new/db/bottom.asp'-->
<!--#include virtual='/support_web/propentry/new/header.asp'-->
<script>
function vcheck(formname)
{
var isp = formname.ISP.options[formname.ISP.selectedIndex].value
  if (isp == '')
  {
    alert('Please select an ISP from the "ISP" field.');
    formname.ISP.focus();
    return (false);
  }
  return (true);
}
</script>
<FORM METHOD='POST' action='ispinfo.asp' onsubmit='return vcheck(this)' name='formname'>
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
                ISP
            </b>
        </font>
    </TD>
    <TD>
<%
dim objConn,sql,rs
set objConn = server.createobject("ADODB.connection")
objConn.open application("DNTechShareDB_ConnectionString")
sql = "SELECT ISP FROM ISP"
set rs = objConn.execute(sql)
if not rs.eof then
  with response
    .write "<select size='1' NAME='ISP' CLASS='formfield'>"
	.write "<option value='' selected>Select One</option>"
    do until rs.eof
      .write "<option value='"& rs("ISP") &"'>" & rs("ISP") & "</option>"
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
                Circuit Number and Type
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='CIRCUIT' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                WAN Speed
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='SPEED' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Primary DNS
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='DNS1' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Secondary DNS
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='DNS2' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Tertiary DNS
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='DNS3' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                SMTP IP Address
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='SMTP_IP' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                SMTP Domain Name
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='SMTP_DNS' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<!--#include virtual='/support_web/propentry/new/footer.asp'-->