<%
ptype = "IP Information"
%>
<!--#include virtual='/support_web/Components/top.asp'-->
<!--#include virtual='/support_web/Components/dbtop.asp'-->
<!--#include virtual='/support_web/Components/header.asp'-->
<!--#include virtual="/_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM ipscope WHERE (prop =  '::prop::')"
fp_sDefault="prop="&prop
fp_sNoRecords="This page is not yet ready."
fp_sDataConn="propinfo"
fp_iMaxRecords=256
fp_iCommandType=1
fp_iPageSize=5
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_sColTypes="&prop=202&privateb=202&privatee=202&publicb=202&publice=202&privdns1=202&pubdns1=202&privdns2=202&pubdns2=202&privmask=202&pubmask=202&privgate=202&pubgate=202&"
fp_iDisplayCols=13
fp_fCustomQuery=False
BOTID=0
fp_iRegion=BOTID
%>
<!--#include virtual="/_fpclass/fpdbrgn1.inc"-->
				<br>
				<table border='0' width='100%'>
					<tr>
						<td width='50%' align='center'>
							<b>
								Private:
							</b>
						</td>
						<td width='50%' align='center'>
							<b>
								Public:
							</b>
						</td>
					</tr>
					<tr>
						<td width='50%'>
                            <font size='2' face='Verdana'>
								IP Range: <%=FP_FieldVal(fp_rs,"privb")%> thru <%=FP_FieldVal(fp_rs,"prive")%>
							</font>
						</td>
						<td width='50%'>
                            <font face="Verdana" size="2">
								IP Range: <%=FP_FieldVal(fp_rs,"pubb")%> thru <%=FP_FieldVal(fp_rs,"pube")%>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
								Subnet Mask: <%=FP_FieldVal(fp_rs,"privmask")%>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
								Subnet Mask: <%=FP_FieldVal(fp_rs,"pubmask")%>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
								Gateway: <%=FP_FieldVal(fp_rs,"privgate")%>
							</font>
						</td>
						<td width='50%'>
                            <font face="Verdana" size="2">
								Gateway: <%=FP_FieldVal(fp_rs,"pubgate")%>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
								DNS: <%=FP_FieldVal(fp_rs,"privdns1")%>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
								DNS: <%=FP_FieldVal(fp_rs,"pubdns1")%>
							</font>
						</td>
					</tr>
					<tr>
						<td width='50%'>
							<font size='2' face='Verdana'>
								DNS: <%=FP_FieldVal(fp_rs,"privdns2")%>
							</font>
						</td>
						<td width='50%'>
							<font size='2' face='Verdana'>
								DNS: <%=FP_FieldVal(fp_rs,"pubdns2")%>
							</font>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
<!--#include virtual="/_fpclass/fpdbrgn2.inc"-->
<!-- Created/Modified by Jacob Truman/Bryan Brunner -->