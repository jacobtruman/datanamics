<%
ptype = "1st Level Network Map"
%>
<!--#include virtual='/support_web/Components/dbtop.asp'-->
<!--#include virtual='/support_web/Components/header.asp'-->
<BR>
    <table border='0' width='100%' cellspacing='0'>
      <tr>
        <td width='25%' style='border-bottom: 2 solid #C0C0C0' bordercolor='#D8D8D8' align='center'>
			<font size='2' face='Verdana'>
                <a href='<%=pover%>' target='_blank'>
					Property Overview
				</a>
			</font>
		</td>
        <td width='25%' style='border-bottom: 2 solid #C0C0C0' bordercolor='#D8D8D8' align='center'>
			<font size='2' face='Verdana'>
                <a href='<%=ipinfo%>' target='_blank'>
					IP Information
				</a>
			</font>
		</td>
        <td width='25%' style='border-bottom: 2 solid #C0C0C0' bordercolor='#D8D8D8' align='center'>
			<font size='2' face='Verdana'>
<!--#include virtual='/support_web/Components/oddfolds.asp'-->
                <a href='file:///Z:/<%=flink%> HSIA/<%=fold%>' target='_blank'>
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
	<map name='FPMap0'>
	<area coords='183,224,206,287' href='/support_web/dnping.asp?theaddr=12.127.16.68' target='_blank'>
	<area coords='233,224,255,287' href='/support_web/dnping.asp?theaddr=12.127.17.72' target='_blank'>
	<area coords='281,225,304,287' href='/support_web/dnping.asp?theaddr=12.127.17.71' target='_blank'>
	<area coords='378,359,483,390' href='/support_web/dnping.asp?theaddr=12.107.231.225' target='_blank'>
	<area coords='617,349,755,374' href='http://<%=lgn%>:<%=pswd%>@<%=gateway%>' target='_blank'>
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->