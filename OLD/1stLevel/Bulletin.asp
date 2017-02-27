<%
ptype = "Bulletin Page"
%>
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<!--#include virtual='/support_web/Components/propdb.asp'-->
<!--#include virtual="/_fpclass/fpdbrgn1.inc"-->
<!--#include virtual='/support_web/Components/btop.asp'-->
<!--#include virtual='/support_web/Components/mainheader.asp'-->
<!--#include virtual='/support_web/1stlevel/notes.asp'-->
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
<%

if (level1 = "Yes") then
	response.write "<tr><td width='101%' colspan='2' align=center><font size='2' face='Verdana' color='#FF0000'><b>"
	response.write "<a href='/support_web/1stLevel/"&loc&"/NetworkMap.asp?"&str&"' target='_blank' style='color: #FF0000'>"
	response.write "1st Level Network Map</a></b></font></td></tr>"
else
	response.write "<tr><td width='101%' colspan='2' align=center><font size='2' face='Verdana' color='#FF0000'><b>"
	response.write "We Do Not Provide 1st Level Support For This Property</b></font></td></tr>"
end if
if (level2 = "Yes") then
	response.write "<tr><td width='101%' colspan='2' align=center><font size='2' face='Verdana' color='#0000FF'><b>"
	response.write "<a href='/support_web/2ndLevel/"&loc&"/NetworkMap.asp?"&str&"' target='_blank'>"
	response.write "2nd Level Network Map</a></b></font></td></tr>"
else
	response.write "<tr><td width='101%' colspan='2' align=center><font size='2' face='Verdana' color='#0000FF'><b>"
	response.write "We Do Not Provide 2nd Level Support For This Property</b></font></td></tr>"
end if
%>
				</table>
			</td>
		</tr>
	</table>
</body>
<!-- Created/Modified by Jacob Truman/Bryan Brunner -->