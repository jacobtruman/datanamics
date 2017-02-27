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
          <td><b>Switch Name</b></td>
          <td><b>Switch IP/HTerm</b></td>
          <td><b>Port #</b></td>
          <td><b>VLAN #</b></td>
          <td><b>WAP IP/Link</b></td>
          <td><b>Gigalink</b></td>
          <td><b>Gigalink Port #</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/support_web/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (""Room / Meeting Room / Equipment"" LIKE '%::Room / Meeting Room / Equipment::%')"
fp_sDefault="Room / Meeting Room / Equipment=."
fp_sNoRecords="<tr><td colspan=8 align=left width=""100%"">No records returned.</td></tr>"
fp_sDataConn="HISAProperties"
fp_iMaxRecords=256
fp_iCommandType=1
fp_iPageSize=5
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_iDisplayCols=8
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
		  	<%=FP_Field(fp_rs,"Switch Name")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Switch IP/HTerm")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Port #")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"VLAN #")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"WAP IP/Link")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Gigalink")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Gigalink Port #")%>
          </td>
        </tr>
<!--#include virtual="/support_web/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name='FPMap0'>
	<area href="telnet:12.125.82.186" shape="rect" coords="357, 741, 462, 772">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" coords="484, 828, 595, 857" shape="rect">
    <area href="/support_web/dnping.asp?theaddr=12.127.17.71" target="_blank" shape="polygon" coords="199, 782, 199, 845, 213, 845, 211, 857, 165, 857, 166, 844, 178, 843, 177, 781">
    <area href="/support_web/dnping.asp?theaddr=12.127.16.67" target="_blank" coords="227, 782, 227, 843, 214, 845, 212, 856, 260, 856, 260, 844, 250, 844, 248, 784" shape="polygon">
    <area href="telnet:24.234.142.29 25" shape="polygon" coords="273, 838, 275, 779, 295, 782, 295, 840, 305, 843, 305, 857, 261, 855, 260, 841, 277, 840">
    <area href="telnet:12.125.82.186 23230" shape="rect" coords="405, 632, 558, 649">
    <area href="telnet:12.125.82.186 23231" shape="rect" coords="597, 629, 749, 646">
    <area href="telnet:12.125.82.186 23232" shape="rect" coords="153, 559, 321, 573">
    <area href="http://datadmin:zinck2240@12.125.82.186:23236" target="_blank" coords="610, 546, 651, 577" shape="rect">
    <area href="http://datadmin:zinck2240@12.125.82.186:23235" target="_blank" shape="rect" coords="610, 473, 651, 502">
    <area href="http://datadmin:zinck2240@12.125.82.186:23234" target="_blank" shape="rect" coords="611, 392, 651, 420">
    <area href="http://datadmin:zinck2240@12.125.82.186:23233" target="_blank" shape="rect" coords="611, 311, 652, 341">
    <area href="http://datadmin:zinck2240@12.125.82.186:23237" target="_blank" shape="rect" coords="206, 463, 246, 492">
    <area href="http://datadmin:zinck2240@12.125.82.186:23238" target="_blank" shape="rect" coords="209, 304, 250, 332">
    <area href="http://datadmin:zinck2240@12.125.82.186:23239" target="_blank" shape="rect" coords="202, 381, 244, 409">
    <area href="http://datadmin:zinck2240@12.125.82.186:23240" target="_blank" shape="rect" coords="209, 227, 250, 258">
    <area href="http://datadmin:zinck2240@12.125.82.186:23241" target="_blank" shape="rect" coords="211, 136, 251, 164">
    <area href="http://datadmin:zinck2240@12.125.82.186:23242" target="_blank" shape="rect" coords="610, 134, 651, 162">
    <area href="http://datadmin:zinck2240@12.125.82.186:23243" target="_blank" shape="rect" coords="608, 48, 648, 76">
    <area href="http://12.125.82.186:5800" target="_blank" shape="rect" coords="699, 733, 752, 835">
    <area href="http://datadmin:zinck2240@12.125.82.186:23244" target="_blank" shape="rect" coords="612, 234, 653, 263">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
