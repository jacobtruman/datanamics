<%ptype = "In Room Equipment Information"
CTYHO = request.querystring("CTYHO")
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
CTYHO = Request("CTYHO")

	fp_rs.Open "ROOMEQUIP", fp_conn, 1, 3, 2 ' adOpenKeySet, adLockOptimistic, adCmdTable
	FP_DumpError strErrorUrl, "Cannot open record set"

	fp_rs.AddNew
	FP_DumpError strErrorUrl, "Cannot add new record set to the database"
	Dim arFormFields0(9)
	Dim arFormDBFields0(9)
	Dim arFormValues0(9)
	
	arFormFields0(0) = "CPE"
	arFormDBFields0(0) = "CPE"
	arFormValues0(0) = Request("CPE")
	arFormFields0(1) = "MOUNTED"
	arFormDBFields0(1) = "MOUNTED"
	arFormValues0(1) = Request("MOUNTED")
	arFormFields0(2) = "LIGHTS"
	arFormDBFields0(2) = "LIGHTS"
	arFormValues0(2) = Request("LIGHTS")
	arFormFields0(3) = "FILTER"
	arFormDBFields0(3) = "FILTER"
	arFormValues0(3) = Request("FILTER")
	arFormFields0(4) = "SPLITTER"
	arFormDBFields0(4) = "SPLITTER"
	arFormValues0(4) = Request("SPLITTER")
	arFormFields0(5) = "NUM_PHONES"
	arFormDBFields0(5) = "NUM_PHONES"
	arFormValues0(5) = Request("NUM_PHONES")
	arFormFields0(6) = "NUM_LINES"
	arFormDBFields0(6) = "NUM_LINES"
	arFormValues0(6) = Request("NUM_LINES")
	arFormFields0(7) = "ETHERNET"
	arFormDBFields0(7) = "ETHERNET"
	arFormValues0(7) = Request("ETHERNET")
	arFormFields0(8) = "NOTES"
	arFormDBFields0(8) = "NOTES"
	arFormValues0(8) = Request("NOTES")

nextpage = "roomequip.asp?CTYHO="&CTYHO
%>
<!--#include virtual='/support_web/propentry/new/db/bottom.asp'-->
<!--#include virtual='/support_web/propentry/new/header.asp'-->
<script>
function vcheck(formname)
{

  return (true);
}
</script>
<FORM METHOD='POST' action='roomequip.asp' onsubmit='return vcheck(this)' name='formname'>
<input TYPE='hidden' NAME='VTI-GROUP' VALUE='0'>
<!--#include virtual='/support_web/_fpclass/fpdbform.inc'-->
<BLOCKQUOTE>
<TABLE>
<TR>
<TD ALIGN='right'>
<em>CTYHO</em></TD>
<TD>
<% if isempty(CTYHO) then
response.write "<INPUT NAME='CTYHO' SIZE='5' CLASS='formfield'>"
else
response.write "<INPUT TYPE='hidden' NAME='CTYHO' VALUE='"&CTYHO&"'>"
response.write "<B>"&CTYHO&"</B>"
end if
%>
</TD>
<TD>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>CPE Type</em></TD>
<TD>
<select size='1' NAME='CPE' CLASS='formfield'>
  <option value='AT&T'>AT&T</option>
  <option value='COX'>COX</option>
  <option selected>Select One</option>
</select>
</TD>
<TD>
<font size='2' face='Verdana'>Select CPE Type</font>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Where mounted?</em></TD>
<TD>
<INPUT NAME='MOUNTED' SIZE='25' maxlength='25' CLASS='formfield'>
</TD>
<TD>
<font face='Verdana' SIZE='2'>Enter where CPE is mounted?</font>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Are lights visible?</em></TD>
<TD>
<select size='1' NAME='LIGHTS' CLASS='formfield'>
  <option value='Yes'>Yes</option>
  <option value='No'>No</option>
  <option selected>Select One</option>
</select>
</TD>
<TD>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Is there a filter installed</em></TD>
<TD>
<select size='1' NAME='FILTER' CLASS='formfield'>
  <option value='Yes'>Yes</option>
  <option value='No'>No</option>
  <option selected>Select One</option>
</select>
</TD>
<TD>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Is there a line splitter?</em></TD>
<TD>
<select size='1' NAME='SPLITTER' CLASS='formfield'>
  <option value='Yes'>Yes</option>
  <option value='No'>No</option>
  <option selected>Select One</option>
</select>
</TD>
<TD>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Number of Phones in Room</em></TD>
<TD>
<INPUT NAME='NUM_PHONES' SIZE='25' maxlength='25' CLASS='formfield'>
</TD>
<TD>
<font face='Verdana' SIZE='2'>Enter Number of Phones in Room</font>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Number of Phone Lines in Room</em></TD>
<TD>
<INPUT NAME='NUM_LINES' SIZE='25' maxlength='25' CLASS='formfield'>
</TD>
<TD>
<font face='Verdana' SIZE='2'>Enter Number of Phone Lines in Room</font>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Is Ethernet Cable in-room?</em></TD>
<TD>
<select size='1' NAME='ETHERNET' CLASS='formfield'>
  <option value='Yes'>Yes</option>
  <option value='No'>No</option>
  <option selected>Select One</option>
</select>
</TD>
<TD>
</TD>
</TR>
<TR>
<TD ALIGN='center' colspan='3'>
<em>
Notes:
</em>
</TD>
</tr>
<tr>
<TD align='center' colspan='3'>
<TEXTAREA NAME='NOTES' ROWS='10' COLS='60' WRAP='PHYSICAL' CLASS='formfield'></TEXTAREA>
</TD>
</TR>
<!--#include virtual='/support_web/propentry/new/footer.asp'-->