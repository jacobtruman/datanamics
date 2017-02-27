<%
ptype = "2nd Level Network Map"
%>
<!--#include virtual='/support_web/Components/thetop.asp'-->
<BR>
    <form BOTID='0' METHOD='POST' ACTION='NetworkMap.asp?prop=<%=prop%>'>
      <table BORDER="0">
        <tr>
          <td><b>Room</b></td>
          <td><input TYPE="TEXT" NAME="Room" VALUE="<%=Request("Room")%>" size="20"></td>
        </tr>
      </table>
      <br>
      <input TYPE="Submit"><input TYPE="Reset">
    </form>
    <table width='90%' border='1' cellpadding='0' cellspacing='0' bordercolor='C0C0C0' align='center'>
      <thead>
        <tr>
          <td><b>Room</b></td>
          <td><b>Device Name</b></td>
          <td><b>Device IP</b></td>
          <td><b>VLAN</b></td>
          <td><b>Connection Type</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/support_web/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (""Room"" LIKE '%::Room::%')"
fp_sDefault="Room=..."
fp_sNoRecords="<tr><td colspan=5 align=left width=""100%"">No records returned.</td></tr>"
fp_sDataConn="HISAProperties"
fp_iMaxRecords=256
fp_iCommandType=1
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_iDisplayCols=5
fp_fCustomQuery=False
BOTID=0
fp_iRegion=BOTID
%>
<!--#include virtual="/support_web/_fpclass/fpdbrgn1.inc"-->
        <tr>
          <td>
		  	<%=FP_Field(fp_rs,"Room")%>
          </td>
          <td>
			<%=FP_Field(fp_rs,"Device Name")%>
          </td>
          <td>
		  	<%
			if (FP_Field(fp_rs,"ctype") = "telnet") then
				if ((FP_Field(fp_rs,"cport") = "") or (FP_Field(fp_rs,"cport") = "&nbsp;")) then
					lnk = FP_Field(fp_rs,"gtway")
				else
					lnk = FP_Field(fp_rs,"gtway")&" "&FP_Field(fp_rs,"cport")
				end if
				response.write "<a href='telnet:"&lnk&"'>"&FP_Field(fp_rs,"Device IP")&"</a>"
			elseif (FP_Field(fp_rs,"ctype") = "web") then
				if ((FP_Field(fp_rs,"cport") = "") or (FP_Field(fp_rs,"cport") = "&nbsp;")) then
					lnk = lgn&":"&pswd&"@"&FP_Field(fp_rs,"gtway")
				else
					lnk = lgn&":"&pswd&"@"&FP_Field(fp_rs,"gtway")&":"&FP_Field(fp_rs,"cport")
				end if
				response.write "<a href='http://"&lnk&"' target='_blank'>"&FP_Field(fp_rs,"Device IP")&"</a>"
			end if
			%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"VLAN")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Connection Type")%>
          </td>
        </tr>
<!--#include virtual="/support_web/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name='FPMap0'>
	<area href='/support_web/dnping.asp?theaddr=63.243.41.33' target='_blank' coords='321, 467, 409, 482' shape='rect'>
    <area href='/support_web/dnping.asp?theaddr=66.255.85.8' target='_blank' shape='rect' coords='161, 511, 185, 570'>
    <area href='/support_web/dnping.asp?theaddr=66.255.85.9' target='_blank' shape='rect' coords='208, 512, 230, 574'>
    <area href='telnet:datanamicsinc.com 25' shape='rect' coords='256, 514, 279, 572'>
    <area href='telnet:63.243.41.35 23230' coords='494, 459, 662, 478' shape='rect'>
    <area href='http://<%=lgn%>:<%=pswd%>@<%=gateway%>' target='_blank' coords='460, 527, 581, 566' shape='rect'>
    <area href='http://63.243.41.36:5800' shape='rect' coords='716, 447, 768, 550' target='_blank'>
	<area href='telnet:63.243.41.35 23231' shape='rect' coords='639,359,799,375'>
    <area href='http://datadmin:zinck2240@63.243.41.35:23233' target='_blank' shape='rect' coords='517, 141, 555, 172'>
    <area href='http://datadmin:zinck2240@63.243.41.35:23234' target='_blank' shape='rect' coords='304, 147, 343, 178'>
    <area href='http://datadmin:zinck2240@63.243.41.35:23235' target='_blank' shape='rect' coords='113, 150, 153, 179'>
    <area href='http://datadmin:zinck2240@63.243.41.35:23236' target='_blank' shape='rect' coords='114, 237, 153, 268'>
    <area href='http://datadmin:zinck2240@63.243.41.35:23237' target='_blank' shape='rect' coords='516, 46, 555, 74'>
    <area href='http://datadmin:zinck2240@63.243.41.35:23238' target='_blank' shape='rect' coords='305, 250, 343, 281'>
    <area href='http://datadmin:zinck2240@63.243.41.35:23239' target='_blank' shape='rect' coords='516, 249, 555, 279'>
    <area href='http://datadmin:zinck2240@63.243.41.35:23240' target='_blank' shape='rect' coords='714, 143, 753, 170'>
    <area href='http://datadmin:zinck2240@63.243.41.35:23241' target='_blank' shape='rect' coords='716, 47, 758, 77'>
    <area href='http://datadmin:zinck2240@63.243.41.35:23242' target='_blank' shape='rect' coords='305, 47, 345, 76'>
    <area href='http://datadmin:zinck2240@63.243.41.35:23243' target='_blank' shape='rect' coords='113, 48, 152, 78'>
	<area href='http://datadmin:zinck2240@63.243.41.35:23244' target='_blank' shape='rect' coords='717,239,753,266'>
	<area href='http://datadmin:zinck2240@63.243.41.35:23245' target='_blank' shape='rect' coords='114,338,153,366'>
	<area coords='435,358,602,377' href='http://datadmin:zinck2240@63.243.41.45' target='_blank'>
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
