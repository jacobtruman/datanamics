<%
ptype = "Property"
arrFields = Array("CTYHO", "HNAME", "ADDRESS", "CITY", "ST", "ZIP", "MAIN_TEL", "MAIN_FAX", "CONTACT", "CONTACT_TEL", "CONTACT_EMAIL", "TIME_ZONE", "NDST", "GM_NAME", "GM_PHONE", "GM_EMAIL", "INST_ENG", "INST_DATE", "NOTES")
arLen = UBound(arrFields)
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
CTYHO = Request("CTYHO")

	fp_rs.Open "MAIN", fp_conn, 1, 3, 2 ' adOpenKeySet, adLockOptimistic, adCmdTable
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

nextpage = "inventory.asp?CTYHO="&CTYHO
%>
<!--#include virtual='/support_web/propentry/new/db/bottom.asp'-->
<!--#include virtual='/support_web/propentry/new/header.asp'-->
<script>
function vcheck(formname)
{

  if ((formname.CTYHO.value == "") || (formname.CTYHO.value.length < 4) || (formname.CTYHO.value.length > 5))
  {
    alert('Please enter at least 4  and no more than 5 characters in the "CTYHO" field.');
    formname.CTYHO.focus();
    return (false);
  }

  if ((formname.HNAME.value == "") || (formname.HNAME.value.length < 1) || (formname.HNAME.value.length > 60))
  {
    alert('Please enter at least 1 and no more than 60 characters in the "HNAME" field.');
    formname.HNAME.focus();
    return (false);
  }

  if ((formname.ADDRESS.value == "") || (formname.ADDRESS.value.length < 1) || (formname.ADDRESS.value.length > 50))
  {
    alert('Please enter at least 1  and no more than 50 characters in the "ADDRESS" field.');
    formname.ADDRESS.focus();
    return (false);
  }

  if ((formname.CITY.value == "") || (formname.CITY.value.length < 1) || (formname.CITY.value.length > 30))
  {
    alert('Please enter at least 1 and no more than 30 characters in the "CITY" field.');
    formname.CITY.focus();
    return (false);
  }
  
  if ((formname.ST.value == "") || (formname.ST.value.length < 1) || (formname.ST.value.length > 2))
  {
    alert('Please enter at least 1 and no more than 2 characters in the "ST" field.');
    formname.ST.focus();
    return (false);
  }

  if ((formname.ZIP.value == "") || (formname.ZIP.value.length < 1) || (formname.ZIP.value.length > 10))
  {
    alert('Please enter at least 1 and no more than 10 characters in the "ZIP" field.');
    formname.ZIP.focus();
    return (false);
  }

  if ((formname.MAIN_TEL.value == "") || (formname.MAIN_TEL.value.length < 1) || (formname.MAIN_TEL.value.length > 13))
  {
    alert('Please enter at least 1 and more than 13 characters in the "MAIN_TEL" field.');
    formname.MAIN_TEL.focus();
    return (false);
  }

  if ((formname.CONTACT.value == "") || (formname.CONTACT.value.length < 1) || (formname.CONTACT.value.length > 30))
  {
    alert('Please enter at least 1 and no more than 30 characters in the "CONTACT" field.');
    formname.CONTACT.focus();
    return (false);
  }

  if ((formname.CONTACT_TEL.value == "") || (formname.CONTACT_TEL.value.length < 1) || (formname.CONTACT_TEL.value.length > 13))
  {
    alert('Please enter at least 1 and no more than 13 characters in the "CONTACT_TEL" field.');
    formname.CONTACT_TEL.focus();
    return (false);
  }

  if ((formname.CONTACT_EMAIL.value == "") || (formname.CONTACT_EMAIL.value.length < 1) || (formname.CONTACT_EMAIL.value.length > 50))
  {
    alert('Please enter at least 1 and no more than 50 characters in the "CONTACT_EMAIL" field.');
    formname.CONTACT_EMAIL.focus();
    return (false);
  }
  return (true);
}
</script>
<FORM METHOD='POST' action='property.asp' onsubmit='return vcheck(this)' name='formname'>
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
        <INPUT NAME='CTYHO' SIZE='5' MAXLENGTH='5' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Hotel Name
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='HNAME' SIZE='25' MAXLENGTH='60' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Address
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='ADDRESS' SIZE='25' MAXLENGTH='50' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                City
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='CITY' SIZE='25' MAXLENGTH='30' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                State
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='ST' SIZE='2' MAXLENGTH='2' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Zip Code
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='ZIP' SIZE='10' MAXLENGTH='10' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Main Telephone
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='MAIN_TEL' SIZE='13' MAXLENGTH='13' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Main Fax
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='MAIN_FAX' SIZE='13' MAXLENGTH='13' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Contact Name
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='CONTACT' SIZE='25' MAXLENGTH='30' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Contact Telephone
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='CONTACT_TEL' SIZE='13' MAXLENGTH='13' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Contact Email
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='CONTACT_EMAIL' SIZE='25' MAXLENGTH='30' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Time Zone
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='TIME_ZONE' SIZE='25' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Daylight Savings Time?
            </b>
        </font>
    </TD>
    <TD>
        <select size='1' NAME='NDST' CLASS='formfield'>
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
                GM Name
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='GM_NAME' SIZE='25' MAXLENGTH='30' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                GM Phone
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='GM_PHONE' SIZE='13' MAXLENGTH='13' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                GM Email
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='GM_EMAIL' SIZE='25' MAXLENGTH='30' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Installation Engineer
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='INST_ENG' SIZE='25' MAXLENGTH='30' CLASS='formfield'>
    </TD>
</TR>
<TR>
    <TD>
        <font size='1' face='verdana'>
            <b>
                Installation Date
            </b>
        </font>
    </TD>
    <TD>
        <INPUT NAME='INST_DATE' SIZE='25' CLASS='formfield'>
        <img src='/support_web/components/calendar.gif' onMouseUp='getCalendarFor(document.formname.INST_DATE)' class='cal_hand' align='absbottom'>
    </TD>
</TR>
<TR>
    <TD align='center' colspan='2'>
        <font size='1' face='verdana'>
            <b>
                Notes
            </b>
        </font>
    </TD>
</TR>
<TR>
    <TD align='center' colspan='2'>
        <TEXTAREA NAME='NOTES' ROWS='5' COLS='60' WRAP='PHYSICAL' CLASS='formfield'></TEXTAREA>
    </TD>
</TR>
<!--#include virtual='/support_web/propentry/new/footer.asp'-->
