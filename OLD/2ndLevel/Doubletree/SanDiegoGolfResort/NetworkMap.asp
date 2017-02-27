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
fp_iPageSize=5
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
				response.write "<a href='telnet:"&FP_Field(fp_rs,"gtway")&FP_Field(fp_rs,"cport")&"'>"&FP_Field(fp_rs,"Device IP")&"</a>"
			elseif (FP_Field(fp_rs,"ctype") = "web") then
				response.write "<a href='http://"&lgn&":"&pswd&"@"&FP_Field(fp_rs,"gtway")&":"&FP_Field(fp_rs,"cport")&"' target='_blank'>"&FP_Field(fp_rs,"Device IP")&"</a>"
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
	<area coords='228,542,250,604' href='/support_web/dnping.asp?theaddr=12.127.16.68' target='_blank'>
	<area coords='276,542,297,604' href='/support_web/dnping.asp?theaddr=12.127.17.72' target='_blank'>
	<area coords='378,496,481,526' href='telnet:12.118.70.250'>
	<area coords='636,574,759,596' href='http://<%=lgn%>:<%=pswd%>@<%=gateway%>' target='_blank'>
	<area coords='609,505,778,521' href='telnet:12.118.70.250 23230'>
	<area coords='70,388,236,408' href='http://datadmin:zinck2240@12.118.70.250:23231' target='_blank'>
	<area coords='346,388,512,407' href='http://datadmin:zinck2240@12.118.70.250:23232' target='_blank'>
	<area coords='610,390,777,409' href='http://datadmin:zinck2240@12.118.70.250:23233' target='_blank'>
	<area coords='101,274,140,302' href='http://datadmin:zinck2240@12.118.70.250:23234' target='_blank'>
	<area coords='249,273,287,302' href='http://datadmin:zinck2240@12.118.70.250:23235' target='_blank'>
	<area coords='418,275,457,302' href='http://datadmin:zinck2240@12.118.70.250:23236' target='_blank'>
	<area coords='583,280,622,308' href='http://datadmin:zinck2240@12.118.70.250:23237' target='_blank'>
	<area coords='729,280,768,310' href='http://datadmin:zinck2240@12.118.70.250:23242' target='_blank'>
	<area coords='101,162,139,190' href='http://datadmin:zinck2240@12.118.70.250:23239' target='_blank'>
	<area coords='253,157,290,185' href='http://datadmin:zinck2240@12.118.70.250:23240' target='_blank'>
	<area coords='404,157,441,186' href='http://datadmin:zinck2240@12.118.70.250:23238' target='_blank'>
	<area coords='580,157,619,185' href='http://datadmin:zinck2240@12.118.70.250:23243' target='_blank'>
	<area coords='741,157,780,185' href='http://datadmin:zinck2240@12.118.70.250:23241' target='_blank'>
	<area coords='120,49,158,78' href='http://datadmin:zinck2240@12.118.70.250:23245' target='_blank'>
	<area coords='320,49,358,78' href='http://datadmin:zinck2240@12.118.70.250:23244' target='_blank'>
	<area coords='510,50,549,78' href='http://datadmin:zinck2240@12.118.70.250:23246' target='_blank'>
	<area coords='723,49,763,77' href='http://datadmin:zinck2240@12.118.70.250:23247' target='_blank'>
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
