<%
ptype = "2nd Level Network Map"
%>
<!--#include virtual='/support_web/Components/thetop.asp'-->
	<BR>
    <form BOTID="0" METHOD="POST" ACTION="NetworkMap.asp?prop=<%=prop%>">
      <table BORDER="0">
        <tr>
          <td><b>Room</b></td>
          <td><input TYPE="TEXT" NAME="Room" VALUE="<%=Request("Room")%>" size="20"></td>
        </tr>
      </table>
      <br>
      <input TYPE="Submit"><input TYPE="Reset">
      <BR>
    </form>
    <table width='90%' border='1' cellpadding='0' cellspacing='0' bordercolor='C0C0C0' align='center'>
      <thead>
        <tr>
          <td><b>Room</b></td>
          <td><b>Switch Name</b></td>
          <td><b>Switch IP</b></td>
          <td><b>Port</b></td>
          <td><b>Port ID</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (Room LIKE '%::Room::%')"
fp_sDefault="Room=.."
fp_sNoRecords="<tr><td colspan=5 align=""LEFT"" width=""100%"">No records returned.</td></tr>"
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
<!--#include virtual="/_fpclass/fpdbrgn1.inc"-->
        <tr>
          <td>
		  	<%=FP_FieldVal(fp_rs,"Room")%>
          </td>
          <td>
		  	<%=FP_FieldVal(fp_rs,"Switch Name")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Switch IP")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Port")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Port ID")%>
          </td>
        </tr>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name="FPMap0">
    <area href="/support_web/dnping.asp?theaddr=216.136.57.90" target="_blank" shape="rect" coords="166, 405, 188, 464">
    <area href="/support_web/dnping.asp?theaddr=168.215.210.50" target="_blank" shape="rect" coords="213, 404, 238, 465">
    <area href="telnet:64.132.26.102" shape="rect" coords="347, 405, 451, 429">
    <area href="telnet:66.193.148.2" shape="rect" coords="505, 296, 676, 314">
    <area href="telnet:66.193.148.4" shape="rect" coords="47, 64, 217, 83">
    <area href="telnet:66.193.148.5" shape="rect" coords="49, 119, 217, 137">
    <area href="telnet:66.193.148.6" shape="rect" coords="502, 64, 672, 83">
    <area href="telnet:66.193.148.7" shape="rect" coords="504, 120, 674, 137">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>:9488/www" target="_blank" coords="565, 385, 583, 430" shape="rect">
    <area href="http://datadmin:zinck2240@66.193.148.3" target="_blank" coords="372, 287, 413, 318" shape="rect">
    <area href="telnet:216.136.95.10 25" shape="rect" coords="259, 405, 284, 464">
    <area href="http://66.193.148.1:5800" target="_blank" shape="rect" coords="587, 401, 619, 424">
    <area href="telnet:66.193.148.8" shape="rect" coords="277, 148, 449, 168">
    </map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->

