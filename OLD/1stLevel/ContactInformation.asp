<%
ptype = "Contact Information"
%>
<!--#include virtual='/support_web/Components/top.asp'-->
<!--#include virtual='/support_web/Components/dbtop.asp'-->
<!--#include virtual='/support_web/Components/header.asp'-->
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM contact WHERE (prop =  '::prop::')"
fp_sDefault="prop="&prop
fp_sNoRecords="This page is not yet ready."
fp_sDataConn="propinfo"
fp_iMaxRecords=256
fp_iCommandType=1
fp_iPageSize=5
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_sColTypes="&prop=202&contact=202&email=202&staddr=202&city=202&state=202&zip=202&phone=202&cphone=202&"
fp_iDisplayCols=9
fp_fCustomQuery=False
BOTID=0
fp_iRegion=BOTID
%>
<!--#include virtual="/_fpclass/fpdbrgn1.inc"-->
<BR>
<table border='0' align='left'>
<%
contact = FP_FieldVal(fp_rs,"contact")
email = FP_FieldVal(fp_rs,"email")
cphone = FP_FieldVal(fp_rs,"cphone")
phone = FP_FieldVal(fp_rs,"phone")
staddr = FP_FieldVal(fp_rs,"staddr")
csz = FP_FieldVal(fp_rs,"csz")
fax = FP_FieldVal(fp_rs,"fax")

if ((contact = "&nbsp;") or (contact = "")) then
else
	response.write "<tr>"
	response.write "<td align='left'>"
	response.write "<b>"
	response.write "<font face='Verdana' size='2'>"
	response.write "Property Contact:"
	response.write "</font>"
	response.write "</b>"
	response.write "</td>"
	response.write "<td align='left'>"
	response.write "<font face='Verdana' size='2'>"
	response.write contact
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if ((email = "&nbsp;") or (email = "")) then
else
	response.write "<tr>"
	response.write "<td align='left'>"
	response.write "<b>"
	response.write "<font face='Verdana' size='2'>"
	response.write "Contact E-Mail:"
	response.write "</font>"
	response.write "</b>"
	response.write "</td>"
	response.write "<td align='left'>"
	response.write "<font face='Verdana' size='2'>"
	response.write "<a href='mailto:"&email&"'>"
	response.write email
	response.write "</a>"
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if ((cphone = "&nbsp;") or (cphone = "")) then
else
	response.write "<tr>"
	response.write "<td align='left'>"
	response.write "<b>"
	response.write "<font face='Verdana' size='2'>"
	response.write "Contact Phone:"
	response.write "</font>"
	response.write "</b>"
	response.write "</td>"
	response.write "<td align='left'>"
	response.write "<font face='Verdana' size='2'>"
	response.write cphone
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if ((staddr = "&nbsp;") or (staddr = "")) then
else
	response.write "<tr>"
	response.write "<td align='left'>"
	response.write "<b>"
	response.write "<font face='Verdana' size='2'>"
	response.write "Address:"
	response.write "</font>"
	response.write "</b>"
	response.write "</td>"
	response.write "<td align='left'>"
	response.write "<font face='Verdana' size='2'>"
	response.write "<br>"
	response.write staddr
	response.write "<br>"
	if ((csz = "&nbsp;") or (csz = "")) then
	else
		response.write csz
	end if
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if ((phone = "&nbsp;") or (phone = "")) then
else
	response.write "<tr>"
	response.write "<td align='left'>"
	response.write "<b>"
	response.write "<font face='Verdana' size='2'>"
	response.write "Front Desk:"
	response.write "</font>"
	response.write "</b>"
	response.write "</td>"
	response.write "<td align='left'>"
	response.write "<font face='Verdana' size='2'>"
	response.write phone
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if ((fax = "&nbsp;") or (fax = "")) then
else
	response.write "<tr>"
	response.write "<td align='left'>"
	response.write "<b>"
	response.write "<font face='Verdana' size='2'>"
	response.write "Fax:"
	response.write "</font>"
	response.write "</b>"
	response.write "</td>"
	response.write "<td align='left'>"
	response.write "<font face='Verdana' size='2'>"
	response.write fax
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

response.write "<tr>"
response.write "<td>"
response.write "<BR>"
response.write "</td>"
response.write "<td>"
response.write "<BR>"
response.write "</td>"
response.write "</tr>"

if ((contact2 = "&nbsp;") or (contact2 = "")) then
else
	response.write "<tr>"
	response.write "<td align='left'>"
	response.write "<b>"
	response.write "<font face='Verdana' size='2'>"
	response.write "2nd Property Contact:"
	response.write "</font>"
	response.write "</b>"
	response.write "</td>"
	response.write "<td align='left'>"
	response.write "<font face='Verdana' size='2'>"
	response.write contact2
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if ((email2 = "&nbsp;") or (email2 = "")) then
else
	response.write "<tr>"
	response.write "<td align='left'>"
	response.write "<b>"
	response.write "<font face='Verdana' size='2'>"
	response.write "2nd Contact E-Mail:"
	response.write "</font>"
	response.write "</b>"
	response.write "</td>"
	response.write "<td align='left'>"
	response.write "<font face='Verdana' size='2'>"
	response.write "<a href='mailto:"&email&"'>"
	response.write email2
	response.write "</a>"
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if ((cphone2 = "&nbsp;") or (cphone2 = "")) then
else
	response.write "<tr>"
	response.write "<td align='left'>"
	response.write "<b>"
	response.write "<font face='Verdana' size='2'>"
	response.write "2nd Contact Phone:"
	response.write "</font>"
	response.write "</b>"
	response.write "</td>"
	response.write "<td align='left'>"
	response.write "<font face='Verdana' size='2'>"
	response.write cphone2
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if
%>
</table>
</td>
</tr>
</table>
</body>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
<!-- Created/Modified by Jacob Truman/Bryan Brunner -->