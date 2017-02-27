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
          <td><b>Port #</b></td>
          <td><b>VLAN #</b></td>
          <td><b>Switch IP/Connect</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/support_web/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (""Room / Meeting Room / Equipment"" LIKE '%::Room / Meeting Room / Equipment::%')"
fp_sDefault="Room / Meeting Room / Equipment=.."
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
		  	<%=FP_Field(fp_rs,"Room / Meeting Room / Equipment")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Switch Name")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Port #")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"VLAN #")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Switch IP/Connect")%>
          </td>
        </tr>
<!--#include virtual="/support_web/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name='FPMap0'>
	<area href="telnet:207.235.39.142" target="_blank" shape="rect" coords="314, 857, 481, 878">
    <area href="telnet:216.136.62.4" target="_blank" shape="rect" coords="368, 741, 536, 758">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" shape="rect" coords="572, 855, 682, 885">
    <area href="http://datadmin:zinck2240@216.136.62.5" target="_blank" shape="rect" coords="205, 554, 246, 585">
    <area href="http://datadmin:zinck2240@216.136.62.6" target="_blank" shape="rect" coords="301, 454, 341, 482">
    <area href="http://datadmin:zinck2240@216.136.62.7" target="_blank" shape="rect" coords="423, 370, 464, 400">
    <area href="http://datadmin:zinck2240@216.136.62.8" target="_blank" shape="rect" coords="545, 459, 585, 489">
    <area href="http://datadmin:zinck2240@216.136.62.9" target="_blank" shape="rect" coords="597, 558, 636, 588">
    <area href="/support_web/dnping.asp?theaddr=216.136.33.82" target="_blank" coords="197, 847, 222, 913" shape="rect">
    <area href="/support_web/dnping.asp?theaddr=168.215.165.186" target="_blank" shape="rect" coords="147, 847, 173, 915">
    <area href="http://datadmin:zinck2240@216.136.62.10" target="_blank" shape="rect" coords="233, 38, 398, 60">
    <area href="http://datadmin:zinck2240@216.136.62.11" target="_blank" shape="rect" coords="230, 126, 398, 147">
    <area href="http://datadmin:zinck2240@216.136.62.12" target="_blank" shape="rect" coords="234, 196, 400, 217">
    <area href="http://datadmin:zinck2240@216.136.62.13" target="_blank" shape="rect" coords="232, 272, 398, 294">
    <area href="http://datadmin:zinck2240@216.136.62.14" target="_blank" shape="rect" coords="499, 41, 661, 62">
    <area href="http://datadmin:zinck2240@216.136.62.15" target="_blank" shape="rect" coords="496, 125, 662, 148">
    <area href="http://datadmin:zinck2240@216.136.62.16" target="_blank" shape="rect" coords="498, 197, 662, 219">
    <area href="http://datadmin:zinck2240@216.136.62.17" target="_blank" shape="rect" coords="498, 273, 662, 294">
    <area href="http://207.235.39.142:5800" shape="rect" coords="672, 699, 722, 800" target="_blank">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
