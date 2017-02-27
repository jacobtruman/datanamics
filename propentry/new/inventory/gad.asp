<%
ptype = "GAD Information"
CTYHO = request.querystring("CTYHO")
SERIAL = request.querystring("SERIAL")
arrFields = Array("SERIAL", "LOCATE", "NUM")
arLen = UBound(arrFields)
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
CTYHO = Request("CTYHO")

	fp_rs.Open "GADS", fp_conn, 1, 3, 2 ' adOpenKeySet, adLockOptimistic, adCmdTable
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
  var checkOK = "0123456789-.,";
  var checkStr = formname.NUM.value;
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
    alert('Please enter a valid number in the "Number of GADs" field.');
    formname.NUM.focus();
    return (false);
  }
  return (true);
}
</script>
<FORM METHOD='POST' action='gad.asp' onsubmit='return vcheck(this)' name='formname'>
<input TYPE='hidden' NAME='VTI-GROUP' VALUE='0'>
<!--#include virtual='/support_web/_fpclass/fpdbform.inc'-->
<BLOCKQUOTE>
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
                GAD Location
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='LOCATE' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Number of GADs
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='NUM' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<!--#include virtual='/support_web/propentry/new/footer.asp'-->