<%
ptype = "1st Level Network Map"
%>
<!--#include virtual='/support_web/Components/thetop.asp'-->
	<center>
	<BR>
	<map name='FPMap0'>
    <area href='/support_web/dnping.asp?theaddr=64.80.232.214' target='_blank' coords='383, 831, 485, 861' shape='rect'>
    <area href='http://<%=lgn%>:<%=pswd%>@<%=gateway%>:9488/www' target='_blank' coords='560, 851, 616, 902' shape='rect'>
    <area href='/support_web/dnping.asp?theaddr=64.80.255.250' target='_blank' coords='172, 863, 197, 932' shape='rect'>
    <area href='/support_web/dnping.asp?theaddr=64.80.255.251' target='_blank' shape='rect' coords='211, 866, 235, 932'>
    <area href='/support_web/dnping.asp?theaddr=129.250.35.250' target='_blank' shape='rect' coords='253, 868, 279, 936'>
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->