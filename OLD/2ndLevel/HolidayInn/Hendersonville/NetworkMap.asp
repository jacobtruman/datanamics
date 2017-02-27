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
fp_sQry="SELECT * FROM HolidayInnHendersonville WHERE (Room LIKE '%::Room::%')"
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
    <area href="/support_web/dnping.asp?theaddr=66.80.130.23" target="_blank" shape="rect" coords="172, 307, 196, 374">
    <area href="/support_web/dnping.asp?theaddr=66.80.131.5" target="_blank" shape="rect" coords="212, 308, 234, 375">
    <area href="/support_web/dnping.asp?theaddr=69.33.188.225" target="_blank" shape="polygon" coords="328, 263, 400, 250, 432, 284, 435, 304, 349, 325, 324, 277">
    <area href="http://datadmin:zinck2240@69.33.188.226" target="_blank" shape="rect" coords="603, 332, 724, 376">
    <area href="telnet:69.33.188.227 23230" shape="rect" coords="577, 275, 748, 293">
    <area href="http://datadmin:zinck2240@69.33.188.227:23231" target="_blank" shape="rect" coords="111, 129, 151, 157">
    <area href="http://datadmin:zinck2240@69.33.188.227:23232" target="_blank" shape="rect" coords="299, 129, 342, 157">
    <area href="http://datadmin:zinck2240@69.33.188.227:23233" target="_blank" shape="rect" coords="500, 127, 539, 156">
    <area href="http://datadmin:zinck2240@69.33.188.227:23234" target="_blank" shape="rect" coords="674, 127, 715, 159">
    <area href="http://datadmin:zinck2240@69.33.188.227:23235" target="_blank" shape="rect" coords="109, 45, 150, 73">
    <area href="http://datadmin:zinck2240@69.33.188.227:23236" target="_blank" shape="rect" coords="300, 44, 342, 74">
    <area href="http://datadmin:zinck2240@69.33.188.227:23237" target="_blank" shape="rect" coords="499, 43, 537, 73">
    <area href="http://datadmin:zinck2240@69.33.188.227:23238" target="_blank" shape="rect" coords="674, 44, 715, 74"></map><img border="0" src="/support_web/1stlevel/<%response.write loc%>/Pictures/NetworkMap.gif" usemap="#FPMap0"></p>
	</center>
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman/Bryan Brunner -->
