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
          <td><b>WAP Name</b></td>
          <td><b>WAP IP</b></td>
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
		  	<%=FP_FieldVal(fp_rs,"WAP Name")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"WAP IP")%>
          </td>
        </tr>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name="FPMap0">
    <area href="/support_web/dnping.asp?theaddr=64.119.143.2" target="_blank" coords="186, 903, 211, 969" shape="rect">
    <area href="/support_web/dnping.asp?theaddr=64.119.143.20" target="_blank" coords="235, 903, 259, 969" shape="rect">
    <area href="/support_web/dnping.asp?theaddr=64.119.159.193" target="_blank" coords="419, 833, 419, 922, 396, 924, 379, 924, 346, 901, 341, 823, 368, 821" shape="polygon">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" coords="638, 985, 655, 969, 655, 948, 548, 948, 534, 959, 535, 986" shape="polygon">
    <area href="telnet:64.119.159.194 23230" coords="570, 852, 739, 872" shape="rect">
    <area href="telnet:64.119.159.194 23231" shape="rect" coords="499, 525, 667, 544">
    <area href="http://datadmin:zinck2240@64.119.159.194:23232" target="_blank" shape="rect" coords="347, 731, 388, 762">
    <area href="http://datadmin:zinck2240@64.119.159.194:23233" target="_blank" shape="rect" coords="527, 732, 568, 761">
    <area href="http://datadmin:zinck2240@64.119.159.194:23234" target="_blank" shape="rect" coords="685, 732, 725, 761">
    <area href="http://datadmin:zinck2240@64.119.159.194:23235" target="_blank" shape="rect" coords="530, 635, 570, 667">
    <area href="http://datadmin:zinck2240@64.119.159.194:23236" target="_blank" shape="rect" coords="678, 635, 717, 666">
    <area href="http://datadmin:zinck2240@64.119.159.194:23237" target="_blank" shape="rect" coords="358, 400, 400, 429">
    <area href="http://datadmin:zinck2240@64.119.159.194:23238" target="_blank" shape="rect" coords="538, 401, 580, 432">
    <area href="http://datadmin:zinck2240@64.119.159.194:23239" target="_blank" shape="rect" coords="697, 400, 737, 432">
    <area href="http://datadmin:zinck2240@64.119.159.194:23240" target="_blank" shape="rect" coords="361, 286, 398, 317">
    <area href="http://datadmin:zinck2240@64.119.159.194:23241" target="_blank" shape="rect" coords="542, 287, 579, 316">
    <area href="http://datadmin:zinck2240@64.119.159.194:23242" target="_blank" shape="rect" coords="697, 287, 736, 317">
    <area href="http://datadmin:zinck2240@64.119.159.194:23244" target="_blank" shape="rect" coords="360, 172, 398, 202">
    <area href="http://datadmin:zinck2240@64.119.159.194:23245" target="_blank" coords="539, 173, 580, 203" shape="rect">
    <area href="http://datadmin:zinck2240@64.119.159.194:23246" target="_blank" shape="rect" coords="697, 173, 736, 203">
    <area href="http://datadmin:zinck2240@64.119.159.194:23247" shape="rect" coords="357, 58, 399, 89">
    <area href="http://datadmin:zinck2240@64.119.159.194:23248" target="_blank" shape="rect" coords="539, 58, 579, 89">
    <area href="http://datadmin:zinck2240@64.119.159.194:23249" target="_blank" shape="rect" coords="699, 59, 738, 88">
    </map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->


