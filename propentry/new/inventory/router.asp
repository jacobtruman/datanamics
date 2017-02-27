<%ptype = "Routers"
CTYHO = request.querystring("CTYHO")
SERIAL = request.querystring("PSERIAL")
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
CTYHO = Request("CTYHO")

	fp_rs.Open "ROUTERS", fp_conn, 1, 3, 2 ' adOpenKeySet, adLockOptimistic, adCmdTable
	FP_DumpError strErrorUrl, "Cannot open record set"

	fp_rs.AddNew
	FP_DumpError strErrorUrl, "Cannot add new record set to the database"
	Dim arFormFields0(16)
	Dim arFormDBFields0(16)
	Dim arFormValues0(16)

	arFormFields0(0) = "Serial_0_IP_Address"
	arFormDBFields0(0) = "SER0"
	arFormValues0(0) = Request("Serial_0_IP_Address")
	arFormFields0(1) = "Fast_Ethernet_1_Subnet_Mask"
	arFormDBFields0(1) = "FAS_SUB1"
	arFormValues0(1) = Request("Fast_Ethernet_1_Subnet_Mask")
	arFormFields0(2) = "Hostname"
	arFormDBFields0(2) = "RNAME"
	arFormValues0(2) = Request("Hostname")
	arFormFields0(3) = "Does_Datanamics_Support"
	arFormDBFields0(3) = "DNSUP"
	arFormValues0(3) = Request("Does_Datanamics_Support")
	arFormFields0(4) = "Serial_Number"
	arFormDBFields0(4) = "SERIAL"
	arFormValues0(4) = Request("Serial_Number")
	arFormFields0(5) = "Serial_1_IP_Address"
	arFormDBFields0(5) = "SER1"
	arFormValues0(5) = Request("Serial_1_IP_Address")
	arFormFields0(6) = "Ethernet_0_Subnet_Mask"
	arFormDBFields0(6) = "ETH_SUB0"
	arFormValues0(6) = Request("Ethernet_0_Subnet_Mask")
	arFormFields0(7) = "IOS"
	arFormDBFields0(7) = "IOS"
	arFormValues0(7) = Request("IOS")
	arFormFields0(8) = "Serial_2_IP_Address"
	arFormDBFields0(8) = "SER2"
	arFormValues0(8) = Request("Serial_2_IP_Address")
	arFormFields0(9) = "Ethernet_0_IP_Address"
	arFormDBFields0(9) = "ETH0"
	arFormValues0(9) = Request("Ethernet_0_IP_Address")
	arFormFields0(10) = "Fast_Ethernet_0_IP_Address"
	arFormDBFields0(10) = "FAS0"
	arFormValues0(10) = Request("Fast_Ethernet_0_IP_Address")
	arFormFields0(11) = "Fast_Ethernet_0_Subnet_Mask"
	arFormDBFields0(11) = "FAS_SUB0"
	arFormValues0(11) = Request("Fast_Ethernet_0_Subnet_Mask")
	arFormFields0(12) = "Ethernet_1_Subnet_Mask"
	arFormDBFields0(12) = "ETH_SUB1"
	arFormValues0(12) = Request("Ethernet_1_Subnet_Mask")
	arFormFields0(13) = "Ethernet_1_IP_Address"
	arFormDBFields0(13) = "ETH1"
	arFormValues0(13) = Request("Ethernet_1_IP_Address")
	arFormFields0(14) = "Serial_3_IP_Address"
	arFormDBFields0(14) = "SER3"
	arFormValues0(14) = Request("Serial_3_IP_Address")
	arFormFields0(15) = "Fast_Ethernet_1_IP_Address"
	arFormDBFields0(15) = "FAS1"
	arFormValues0(15) = Request("Fast_Ethernet_1_IP_Address")
	
nextpage = "donenew.asp?CTYHO="&CTYHO
%>
<!--#include virtual='/support_web/propentry/new/db/bottom.asp'-->
<!--#include virtual='/support_web/propentry/new/header.asp'-->
<script>
function vcheck(formname)
{
  return (true);
}
</script>
<FORM METHOD='POST' action='router.asp' onsubmit='return vcheck(this)' name='formname'>
<input TYPE='hidden' NAME='VTI-GROUP' VALUE='0'>
<!--#include virtual='/support_web/_fpclass/fpdbform.inc'-->
<BLOCKQUOTE>
<TABLE>
<TR>
<TD ALIGN='right'>
<EM>Serial Number</EM></TD>
<TD>
<INPUT NAME='Serial_Number' SIZE='25' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Hostname</em></TD>
<TD>
<INPUT NAME='Hostname' SIZE='16' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Serial 0 IP Address</em></TD>
<TD>
<input type='text' name='Serial_0_IP_Address' size='16' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Serial 1 IP Address</em></TD>
<TD>
<INPUT NAME='Serial_1_IP_Address' SIZE='16' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Serial 2 IP Address</em></TD>
<TD>
<INPUT NAME='Serial_2_IP_Address' SIZE='16' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Serial 3 IP Address</em></TD>
<TD>
<INPUT NAME='Serial_3_IP_Address' SIZE='16' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Fast Ethernet 0 IP Address</em></TD>
<TD>
<INPUT NAME='Fast_Ethernet_0_IP_Address' SIZE='16' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Fast Ethernet 0 Subnet Mask</em></TD>
<TD>
<INPUT NAME='Fast_Ethernet_0_Subnet_Mask' SIZE='16' CLASS='formfield'>
</TD>
</TR>
<TR>
<TD ALIGN='right'>
<em>Fast Ethernet 1 IP Address</em></TD>
<TD>
<INPUT NAME='Fast_Ethernet_1_IP_Address' SIZE='16' CLASS='formfield'>
</TD>
</TR>
<tr>
<TD ALIGN='right'>
<em>Fast Ethernet 1 Subnet Mask</em></TD>
<TD>
<input type='text' name='Fast_Ethernet_1_Subnet_Mask' size='16' CLASS='formfield'>
</TD>
</tr>
<tr>
<TD ALIGN='right'>
<em>Ethernet 0 IP Address</em></TD>
<TD>
<input type='text' name='Ethernet_0_IP_Address' size='16' CLASS='formfield'>
</TD>
</tr>
<tr>
<TD ALIGN='right'>
<em>Ethernet 0 Subnet Mask</em></TD>
<TD>
<input type='text' name='Ethernet_0_Subnet_Mask' size='16' CLASS='formfield'>
</TD>
</tr>
<tr>
<TD ALIGN='right'>
<em>Ethernet 1 IP Address</em></TD>
<TD>
<input type='text' name='Ethernet_1_IP_Address' size='16' CLASS='formfield'>
</TD>
</tr>
<tr>
<TD ALIGN='right'>
<em>Ethernet 1 Subnet Mask</em></TD>
<TD>
<input type='text' name='Ethernet_1_Subnet_Mask' size='16' CLASS='formfield'>
</TD>
</tr>
<tr>
<TD ALIGN='right'>
<em>IOS</em></TD>
<TD>
<input type='text' name='IOS' size='16' CLASS='formfield'>
</TD>
</tr>
<tr>
<TD ALIGN='right'>
<em>Does Datanamics Support</em></TD>
<TD>
<select size='1' name='Does_Datanamics_Support' CLASS='formfield'>
  <option value='1'>Yes</option>
  <option value='0'>No</option>
  <option selected>Select One</option>
</select>
</TD>
</tr>
<!--#include virtual='/support_web/propentry/new/footer.asp'-->