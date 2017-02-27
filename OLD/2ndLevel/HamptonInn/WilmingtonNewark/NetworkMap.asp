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
          <td><b>WAP Name</b></td>
		  <td><b>WAP IP</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (Room LIKE '%::Room::%')"
fp_sDefault="Room=.."
fp_sNoRecords="<tr><td colspan=3 align=""LEFT"" width=""100%"">No records returned.</td></tr>"
fp_sDataConn="HISAProperties"
fp_iMaxRecords=256
fp_iCommandType=1
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_iDisplayCols=3
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
		  	<%=FP_Field(fp_rs,"WAP Name")%>
          </td>          
          <td>
		  	<%=FP_Field(fp_rs,"WAP IP")%>
          </td>          
        </tr>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
    <map name="FPMap0">
    <area href="telnet:12.119.39.158" shape="rect" coords="376, 347, 485, 386">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target='_blank' shape="rect" coords="598, 432, 737, 458">
    <area href="/support_web/dnping.asp?theaddr=12.127.16.67" target='_blank' shape="rect" coords="199, 397, 220, 461">
    <area href="/support_web/dnping.asp?theaddr=12.127.17.71" target='_blank' shape="rect" coords="247, 398, 268, 461">
    <area href="telnet:12.119.39.158 23230" shape="rect" coords="604, 349, 775, 364">
    <area href="http://datadmin:zinck2240@12.119.39.158:23231" target='_blank' coords="102, 199, 139, 228" shape="rect">
    <area href="http://datadmin:zinck2240@12.119.39.158:23232" target='_blank' shape="rect" coords="249, 201, 290, 229">
    <area href="http://datadmin:zinck2240@12.119.39.158:23233" target='_blank' shape="rect" coords="402, 192, 441, 220">
    <area href="http://datadmin:zinck2240@12.119.39.158:23234" target='_blank' shape="rect" coords="580, 199, 621, 230">
    <area href="http://datadmin:zinck2240@12.119.39.158:23235" target='_blank' shape="rect" coords="737, 199, 776, 228">
    <area href="http://datadmin:zinck2240@12.119.39.158:23236" target='_blank' shape="rect" coords="99, 60, 139, 88">
    <area href="http://datadmin:zinck2240@12.119.39.158:23237" target='_blank' shape="rect" coords="246, 59, 285, 88">
    <area href="http://datadmin:zinck2240@12.119.39.158:23238" target='_blank' shape="rect" coords="401, 54, 440, 85">
    <area href="http://datadmin:zinck2240@12.119.39.158:23239" target='_blank' shape="rect" coords="578, 56, 615, 86">
    <area href="http://datadmin:zinck2240@12.119.39.158:23240" target='_blank' shape="rect" coords="739, 56, 777, 87">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->


