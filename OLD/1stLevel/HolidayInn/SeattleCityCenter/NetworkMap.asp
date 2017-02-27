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
	<area coords='415,230,437,293' href='/support_web/dnping.asp?theaddr=205.214.51.16' target='_blank'>
	<area coords='463,230,485,292' href='/support_web/dnping.asp?theaddr=205.214.45.10' target='_blank'>
	<area coords='511,230,533,292' href='/support_web/dnping.asp?theaddr=204.147.80.5' target='_blank'>
	<area shape='poly' coords='414,359,413,344,423,330,524,330,534,345,533,359' href='/support_web/dnping.asp?theaddr=207.168.80.161' target='_blank'>
	<area shape='poly' coords='642,361,642,335,655,321,762,321,763,346,747,361' href='http://<%=lgn%>:<%=pswd%>@<%=gateway%>' target='_blank'>
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->