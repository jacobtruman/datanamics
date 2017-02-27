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
          <td><b>Switch/WAP</b></td>
          <td><b>Switch/WAP IP-Connect</b></td>
          <td><b>VLAN</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/support_web/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (""Room / Meeting Room / Equipment"" LIKE '%::Room / Meeting Room / Equipment::%')"
fp_sDefault="Room / Meeting Room / Equipment=..."
fp_sNoRecords="<tr><td colspan=4 align=left width=""100%"">No records returned.</td></tr>"
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
<!--#include virtual="/support_web/_fpclass/fpdbrgn1.inc"-->
        <tr>
          <td>
		  	<%=FP_Field(fp_rs,"Room / Meeting Room / Equipment")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Switch/WAP")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Switch/WAP IP-Connect")%>
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
	<area href="/support_web/dnping.asp?theaddr=12.127.16.67" target="_blank" shape="rect" coords="166, 681, 189, 746">
    <area href="/support_web/dnping.asp?theaddr=12.127.17.71" target="_blank" shape="rect" coords="214, 680, 238, 746">
    <area href="telnet:12.118.90.230" coords="300, 635, 401, 666" shape="rect">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" coords="315, 719, 436, 762" shape="rect">
    <area href="telnet:12.118.90.230 23230" shape="rect" coords="476, 717, 645, 737">
    <area href="telnet:12.118.90.230 23231" shape="rect" coords="570, 636, 742, 656">
    <area href="telnet:12.118.90.230 23232" shape="rect" coords="326, 276, 494, 296">
    <area href="http://12.45.241.100:5800" target="_blank" coords="764, 645, 812, 749" shape="rect">
    <area href="http://datadmin:zinck2240@12.118.90.230:23233" target="_blank" shape="rect" coords="248, 61, 290, 92">
    <area href="http://datadmin:zinck2240@12.118.90.230:23234" target="_blank" shape="rect" coords="96, 492, 136, 523">
    <area href="http://datadmin:zinck2240@12.118.90.230:23235" target="_blank" shape="rect" coords="247, 491, 287, 521">
    <area href="http://datadmin:zinck2240@12.118.90.230:23236" target="_blank" shape="rect" coords="394, 492, 438, 521">
    <area href="http://datadmin:zinck2240@12.118.90.230:23237" target="_blank" shape="rect" coords="100, 178, 138, 209">
    <area href="http://datadmin:zinck2240@12.118.90.230:23238" target="_blank" shape="rect" coords="245, 179, 286, 209">
    <area href="http://datadmin:zinck2240@12.118.90.230:23239" shape="rect" coords="577, 490, 617, 520">
    <area href="http://datadmin:zinck2240@12.118.90.230:23240" target="_blank" shape="rect" coords="717, 491, 757, 520">
    <area href="http://datadmin:zinck2240@12.118.90.230:23241" target="_blank" shape="rect" coords="395, 179, 436, 209">
    <area href="http://datadmin:zinck2240@12.118.90.230:23242" target="_blank" shape="rect" coords="577, 178, 617, 208">
    <area href="http://datadmin:zinck2240@12.118.90.230:23243" target="_blank" shape="rect" coords="100, 377, 139, 408">
    <area href="http://datadmin:zinck2240@12.118.90.230:23244" target="_blank" shape="rect" coords="248, 375, 289, 404">
    <area href="http://datadmin:zinck2240@12.118.90.230:23245" target="_blank" shape="rect" coords="714, 179, 758, 209">
    <area href="http://datadmin:zinck2240@12.118.90.230:23246" target="_blank" shape="rect" coords="98, 64, 139, 93">
    <area href="http://datadmin:zinck2240@12.118.90.230:23247" target="_blank" shape="rect" coords="577, 61, 618, 92">
    <area href="http://datadmin:zinck2240@12.118.90.230:23248" target="_blank" shape="rect" coords="401, 375, 441, 404">
    <area href="http://datadmin:zinck2240@12.118.90.230:23249" target="_blank" shape="rect" coords="577, 375, 617, 401">
    <area href="http://datadmin:zinck2240@12.118.90.230:23250" target="_blank" shape="rect" coords="723, 61, 759, 92">
    <area href="http://datadmin:zinck2240@12.118.90.230:23251" target="_blank" shape="rect" coords="398, 61, 439, 92">
    <area href="http://datadmin:zinck2240@12.118.90.230:23252" target="_blank" shape="rect" coords="720, 374, 760, 403">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
