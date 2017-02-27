<%
ptype = "2nd Level Network Map"
%>
<!--#include virtual='/support_web/Components/thetop.asp'-->
<BR>
    <form BOTID='0' METHOD='POST' ACTION='NetworkMap.asp?prop=<%=prop%>'>
      <table BORDER="0">
        <tr>
          <td><b>Room / Meeting Room / Equipment</b></td> 
          <td><input TYPE="TEXT" NAME="Room / Meeting Room / Equipment" VALUE="<%=Request("Room / Meeting Room / Equipment")%>" size="20"></td>
        </tr>
      </table>
      <br>
      <input TYPE="Submit"><input TYPE="Reset">
    </form>
    <table width='90%' border='1' cellpadding='0' cellspacing='0' bordercolor='C0C0C0' align='center'>
      <thead>
        <tr>
          <td><b>Room / Meeting Room / Equipment</b></td> 
          <td><b>Switch/WAP Name</b></td>
          <td><b>Port #</b></td>
          <td><b>Switch/WAP IP</b></td>
          <td><b>VLAN #</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/support_web/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (""Room / Meeting Room / Equipment"" LIKE '%::Room / Meeting Room / Equipment::%')"
fp_sDefault="Room / Meeting Room / Equipment=..."
fp_sNoRecords="<tr><td colspan=5 align=left width=""100%"">No records returned.</td></tr>"
fp_sDataConn="HISAProperties"
fp_iMaxRecords=256
fp_iCommandType=1
fp_iPageSize=5
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_iDisplayCols=5
fp_fCustomQuery=False
BOTID=0
fp_iRegion=BOTID
%>
<!--#include virtual="/support_web/_fpclass/fpdbrgn1.inc"-->
        <tr>
          <td>
		  	<%=FP_Field(fp_rs,"Room / Meeting Room / Equipment")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Switch/WAP Name")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Port #")%>
          </td>
          <td> 
		  	<%=FP_Field(fp_rs,"Switch/WAP IP")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"VLAN #")%>
          </td>
        </tr>
<!--#include virtual="/support_web/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name='FPMap0'>
	<area href="/support_web/dnping.asp?theaddr=12.127.16.67" target="_blank" shape="rect" coords="175, 959, 198, 1023">
    <area href="/support_web/dnping.asp?theaddr=12.127.17.71" target="_blank" shape="rect" coords="215, 958, 238, 1026">
    <area href="telnet:12.119.82.98" coords="292, 912, 397, 951" shape="rect">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" shape="rect" coords="539, 984, 659, 1024">
    <area href="telnet:12.119.82.98 23230" shape="rect" coords="508, 934, 675, 953">
    <area href="telnet:12.119.82.98 23231" shape="rect" coords="353, 711, 522, 728">
    <area href="telnet:12.119.82.98 23232" shape="rect" coords="345, 401, 511, 419">
    <area href="telnet:12.119.82.98 23233" shape="rect" coords="616, 80, 784, 100">
    <area href="telnet:12.119.82.98 23234" shape="rect" coords="654, 817, 821, 835">
    <area href="telnet:12.119.82.98 23235" shape="rect" coords="52, 38, 220, 57">
    <area href="telnet:12.119.82.98 23236" shape="rect" coords="52, 124, 220, 142">
    <area href="telnet:12.119.82.98 23237" shape="rect" coords="257, 38, 425, 58">
    <area href="telnet:12.119.82.98 23238" shape="rect" coords="257, 122, 423, 141">
    <area href="telnet:12.119.82.98 23239" shape="rect" coords="461, 38, 628, 56">
    <area href="telnet:12.119.82.98 23240" shape="rect" coords="459, 122, 628, 141">
    <area href="telnet:12.119.82.98 23241" shape="rect" coords="463, 817, 628, 835">
    <area href="http://datadmin:zinck2240@12.119.82.98:23242" target="_blank" coords="121, 811, 160, 843" shape="rect">
    <area href="http://datadmin:zinck2240@12.119.82.98:23243" target="_blank" shape="rect" coords="309, 810, 349, 840">
    <area href="http://datadmin:zinck2240@12.119.82.98:23244" target="_blank" shape="rect" coords="137, 510, 175, 540">
    <area href="http://datadmin:zinck2240@12.119.82.98:23245" target="_blank" shape="rect" coords="290, 508, 329, 540">
    <area href="http://datadmin:zinck2240@12.119.82.98:23246" target="_blank" shape="rect" coords="434, 508, 472, 538">
    <area href="http://datadmin:zinck2240@12.119.82.98:23247" target="_blank" shape="rect" coords="569, 511, 607, 539">
    <area href="http://datadmin:zinck2240@12.119.82.98:23248" target="_blank" shape="rect" coords="136, 606, 174, 635">
    <area href="http://datadmin:zinck2240@12.119.82.98:23249" target="_blank" shape="rect" coords="286, 606, 326, 636">
    <area href="http://datadmin:zinck2240@12.119.82.98:23250" target="_blank" shape="rect" coords="426, 606, 464, 635">
    <area href="http://datadmin:zinck2240@12.119.82.98:23251" target="_blank" shape="rect" coords="567, 606, 605, 633">
    <area href="http://datadmin:zinck2240@12.119.82.98:23252" target="_blank" shape="rect" coords="131, 704, 167, 730">
    <area href="http://datadmin:zinck2240@12.119.82.98:23253" target="_blank" shape="rect" coords="671, 703, 706, 730">
    <area href="http://datadmin:zinck2240@12.119.82.98:23254" target="_blank" shape="rect" coords="131, 222, 170, 251">
    <area href="http://datadmin:zinck2240@12.119.82.98:23255" target="_blank" shape="rect" coords="311, 222, 354, 251">
    <area href="http://datadmin:zinck2240@12.119.82.98:23256" target="_blank" shape="rect" coords="511, 220, 549, 251">
    <area href="http://datadmin:zinck2240@12.119.82.98:23257" target="_blank" shape="rect" coords="688, 222, 728, 251">
    <area href="http://datadmin:zinck2240@12.119.82.98:23258" target="_blank" shape="rect" coords="127, 305, 168, 335">
    <area href="http://datadmin:zinck2240@12.119.82.98:23259" target="_blank" shape="rect" coords="317, 308, 354, 334">
    <area href="http://datadmin:zinck2240@12.119.82.98:23260" target="_blank" shape="rect" coords="513, 306, 550, 334">
    <area href="http://datadmin:zinck2240@12.119.82.98:23261" target="_blank" shape="rect" coords="689, 307, 729, 336">
    <area href="http://12.148.101.6:5800" target="_blank" shape="rect" coords="760, 897, 811, 1001">
    <area href="http://datadmin:zinck2240@12.119.82.98:23262" target="_blank" shape="rect" coords="713, 510, 753, 540">
    <area href="http://datadmin:zinck2240@12.119.82.98:23263" target="_blank" shape="rect" coords="708, 606, 748, 635">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
