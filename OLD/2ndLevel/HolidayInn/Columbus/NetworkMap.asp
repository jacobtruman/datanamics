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
                <a href='file:///Z:/<%response.write htype%> HSIA/<%response.write fold%>' target='_blank'>
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
          <td><b>WAP Name</b></td>
          <td><b>WAP IP</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM HolidayInnColumbus WHERE (Room LIKE '%::Room::%')"
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
    <area href="/support_web/dnping.asp?theaddr=12.127.17.71" target="_blank" shape="rect" coords="184, 912, 207, 979">
    <area href="/support_web/dnping.asp?theaddr=12.127.16.67" target="_blank" shape="rect" coords="224, 911, 247, 978">
    <area href="telnet:12.125.236.98" coords="320, 865, 427, 903" shape="rect">
    <area href="http://datadmin:zinck2240@12.47.253.66" target="_blank" coords="602, 946, 723, 988" shape="rect">
    <area href="telnet:12.125.236.98 23230" shape="rect" coords="553, 875, 723, 892">
    <area href="telnet:12.125.236.98 23232" shape="rect" coords="580, 276, 747, 296">
    <area href="telnet:12.125.236.98 23231" shape="rect" coords="613, 147, 783, 167">
    <area href="http://datadmin:zinck2240@12.125.236.98:23233" target="_blank" coords="89, 750, 130, 779" shape="rect">
    <area href="http://datadmin:zinck2240@12.125.236.98:23234" target="_blank" shape="rect" coords="671, 751, 713, 779">
    <area href="http://datadmin:zinck2240@12.125.236.98:23235" target="_blank" shape="rect" coords="91, 672, 131, 701">
    <area href="http://datadmin:zinck2240@12.125.236.98:23236" target="_blank" shape="rect" coords="285, 672, 324, 702">
    <area href="http://datadmin:zinck2240@12.125.236.98:23237" target="_blank" shape="rect" coords="140, 265, 179, 294">
    <area href="http://datadmin:zinck2240@12.125.236.98:23238" target="_blank" shape="rect" coords="90, 143, 131, 173">
    <area href="http://datadmin:zinck2240@12.125.236.98:23239" target="_blank" shape="rect" coords="285, 144, 323, 173">
    <area href="http://datadmin:zinck2240@12.125.236.98:23240" target="_blank" shape="rect" coords="478, 142, 519, 172">
    <area href="http://datadmin:zinck2240@12.125.236.98:23241" target="_blank" shape="rect" coords="90, 48, 130, 77">
    <area href="http://datadmin:zinck2240@12.125.236.98:23242" target="_blank" shape="rect" coords="285, 49, 322, 78">
    <area href="http://datadmin:zinck2240@12.125.236.98:23243" target="_blank" shape="rect" coords="479, 672, 520, 702">
    <area href="http://datadmin:zinck2240@12.125.236.98:23244" target="_blank" shape="rect" coords="672, 673, 712, 703">
    <area href="http://datadmin:zinck2240@12.125.236.98:23245" target="_blank" shape="rect" coords="91, 576, 131, 606">
    <area href="http://datadmin:zinck2240@12.125.236.98:23246" target="_blank" shape="rect" coords="282, 576, 320, 605">
    <area href="http://datadmin:zinck2240@12.125.236.98:23247" target="_blank" shape="rect" coords="672, 384, 712, 412">
    <area href="http://datadmin:zinck2240@12.125.236.98:23248" target="_blank" shape="rect" coords="671, 577, 712, 606">
    <area href="http://datadmin:zinck2240@12.125.236.98:23249" target="_blank" shape="rect" coords="90, 481, 130, 509">
    <area href="http://datadmin:zinck2240@12.125.236.98:23250" target="_blank" shape="rect" coords="284, 480, 325, 509">
    <area href="http://datadmin:zinck2240@12.125.236.98:23251" target="_blank" shape="rect" coords="479, 481, 519, 510">
    <area href="http://datadmin:zinck2240@12.125.236.98:23252" target="_blank" shape="rect" coords="672, 480, 712, 509">
    <area href="http://datadmin:zinck2240@12.125.236.98:23253" target="_blank" shape="rect" coords="89, 384, 132, 414">
    <area href="http://datadmin:zinck2240@12.125.236.98:23254" target="_blank" shape="rect" coords="280, 384, 323, 413">
    <area href="http://datadmin:zinck2240@12.125.236.98:23255" target="_blank" shape="rect" coords="477, 384, 519, 413">
    <area href="http://datadmin:zinck2240@12.125.236.98:23256" target="_blank" shape="rect" coords="479, 576, 519, 606">
    <area href="http://datadmin:zinck2240@12.125.236.98:23257" target="_blank" shape="rect" coords="404, 264, 442, 295">
    <area href="http://datadmin:zinck2240@12.125.236.98:23258" target="_blank" shape="rect" coords="479, 46, 518, 78">
    <area href="http://datadmin:zinck2240@12.125.236.98:23259" target="_blank" shape="rect" coords="669, 48, 711, 78"></map><img border="0" src="/support_web/1stlevel/<%response.write loc%>/Pictures/NetworkMap.gif" usemap="#FPMap0"></p>
	</center>
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman/Bryan Brunner -->
