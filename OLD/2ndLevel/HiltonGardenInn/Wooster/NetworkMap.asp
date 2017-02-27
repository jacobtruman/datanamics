<%
ptype = "2nd Level Network Map"
%>
<!--#include virtual='/support_web/Components/top.asp'-->
<!--#include virtual='/support_web/Components/header.asp'-->
    <table border='0' width='100%' cellspacing='0'>
      <tr>
        <td width='25%' style='border-bottom: 2 solid #C0C0C0' bordercolor='#D8D8D8' align='center'>
			<font size='2' face='Verdana'>
                <a href='/support_web/1stLevel/PropertyOverview.asp?<%response.write str%>' target='_blank'>
					Property Overview
				</a>
			</font>
		</td>
        <td width='25%' style='border-bottom: 2 solid #C0C0C0' bordercolor='#D8D8D8' align='center'>
			<font size='2' face='Verdana'>
                <a href='/support_web/1stLevel/IPInformation.asp?<%response.write str%>' target='_blank'>
					IP Information
				</a>
			</font>
		</td>
        <td width='25%' style='border-bottom: 2 solid #C0C0C0' bordercolor='#D8D8D8' align='center'>
			<font size='2' face='Verdana'>
                <a href='file:///Z:/Hilton HSIA/<%response.write fold%>' target='_blank'>
					Customer Information
				</a>
			</font>
		</td>
		<td width='25%' style='border-bottom: 2 solid #C0C0C0' bordercolor='#D8D8D8'>
            <font size='2' face="Verdana">
				<a href='file://Lasdn-sd01/HTN Knowledgebase/Passwords/Passwordstandards.pdf' target='_blank'>
					Equipment Passwords
				</a>
			</font>
		</td>  
      </tr>
    </table>
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
          <td><b>Device Name</b></td>
          <td><b>Device IP</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM HiltonGardenInnWooster WHERE (Room LIKE '%::Room::%')"
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
fp_sColTypes="&Room=202&Device Name=202&Device IP=202&"
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
		  	<%=FP_FieldVal(fp_rs,"Device Name")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Device IP")%>
          </td>
        </tr>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
    <map name="FPMap0">
	<area href="/support_web/dnping.asp?theaddr=12.127.16.67" target='_blank' shape="rect" coords="199, 674, 222, 737">
	<area href="/support_web/dnping.asp?theaddr=12.127.17.71" target='_blank' shape="rect" coords="247, 675, 268, 737">
	<area href="telnet:datanamicsinc.com 25" shape="rect" coords="295, 676, 316, 737">
	<area href="telnet:12.118.91.122" shape="rect" coords="380, 613, 483, 644">
	<area href="http://datadmin:zinck2240@12.168.89.130" target='_blank' shape="rect" coords="600, 708, 737, 733">
	<area href="telnet:12.118.91.122 23230" shape="rect" coords="605, 625, 775, 642">
	<area href="telnet:12.118.91.122 23231" shape="rect" coords="208, 244, 377, 260">
	<area href="telnet:12.118.91.122 23232" shape="rect" coords="413, 244, 581, 260">
	<area href="telnet:12.118.91.122 23233" shape="rect" coords="617, 244, 787, 259">
	<area href="telnet:12.118.91.122 23234" shape="rect" coords="209, 166, 376, 183">
	<area href="telnet:12.118.91.122 23235" shape="rect" coords="413, 165, 581, 182">
	<area href="http://datadmin:zinck2240@12.118.91.122:23236" target='_blank' shape="rect" coords="100, 475, 141, 506">
	<area href="http://datadmin:zinck2240@12.118.91.122:23237" target='_blank' shape="rect" coords="250, 476, 291, 506">
	<area href="http://datadmin:zinck2240@12.118.91.122:23238" target='_blank' shape="rect" coords="402, 469, 439, 497">
	<area href="http://datadmin:zinck2240@12.118.91.122:23239" target='_blank' shape="rect" coords="583, 477, 622, 505">
	<area href="http://datadmin:zinck2240@12.118.91.122:23240" target='_blank' shape="rect" coords="739, 477, 777, 505">
	<area href="http://datadmin:zinck2240@12.118.91.122:23241" target='_blank' shape="rect" coords="101, 335, 139, 363">
	<area href="http://datadmin:zinck2240@12.118.91.122:23242" target='_blank' shape="rect" coords="247, 334, 285, 362">
	<area href="http://datadmin:zinck2240@12.118.91.122:23243" target='_blank' shape="rect" coords="411, 335, 450, 363">
	<area href="http://datadmin:zinck2240@12.118.91.122:23244" target='_blank' shape="rect" coords="582, 335, 620, 364">
	<area href="http://datadmin:zinck2240@12.118.91.122:23245" target='_blank' shape="rect" coords="739, 332, 779, 361">
	<area href="http://datadmin:zinck2240@12.118.91.122:23246" target='_blank' shape="rect" coords="107, 180, 145, 209">
	<area href="telnet:12.118.91.122 23247" shape="rect" coords="617, 166, 786, 183">
	<area href="http://datadmin:zinck2240@12.118.91.122:23248" target='_blank' shape="rect" coords="101, 64, 139, 93">
	<area href="http://datadmin:zinck2240@12.118.91.122:23249" target='_blank' shape="rect" coords="247, 63, 286, 93">
	<area href="http://datadmin:zinck2240@12.118.91.122:23250" target='_blank' shape="rect" coords="402, 62, 440, 89">
	<area href="http://datadmin:zinck2240@12.118.91.122:23251" target='_blank' shape="rect" coords="567, 61, 605, 90">
	<area href="http://datadmin:zinck2240@12.118.91.122:23252" target='_blank' shape="rect" coords="718, 61, 757, 90">
	</map>
	<img border="0" src="<%response.write png%>" usemap="#FPMap0"></p>
	</center>
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman/Bryan Brunner -->
