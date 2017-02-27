<%
ptype = "1st Level Network Map"
%>
<!--#include virtual='/support_web/Components/thetop.asp'-->
	<center>
	<BR>
	<map name='FPMap0'>
	<area href='/support_web/dnping.asp?theaddr=12.118.15.202' target='_blank' coords='323, 971, 489, 988' shape='rect'>
    <area href='/support_web/dnping.asp?theaddr=12.171.17.71' target='_blank' shape='rect' coords='154, 955, 178, 1017'>
    <area href='/support_web/dnping.asp?theaddr=12.172.16.67' target='_blank' shape='rect' coords='196, 954, 220, 1016'>
    <area href='http://<%=lgn%>:<%=pswd%>@<%=gateway%>' target='_blank' shape='rect' coords='579, 975, 692, 1002'>
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->