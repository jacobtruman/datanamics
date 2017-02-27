<%
ptype = "1st Level Network Map"
%>
<!--#include virtual='/support_web/Components/thetop.asp'-->
    <BR>
    <form BOTID="0" METHOD="POST" ACTION="NetworkMap.asp?<%response.write str%>">
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
          <td><b>Port</b></td>
          <td><b>Port ID</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (Room LIKE '%::Room::%')"
fp_sDefault="Room=.."
fp_sNoRecords="<tr><td colspan=4 align=""LEFT"" width=""100%"">No records returned.</td></tr>"
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
<!--#include virtual="/_fpclass/fpdbrgn1.inc"-->
        <tr>
          <td>
		  	<%=FP_FieldVal(fp_rs,"Room")%>
          </td>
          <td>
		  	<%=FP_FieldVal(fp_rs,"Switch Name")%>
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
    <area href="/support_web/dnping.asp?theaddr=216.136.57.90" target="_blank" shape="rect" coords="167, 404, 187, 461">
    <area href="/support_web/dnping.asp?theaddr=168.215.210.50" target="_blank" shape="rect" coords="212, 404, 237, 463">
    <area href="/support_web/dnping.asp?theaddr=64.132.26.102" target="_blank" shape="rect" coords="348, 401, 449, 431">
    <area href="/support_web/dnping.asp?theaddr=66.193.148.3" target="_blank" shape="rect" coords="374, 290, 413, 316">
    <area href="/support_web/dnping.asp?theaddr=66.193.148.2" target="_blank" shape="rect" coords="505, 296, 675, 315">
    <area href="/support_web/dnping.asp?theaddr=66.193.148.22" target="_blank" shape="rect" coords="279, 148, 447, 165">
    <area href="/support_web/dnping.asp?theaddr=66.193.148.4" target="_blank" shape="rect" coords="47, 65, 218, 83">
    <area href="/support_web/dnping.asp?theaddr=66.193.148.5" target="_blank" shape="rect" coords="48, 120, 218, 137">
    <area href="/support_web/dnping.asp?theaddr=66.193.148.6" target="_blank" shape="rect" coords="503, 63, 673, 84">
    <area href="/support_web/dnping.asp?theaddr=66.193.148.7" target="_blank" shape="rect" coords="504, 118, 673, 139">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>:9488/www" target="_blank" shape="rect" coords="565, 384, 580, 432">
    <area href="telnet:216.136.95.10 25" shape="rect" coords="261, 404, 286, 465">
    </map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->


