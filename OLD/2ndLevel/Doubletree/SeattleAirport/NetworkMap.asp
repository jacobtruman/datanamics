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
          <td><b>Switch IP</b></td>
          <td><b>VLAN</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/support_web/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (""Room / Meeting Room / Equipment"" LIKE '%::Room / Meeting Room / Equipment::%')"
fp_sDefault="Room / Meeting Room / Equipment=..."
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
		  	<%=FP_Field(fp_rs,"Switch IP")%>
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
	<area href="/support_web/dnping.asp?theaddr=209.20.130.34" target="_blank" shape="rect" coords="176, 793, 201, 854">
    <area href="/support_web/dnping.asp?theaddr=209.0.130.35" target="_blank" shape="rect" coords="226, 793, 248, 857">
    <area href="telnet:209.20.128.181" coords="342, 741, 449, 772" shape="rect">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" coords="572, 825, 692, 864" shape="rect">
    <area href="http://datadmin:zinck2240@209.20.128.181:23249" target="_blank" coords="246, 573, 285, 604" shape="rect">
    <area href="http://datadmin:zinck2240@209.20.128.181:23250" target="_blank" coords="633, 576, 670, 604" shape="rect">
    <area href="telnet:24.234.142.29 25" shape="rect" coords="273, 793, 297, 856">
    <area href="telnet:209.20.128.181 23230" shape="rect" coords="559, 744, 727, 763">
    <area href="http://datadmin:zinck2822@209.20.128.181:23231" target="_blank" coords="55, 53, 223, 75" shape="rect">
    <area href="http://datadmin:zinck2822@209.20.128.181:23232" target="_blank" shape="rect" coords="55, 117, 220, 140">
    <area href="http://datadmin:zinck2822@209.20.128.181:23233" target="_blank" shape="rect" coords="53, 181, 221, 205">
    <area href="http://datadmin:zinck2822@209.20.128.181:23234" target="_blank" shape="rect" coords="53, 246, 220, 269">
    <area href="http://datadmin:zinck2822@209.20.128.181:23235" target="_blank" shape="rect" coords="54, 309, 220, 329">
    <area href="http://datadmin:zinck2822@209.20.128.181:23236" target="_blank" shape="rect" coords="55, 377, 220, 401">
    <area href="http://datadmin:zinck2822@209.20.128.181:23237" target="_blank" shape="rect" coords="309, 53, 473, 74">
    <area href="http://datadmin:zinck2822@209.20.128.181:23238" target="_blank" shape="rect" coords="308, 117, 473, 139">
    <area href="http://datadmin:zinck2822@209.20.128.181:23239" target="_blank" shape="rect" coords="306, 181, 475, 203">
    <area href="http://datadmin:zinck2822@209.20.128.181:23240" shape="rect" coords="308, 246, 474, 268">
    <area href="http://datadmin:zinck2822@209.20.128.181:23241" target="_blank" shape="rect" coords="306, 310, 473, 332">
    <area href="http://datadmin:zinck2822@209.20.128.181:23242" target="_blank" shape="rect" coords="307, 377, 473, 399">
    <area href="http://datadmin:zinck2822@209.20.128.181:23243" shape="rect" coords="556, 53, 725, 76">
    <area href="http://datadmin:zinck2822@209.20.128.181:23244" target="_blank" shape="rect" coords="557, 117, 725, 141">
    <area href="http://datadmin:zinck2822@209.20.128.181:23245" target="_blank" shape="rect" coords="560, 181, 725, 203">
    <area href="http://datadmin:zinck2822@209.20.128.181:23246" target="_blank" shape="rect" coords="558, 246, 724, 268">
    <area href="http://datadmin:zinck2822@209.20.128.181:23247" target="_blank" shape="rect" coords="560, 310, 725, 330">
    <area href="http://datadmin:zinck2822@209.20.128.181:23248" target="_blank" shape="rect" coords="559, 377, 724, 400">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
