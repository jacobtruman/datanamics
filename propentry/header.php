<?php
include_once($root."/support_web/propentry/login/session.php");
include_once($root.'/support_web/components/dbcon.php');
?>
<HEAD>
<Title>
    <?php echo $ptype?>
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<body marginwidth='0' marginheight='0' scroll='yes' vlink='#0000FF' alink='#0000FF'>
	<table class='ms-main' cellpadding='0' cellspacing='0' border='0' width='100%' height='100%'>
		<TR valign='top'>
			<TD WIDTH='100%' height='29' colspan='3'>
				<table class='ms-bannerframe' border='0' cellspacing='0' cellpadding='3' width='100%'>
					<tr>
						<td nowrap valign='middle' align='left' height='30' width='100%'>
						</td>
					</tr>
				</table>				
				<table border='0' cellspacing='0' cellpadding='0' width=100%>
					<tr>
					   <td bgcolor='#D8D8D8' align='center'>
						  	<font size='4' face='Times New Roman'>
								<?php echo $ptype?>
							</font>
						</td>
					</tr>
				</table>
			</TD>
		 </tr>
		 <tr valign='top' height=100%>
			<td width='100%' height='100%' valign='top' colspan='2'>
<table border='0' width='100%' height='52'>
  <tr>
    <td align='center'>
		<font face='Verdana' size='2'>
			<a href='/support_web/propentry/pindex.php' style='color: #5f8ac5'>
				Add Property
			</a>
		</font>
    </td>
	<td align='center'>
		<font face='Verdana' size='2'>
			<a href='/support_web/propentry/cindex.php' style='color: #5f8ac5'>
				Add Contact Info
			</a>
		</font>
    </td>
	<td align='center'>
		<font face='Verdana' size='2'>
			<a href='/support_web/propentry/iindex.php' style='color: #5f8ac5'>
				Add IP Info
			</a>
		</font>
    </td>
	<td align='center'>
		<font face='Verdana' size='2'>
			<a href='/support_web/propentry/oindex.php' style='color: #5f8ac5'>
				Add Overview
			</a>
		</font>
    </td>
  </tr>
</table>
