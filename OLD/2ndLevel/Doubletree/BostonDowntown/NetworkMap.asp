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
          <td><b>Switch IP</b></td>
          <td><b>Port #</b></td>
          <td><b>WAP IP</b></td>
        </tr>
      </thead>
      <tbody>
<!--#include virtual="/support_web/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM "&dbname&" WHERE (""Room / Meeting Room / Equipment"" LIKE '::Room / Meeting Room / Equipment::%')"
fp_sDefault="Room / Meeting Room / Equipment=."
fp_sNoRecords="<tr><td colspan=5 align=left width=""100%"">No records returned.</td></tr>"
fp_sDataConn="HISAProperties"
fp_iMaxRecords=256
fp_iCommandType=1
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
			<%=FP_Field(fp_rs,"Switch Name")%>
          </td>
          <td>
			<%=FP_Field(fp_rs,"Switch IP")%>
          </td>
          <td>
			<%=FP_Field(fp_rs,"Port #")%>
          </td>
          <td>
		  	<%=FP_Field(fp_rs,"WAP IP")%>
          </td>
        </tr>
<!--#include virtual="/support_web/_fpclass/fpdbrgn2.inc"-->
      </tbody>
    </table>
	<center>
	<BR>
	<map name='FPMap0'>
	<area href="/support_web/dnping.asp?theaddr=64.119.143.2" target="_blank" shape="rect" coords="187, 892, 210, 956">
    <area href="/support_web/dnping.asp?theaddr=64.119.143.20" target="_blank" shape="rect" coords="227, 893, 247, 955">
    <area href="telnet:64.119.152.130" shape="rect" coords="546, 934, 651, 967">
    <area href="telnet:64.119.152.130 23230" shape="rect" coords="339, 740, 510, 758">
    <area href="telnet:64.119.152.130 23231" shape="rect" coords="339, 446, 509, 463">
    <area href="http://<%=lgn%>:<%=pswd%>@<%=gateway%>:9488/www" target="_blank" shape="rect" coords="717, 855, 733, 904">
    <area href="http://datadmin:zinck2240@64.119.152.130:23232" target="_blank" shape="rect" coords="123, 358, 160, 386">
    <area href="http://datadmin:zinck2240@64.119.152.130:23233" target="_blank" shape="rect" coords="315, 358, 354, 386">
    <area href="http://datadmin:zinck2240@64.119.152.130:23234" target="_blank" shape="rect" coords="511, 358, 552, 385">
    <area href="http://datadmin:zinck2240@64.119.152.130:23235" target="_blank" shape="rect" coords="702, 359, 743, 386">
    <area href="http://datadmin:zinck2240@64.119.152.130:23236" target="_blank" shape="rect" coords="123, 263, 162, 289">
    <area href="http://datadmin:zinck2240@64.119.152.130:23237" target="_blank" shape="rect" coords="311, 262, 352, 288">
    <area href="http://datadmin:zinck2240@64.119.152.130:23238" target="_blank" shape="rect" coords="511, 262, 550, 289">
    <area href="http://datadmin:zinck2240@64.119.152.130:23239" target="_blank" shape="rect" coords="701, 263, 741, 291">
    <area href="http://datadmin:zinck2240@64.119.152.130:23240" target="_blank" shape="rect" coords="123, 166, 163, 192">
    <area href="http://datadmin:zinck2240@64.119.152.130:23241" target="_blank" shape="rect" coords="314, 165, 355, 194">
    <area href="http://datadmin:zinck2240@64.119.152.130:23242" target="_blank" shape="rect" coords="513, 166, 553, 194">
    <area href="http://datadmin:zinck2240@64.119.152.130:23243" target="_blank" shape="rect" coords="702, 166, 743, 193">
    <area href="http://datadmin:zinck2240@64.119.152.130:23244" target="_blank" shape="rect" coords="123, 70, 161, 97">
    <area href="http://datadmin:zinck2240@64.119.152.130:23245" target="_blank" shape="rect" coords="315, 70, 356, 98">
    <area href="http://datadmin:zinck2240@64.119.152.130:23246" target="_blank" shape="rect" coords="509, 70, 550, 98">
    <area href="http://datadmin:zinck2240@64.119.152.130:23247" target="_blank" shape="rect" coords="121, 644, 164, 672">
    <area href="http://datadmin:zinck2240@64.119.152.130:23248" target="_blank" shape="rect" coords="314, 643, 354, 671">
    <area href="Http://datadmin:zinck2240@64.119.152.130:23249" target="_blank" shape="rect" coords="510, 645, 552, 673">
    <area href="http://datadmin:zinck2240@64.119.152.130:23250" target="_blank" shape="rect" coords="701, 646, 741, 671">
    <area href="http://datadmin:zinck2240@64.119.152.130:23251" target="_blank" shape="rect" coords="122, 561, 164, 589">
    <area href="http://datadmin:zinck2240@64.119.152.130:23252" target="_blank" shape="rect" coords="315, 560, 351, 588">
    <area href="http://datadmin:zinck2240@64.119.152.130:23253" target="_blank" shape="rect" coords="510, 559, 549, 588">
    <area href="http://datadmin:zinck2240@64.119.152.130:23254" target="_blank" shape="rect" coords="703, 560, 740, 589">
    <area href="http://datadmin:zinck2240@64.119.152.130:23255" target="_blank" shape="rect" coords="702, 71, 742, 97">
    <area href="http://64.119.152.130:5800" shape="rect" coords="735, 868, 770, 897" target="_blank">
	</map>
<!--#include virtual='/support_web/Components/png.asp'-->
	</center>
<!--#include virtual="/support_web/components/footer.asp"-->
    </td>
  </tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
