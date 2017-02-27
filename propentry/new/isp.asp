<%
ptype = "ISP Information"
arrFields = Array("ISP", "ISP_TEL", "HOURS")
arLen = UBound(arrFields)
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
	fp_rs.Open "ISP", fp_conn, 1, 3, 2 ' adOpenKeySet, adLockOptimistic, adCmdTable
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

nextpage = "index.asp"
%>
<!--#include virtual='/support_web/propentry/new/db/bottom.asp'-->
<!--#include virtual='/support_web/propentry/new/header.asp'-->
<script>
function vcheck(formname)
{
  return (true);
}
</script>
<FORM METHOD='POST' action='isp.asp' onsubmit='return vcheck(this)' name='formname'>
<input TYPE='hidden' NAME='VTI-GROUP' VALUE='0'>
<!--#include virtual='/support_web/_fpclass/fpdbform.inc'-->
<TABLE align='center' border='1' bordercolor='C0C0C0' cellpadding='0' cellspacing='0' width='80%'>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                ISP
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='ISP' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                ISP Support Number
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='ISP_TEL' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                ISP Hours of Operation
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='HOURS' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<!--#include virtual='/support_web/propentry/new/footer.asp'-->