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
          <td><b>Switch Name</b></td>
          <td><b>Port</b></td>
          <td><b>Switch IP</b></td>
          <td><b>VLAN</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM HiltonAuburnHills WHERE (Room LIKE '%::Room::%')"
fp_sDefault="Room=.."
fp_sNoRecords="<tr><td colspan=5 align=""LEFT"" width=""100%"">No records returned.</td></tr>"
fp_sDataConn="HISAProperties"
fp_iMaxRecords=256
fp_iCommandType=1
fp_iPageSize=5
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_sColTypes="&Room=202&Switch Name=202&Port=202&Switch IP=202&VLAN=202&"
fp_iDisplayCols=5
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
		  	<%=FP_FieldVal(fp_rs,"Port")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Switch IP")%>
          </td>
		  <td>
		  	<%=FP_FieldVal(fp_rs,"VLAN")%>
          </td>
        </tr>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
    <map name='FPMap0'>
    <area href='telnet:12.119.77.110' coords='293, 446, 400, 478' shape='rect'>
    <area href='http://datadmin:zinck2240@12.159.47.34' target='_blank' coords='480, 483, 601, 523' shape='rect'>
    <area href='telnet:12.119.77.110 23230' target='_blank' coords='451, 401, 618, 418' shape='rect'>
    <area href='http://datadmin:zinck2240@12.119.77.110:23238' target='_blank' coords='307, 357, 348, 387' shape='rect'>
    <area href='/support_web/dnping.asp?theaddr=12.127.16.68' target='_blank' shape='rect' coords='163, 481, 189, 550'>
    <area href='/support_web/dnping.asp?theaddr=12.127.17.72' target='_blank' shape='rect' coords='217, 483, 243, 550'>
    <area href='telnet:12.119.77.110 23231' shape='rect' coords='52, 109, 216, 124'>
    <area href='telnet:12.119.77.110 23232' shape='rect' coords='53, 180, 217, 195'>
    <area href='telnet:12.119.77.110 23233' shape='rect' coords='305, 46, 470, 64'>
    <area href='telnet:12.119.77.110 23234' shape='rect' coords='304, 110, 470, 127'>
    <area href='telnet:12.119.77.110 23235' shape='rect' coords='304, 181, 472, 198'>
    <area href='telnet:12.119.77.110 23236' shape='rect' coords='523, 109, 689, 126'>
    <area href='telnet:12.119.77.110 23237' shape='rect' coords='522, 181, 689, 197'>
    <area href='http://12.159.43.98:5800' shape='rect' coords='653, 436, 704, 539' target='_blank'></map><img border="0" src="/support_web/1stlevel/<%response.write loc%>/Pictures/NetworkMap.gif" usemap="#FPMap0"></p>
	</center>
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman/Bryan Brunner -->
