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
          <td><b>Drop</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM HolidayInnLakeGeorge WHERE (Room LIKE '%::Room::%')"
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
fp_sColTypes="&Room=202&Switch Name=202&Port=202&Switch IP=202&Drop=202&"
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
		  	<%=FP_Field(fp_rs,"Port")%>
          </td>
		  <td>
		  	<%=FP_Field(fp_rs,"Switch IP")%>
          </td>
		  <td>
		  	<%=FP_Field(fp_rs,"Drop")%>
          </td>
        </tr>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
    <map name="FPMap0">
    <area href="/support_web/dnping.asp?theaddr=64.80.0.162" target="_blank" coords="147, 348, 171, 411" shape="rect">
    <area href="/support_web/dnping.asp?theaddr=64.80.255.251" target="_blank" coords="194, 347, 218, 411" shape="rect">
    <area href="telnet:66.155.143.70" target="_blank" shape="rect" coords="350, 313, 518, 334">
    <area href="http://datadmin:zinck2240@66.155.180.114" target="_blank" shape="rect" coords="542, 348, 663, 390">
    <area href="/support_web/dnping.asp?theaddr=64.80.233.226" target="_blank" shape="rect" coords="246, 347, 270, 412">
    <area href="/support_web/dnping.asp?theaddr=relay-mail.paetec.net" target="_blank" shape="rect" coords="290, 347, 314, 410">
    <area href="telnet:66.155.143.70 23230" shape="rect" coords="578, 261, 743, 280">
    <area href="telnet:66.155.143.70 23231" shape="rect" coords="276, 51, 443, 70">
    <area href="telnet:66.155.143.70 23232" shape="rect" coords="277, 135, 443, 155">
    <area href="telnet:66.155.143.70 23233" shape="rect" coords="588, 51, 756, 70">
    <area href="telnet:66.155.143.70 23234" shape="rect" coords="589, 135, 754, 153"></map><img border="0" src="/support_web/1stlevel/<%response.write loc%>/Pictures/NetworkMap.gif" usemap="#FPMap0"></p>
	</center>
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman/Bryan Brunner -->
