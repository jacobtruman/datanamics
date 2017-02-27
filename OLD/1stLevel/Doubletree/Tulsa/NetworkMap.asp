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
		  <td><b>Port</b></td>
		  <td><b>VLAN</b></td>
		  <td><b>Connection Type</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (Room LIKE '%::Room::%')"
fp_sDefault="Room=.."
fp_sNoRecords="<tr><td colspan=6 align=""LEFT"" width=""100%"">No records returned.</td></tr>"
fp_sDataConn="HISAProperties"
fp_iMaxRecords=256
fp_iCommandType=1
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_iDisplayCols=6
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
		  	<%=FP_Field(fp_rs,"Device IP")%>
          </td>
		  <td>
		  	<%=FP_Field(fp_rs,"Port")%>
          </td>
		  <td>
		  	<%=FP_Field(fp_rs,"VLAN")%>
          </td>
		  <td>
		  	<%=FP_Field(fp_rs,"Connection Type")%>
          </td>
        </tr>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name='FPMap0'>
	<area alt='DNS 1' coords='210,866,231,929' href='/support_web/dnping.asp?theaddr=151.164.1.8' target='_blank'>
	<area alt='DNS 2' coords='258,867,279,929' href='/support_web/dnping.asp?theaddr=206.13.28.12' target='_blank'>
	<area alt='Cayman 3456 ADSL Router' coords='359,818,436,846' href='/support_web/dnping.asp?theaddr=68.91.139.26' target='_blank'>
	<area alt='USG' shape='poly' coords='544,940,543,914,555,899,662,900,663,923,647,940' href='http://<%=lgn%>:<%=pswd%>@<%=gateway%>' target='_blank'>
	<area coords='520,829,688,845' href='/support_web/dnping.asp?theaddr=68.91.139.3' target='_blank'>
	<area coords='20,705,186,728' href='/support_web/dnping.asp?theaddr=68.91.139.6' target='_blank'>
	<area coords='209,707,376,725' href='/support_web/dnping.asp?theaddr=68.91.139.7' target='_blank'>
	<area coords='403,707,569,728' href='/support_web/dnping.asp?theaddr=68.91.139.8' target='_blank'>
	<area coords='689,694,729,722' href='/support_web/dnping.asp?theaddr=68.91.139.10' target='_blank'>
	<area coords='119,600,159,630' href='/support_web/dnping.asp?theaddr=68.91.139.9' target='_blank'>
	<area coords='336,612,505,629' href='/support_web/dnping.asp?theaddr=68.91.139.5' target='_blank'>
	<area coords='108,486,146,514' href='/support_web/dnping.asp?theaddr=68.91.139.20' target='_blank'>
	<area coords='281,485,319,513' href='/support_web/dnping.asp?theaddr=68.91.139.34' target='_blank'>
	<area coords='461,486,500,514' href='/support_web/dnping.asp?theaddr=68.91.139.21' target='_blank'>
	<area coords='111,377,148,407' href='/support_web/dnping.asp?theaddr=68.91.139.23' target='_blank'>
	<area coords='284,378,322,406' href='/support_web/dnping.asp?theaddr=68.91.139.22' target='_blank'>
	<area coords='464,377,503,405' href='/support_web/dnping.asp?theaddr=68.91.139.24' target='_blank'>
	<area coords='110,268,149,295' href='/support_web/dnping.asp?theaddr=68.91.139.26' target='_blank'>
	<area coords='283,269,323,296' href='/support_web/dnping.asp?theaddr=68.91.139.25' target='_blank'>
	<area coords='462,266,502,294' href='/support_web/dnping.asp?theaddr=68.91.139.27' target='_blank'>
	<area coords='108,153,146,183' href='/support_web/dnping.asp?theaddr=68.91.139.29' target='_blank'>
	<area coords='282,155,319,184' href='/support_web/dnping.asp?theaddr=68.91.139.28' target='_blank'>
	<area coords='460,155,499,185' href='/support_web/dnping.asp?theaddr=68.91.139.30' target='_blank'>
	<area coords='106,42,145,74' href='/support_web/dnping.asp?theaddr=68.91.139.32' target='_self'>
	<area coords='280,43,322,73' href='/support_web/dnping.asp?theaddr=68.91.139.31' target='_blank'>
	<area coords='462,44,501,74' href='/support_web/dnping.asp?theaddr=68.91.139.33' target='_blank'>
	<area coords='604,614,774,629' href='/support_web/dnping.asp?theaddr=68.91.139.4' target='_blank'>
	<area coords='606,514,773,532' href='/support_web/dnping.asp?theaddr=68.91.139.11' target='_blank'>
	<area coords='610,407,777,423' href='/support_web/dnping.asp?theaddr=68.91.139.12' target='_blank'>
	<area coords='607,297,776,314' href='/support_web/dnping.asp?theaddr=68.91.139.13' target='_blank'>
	<area coords='606,185,774,201' href='/support_web/dnping.asp?theaddr=68.91.139.14' target='_blank'>
	<area coords='607,72,775,90' href='/support_web/dnping.asp?theaddr=68.91.139.15' target='_blank'>
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
