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
			<%
			if (htype = "Holiday Inn Express") then
				flink = "Holiday Inn"
			else
				flink = htype
			end if
			%>
                <a href='file:///Z:/<%response.write flink%> HSIA/Holiday Inn Express Inn & Suites Greenwood' target='_blank'>
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
    <form BOTID='0' METHOD='POST' ACTION='NetworkMap.asp?<%response.write str%>'>
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
          <td><b>WAP Name</b></td>
          <td><b>WAP IP</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM HolidayInnExpressGreenwood WHERE (Room LIKE '%::Room::%')"
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
	<map name='FPMap0'>
	<area href='telnet:12.125.137.214' shape='rect' coords='352, 209, 460, 250'>
	<area href='/support_web/dnping.asp?theaddr=12.127.16.67' target='_blank' shape='rect' coords='174, 259, 197, 323'>
	<area href='/support_web/dnping.asp?theaddr=12.127.17.71' target='_blank' shape='rect' coords='222, 259, 244, 324'>
	<area href='http://datadmin:zinck2240@12.96.72.130' target='_blank' shape='rect' coords='602, 289, 743, 316'>
	<area href='telnet:12.125.137.214 23230' shape='rect' coords='578, 209, 748, 228'>
	<area href='http://datadmin:zinck2240@12.125.137.214:23231' target='_blank' shape='rect' coords='234, 61, 274, 90'>
	<area href='http://datadmin:zinck2240@12.125.137.214:23232' target='_blank' shape='rect' coords='384, 62, 423, 91'>
	<area href='http://datadmin:zinck2240@12.125.137.214:23233' target='_blank' shape='rect' coords='535, 54, 574, 83'>
	<area href='http://datadmin:zinck2240@12.125.137.214:23234' target='_blank' shape='rect' coords='714, 62, 753, 92'>
	</map>
    <img border='0' src='<%response.write png%>' usemap='#FPMap0'></p>
	</center>
	<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman/Bryan Brunner -->