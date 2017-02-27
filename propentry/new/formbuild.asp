<%ptype = "Form Builder"
CTYHO = request.querystring("CTYHO")
SERIAL = request.querystring("PSERIAL")
'DEFAULTS
'arrFields = Array()
'arrFieldnames = Array()
'arrFieldts = Array("TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT")

arrFields = Array("LOGIN", "PASSWD", "FULLNAME", "SLEVEL")
arrFieldnames = Array("Login ID", "Password", "Full Name", "Security Level")
arrFieldts = Array("TXT", "PSWD", "TXT", "MENU")

'arrFields = Array("SERIAL", "IP", "SUBNET", "GATEWAY", "OS", "SOFTVER", "LOCATION", "GUESTP", "ROOMSP", "PCINSTALLED", "MRS", "XML", "DNSUP", "PRINTER", "PBMM", "PDNSUP")
'arrFieldnames = Array("Serial Number", "IP Address", "Subnet Mask", "Default Gateway", "Operating System", "Software Version", "Location", "Guset Payment Program Installed?", "Room Set Program Installed?", "What PC are programs Installed on?", "MRS PC?", "XML PC?", "Datanamics Support?", "Is a Printer attached", "Printer Brand Make/Model", "Datanamics Support Printer?")
'arrFieldts = Array("TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "YESNO", "YESNO", "TXT", "YESNO", "YESNO", "YESNO", "YESNO", "TXT", "YESNO")
'arrFields = Array("CTYHO", "ISP", "CIRCUIT", "SPEED", "DNS1", "DNS2", "DNS3", "SMTP_IP", "SMTP_DNS")
'arrFieldnames = Array("CTYHO", "ISP", "Circuit Number and Type", "WAN Speed", "Primary DNS", "Secondary DNS", "Tertiary DNS", "SMTP IP Address", "SMTP Domain Name")
'arrFieldts = Array("TXT", "MENU", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT")
'arrFields = Array("ISP", "ISP_TEL", "HOURS")
'arrFieldnames = Array("ISP", "ISP Support Number", "ISP Hours of Operation")
'arrFieldts = Array("TXT", "TXT", "TXT")
'arrFields = Array("CTYHO", "HNAME", "ADDRESS", "CITY", "ST", "ZIP", "MAIN_TEL", "MAIN_FAX", "CONTACT", "CONTACT_TEL", "CONTACT_EMAIL", "TIME_ZONE", "NDST", "GM_NAME", "GM_PHONE", "GM_EMAIL", "INST_ENG", "INST_DATE", "NOTES")
'arrFieldnames = Array("CTYHO", "Hotel Name", "Address", "City", "State", "Zip Code", "Main Telephone", "Main Fax", "Property Contact", "Contact Telephone", "Contact Email", "Time Zone", "Daylight Savings Time?", "GM Name", "GM Phone", "GM Email", "Installation Engineer", "Installation Date", "Notes")
'arrFieldts = Array("TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "YESNO", "TXT", "TXT", "TXT", "TXT", "DATE", "MEMO")
'arrFields = Array("SERIAL", "CTYHO", "PURCHASE_DATE", "PURCHASED_FROM", "INSTALLED_DATE", "ETYPE", "MANF", "MODEL")
'arrFieldnames = Array("Serial Number", "CTYHO", "Date Purchased", "Purchased From", "Date Installed", "Equipment Type", "Manufacturer", "Model")
'arrFieldts = Array("TXT", "TXT", "DATE", "TXT", "DATE", "MENU", "MENU", "MENU")
'arrFields = Array("CTYHO", "GUEST_PRINT", "PRINT_TYPE", "PRINT_DRV", "IP", "LOCATE", "USERNAME", "PASSWORD", "DNSUP", "PRI")
'arrFieldnames = Array("CTYHO", "Does Property Support Printing", "How Does Printing Occur", "How Are Print Drivers Available", "Printer IP Address", "Location Of Printer", "Printer Username", "Printer Password", "Datanamics Support", "PRI")
'arrFieldts = Array("TXT", "YESNO", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "YESNO")
'arrFields = Array("GROOMS", "PMS", "BILL_GUEST_INF", "SEC_PORT", "BILL_MEET", "BILL_WIRE", "SUPLEVEL", "BILL_GUEST", "MROOMS_JACKS", "BILL_MEET_INF", "MROOMS_MEDIA", "BILL_WIRE_INF", "SUPAREAS", "CTYHO", "MROOMS", "BILL_GUEST_PLAN", "VPNSUP", "MRL2_DEVICE", "GROOMS_MEDIA", "WIRELESS", "BILL_WIRE_PLAN", "VPN")
'arrFieldnames = Array("Number Of Guest Rooms", "PMS", "BILL_GUEST_INF", "SEC_PORT", "BILL_MEET", "BILL_WIRE", "SUPLEVEL", "BILL_GUEST", "MROOMS_JACKS", "BILL_MEET_INF", "MROOMS_MEDIA", "BILL_WIRE_INF", "SUPAREAS", "CTYHO", "MROOMS", "BILL_GUEST_PLAN", "VPNSUP", "MRL2_DEVICE", "GROOMS_MEDIA", "WIRELESS", "BILL_WIRE_PLAN", "VPN")
'arrFieldts = Array("TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT")
'arrFields = Array("SNAME", "IP", "SUBNET", "GATEWAY", "MAC", "LOCAT", "RPORTDIR", "IOS", "DNSUP")
'arrFieldnames = Array("Switch Name", "IP Address", "Subnnet Mask", "Gateway", "MAC Address", "Location", "RPORTDIR", "IOS", "DNSUP")
'arrFieldts = Array("TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT")
'arrFields = Array("SERIAL", "NETIP", "SUBIP", "iNATS", "iNATE", "PRIDHCPS", "PRIDHCPE", "PRISUB", "PRIGATE", "PUBDHCPS", "PUBDHCPE", "PUBSUB", "PUBGATE")
'arrFieldnames = Array("Serial Number", "Network Side IP", "Subscriber Side IP", "iNAT Start", "iNAT End", "Private DHCP Start", "Private DHCP End", "Private Subnet Mask", "Private Gateway", "Public DHCP Start", "Public DHCP End", "Public Subnet Mask", "Public Gateway")
'arrFieldts = Array("TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT")
'arrFields = Array("SERIAL", "SNAME", "IP", "SUBNET", "GATEWAY", "SSID", "MAC", "IOS", "ANTENNA", "MOUNTED", "ROOMNUM", "MEDIA", "POWINJ", "VLAN", "RPORTDIR", "CHANNEL", "DNSUP")
'arrFieldnames = Array("Serial Number", "WAP Name", "IP Address", "Subnet Mask", "Default Gateway", "SSID", "MAC Address", "IOS", "Antenna", "Location Mounted", "Rooms Covered", "Ethernet Media Type", "Power Injector", "VLAN", "IP NAT Redirected Port", "Channel", "Does Datanamics Support?")
'arrFieldts = Array("TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT", "TXT")
'arrFields = Array("MOUNT", "LITVIS", "FILTER", "SPLIT", "PHONE_NUM", "LINE_NUM", "ENET_CABLE")
'arrFieldnames = Array("Where Mounted?", "Are LEDs Visible?", "Is there a DSL Filter?", "Is there a Splitter?", "Number of Phones in Room", "Number of Phone Lines in Room", "Ethernet Cable in Room?")
'arrFieldts = Array("TXT", "YESNO", "YESNO", "YESNO", "TXT", "TXT", "YESNO")
arrFieldgs = Array("test1", "test2", "test3")
argLen = UBound(arrFieldgs)
arLen = UBound(arrFields)
%>
<!--#include virtual='/support_web/propentry/new/header.asp'-->
<script>
function vcheck(formname)
{
  return (true);
}
</script>
<FORM METHOD='POST' action='wap.asp' onsubmit='return vcheck(this)' name='formname'>
<input TYPE='hidden' NAME='VTI-GROUP' VALUE='0'>
<TABLE align='center' border='1' bordercolor='C0C0C0' cellpadding='0' cellspacing='0' width='80%'>
<TR>
<TD>
<%
For i = 0 to arLen
fld = arrFields(i)
fldn = arrFieldnames(i)
fldt = arrFieldts(i)
rfld = request.querystring(fld)
if isempty(rfld) then
	if (fldt = "TXT") then
		response.write "&lt;TR&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;TD&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;font size='1' face='verdana'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;b&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"&fldn&"<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/b&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/font&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TD&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;TD&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;INPUT NAME='"
		response.write fld
		response.write "' SIZE='25' CLASS='formfield'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TD&gt;<BR>"
		response.write "&lt;/TR&gt;<BR>"
	elseif (fldt = "PSWD") then
		response.write "&lt;TR&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;TD&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;font size='1' face='verdana'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;b&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"&fldn&"<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/b&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/font&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TD&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;TD&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;INPUT TYPE='password' NAME='"
		response.write fld
		response.write "' SIZE='25' CLASS='formfield'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TD&gt;<BR>"
		response.write "&lt;/TR&gt;<BR>"
	elseif (fldt = "DATE") then
		response.write "&lt;TR&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;TD&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;font size='1' face='verdana'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;b&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"&fldn&"<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/b&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/font&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TD&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;TD&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;INPUT NAME='"
		response.write fld
		response.write "' SIZE='25' CLASS='formfield'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;img src='/support_web/components/calendar.gif' onMouseUp='getCalendarFor(document.formname."
		response.write fld
		response.write ")' class='cal_hand' align='absbottom'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TD&gt;<BR>"
		response.write "&lt;/TR&gt;<BR>"
	elseif (fldt = "MEMO") then
		response.write "&lt;TR&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;TD align='center' colspan='2'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;font size='1' face='verdana'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;b&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"&fldn&"<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/b&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/font&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TD&gt;<BR>"
		response.write "&lt;/TR&gt;<BR>"
		response.write "&lt;TR&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;TD align='center' colspan='2'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;TEXTAREA NAME='"
		response.write fld
		response.write "' ROWS='5' COLS='60' WRAP='PHYSICAL' CLASS='formfield'&gt;&lt;/TEXTAREA&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TD&gt;<BR>"
		response.write "&lt;/TR&gt;<BR>"
	elseif (fldt = "YESNO") then
		response.write "&lt;TR&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;TD&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;font size='1' face='verdana'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;b&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"&fldn&"<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/b&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/font&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TD&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;TD&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;select size='1' NAME='"
		response.write fld
		response.write "' CLASS='formfield'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value='' selected&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select One<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/option&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value='Yes'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/option&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value='No'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/option&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/select&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TD&gt;<BR>"
		response.write "&lt;/TR&gt;<BR>"
	elseif (fldt = "MENU") then
		response.write "&lt;TR&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;TD&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;font size='1' face='verdana'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;b&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"&fldn&"<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/b&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/font&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TD&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;TD&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;select size='1' NAME='"
		response.write fld
		response.write "' CLASS='formfield'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value='' selected&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select One<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/option&gt;<BR>"
		For j = 0 to argLen
		fldg = arrFieldgs(j)
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option value='"
		response.write fldg
		response.write "'&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"&fldg&"<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/option&gt;<BR>"
		next
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/select&gt;<BR>"
		response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TD&gt;<BR>"
		response.write "&lt;/TR&gt;<BR>"
	end if
	else
	response.write "&lt;TR&gt;<BR>"
	response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;TD&gt;<BR>"
	response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;font size='1' face='verdana'&gt;<BR>"
	response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;b&gt;<BR>"
	response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"&fldn&"<BR>"
	response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/b&gt;<BR>"
	response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/font&gt;<BR>"
	response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TD&gt;<BR>"
	response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;TD&gt;<BR>"
	response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;INPUT TYPE='hidden' NAME='"
	response.write fld
	response.write "' VALUE='"
	response.write rfld
	response.write "'&gt;<BR>"
	response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;font size='1' face='verdana' color='blue'&gt;<BR>"
	response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"&rfld
	response.write "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/font&gt;<BR>"
	response.write "&nbsp;&nbsp;&nbsp;&nbsp;&lt;/TD&gt;<BR>"
	response.write "&lt;/TR&gt;<BR>"
end if
Next
%>
</TD>
</TR>
</TABLE>
</BLOCKQUOTE>
</FORM>
</BODY>
<script language="JavaScript">
if (document.all) {
 document.writeln("<div id=\"PopUpCalendar\" style=\"position:absolute; left:0px; top:0px; z-index:7; width:200px; height:77px; overflow: visible; visibility: hidden; background-color: #FFFFFF; border: 1px none #000000\" onMouseOver=\"if(ppcTI){clearTimeout(ppcTI);ppcTI=false;}\" onMouseOut=\"ppcTI=setTimeout(\'hideCalendar()\',500)\">");
 document.writeln("<div id=\"monthSelector\" style=\"position:absolute; left:0px; top:0px; z-index:9; width:181px; height:27px; overflow: visible; visibility:inherit\">");}
else if (document.layers) {
 document.writeln("<layer id=\"PopUpCalendar\" pagex=\"0\" pagey=\"0\" width=\"200\" height=\"200\" z-index=\"100\" visibility=\"hide\" bgcolor=\"#FFFFFF\" onMouseOver=\"if(ppcTI){clearTimeout(ppcTI);ppcTI=false;}\" onMouseOut=\"ppcTI=setTimeout('hideCalendar()',500)\">");
 document.writeln("<layer id=\"monthSelector\" left=\"0\" top=\"0\" width=\"181\" height=\"27\" z-index=\"9\" visibility=\"inherit\">");}
else {
 document.writeln("<p><font color=\"#FF0000\"><b>Error ! The current browser is either too old or too modern (usind DOM document structure).</b></font></p>");}
</script>
<noscript><p><font color="#FF0000"><b>JavaScript is not activated !</b></font></p></noscript>
<table border="1" cellspacing="1" cellpadding="2" width="200" bordercolorlight="#000000" bordercolordark="#000000" vspace="0" hspace="0"><form name="ppcMonthList"><tr><td align="center" bgcolor="#CCCCCC"><a href="javascript:moveMonth('Back')" onMouseOver="window.status=' ';return true;"><font face="Arial, Helvetica, sans-serif" size="2" color="#000000"><b>&lt;&nbsp;</b></font></a><font face="MS Sans Serif, sans-serif" size="1"> 
<select name="sItem" onMouseOut="if(ppcIE){window.event.cancelBubble = true;}" onChange="switchMonth(this.options[this.selectedIndex].value)" style="font-family: 'MS Sans Serif', sans-serif; font-size: 9pt"><option value="0" selected>2000 &#149; January</option><option value="1">2000 &#149; February</option><option value="2">2000 &#149; March</option><option value="3">2000 &#149; April</option><option value="4">2000 &#149; May</option><option value="5">2000 &#149; June</option><option value="6">2000 &#149; July</option><option value="7">2000 &#149; August</option><option value="8">2000 &#149; September</option><option value="9">2000 &#149; October</option><option value="10">2000 &#149; November</option><option value="11">2000 &#149; December</option><option value="0">2001 &#149; January</option></select></font><a href="javascript:moveMonth('Forward')" onMouseOver="window.status=' ';return true;"><font face="Arial, Helvetica, sans-serif" size="2" color="#000000"><b>&nbsp;&gt;</b></font></a></td></tr></form></table>
<table border="1" cellspacing="1" cellpadding="2" bordercolorlight="#000000" bordercolordark="#000000" width="200" vspace="0" hspace="0"><tr align="center" bgcolor="#CCCCCC"><td width="20" bgcolor="#FFFFCC"><b><font face="MS Sans Serif, sans-serif" size="1">Su</font></b></td><td width="20"><b><font face="MS Sans Serif, sans-serif" size="1">Mo</font></b></td><td width="20"><b><font face="MS Sans Serif, sans-serif" size="1">Tu</font></b></td><td width="20"><b><font face="MS Sans Serif, sans-serif" size="1">We</font></b></td><td width="20"><b><font face="MS Sans Serif, sans-serif" size="1">Th</font></b></td><td width="20"><b><font face="MS Sans Serif, sans-serif" size="1">Fr</font></b></td><td width="20" bgcolor="#FFFFCC"><b><font face="MS Sans Serif, sans-serif" size="1">Sa</font></b></td></tr></table>
<script language="JavaScript">
if (document.all) {
 document.writeln("</div>");
 document.writeln("<div id=\"monthDays\" style=\"position:absolute; left:0px; top:52px; z-index:8; width:200px; height:17px; overflow: visible; visibility:inherit; background-color: #FFFFFF; border: 1px none #000000\">&nbsp;</div></div>");}
else if (document.layers) {
 document.writeln("</layer>");
 document.writeln("<layer id=\"monthDays\" left=\"0\" top=\"52\" width=\"200\" height=\"17\" z-index=\"8\" bgcolor=\"#FFFFFF\" visibility=\"inherit\">&nbsp;</layer></layer>");}
else {/*NOP*/}
</script>