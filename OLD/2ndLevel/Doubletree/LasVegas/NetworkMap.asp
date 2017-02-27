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
          <td><b>Room</b></td> 
          <td><b>WAP</b></td>
          <td><b>WAP IP</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/support_web/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbanme&" WHERE (""Room"" LIKE '%::Room::%')"
fp_sDefault="Room=.."
fp_sNoRecords="<tr><td colspan=3 align=left width=""100%"">No records returned.</td></tr>"
fp_sDataConn="HISAProperties"
fp_iMaxRecords=256
fp_iCommandType=1
fp_iPageSize=5
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_iDisplayCols=3
fp_fCustomQuery=False
BOTID=0
fp_iRegion=BOTID
%>
<!--#include virtual="/support_web/_fpclass/fpdbrgn1.inc"-->
        <tr>
          <td>
		  <%=FP_FieldVal(fp_rs,"Room")%>
          </td>
          <td>
		  <%=FP_FieldVal(fp_rs,"WAP")%>
          </td>
          <td>
		  <%=FP_Field(fp_rs,"WAP IP")%>
          </td>
        </tr>
<!--#include virtual="/support_web/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name='FPMap0'>
	<area href="/support_web/dnping.asp?theaddr=12.124.254.194" target="_blank" shape="rect" coords="325, 693, 493, 713">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" coords="605, 733, 729, 773" shape="rect">
    <area href="http://datadmin:zinck2240@12.110.54.131:23232" target="_blank" coords="148, 509, 187, 539" shape="rect">
    <area href="/support_web/dnping.asp?theaddr=12.127.17.71" target="_blank" shape="rect" coords="161, 830, 185, 898">
    <area href="/support_web/dnping.asp?theaddr=12.127.16.67" target="_blank" shape="rect" coords="210, 829, 236, 898">
    <area href="http://12.110.54.134:5800" target="_blank" shape="rect" coords="627, 804, 678, 907">
    <area href="telnet:12.110.54.131 23230" shape="rect" coords="587, 658, 757, 677">
    <area href="telnet:12.110.54.131 23231" shape="rect" coords="62, 399, 233, 417">
    <area href="http://datadmin:zinck2240@12.110.54.131:23233" target="_blank" shape="rect" coords="411, 509, 452, 538">
    <area href="http://datadmin:zinck2240@12.110.54.131:23234" target="_blank" shape="rect" coords="636, 510, 677, 539">
    <area href="http://datadmin:zinck2240@12.110.54.131:23235" target="_blank" shape="rect" coords="413, 395, 455, 425">
    <area href="http://datadmin:zinck2240@12.110.54.131:23236" target="_blank" shape="rect" coords="638, 395, 681, 425">
    <area href="http://datadmin:zinck2240@12.110.54.131:23237" target="_blank" shape="rect" coords="415, 287, 454, 318">
    <area href="http://datadmin:zinck2240@12.110.54.131:23238" target="_blank" shape="rect" coords="638, 287, 680, 319">
    <area href="http://datadmin:zinck2240@12.110.54.131:23239" target="_blank" shape="rect" coords="415, 179, 457, 210">
    <area href="http://datadmin:zinck2240@12.110.54.131:23240" target="_blank" shape="rect" coords="639, 178, 680, 209">
    <area href="http://datadmin:zinck2240@12.110.54.131:23241" target="_blank" shape="rect" coords="415, 70, 455, 102">
    <area href="http://datadmin:zinck2240@12.110.54.131:23242" target="_blank" shape="rect" coords="639, 71, 679, 100">
    <area href="http://datadmin:zinck2240@12.110.54.131:23243" target="_blank" shape="rect" coords="137, 287, 179, 319">
    <area href="http://datadmin:zinck2240@12.110.54.131:23244" target="_blank" shape="rect" coords="136, 180, 176, 209">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
