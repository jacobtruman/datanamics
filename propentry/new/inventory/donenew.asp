<%ptype = "Add Inventory"
CTYHO = request.querystring("CTYHO")
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
CTYHO = Request("CTYHO")
%>
<!--#include virtual='/support_web/propentry/new/db/bottom.asp'-->
<!--#include virtual='/support_web/propentry/new/header.asp'-->
<center>
<BR>
<BR>
<BR>
<form method='POST' action='/support_web/propentry/new/inventory.asp?CTYHO=<%response.write CTYHO%>' formname='inventory'>
<input type='submit' value='Add Another Device' name='Inventory' CLASS='formbutton'>
</form>
<form method='POST' action='/support_web/propentry/new/ispinfo.asp?CTYHO=<%response.write CTYHO%>' formname='next'>
<input type='submit' value='Done Adding Devices' name='Next' CLASS='formbutton'>
</form>
<BR>
<BR>
<BR>
</center>
</body>
