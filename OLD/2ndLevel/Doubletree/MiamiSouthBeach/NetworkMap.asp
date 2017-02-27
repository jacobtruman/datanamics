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
fp_sColTypes="&Room=202&WAP Name=202&WAP IP=202&"
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
    <area href="/support_web/dnping.asp?theaddr=65.255.85.8" target="_blank" coords="179, 747, 202, 812" shape="rect">
    <area href="/support_web/dnping.asp?theaddr=65.255.85.9" target="_blank" shape="rect" coords="218, 747, 241, 812">
    <area href="telnet:207.59.135.38" coords="390, 710, 492, 742" shape="rect">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" coords="603, 753, 617, 740, 725, 741, 725, 763, 707, 781, 604, 780" shape="polygon">
    <area href="telnet:207.59.135.38 23230" shape="rect" coords="536, 573, 705, 591">
    <area href="telnet:207.59.135.38 23231" shape="rect" coords="132, 579, 304, 597">
    <area href="http://datadmin:zinck2240@207.59.135.38:23232" target="_blank" shape="rect" coords="93, 226, 133, 257">
    <area href="http://datadmin:zinck2240@207.59.135.38:23233" target="_blank" shape="rect" coords="88, 348, 131, 376">
    <area href="http://datadmin:zinck2240@207.59.135.38:23234" target="_blank" shape="rect" coords="291, 347, 330, 379">
    <area href="http://datadmin:zinck2240@207.59.135.38:23235" target="_blank" shape="rect" coords="90, 467, 130, 497">
    <area href="http://datadmin:zinck2240@207.59.135.38:23236" target="_blank" shape="rect" coords="288, 469, 329, 499">
    <area href="http://datadmin:zinck2240@207.59.135.38:23237" target="_blank" shape="rect" coords="512, 28, 553, 58">
    <area href="http://datadmin:zinck2240@207.59.135.38:23238" target="_blank" shape="rect" coords="512, 118, 552, 148">
    <area href="http://datadmin:zinck2240@207.59.135.38:23239" target="_blank" shape="rect" coords="694, 119, 734, 150">
    <area href="http://datadmin:zinck2240@207.59.135.38:23240" target="_blank" shape="rect" coords="513, 221, 552, 251">
    <area href="http://datadmin:zinck2240@207.59.135.38:23241" target="_blank" shape="rect" coords="695, 227, 735, 256">
    <area href="http://datadmin:zinck2240@207.59.135.38:23242" target="_blank" shape="rect" coords="511, 347, 552, 377">
    <area href="http://datadmin:zinck2240@207.59.135.38:23243" target="_blank" shape="rect" coords="695, 347, 735, 377">
    <area href="http://datadmin:zinck2240@207.59.135.38:23244" target="_blank" shape="rect" coords="510, 461, 551, 489">
    <area href="http://datadmin:zinck2240@207.59.135.38:23245" target="_blank" shape="rect" coords="697, 466, 735, 496">
   </map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman/Bryan Brunner -->


