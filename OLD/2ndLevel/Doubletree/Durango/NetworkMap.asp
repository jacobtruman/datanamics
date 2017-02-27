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
		  	<%=FP_Field(fp_rs,"Switch IP")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Port #")%>
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
	<area href="/support_web/dnping.asp?theaddr=12.127.17.72" target="_blank" shape="rect" coords="179, 538, 203, 603">
    <area href="/support_web/dnping.asp?theaddr=12.127.16.68" target="_blank" shape="rect" coords="225, 537, 248, 602">
    <area href="telnet:12.125.150.206" shape="rect" coords="361, 537, 464, 569">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" shape="rect" coords="556, 540, 665, 566">
    <area href="http://12.125.150.206:5800" target="_blank" shape="rect" coords="715, 490, 766, 593">
    <area href="telnet:12.125.150.206 23230" shape="rect" coords="387, 362, 555, 377">
    <area href="http://datadmin:zinck2240@12.125.150.206:23231" target="_blank" shape="rect" coords="571, 55, 739, 75">
    <area href="http://datadmin:zinck2240@12.125.150.206:23232" shape="rect" coords="570, 138, 737, 159" target="_blank">
    <area href="http://datadmin:zinck2240@12.125.150.206:23233" target="_blank" shape="rect" coords="570, 210, 735, 233">
    <area href="http://datadmin:zinck2240@12.125.150.206:23234" target="_blank" shape="rect" coords="576, 285, 741, 303">
    <area href="http://datadmin:zinck2240@12.125.150.206:23235" target="_blank" shape="rect" coords="248, 234, 290, 264">
    <area href="http://datadmin:zinck2240@12.125.150.206:23236" target="_blank" shape="rect" coords="250, 72, 287, 100">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
