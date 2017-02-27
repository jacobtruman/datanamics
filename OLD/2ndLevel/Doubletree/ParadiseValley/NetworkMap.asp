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
fp_sQry="SELECT * FROM "&dbnam&" WHERE (""Room / Meeting Room / Equipment"" LIKE '::Room / Meeting Room / Equipment::%')"
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
	<area href="/support_web/dnping.asp?theaddr=168.215.210.50" target="_blank" shape="rect" coords="65, 624, 87, 685">
    <area href="/support_web/dnping.asp?theaddr=207.170.210.162" target="_blank" shape="rect" coords="100, 624, 126, 685">
    <area href="/support_web/dnping.asp?theaddr=24.234.0.7" target="_blank" shape="rect" coords="137, 625, 161, 684">
    <area href="telnet:datanamicsinc.com 25" shape="rect" coords="172, 623, 196, 683">
    <area href="telnet:209.203.72.234" shape="rect" coords="213, 589, 379, 608">
    <area href="telnet:207.114.138.4" shape="rect" coords="471, 591, 642, 608">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" shape="rect" coords="369, 660, 478, 684">
    <area href="http://datadmin:zinck2240@207.114.138.15" target="_blank" shape="rect" coords="273, 348, 312, 377">
    <area href="http://datadmin:zinck2240@207.114.138.17" target="_blank" shape="rect" coords="273, 445, 311, 472">
    <area href="http://datadmin:zinck2240@207.114.138.16" target="_blank" shape="rect" coords="514, 346, 552, 373">
    <area href="http://datadmin:zinck2240@207.114.138.18" target="_blank" shape="rect" coords="512, 444, 552, 471">
    <area href="http://datadmin:zinck2240@207.114.138.5" target="_blank" shape="rect" coords="59, 52, 227, 74">
    <area href="http://datadmin:zinck2240@207.114.138.6" target="_blank" shape="rect" coords="60, 127, 229, 148">
    <area href="http://datadmin:zinck2240@207.114.138.7" target="_blank" shape="rect" coords="58, 199, 225, 219">
    <area href="http://datadmin:zinck2240@207.114.138.8" target="_blank" shape="rect" coords="263, 52, 430, 74">
    <area href="http://datadmin:zinck2240@207.114.138.9" target="_blank" shape="rect" coords="262, 129, 431, 149">
    <area href="http://datadmin:zinck2240@207.114.138.10" target="_blank" shape="rect" coords="263, 199, 429, 222">
    <area href="http://datadmin:zinck2240@207.114.138.11" target="_blank" shape="rect" coords="469, 53, 637, 76">
    <area href="http://datadmin:zinck2240@207.114.138.12" target="_blank" shape="rect" coords="467, 126, 636, 148">
    <area href="http://datadmin:zinck2240@207.114.138.13" target="_blank" shape="rect" coords="466, 200, 636, 222">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
