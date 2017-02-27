<%
ptype = "1st Level Network Map"
%>
<!--#include virtual='/support_web/Components/thetop.asp'-->
	<center>
	<BR>
	<map name="FPMap0">
	<area href="/support_web/dnping.asp?theaddr=12.127.16.68" target='_blank' coords="198,620,219,682">
	<area href="/support_web/dnping.asp?theaddr=12.127.17.72" target='_blank' coords="246,621,267,682">
	<area href="telnet:datanamicsinc.com 25" coords="294,620,314,681">
	<area href="/support_web/dnping.asp?theaddr=12.127.24.58" target='_blank' coords="376,561,478,591">
	<area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target='_blank' coords="597,654,735,679">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->