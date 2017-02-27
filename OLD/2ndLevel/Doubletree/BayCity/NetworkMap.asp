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
          <td><b>WAP/Switch</b></td>
          <td><b>WAP/Switch IP</b></td>
          <td><b>Port</b></td>
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
		  	<%=FP_FieldVal(fp_rs,"WAP/Switch")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"WAP/Switch IP")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Port")%>
          </td>
        </tr>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name="FPMap0">
    <area href="/support_web/dnping.asp?theaddr=209.253.113.18" target="_blank" coords="191, 1043, 214, 1111" shape="rect">
    <area href="/support_web/dnping.asp?theaddr=209.253.113.10" target="_blank" shape="rect" coords="230, 1042, 254, 1113">
    <area href="telnet:209.254.40.222" coords="335, 995, 436, 1028" shape="rect">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" coords="543, 1057, 682, 1084" shape="rect">
    <area href="telnet:209.254.40.222 23230" shape="rect" coords="542, 995, 711, 1015">
    <area href="telnet:209.254.40.222 23231" shape="rect" coords="66, 655, 237, 676">
    <area href="telnet:209.254.40.222 23232" shape="rect" coords="68, 765, 237, 783">
    <area href="telnet:209.254.40.222 23233" shape="rect" coords="65, 877, 238, 896">
    <area href="telnet:209.254.40.222 23234" target="_blank" shape="rect" coords="311, 656, 480, 676">
    <area href="telnet:209.254.40.222 23235" shape="rect" coords="313, 764, 479, 783">
    <area href="http://telnet:209.254.40.222 23236" shape="rect" coords="317, 878, 488, 896">
    <area href="telnet:209.254.40.222 23237" shape="rect" coords="583, 656, 753, 677">
    <area href="telnet:209.254.40.222 23238" shape="rect" coords="584, 765, 752, 783">
    <area href="telnet:209.254.40.222 23239" shape="rect" coords="583, 878, 753, 897">
    <area href="http://datadmin:zinck2240@209.254.40.222:23240" target="_blank" shape="rect" coords="666, 541, 707, 570">
    <area href="http://datadmin:zinck2240@209.254.40.222:23241" target="_blank" shape="rect" coords="163, 540, 203, 569">
    <area href="http://datadmin:zinck2240@209.254.40.222:23242" target="_blank" shape="rect" coords="415, 540, 456, 569">
    <area href="http://datadmin:zinck2240@209.254.40.222:23244" target="_blank" coords="163, 166, 202, 197" shape="rect">
    <area href="http://datadmin:zinck2240@209.254.40.222:23243" target="_blank" shape="rect" coords="666, 408, 708, 438">
    <area href="http://datadmin:zinck2240@209.254.40.222:23245" target="_blank" shape="rect" coords="162, 287, 203, 318">
    <area href="http://datadmin:zinck2240@209.254.40.222:23246" target="_blank" shape="rect" coords="163, 408, 202, 438">
    <area href="http://datadmin:zinck2240@209.254.40.222:23247" target="_blank" shape="rect" coords="416, 167, 456, 199">
    <area href="http://datadmin:zinck2240@209.254.40.222:23248" target="_blank" shape="rect" coords="667, 288, 709, 318">
    <area href="http://datadmin:zinck2240@209.254.40.222:23249" target="_blank" shape="rect" coords="414, 289, 455, 318">
    <area href="http://datadmin:zinck2240@209.254.40.222:23250" target="_blank" shape="rect" coords="412, 408, 454, 437">
    <area href="http://datadmin:zinck2240@209.254.40.222:23251" target="_blank" shape="rect" coords="668, 47, 709, 79">
    <area href="http://datadmin:zinck2240@209.254.40.222:23252" target="_blank" shape="rect" coords="670, 168, 707, 195">
    </map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman/Bryan Brunner -->


