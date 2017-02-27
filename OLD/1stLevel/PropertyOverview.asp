<%
ptype = "Property Overview"
%>
<!--#include virtual='/support_web/Components/top.asp'-->
<!--#include virtual='/support_web/Components/dbtop.asp'-->
<!--#include virtual='/support_web/Components/header.asp'-->
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM overview WHERE (prop =  '::prop::')"
fp_sDefault="prop="&prop
fp_sNoRecords="This property does not exist in the Database."
fp_sDataConn="propinfo"
fp_iMaxRecords=256
fp_iCommandType=1
fp_iPageSize=5
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_sColTypes="&prop=202&gateway=202&ctype=202&cpegad=202&bill=202&smtp=202&vpn=202&print=202&vlans=202&wireless=202&ssid=202&areas=202&slevel=202&"
fp_iDisplayCols=13
fp_fCustomQuery=False
BOTID=0
fp_iRegion=BOTID
%>
<!--#include virtual="/_fpclass/fpdbrgn1.inc"-->
<br>
<table border='0' width='100%'>
<%
gateway = FP_FieldVal(fp_rs,"gateway")
ctype = FP_FieldVal(fp_rs,"ctype")
cpegad = FP_FieldVal(fp_rs,"cpegad")
bill = FP_FieldVal(fp_rs,"bill")
smtp = FP_FieldVal(fp_rs,"smtp")
vpn = FP_FieldVal(fp_rs,"vpn")
vlans = FP_FieldVal(fp_rs,"vlans")
print = FP_FieldVal(fp_rs,"print")
ssid = FP_FieldVal(fp_rs,"ssid")
wireless = FP_FieldVal(fp_rs,"wireless")
areas = FP_FieldVal(fp_rs,"areas")
slevel = FP_FieldVal(fp_rs,"slevel")
bmethod = FP_FieldVal(fp_rs,"bmethod")
price = FP_FieldVal(fp_rs,"price")
cpetype = FP_FieldVal(fp_rs,"cpetype")

if (gateway = "&nbsp;") then
else
	response.write "<tr>"
	response.write "<td width='18%'>"
	response.write "<font size='2' face='Verdana'>"
	response.write "Gateway"
	response.write "</font>"
	response.write "</td>"
	response.write "<td width='82%'>"
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write gateway
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if (ctype = "&nbsp;") then
else
	response.write "<tr>"
	response.write "<td width='18%'>"
	response.write "<font size='2' face='Verdana'>"
	response.write "Cabling Type"
	response.write "</font>"
	response.write "</td>"
	response.write "<td width='82%'>"
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write ctype
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if (cpegad = "&nbsp;") then
else
	response.write "<tr>"
	response.write "<td width='18%'>"
	response.write "<font size='2' face='Verdana'>"
	if (cpetype = "Gigalink") then
		response.write "<a href='/support_web/1stlevel/HowTo/CPEType1.asp' target='_blank'>CPE in Room</a>"
	elseif (cpetype = "Cygnet") then
		response.write "<a href='/support_web/1stlevel/HowTo/CPEType2.asp' target='_blank'>CPE in Room</a>"
	elseif (cpetype = "Cisco575") then
		response.write "<a href='/support_web/1stlevel/HowTo/CPEType3.asp' target='_blank'>CPE in Room</a>"
	elseif (cpetype = "Cisco585") then
		response.write "<a href='/support_web/1stlevel/HowTo/CPEType4.asp' target='_blank'>CPE in Room</a>"
	elseif (cpetype = "Netopia") then
		response.write "<a href='/support_web/1stlevel/HowTo/CPEType5.asp' target='_blank'>CPE in Room</a>"
	elseif (cpetype = "Paradyne") then
		response.write "<a href='/support_web/1stlevel/HowTo/CPEType6.asp' target='_blank'>CPE in Room</a>"
	elseif (cpetype = "Elastic") then
		response.write "<a href='/support_web/1stlevel/HowTo/CPEType7.asp' target='_blank'>CPE in Room</a>"
	elseif (cpetype = "Turbocomm") then
		response.write "<a href='/support_web/1stlevel/HowTo/CPEType8.asp' target='_blank'>CPE in Room</a>"
	else
		response.write "CPE in Room"
	end if
	response.write "</font>"
	response.write "</td>"
	response.write "<td width='82%'>"
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write cpegad
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if (bill = "&nbsp;") then
else
	response.write "<tr>"
	response.write "<td width='18%'>"
	response.write "<font size='2' face='Verdana'>"
	response.write "Billing"
	response.write "</font>"
	response.write "</td>"
	response.write "<td width='82%'>"
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write bill
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if (bmethod = "&nbsp;") then
else
	response.write "<tr>"
	response.write "<td width='18%'>"
	response.write "<font size='2' face='Verdana'>"
	response.write "Billing Method"
	response.write "</font>"
	response.write "</td>"
	response.write "<td width='82%'>"
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write bmethod
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if (price = "&nbsp;") then
else
	response.write "<tr>"
	response.write "<td width='18%'>"
	response.write "<font size='2' face='Verdana'>"
	response.write "Price"
	response.write "</font>"
	response.write "</td>"
	response.write "<td width='82%'>"
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write price
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if (smtp = "&nbsp;") then
else
	response.write "<tr>"
	response.write "<td width='18%'>"
	response.write "<font size='2' face='Verdana'>"
	response.write "SMTP Supported"
	response.write "</font>"
	response.write "</td>"
	response.write "<td width='82%'>"
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write smtp
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if (vpn = "&nbsp;") then
else
	response.write "<tr>"
	response.write "<td width='18%'>"
	response.write "<font size='2' face='Verdana'>"
	response.write "VPN Supported"
	response.write "</font>"
	response.write "</td>"
	response.write "<td width='82%'>"
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write vpn
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if (print = "&nbsp;") then
else
	response.write "<tr>"
	response.write "<td width='18%'>"
	response.write "<font size='2' face='Verdana'>"
	response.write "Printing Available"
	response.write "</font>"
	response.write "</td>"
	response.write "<td width='82%'>"
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write print
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if (vlans = "&nbsp;") then
else
	response.write "<tr>"
	response.write "<td width='18%'>"
	response.write "<font size='2' face='Verdana'>"
	response.write "VLANs"
	response.write "</font>"
	response.write "</td>"
	response.write "<td width='82%'>"
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write vlans
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if (wireless = "&nbsp;") then
else
	response.write "<tr>"
	response.write "<td width='18%'>"
	response.write "<font size='2' face='Verdana'>"
	response.write "Wireless"
	response.write "</font>"
	response.write "</td>"
	response.write "<td width='82%'>"
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write wireless
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if (ssid = "&nbsp;") then
else
	response.write "<tr>"
	response.write "<td width='18%'>"
	response.write "<font size='2' face='Verdana'>"
	response.write "SSID"
	response.write "</font>"
	response.write "</td>"
	response.write "<td width='82%'>"
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write ssid
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if (areas = "&nbsp;") then
else
	response.write "<tr>"
	response.write "<td width='18%'>"
	response.write "<font size='2' face='Verdana'>"
	response.write "Supported Areas"
	response.write "</font>"
	response.write "</td>"
	response.write "<td width='82%'>"
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write areas
	response.write "</font>"
	response.write "</td>"
	response.write "</tr>"
end if

if (slevel = "&nbsp;") then
else
	response.write "<tr>"
	response.write "<td width='18%'>"
	response.write "<font size='2' face='Verdana'>"
	response.write "Support Level"
	response.write "</font>"
	response.write "</td>"
	response.write "<td width='82%'>"
	response.write "<font size='2' face='Verdana' color='#FF0000'>"
	response.write slevel
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