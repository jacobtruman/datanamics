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
	<area href="/support_web/dnping.asp?theaddr=216.36.91.88" target="_blank" coords="369, 231, 370, 212, 451, 196, 500, 219, 501, 236, 410, 264" shape="polygon">
	<area href="/support_web/dnping.asp?theaddr=12.127.16.67" target="_blank" coords="199, 259, 221, 323" shape="rect">
	<area href="/support_web/dnping.asp?theaddr=12.127.17.71" target="_blank" coords="246, 260, 269, 322" shape="rect">
	<area href="http://datadmin:zinck2240@69.33.219.66" target="_blank" coords="633, 287, 772, 315" shape="rect"></map><img border="0" src="/support_web/1stlevel/<%response.write loc%>/Pictures/NetworkMap.gif" usemap="#FPMap0">
	</center>
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman/Bryan Brunner -->