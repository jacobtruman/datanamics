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
          <td><b>Port</b></td>
          <td><b>VLAN ID</b></td>
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
BOTID=1
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
		  	<%=FP_Field(fp_rs,"Port")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"VLAN ID")%>
          </td>
        </tr>
<!--#include virtual="/support_web/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name='FPMap0'>
	<area href="telnet:12.30.106.238" shape="rect" coords="523, 186, 695, 204">
    <area href="telnet:12.30.106.239" shape="rect" coords="521, 258, 692, 277">
    <area href="telnet:12.30.106.235" shape="rect" coords="298, 260, 470, 278">
    <area href="telnet:12.30.106.236" shape="rect" coords="522, 42, 691, 60">
    <area href="telnet:12.30.106.237" shape="rect" coords="524, 114, 692, 134">
    <area href="telnet:12.30.106.232" shape="rect" coords="303, 41, 474, 61">
    <area href="telnet:12.30.106.233" shape="rect" coords="304, 114, 474, 132">
    <area href="telnet:12.30.106.234" shape="rect" coords="302, 186, 471, 204">
    <area href="telnet:12.30.106.229" shape="rect" coords="72, 114, 241, 132">
    <area href="telnet:12.30.106.230" shape="rect" coords="69, 184, 240, 204">
    <area href="telnet:12.30.106.231" shape="rect" coords="72, 261, 241, 277">
    <area href="telnet:12.30.106.228" shape="rect" coords="566, 416, 737, 436">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" shape="rect" coords="489, 502, 613, 541">
    <area href=".telnet:12.124.237.102" shape="rect" coords="262, 442, 368, 474">
    <area href="/support_web/dnping.asp?theaddr=12.127.16.67" target="_blank" shape="rect" coords="144, 488, 168, 550">
    <area href="/support_web/dnping.asp?theaddr=12.127.17.71" target="_blank" shape="rect" coords="198, 492, 221, 550">
    <area href="telnet:12.30.106.240" coords="78, 42, 246, 58" shape="rect">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
