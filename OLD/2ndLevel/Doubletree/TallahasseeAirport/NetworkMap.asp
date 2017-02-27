<%
ptype = "2nd Level Network Map"
%>
<!--#include virtual='/support_web/Components/thetop.asp'-->
	<BR>
    <form BOTID='0' METHOD='POST' ACTION='NetworkMap.asp?prop=<%=prop%>'>
      <table BORDER='0'>
        <tr>
          <td><b>Room</b></td>
          <td><input TYPE='TEXT' NAME='Room' VALUE='<%=Request("Room")%>' size='20'></td>
        </tr>
      </table>
      <br>
      <input TYPE='Submit'><input TYPE='Reset'>
      <BR>
    </form>
    <table width='90%' border='1' cellpadding='0' cellspacing='0' bordercolor='C0C0C0' align='center'>
      <thead>
        <tr>
          <td><b>Room</b></td>
          <td><b>Device Name</b></td>
          <td><b>Device IP</b></td>
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
		  	<%=FP_Field(fp_rs,"Room")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Device Name")%>
          </td>
          <td>
		  	<%
			if (FP_Field(fp_rs,"ctype") = "telnet") then
				response.write "<a href='telnet:"&FP_Field(fp_rs,"gtway")&" "&FP_Field(fp_rs,"cport")&"'>"&FP_Field(fp_rs,"Device IP")&"</a>"
			elseif (FP_Field(fp_rs,"ctype") = "web") then
				response.write "<a href='http://"&lgn&":"&pswd&"@"&FP_Field(fp_rs,"gtway")&":"&FP_Field(fp_rs,"cport")&"' target='_blank'>"&FP_Field(fp_rs,"Device IP")&"</a>"
			end if
			%>
          </td>
        </tr>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name="FPMap0">
	<area href="/support_web/dnping.asp?theaddr=12.127.16.68" target='_blank' coords="198,620,219,682">
	<area href="/support_web/dnping.asp?theaddr=12.127.17.72" target='_blank' coords="246,621,267,682">
	<area href="telnet:datanamicsinc.com 25" coords="294,620,314,681">
	<area href="telnet:12.127.24.58" coords="376,561,478,591">
	<area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target='_blank' coords="597,654,735,679">
	<area href="telnet:12.127.24.58 23230" coords="603,570,771,587">
	<area href="telnet:12.127.24.58 23231" coords="141,351,310,366">
	<area href="telnet:12.127.24.58 23232" coords="541,350,709,366">
	<area href="http://datadmin:zinck2240@12.127.24.58:23233" target='_blank' coords="103,435,139,464">
	<area href="http://datadmin:zinck2240@12.127.24.58:23234" target='_blank' coords="260,432,297,462">
	<area href="http://datadmin:zinck2240@12.127.24.58:23235" target='_blank' coords="419,435,457,461">
	<area href="http://datadmin:zinck2240@12.127.24.58:23236" target='_blank' coords="594,437,632,464">
	<area href="http://datadmin:zinck2240@12.127.24.58:23237" target='_blank' coords="744,436,783,464">
	<area href="http://datadmin:zinck2240@12.127.24.58:23238" target='_blank' coords="126,256,163,285">
	<area href="http://datadmin:zinck2240@12.127.24.58:23239" target='_blank' coords="299,257,337,286">
	<area href="http://datadmin:zinck2240@12.127.24.58:232310" target='_blank' coords="128,156,165,186">
	<area href="http://datadmin:zinck2240@12.127.24.58:232311" target='_blank' coords="299,155,337,183">
	<area href="http://datadmin:zinck2240@12.127.24.58:232312" target='_blank' coords="131,58,168,87">
	<area href="http://datadmin:zinck2240@12.127.24.58:232313" target='_blank' coords="301,56,341,85">
	<area href="http://datadmin:zinck2240@12.127.24.58:232314" target='_blank' coords="525,257,563,286">
	<area href="http://datadmin:zinck2240@12.127.24.58:232315" target='_blank' coords="700,256,737,284">
	<area href="http://datadmin:zinck2240@12.127.24.58:232316" target='_blank' coords="529,157,566,184">
	<area href="http://datadmin:zinck2240@12.127.24.58:232317" target='_blank' coords="699,155,737,183">
	<area href="http://datadmin:zinck2240@12.127.24.58:232318" target='_blank' coords="531,59,568,86">
	<area href="http://datadmin:zinck2240@12.127.24.58:232319" target='_blank' coords="702,57,739,86">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
