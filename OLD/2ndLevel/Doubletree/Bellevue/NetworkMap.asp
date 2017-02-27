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
          <td><b>VLAN</b></td>
          <td><b>Gigalink</b></td>
          <td><b>Gigalink Port</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (Room LIKE '%::Room::%')"
fp_sDefault="Room=.."
fp_sNoRecords="<tr><td colspan=7 align=""LEFT"" width=""100%"">No records returned.</td></tr>"
fp_sDataConn="HISAProperties"
fp_iMaxRecords=256
fp_iCommandType=1
fp_iPageSize=5
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_iDisplayCols=7
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
		  	<%=FP_Field(fp_rs,"VLAN")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Gigalink")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Gigalink Port")%>
          </td>
        </tr>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name="FPMap0">
    <area href="/support_web/dnping.asp?theaddr=12.127.16.67" target="_blank" shape="rect" coords="185, 904, 209, 967">
    <area href="/support_web/dnping.asp?theaddr=12.127.17.71" target="_blank" shape="rect" coords="245, 903, 268, 971">
    <area href="/support_web/dnping.asp?theaddr=24.234.0.7" target="_blank" shape="rect" coords="185, 987, 208, 1050">
    <area href="telnet:datanamicsinc.com 25" shape="rect" coords="243, 987, 268, 1052">
    <area href="telnet:12.124.162.178" shape="rect" coords="305,903,471,920">
    <area href="telnet:12.104.71.130 23" shape="rect" coords="301, 968, 471, 984">
    <area href="telnet:12.124.162.178 23230" shape="rect" coords="338, 790, 504, 809">
    <area href="telnet:12.124.162.178 23231" shape="rect" coords="29, 90, 194, 109">
    <area href="telnet:12.124.162.178 23232" shape="rect" coords="28, 183, 194, 206">
    <area href="telnet:12.124.162.178 23233" shape="rect" coords="29, 279, 195, 300">
    <area href="telnet:12.124.162.178 23234" shape="rect" coords="28, 377, 196, 395">
    <area href="telnet:12.124.162.178 23235" shape="rect" coords="227, 91, 394, 109">
    <area href="telnet:12.124.162.178 23236" shape="rect" coords="228, 185, 394, 205">
    <area href="telnet:12.124.162.178 23237" shape="rect" coords="226, 282, 395, 301">
    <area href="telnet:12.124.162.178 23238" shape="rect" coords="227, 377, 395, 396">
    <area href="telnet:12.124.162.178 23239" shape="rect" coords="423, 90, 590, 108">
    <area href="telnet:12.124.162.178 23240" shape="rect" coords="423, 186, 591, 204">
    <area href="telnet:12.124.162.178 23241" shape="rect" coords="424, 281, 590, 299">
    <area href="telnet:12.124.162.178 23242" shape="rect" coords="424, 375, 591, 395">
    <area href="telnet:12.124.162.178 23243" shape="rect" coords="621, 89, 789, 108">
    <area href="telnet:12.124.162.178 23244" shape="rect" coords="623, 187, 790, 206">
    <area href="telnet:12.124.162.178 23245" shape="rect" coords="623, 278, 788, 298">
    <area href="telnet:12.124.162.178 23246" coords="622, 377, 790, 397" shape="rect">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" shape="rect" coords="554, 896, 665, 923">
    <area href="http://datadmin:zinck2240@12.124.162.178:23247" target="_blank" shape="rect" coords="123, 551, 162, 580">
    <area href="http://datadmin:zinck2240@12.124.162.178:23248" target="_blank" shape="rect" coords="122, 698, 164, 725">
    <area href="http://datadmin:zinck2240@12.124.162.178:23249" target="_blank" shape="rect" coords="648, 552, 690, 583">
    <area href="http://datadmin:zinck2240@12.124.162.178:23250" target="_blank" shape="rect" coords="647, 697, 689, 726">
    <area href="file:///C:/Documents%20and%20Settings/All%20Users/Application%20Data/Symantec/pcAnywhere/HSIA-LIOND.CHF" shape="rect" coords="733, 893, 784, 996"></map>
    <map name="FPMap1">
    <area href="/support_web/dnping.asp?theaddr=12.104.71.135" target="_blank" shape="rect" coords="187, 115, 274, 133">
    <area href="/support_web/dnping.asp?theaddr=12.104.71.133" target="_blank" shape="rect" coords="480, 72, 527, 169">
    </map>
<!--#include virtual='/support_web/Components/png.asp'-->
	<img border="0" src="/support_web/1stLevel/Doubletree/Bellevue/Pictures/Double4.jpg">
	<img border="0" src="/support_web/1stLevel/Doubletree/Bellevue/Pictures/Double5.jpg">
	</center>
	<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->



