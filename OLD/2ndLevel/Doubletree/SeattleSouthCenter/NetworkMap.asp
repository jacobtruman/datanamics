<%
ptype = "2nd Level Network Map"
%>
<!--#include virtual='/support_web/Components/thetop.asp'-->
<BR>
    <form BOTID='0' METHOD='POST' ACTION='NetworkMap.asp?prop=<%=prop%>'>
      <table BORDER="0">
        <tr>
          <td><b>Room / Meeting Room / Equipment</b></td>
          <td><input TYPE="TEXT" NAME="Room / Meeting Room / Equipment" VALUE="<%=Request("Room / Meeting Room / Equipment")%>" size="20"></td>
        </tr>
      </table>
      <br>
      <input TYPE="Submit"><input TYPE="Reset">
    </form>
    <table width='90%' border='1' cellpadding='0' cellspacing='0' bordercolor='C0C0C0' align='center'>
      <thead>
        <tr>
          <td><b>Room / Meeting Room / Equipment</b></td>
          <td><b>Switch Name</b></td>
          <td><b>Switch IP</b></td>
          <td><b>Port #</b></td>
          <td><b>WAP IP/Connect</b></td>
          <td><b>WAP VLAN #</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/support_web/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (""Room / Meeting Room / Equipment"" LIKE '::Room / Meeting Room / Equipment::%')"
fp_sDefault="Room / Meeting Room / Equipment=.."
fp_sNoRecords="<tr><td colspan=6 align=left width=""100%"">No records returned.</td></tr>"
fp_sDataConn="HISAProperties"
fp_iMaxRecords=256
fp_iCommandType=1
fp_iPageSize=5
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_iDisplayCols=6
fp_fCustomQuery=False
BOTID=0
fp_iRegion=BOTID
%>
<!--#include virtual="/support_web/_fpclass/fpdbrgn1.inc"-->
        <tr>
          <td>
		  	<%=FP_Field(fp_rs,"Room / Meeting Room / Equipment")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Switch Name")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Switch IP")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Port #")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"WAP IP/Connect")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"WAP VLAN #")%>
          </td>
        </tr>
<!--#include virtual="/support_web/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name='FPMap0'>
	<area href="/support_web/dnping.asp?theaddr=12.127.16.67" target="_blank" shape="rect" coords="195, 598, 220, 661">
    <area href="/support_web/dnping.asp?theaddr=12.127.17.71" target="_blank" coords="242, 598, 268, 662" shape="rect">
    <area href="telnet:24.234.142.29 25" shape="rect" coords="292, 597, 314, 662">
    <area href="telnet:12.124.172.98" shape="rect" coords="380, 562, 484, 589">
    <area href="telnet:12.124.172.98 23230" shape="rect" coords="325, 427, 496, 443">
    <area href="telnet:12.124.172.98 23231" shape="rect" coords="586, 428, 758, 444">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" coords="528, 607, 636, 633" shape="rect">
    <area href="http://datadmin:zinck2240@12.124.172.98:23232" target="_blank" coords="85, 80, 124, 108" shape="rect">
    <area href="http://datadmin:zinck2240@12.124.172.98:23233" target="_blank" shape="rect" coords="86, 199, 124, 227">
    <area href="http://datadmin:zinck2240@12.124.172.98:23234" target="_blank" shape="rect" coords="86, 318, 126, 349">
    <area href="http://datadmin:zinck2240@12.124.172.98:23235" target="_blank" shape="rect" coords="291, 80, 330, 112">
    <area href="http://datadmin:zinck2240@12.124.172.98:23236" target="_blank" shape="rect" coords="290, 200, 328, 229">
    <area href="http://datadmin:zinck2240@12.124.172.98:23237" target="_blank" shape="rect" coords="290, 322, 329, 347">
    <area href="http://datadmin:zinck2240@12.124.172.98:23238" target="_blank" shape="rect" coords="493, 78, 532, 109">
    <area href="http://datadmin:zinck2240@12.124.172.98:23239" target="_blank" shape="rect" coords="494, 198, 534, 226">
    <area href="http://datadmin:zinck2240@12.124.172.98:23240" target="_blank" shape="rect" coords="494, 314, 532, 341">
    <area href="http://datadmin:zinck2240@12.124.172.98:23241" target="_blank" shape="rect" coords="697, 79, 735, 107">
    <area href="http://datadmin:zinck2240@12.124.172.98:23242" target="_blank" shape="rect" coords="697, 200, 735, 227">
    <area href="http://datadmin:zinck2240@12.124.172.98:23243" target="_blank" shape="rect" coords="693, 318, 733, 347">
    <area href="http://12.124.172.98:5800" shape="rect" coords="732, 567, 779, 670" target="_blank">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
