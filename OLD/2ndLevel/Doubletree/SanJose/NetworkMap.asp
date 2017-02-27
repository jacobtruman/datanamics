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
          <td><b>Port</b></td>
          <td><b>VLAN</b></td>
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
fp_iPageSize=5
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
				response.write "<a href='telnet:"&FP_Field(fp_rs,"gtway")&" "&FP_Field(fp_rs,"cport")&"'>"&FP_Field(fp_rs,"Device IP")&"</a>"
			elseif (FP_Field(fp_rs,"ctype") = "web") then
				response.write "<a href='http://"&lgn&":"&pswd&"@"&FP_Field(fp_rs,"gtway")&":"&FP_Field(fp_rs,"cport")&"' target='_blank'>"&FP_Field(fp_rs,"Device IP")&"</a>"
			end if
			%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Port")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"VLAN")%>
          </td>
        </tr>
<!--#include virtual="/support_web/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name='FPMap0'>
	<area href="telnet:12.118.15.202" coords="323, 971, 489, 988" shape="rect">
    <area href="/support_web/dnping.asp?theaddr=12.171.17.71" target="_blank" shape="rect" coords="154, 955, 178, 1017">
    <area href="/support_web/dnping.asp?theaddr=12.172.16.67" target="_blank" shape="rect" coords="196, 954, 220, 1016">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" shape="rect" coords="579, 975, 692, 1002">
    <area href="telnet:12.118.15.202 23230" shape="rect" coords="463, 889, 630, 908">
    <area href="telnet:12.118.15.202 23231" shape="rect" coords="505, 686, 674, 705">
    <area href="telnet:12.118.15.202 23232" shape="rect" coords="303, 686, 472, 703">
    <area href="telnet:12.118.15.202 23233" shape="rect" coords="503, 771, 670, 788">
    <area href="telnet:12.118.15.202 23234" shape="rect" coords="300, 771, 472, 788">
    <area href="telnet:12.118.15.202 23235" shape="rect" coords="614, 566, 781, 586">
    <area href="telnet:12.118.15.202 23236" shape="rect" coords="423, 32, 592, 51">
    <area href="telnet:12.118.15.202 23237" shape="rect" coords="424, 99, 592, 117">
    <area href="telnet:12.118.15.202 23238" shape="rect" coords="422, 170, 592, 187">
    <area href="telnet:12.118.15.202 23239" shape="rect" coords="422, 249, 590, 266">
    <area href="telnet:12.118.15.202 23240" shape="rect" coords="423, 315, 592, 331">
    <area href="telnet:12.118.15.202 23241" shape="rect" coords="423, 382, 588, 399">
    <area href="telnet:12.118.15.202 23242" shape="rect" coords="425, 454, 589, 472">
    <area href="telnet:12.118.15.202 23243" shape="rect" coords="639, 32, 809, 52">
    <area href="telnet:12.118.15.202 23244" shape="rect" coords="639, 100, 807, 117">
    <area href="telnet:12.118.15.202 23245" shape="rect" coords="638, 250, 810, 266">
    <area href="telnet:12.118.15.202 23246" shape="rect" coords="638, 317, 807, 332">
    <area href="telnet:12.118.15.202 23247" shape="rect" coords="638, 171, 810, 188">
    <area href="telnet:12.118.15.202 23248" shape="rect" coords="639, 382, 806, 400">
    <area href="telnet:12.118.15.202 23249" shape="rect" coords="639, 453, 805, 471">
    <area href="telnet:12.118.15.202 23250" shape="rect" coords="363, 565, 529, 584">
    <area href="telnet:12.118.15.202 23251" shape="rect" coords="14, 99, 182, 117">
    <area href="telnet:12.118.15.202 23252" shape="rect" coords="16, 172, 182, 189">
    <area href="telnet:12.118.15.202 23253" shape="rect" coords="16, 249, 181, 266">
    <area href="telnet:12.118.15.202 23254" shape="rect" coords="232, 389, 397, 404">
    <area href="telnet:12.118.15.202 23255" shape="rect" coords="233, 455, 397, 470">
    <area href="telnet:12.118.15.202 23256" shape="rect" coords="229, 322, 398, 339">
    <area href="telnet:12.118.15.202 23257" shape="rect" coords="232, 99, 397, 117">
    <area href="telnet:12.118.15.202 23258" shape="rect" coords="229, 171, 398, 189">
    <area href="telnet:12.118.15.202 23259" shape="rect" coords="230, 251, 398, 267">
    <area href="telnet:12.118.15.202 23260" shape="rect" coords="11, 323, 182, 339">
    <area href="telnet:12.118.15.202 23261" shape="rect" coords="13, 387, 183, 406">
    <area href="telnet:12.118.15.202 23262" shape="rect" coords="10, 453, 183, 472">
    <area href="http://datadmin:zinck2240@12.126.36.222:23263" target="_blank" shape="rect" coords="89, 714, 131, 743">
    <area href="http://datadmin:zinck2240@12.126.36.222:23264" target="_blank" shape="rect" coords="89, 569, 129, 598">
    <area href="http://12.22.55.4:5800" target="_blank" shape="rect" coords="748, 930, 802, 1032">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
