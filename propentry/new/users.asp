<%
ptype = "User Login Information"
arrFields = Array("LOGIN", "PASSWD", "FULLNAME", "SLEVEL")
arLen = UBound(arrFields)
%>
<script language="JavaScript" src="/support_web/components/md5.js"></script>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%

	fp_rs.Open "USERS", fp_conn, 1, 3, 2 ' adOpenKeySet, adLockOptimistic, adCmdTable
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
var isp = formname.SLEVEL.options[formname.SLEVEL.selectedIndex].value
var lgn = formname.LOGIN.value
var pswd = formname.PASSWD1.value
var cpswd = formname.CPASSWD.value
var fn = formname.FULLNAME.value
  if (lgn == '')
  {
    alert('Please enter a Login ID in the "Login ID" field.');
    formname.LOGIN.focus();
    return (false);
  }
  if (pswd == '')
  {
    alert('Please enter a Password in the "Password" field.');
    formname.PASSWD1.focus();
    return (false);
  }
  if (pswd != cpswd)
  {
    alert('Your passwords do not match, please re-enter your passwords.');
    formname.CPASSWD.focus();
    return (false);
  }
  if (fn == '')
  {
    alert('Please enter the users Full Name in the "Full Name" field.');
    formname.FULLNAME.focus();
    return (false);
  }
  if (isp == '')
  {
    alert('Please select a Security Level from the "Security Level" field.');
    formname.SLEVEL.focus();
    return (false);
  }
  formname.PASSWD.value = hex_md5(pswd);
  return (true);
}
</script>
<FORM METHOD='POST' action='users.asp' onsubmit='return vcheck(this)' name='formname'>
<input TYPE='hidden' NAME='VTI-GROUP' VALUE='0'>
<input TYPE='hidden' NAME='PASSWD'>
<!--#include virtual='/support_web/_fpclass/fpdbform.inc'-->
<TABLE align='center' border='1' bordercolor='C0C0C0' cellpadding='0' cellspacing='0' width='80%'>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Login ID
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='LOGIN' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Password
            </b>
        </font>
    </TD>
    <TD>
        <INPUT TYPE='password' NAME='PASSWD1' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Comfirm Password
            </b>
        </font>
    </TD>
    <TD>
        <INPUT TYPE='password' NAME='CPASSWD' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Full Name
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='FULLNAME' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Security Level
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='SLEVEL' CLASS='formfield'>
            <option value='' selected>
                Select One
            </option>
            <option value='1'>
                1
            </option>
            <option value='2'>
                2
            </option>
        </select>
    </TD>
</TR>
<!--#include virtual='/support_web/propentry/new/footer.asp'-->