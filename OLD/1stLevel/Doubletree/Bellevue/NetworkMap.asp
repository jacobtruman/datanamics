<%
ptype = "1st Level Network Map"
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
          <td><b>VLAN</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (Room LIKE '%::Room::%')"
fp_sDefault="Room=.."
fp_sNoRecords="<tr><td colspan=3 align=""LEFT"" width=""100%"">No records returned.</td></tr>"
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
<!--#include virtual="/_fpclass/fpdbrgn1.inc"-->
        <tr>
          <td>
		  	<%=FP_FieldVal(fp_rs,"Room")%>
          </td>
          <td>
		  	<%=FP_FieldVal(fp_rs,"Switch Name")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"VLAN")%>
          </td>
        </tr>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>

	<center>
	<BR>
	<map name="FPMap0">
    <area href="/support_web/dnping.asp?theaddr=12.124.162.178" target="_blank" shape="rect" coords="305,903,471,920">
    <area href="/support_web/dnping.asp?theaddr=12.104.71.130" target="_blank" shape="rect" coords="300, 969, 472, 985">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" shape="rect" coords="552, 898, 665, 923">
    <area href="/support_web/dnping.asp?theaddr=12.104.71.134" target="_blank" shape="rect" coords="733, 891, 783, 994">
    <area href="/support_web/dnping.asp?theaddr=12.127.16.67" target="_blank" shape="rect" coords="185, 902, 208, 971">
    <area href="/support_web/dnping.asp?theaddr=12.127.17.71" target="_blank" shape="rect" coords="246, 905, 268, 970">
    <area href="/support_web/dnping.asp?theaddr=24.234.0.7" target="_blank" shape="rect" coords="185, 990, 208, 1050">
    </map>
	<map name="FPMap1">
    <area href="/support_web/dnping.asp?theaddr=12.104.71.135" target="_blank" shape="rect" coords="187, 115, 274, 133">
    <area href="/support_web/dnping.asp?theaddr=12.104.71.133" target="_blank" shape="rect" coords="480, 72, 527, 169">
    </map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
	<!--#include virtual="/support_web/components/footer.asp"-->
    <img border="0" src="Pictures/Double4.jpg">
    <img border="0" src="Pictures/Double5.jpg">
	</center>
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->




