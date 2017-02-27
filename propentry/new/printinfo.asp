<%
ptype = "Printing Info"
CTYHO = request.querystring("CTYHO")
arrFields = Array("CTYHO", "HNAME", "ADDRESS", "CITY", "ST", "ZIP", "MAIN_TEL", "MAIN_FAX", "CONTACT", "CONTACT_TEL", "CONTACT_EMAIL", "TIME_ZONE", "NDST", "GM_NAME", "GM_PHONE", "GM_EMAIL", "NOTES", "INST_ENG", "INST_DATE")
arLen = UBound(arrFields)
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
CTYHO = Request("CTYHO")

	fp_rs.Open "HSIAPRINT", fp_conn, 1, 3, 2 ' adOpenKeySet, adLockOptimistic, adCmdTable
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

nextpage = "index.asp?CTYHO="&CTYHO
%>
<!--#include virtual='/support_web/propentry/new/db/bottom.asp'-->
<!--#include virtual='/support_web/propentry/new/header.asp'-->
<script>
function vcheck(formname)
{

  if ((formname.CTYHO.value == "") || (formname.CTYHO.value.length < 4) || (formname.CTYHO.value.length > 5))
  {
    alert('Please enter at least 4 and no more than 5 characters in the "CTYHO" field.');
    formname.CTYHO.focus();
    return (false);
  }

  if ((formname.IP_Address_Of_Printer.value == "") || (formname.IP_Address_Of_Printer.value.length < 1) || (formname.IP_Address_Of_Printer.value.length > 20))
  {
    alert('Please enter at least 1  and no more than 20 characters in the "IP_Address_Of_Printer" field.');
    formname.IP_Address_Of_Printer.focus();
    return (false);
  }

  if ((formname.Username_For_Print_Device.value == "") || (formname.Username_For_Print_Device.value.length < 1) || (formname.Username_For_Print_Device.value.length > 20))
  {
    alert('Please enter at least 1 and no more than 20 characters in the "Username_For_Print_Device" field.');
    formname.Username_For_Print_Device.focus();
    return (false);
  }

  if ((formname.Password_For_Print_Device1.value == "") || (formname.Password_For_Print_Device1.value.length < 1) || (formname.Password_For_Print_Device1.value.length > 20))
  {
    alert('Please enter at least 1 and no more than 20 characters in the "Password_For_Print_Device1" field.');
    formname.Password_For_Print_Device1.focus();
    return (false);
  }
  return (true);
}
</script>
<FORM METHOD='POST' action='printinfo.asp' onsubmit='return vcheck(this)' name='formname'>
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
                Does Property Support Printing
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='GUEST_PRINT' CLASS='formfield'>
            <option selected>
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
                How Does Printing Occur
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PRINT_TYPE' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                How Are Print Drivers Available
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PRINT_DRV' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Printer IP Address
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
                Location Of Printer
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
                Printer Username
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='USERNAME' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Printer Password
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='PASSWORD' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Datanamics Support
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='DNSUP' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                PRI
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='PRI' CLASS='formfield'>
            <option selected>
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
