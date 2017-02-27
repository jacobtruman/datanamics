<?php
$ptype = 'Overview Entry';
$root = 'D:/inetpub/support';
include ($root.'/support_web/propentry/header.php');

$prop = $_POST['prop'];
$pdb = $_POST['dbname'];
?>
<HR>
<center>
	<font face='Verdana' size='2'>
		<?php echo $ptype;?>
	</font>
</center>
<FORM METHOD='POST' action='index.php'>
<INPUT TYPE='hidden' NAME='mdate' VALUE='<?php echo date('m/d/Y H:i');?>'>
<BLOCKQUOTE>
<TABLE align='center' border='0' width='95%'>
	<TR>
		<TD ALIGN='right' width='50%'>
			Property Code
		</TD>
		<TD>
			<?php
			if (!isset($prop)){
				echo "<INPUT NAME='prop' SIZE='25' CLASS='formfield'>";
			}else{
				echo "<INPUT TYPE='hidden' NAME='prop' VALUE='".$prop."'>";
				echo '<B>'.$prop.'</B>';
			}
			?>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Gateway Type
		</TD>
		<TD>
			<select size='1' name='gtway_type' CLASS='formfield'>
				<option selected></option>
				<option value='Nomadix AG'>Nomadix AG</option>
				<option value='Nomadix USG'>Nomadix USG</option>
				<option value='Nomadix HSG'>Nomadix HSG</option>
				<option value='Solution IP'>Solution IP</option>
				<option value='IP3'>IP3</option>
				<option value='BBSM'>BBSM</option>
				<option value='Other'>Other</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Gateway Version
		</TD>
		<TD>
			<INPUT NAME='gtwayver' VALUE='HSG v2.3.234' SIZE='15' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Gateway Serial Number
		</TD>
		<TD>
			<INPUT NAME='gtwayserial' VALUE='' SIZE='15' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Gateway ID
		</TD>
		<TD>
			<INPUT NAME='gtwayid' VALUE='' SIZE='10' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Cabling Type
		</TD>
		<TD>
			<INPUT NAME='ctype' VALUE='Wireless' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			CPE in Room
		</TD>
		<TD>
			<select size='1' name='cpe' CLASS='formfield'>
				<option value='No'>No</option>
				<option value='Yes'>Yes</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			CPE Type
		</TD>
		<TD>
			<select size='1' name='cpetype' CLASS='formfield'>
				<option selected></option>
				<option value='Netopia'>Netopia</option>
				<option value='Gigalink'>Gigalink SU-400</option>
				<option value='Cygnet'>Cygnet</option>
				<option value='Elastic'>Elastic Modem 120</option>
				<option value='Paradyne A1-200'>Paradyne A1-200</option>
				<option value='Paradyne 6210'>Paradyne 6210</option>
				<option value='Cisco585'>Cisco 585 LRE</option>
				<option value='Cisco575'>Cisco 575 LRE</option>
				<option value='Turbocomm'>Turbocomm EA110</option>
				<option value='TUT'>TUT</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			GADs Avaliable
		</TD>
		<TD>
			<select size='1' name='gad' CLASS='formfield'>
				<option value='Yes'>Yes</option>
				<option value='No'>No</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			GAD Type
		</TD>
		<TD>
			<select size='1' name='gadtype' CLASS='formfield'>
				<option selected></option>
				<option value='3Com'>3Com</option>
				<option value='WL-330'>Asus WL-330</option>
				<option value='WET11'>Linksys WET11</option>
				<option value='WUSB11'>Linksys WUSB11</option>
				<option value='WE800'>Motorola WE800</option>
				<option value='ME101'>Netgear ME101</option>
				<option value='DWL120'>D-Link DWL120</option>
				<option value='DWL810'>D-Link DWL810</option>
				<option value='NL-2611CB3'>EnGenius</option>
				<option value='OTC201'>OTC ACR-201</option>
				<option value='SMCWEBT-G'>SMCWEBT-G</option>
				<option value='SMC-2870W'>SMC 2870W</option>
				<option value='Cisco'>Cisco</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Number of GADs Avaliable
		</TD>
		<TD>
			<INPUT NAME='gadnum' VALUE='' SIZE='5' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			CPE/GAD Note
		</TD>
		<TD>
			<INPUT NAME='cnote' VALUE='' SIZE='50' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Billing
		</TD>
		<TD>
			<select size='1' name='bill' CLASS='formfield'>
				<option value='No' selected>No</option>
				<option value='Yes'>Yes</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Price
		</TD>
		<TD>
			<INPUT NAME='price' SIZE='80' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Billing Method
		</TD>
		<TD>
			<select name='bmethod' class='formfield'>
				<option value='Eleven Wireless (2-Way PMS and Credit Card)'>Eleven Wireless (2-Way PMS and Credit Card)</option>
				<option value='Access Code from front desk (XML PC)'>Access Code from front desk (XML PC)</option>
				<option value='Access Code from front desk (IP3)'>Access Code from front desk (IP3)</option>
				<option value='Access Code from front desk (USG)'>Access Code from front desk (USG)</option>
				<option value='Access Code from front desk (Hampton CAS)'>Access Code from front desk (Hampton CAS)</option>
				<option value='Access Code from front desk (Hilton CAS)'>Access Code from front desk (Hilton CAS)</option>
				<option value='Bill to room (1-Way PMS)'>Bill to room (1-Way PMS)</option>
				<option value='Bill to room (2-Way PMS)'>Bill to room (2-Way PMS)</option>
				<option value='Credit Card (authorize.net)'>Credit Card (authorize.net)</option>
				<option value='None (AAA off)'>None (AAA off)</option>
				<option value='None (Free Access)'>None (Free Access)</option>
				<option value='None (Free Access with portal)'>None (Free Access with portal)</option>
			</select>
		</TD>
	</TR>
	<tr>
		<td align='right'>
			11OS Guest Room Portal
		</td>
		<td>
			<INPUT NAME='g11osportal' VALUE='' SIZE='60' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right'>
			11OS Lobby Portal
		</td>
		<td>
			<INPUT NAME='l11osportal' VALUE='' SIZE='60' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right'>
			11OS Meeting Room Portal
		</td>
		<td>
			<INPUT NAME='m11osportal' VALUE='' SIZE='60' CLASS='formfield'>
		</td>
	</tr>
	<tr>
		<td align='right'>
			11OS Meeting Room Wireless Portal
		</td>
		<td>
			<INPUT NAME='mw11osportal' VALUE='' SIZE='60' CLASS='formfield'>
		</td>
	</tr>
	<TR>
		<TD ALIGN='right'>
			SMTP Supported
		</TD>
		<TD>
			<select size='1' name='smtp' CLASS='formfield'>
				<option value='Yes' selected>Yes</option>
				<option value='No'>No</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			SMTP Server Address
		</TD>
		<TD>
			<INPUT name='smtpserver' SIZE='50' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			VPN Supported
		</TD>
		<TD>
			<select size='1' name='vpn' CLASS='formfield'>
				<option value='Yes' selected>Yes</option>
				<option value='No'>No</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Printing Available
		</TD>
		<TD>
			<select size='1' name='print' CLASS='formfield'>
				<option value='No' selected>No</option>
				<option value='Yes'>Yes</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Printing Provider
		</TD>
		<TD>
			<INPUT NAME='pmethod' SIZE='60' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Printing Link
		</TD>
		<TD>
			<INPUT NAME='plink' SIZE='60' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Printing Supported
		</TD>
		<TD>
			<select size='1' name='psupport' CLASS='formfield'>
				<option value='No' selected>No</option>
				<option value='Yes'>Yes</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			VLANs
		</TD>
		<TD>
			<select size='1' name='vlans' CLASS='formfield'>
				<option value='No' selected>No</option>
				<option value='Yes'>Yes</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Wireless
		</TD>
		<TD>
			<select size='1' name='wireless' CLASS='formfield'>
				<option value='Yes' selected>Yes</option>
				<option value='No'>No</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			SSID
		</TD>
		<TD>
			<INPUT NAME='ssid' VALUE='hhonors' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Supported Areas
		</TD>
		<TD>
			<INPUT NAME='areas' VALUE='Guest Rooms, Meeting Rooms and Public Areas' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Support Level
		</TD>
		<TD>
			<INPUT NAME='slevel' VALUE='1st Level, 2nd Level, 3rd Level' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD colspan='2' align='center'>
		<BR>
			<INPUT TYPE='SUBMIT' VALUE='Submit' CLASS='formbutton'>
			<INPUT TYPE='RESET' VALUE='Reset' CLASS='formbutton'>
		</TD>
	</TR>
</TABLE>
</FORM>
</BLOCKQUOTE>
<HR>
</BODY>
<?php
if (isset($prop)){

$link = ado_connect( $dsn );

$table = 'ipscope';
include ("insDB.php");

ado_free_result( $res );
ado_close( $link );
}
?>