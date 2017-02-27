<%
ptype = "1st Level Network Map"
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
          <td><b>Switch IP</b></td>
          <td><b>WAP IP</b></td>
          <td><b>Gigalink</b></td>
          <td><b>VLAN #</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/support_web/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM ""Doubletree Sonoma Wine Country"" WHERE (""Room / Meeting Room / Equipment"" LIKE '%::Room / Meeting Room / Equipment::%')"
fp_sDefault="Room / Meeting Room / Equipment=."
fp_sNoRecords="<tr><td colspan=6 align=left width=""100%"">No records returned.</td></tr>"
fp_sDataConn="HISAProperties"
fp_iMaxRecords=256
fp_iCommandType=1
fp_iPageSize=5
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_iDisplayCols=6
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
		  	<%=FP_Field(fp_rs,"Switch IP")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"WAP IP")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"Gigalink")%>
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
	<area href="/support_web/dnping.asp?theaddr=12.125.82.186" target="_blank" shape="rect" coords="356, 744, 461, 775">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>" target="_blank" coords="484, 830, 594, 857" shape="rect">
    <area href="/support_web/dnping.asp?theaddr=12.127.17.71" target="_blank" shape="polygon" coords="197, 782, 197, 845, 211, 845, 209, 857, 163, 857, 164, 844, 176, 843, 175, 781">
    <area href="/support_web/dnping.asp?theaddr=12.127.16.67" target="_blank" coords="225, 782, 225, 843, 212, 845, 210, 856, 258, 856, 258, 844, 248, 844, 246, 784" shape="polygon">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->