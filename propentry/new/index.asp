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
<form method='POST' action='property.asp' formname='inventory'>
<input type='submit' value='Add Property' name='Property' CLASS='formbutton'>
</form>
<BR>
<BR>
<BR>
</center>
</body>
