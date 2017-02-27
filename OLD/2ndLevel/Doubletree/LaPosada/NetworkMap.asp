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
          <td><b>Switch IP/Connect</b></td>
          <td><b>Port #</b></td>
          <td><b>VLAN #</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/support_web/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (""Room / Meeting Room / Equipment"" LIKE '::Room / Meeting Room / Equipment::%')"
fp_sDefault="Room / Meeting Room / Equipment=."
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
		  	<%=FP_Field(fp_rs,"Switch IP/Connect")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Port #")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"VLAN #")%>
          </td>
        </tr>
<!--#include virtual="/support_web/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name='FPMap0'>
	<area href="/support_web/dnping.asp?theaddr=12.127.16.68" target="_blank" shape="rect" coords="139, 494, 163, 560">
    <area href="/support_web/dnping.asp?theaddr=12.127.17.72" target="_blank" shape="rect" coords="185, 494, 211, 560">
    <area href="telnet:24.234.142.29 25" shape="rect" coords="234, 494, 261, 559">
    <area href="telnet:206.169.214.74" shape="rect" coords="291, 469, 458, 487">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" shape="rect" coords="377, 376, 415, 404">
    <area href="http://datadmin:zinck2240@206.169.53.6" target="_blank" shape="rect" coords="621, 179, 661, 206">
    <area href="http://datadmin:zinck2240@206.169.53.7" target="_blank" shape="rect" coords="136, 56, 304, 74">
    <area href="http://datadmin:zinck2240@206.169.53.8" target="_blank" shape="rect" coords="138, 126, 308, 148">
    <area href="http://datadmin:zinck2240@206.169.53.9" target="_blank" shape="rect" coords="136, 199, 305, 220">
    <area href="http://datadmin:zinck2240@206.169.53.10" target="_blank" shape="rect" coords="340, 54, 509, 76">
    <area href="http://datadmin:zinck2240@206.169.53.11" target="_blank" shape="rect" coords="340, 128, 509, 150">
    <area href="http://datadmin:zinck2240@206.169.53.12" target="_blank" shape="rect" coords="340, 200, 509, 220">
    <area href="http://datadmin:zinck2240@206.169.53.13" target="_blank" shape="rect" coords="543, 54, 712, 77">
    <area href="file:///C:/Documents and Settings/All Users/Application Data/Symantec/pcAnywhere/HSIA-RLSD.CHF" shape="rect" coords="650, 468, 698, 571">
    <area href="http://datadmin:zinck7573@206.169.53.2" target="_blank" shape="rect" coords="385, 549, 494, 576">
    <area href="telnet:206.169.53.4" shape="rect" coords="532, 404, 700, 424">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
