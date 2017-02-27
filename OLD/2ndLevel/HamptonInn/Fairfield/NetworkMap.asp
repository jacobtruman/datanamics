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
          <td><b>Switch IP Telnet</b></td>
		  <td><b>Port</b></td>
		  <td><b>WAP IP Web</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM HamptonInnFairfield WHERE (Room LIKE '%::Room::%')"
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
fp_sColTypes="&Room=202&Switch Name=202&Switch IP Telnet=202&Port=202&WAP IP Web=202&"
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
		  	<%=FP_Field(fp_rs,"Switch IP Telnet")%>
          </td>
		  <td>
		  	<%=FP_FieldVal(fp_rs,"Port")%>
          </td>
		  <td>
		  	<%=FP_Field(fp_rs,"WAP IP Web")%>
          </td>
        </tr>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
    <map name="FPMap0">
    <area href="/support_web/dnping.asp?theaddr=12.127.16.67" target="_blank" shape="rect" coords="177, 615, 200, 681">
    <area href="/support_web/dnping.asp?theaddr=12.127.17.72" target="_blank" shape="rect" coords="225, 614, 247, 678">
    <area href="telnet:12.124.37.86" target="_blank" coords="363, 657, 469, 689" shape="rect">
    <area href="http://datadmin:zinck2240@12.46.142.130" target="_blank" shape="rect" coords="570, 645, 692, 686">
    <area href="telnet:12.46.142.132" target="_blank" shape="rect" coords="572, 583, 739, 599">
    <area href="http://datadmin:zinck2240@12.46.142.133" target="_blank" shape="rect" coords="246, 74, 289, 104">
    <area href="http://datadmin:zinck2240@12.46.142.134" target="_blank" shape="rect" coords="246, 170, 285, 200">
    <area href="http://datadmin:zinck2240@12.46.142.135" target="_blank" shape="rect" coords="247, 272, 286, 301">
    <area href="http://datadmin:zinck2240@12.46.142.136" target="_blank" shape="rect" coords="247, 382, 288, 411">
    <area href="http://datadmin:zinck2240@12.46.142.137" target="_blank" shape="rect" coords="630, 71, 671, 101">
    <area href="http://datadmin:zinck2240@12.46.142.138" target="_blank" shape="rect" coords="632, 165, 672, 196">
    <area href="http://datadmin:zinck2240@12.46.142.139" target="_blank" shape="rect" coords="632, 267, 669, 295">
    <area href="http://datadmin:zinck2240@12.46.142.140" target="_blank" shape="rect" coords="634, 377, 672, 407">
    <area href="telnet:datanamicsinc.com 25" target="_blank" shape="rect" coords="272, 615, 295, 681"></map><img border="0" src="/support_web/1stlevel/<%response.write loc%>/Pictures/NetworkMap.gif" usemap="#FPMap0"></p>
	</center>
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman/Bryan Brunner -->
