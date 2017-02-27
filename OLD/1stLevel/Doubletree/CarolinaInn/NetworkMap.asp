<%
ptype = "1st Level Network Map"
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
          <td><b>VLAN</b></td>
          <td><b>Connection Type</b></td>
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
		  	<%=FP_Field(fp_rs,"Device IP")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"VLAN")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Connection Type")%>
          </td>
        </tr>
<!--#include virtual="/support_web/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name="FPMap0">
    <area href="/support_web/dnping.asp?theaddr=66.255.85.8" target="_blank" shape="rect" coords="159, 509, 184, 571">
    <area href="/support_web/dnping.asp?theaddr=66.255.85.9" target="_blank" shape="rect" coords="209, 511, 233, 571">
    <area href="/support_web/dnping.asp?theaddr=63.243.41.33" target="_blank" coords="321, 466, 410, 481" shape="rect">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" coords="457, 526, 581, 566" shape="rect">
    <area href="/support_web/dnping.asp?theaddr=63.243.41.36" target="_blank" shape="rect" coords="716, 449, 765, 550">
	<area coords='435,358,602,377' href='/support_web/dnping.asp?theaddr=63.243.41.45' target='_blank'>
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->