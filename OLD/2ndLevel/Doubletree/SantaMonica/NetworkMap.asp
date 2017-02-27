<%
ptype = "2nd Level Network Map"
%>
<!--#include virtual='/support_web/Components/thetop.asp'-->
	<BR>
    <form BOTID='0' METHOD='POST' ACTION='NetworkMap.asp?prop=<%=prop%>'>
      <table BORDER='0'>
        <tr>
          <td><b>Room</b></td>
          <td><input TYPE='TEXT' NAME='Room' VALUE='<%=Request("Room")%>' size='20'></td>
        </tr>
      </table>
      <br>
      <input TYPE='Submit'><input TYPE='Reset'>
      <BR>
    </form>
    <table width='90%' border='1' cellpadding='0' cellspacing='0' bordercolor='C0C0C0' align='center'>
      <thead>
        <tr>
          <td><b>Room</b></td>
          <td><b>Device Name</b></td>
		  <td><b>Device IP</b></td>
		  <td><b>Port</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (Room LIKE '%::Room::%')"
fp_sDefault="Room=.."
fp_sNoRecords="<tr><td colspan=4 align=""LEFT"" width=""100%"">No records returned.</td></tr>"
fp_sDataConn="HISAProperties"
fp_iMaxRecords=256
fp_iCommandType=1
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_iDisplayCols=4
fp_fCustomQuery=False
BOTID=0
fp_iRegion=BOTID
%>
<!--#include virtual="/_fpclass/fpdbrgn1.inc"-->
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
		  	<%=FP_Field(fp_rs,"Port")%>
          </td>
        </tr>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name='FPMap0'>
	<area  coords='225,612,247,675' href='/support_web/dnping.asp?theaddr=12.127.16.68' target='_blank'>
	<area  coords='274,610,296,676' href='/support_web/dnping.asp?theaddr=12.127.17.72' target='_blank'>
	<area  coords='366,574,535,592' href='/support_web/dnping.asp?theaddr=12.170.226.1' target='_blank'>
	<area  coords='643,646,763,670' href='http://<%=lgn%>:<%=pswd%>@<%=gateway%>' target='_blank'>
	<area  coords='617,577,787,596' href='telnet:12.170.226.2 23230'>
	<area  coords='630,447,798,466' href='telnet:12.170.226.2 23231'>
	<area  coords='642,192,800,210' href='telnet:12.170.226.2 23232'>
	<area  coords='107,430,148,460' href='http://datadmin:zinck2240@12.170.226.2:23233' target='_blank'>
	<area  coords='284,431,320,460' href='http://datadmin:zinck2240@12.170.226.2:23237' target='_blank'>
	<area  coords='468,425,506,453' href='http://datadmin:zinck2240@12.170.226.2:23248' target='_blank'>
	<area  coords='113,298,151,327' href='http://datadmin:zinck2240@12.170.226.2:23234' target='_blank'>
	<area  coords='262,301,298,329' href='http://datadmin:zinck2240@12.170.226.2:23236' target='_blank'>
	<area  coords='414,300,451,329' href='http://datadmin:zinck2240@12.170.226.2:23239' target='_blank'>
	<area  coords='574,298,611,327' href='http://datadmin:zinck2240@12.170.226.2:23241' target='_blank'>
	<area  coords='730,299,769,328' href='http://datadmin:zinck2240@12.170.226.2:23243' target='_blank'>
	<area  coords='100,180,139,208' href='http://datadmin:zinck2240@12.170.226.2:23245' target='_blank'>
	<area  coords='247,180,284,207' href='http://datadmin:zinck2240@12.170.226.2:23247' target='_blank'>
	<area  coords='425,186,463,212' href='http://datadmin:zinck2240@12.170.226.2:23235' target='_blank'>
	<area  coords='556,184,596,214' href='http://datadmin:zinck2240@12.170.226.2:23238' target='_blank'>
	<area  coords='108,74,146,102' href='http://datadmin:zinck2240@12.170.226.2:23240' target='_blank'>
	<area  coords='257,73,295,102' href='http://datadmin:zinck2240@12.170.226.2:23242' target='_blank'>
	<area  coords='407,73,445,103' href='http://datadmin:zinck2240@12.170.226.2:23244' target='_blank'>
	<area  coords='567,74,606,101' href='http://datadmin:zinck2240@12.170.226.2:23246' target='_blank'>
	<area  coords='725,73,763,103' href='http://datadmin:zinck2240@12.170.226.2:23249' target='_blank'>
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
