<%
ptype = "1st Level Network Map"
%>
<!--#include virtual='/support_web/Components/top.asp'-->
<!--#include virtual='/support_web/Components/header.asp'-->
<BR>
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
		<td width='25%' style='border-bottom: 2 solid #C0C0C0' bordercolor='#D8D8D8' align='center'>
			<font size='2' face='Verdana'>
				<a href='/support_web/DatanamicsContactInformation.asp' target='_blank'>
					2nd Level Support
				</a>
			</font>
		</td>  
      </tr>
    </table>
	<center>
	<BR>
	<map name="FPMap0">
    <area href="/support_web/dnping.asp?theaddr=12.127.17.71" target="_blank" shape="rect" coords="151, 248, 175, 315">
    <area href="/support_web/dnping.asp?theaddr=12.127.16.67" target="_blank" shape="rect" coords="192, 247, 214, 314">
    <area href="/support_web/dnping.asp?theaddr=12.118.91.138" target="_blank" shape="rect" coords="309, 214, 411, 248">
    <area href="http://datadmin:zinck2240@12.168.89.226" target="_blank" shape="rect" coords="575, 283, 711, 311">
    </map>
    <img border="0" src="<%response.write png%>" usemap="#FPMap0">
	</center>
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman/Bryan Brunner -->

