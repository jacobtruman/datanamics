<%
ptype = "1st Level Network Map"
%>
<!--#include virtual='/support_web/Components/thetop.asp'-->
	<center>
	<BR>    
	<map name="FPMap0">
    <area href="/support_web/dnping.asp?theaddr=65.255.85.8" target="_blank" coords="179, 747, 202, 812" shape="rect">
    <area href="/support_web/dnping.asp?theaddr=65.255.85.9" target="_blank" shape="rect" coords="218, 747, 241, 812">
    <area href="/support_web/dnping.asp?theaddr=207.59.135.38" target="_blank" coords="390, 710, 492, 742" shape="rect">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" coords="603, 753, 617, 740, 725, 741, 725, 763, 707, 781, 604, 780" shape="polygon">
   </map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
