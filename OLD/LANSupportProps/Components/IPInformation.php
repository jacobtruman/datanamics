<?php
$ptype = "IP Information";
$root = "D:/inetpub/support";
include($root."/support_web/LANSupportProps/components/header.php");

$link = ado_connect( $dsn );


$sql = "SELECT * FROM iptable where (prop = '".$prop."')";
$res = $link->Execute($sql);

$prop = $res->Fields['prop']->Value;

$parr = array('dhcpb', 'dhcpe', 'dhcpmask', 'dhcpgate', 'dns1', 'dns2', 'dns3', 'isp_name', 'isp_circuit', 'mdate');

$parrcnt = count($parr);
$i = 0;
$prop = $res->Fields['prop']->Value;
while ($i < $parrcnt){
	$$parr[$i] = $res->Fields["$parr[$i]"]->Value;
$i++;
}

ado_free_result( $res );
ado_close( $link );
?>
				<br>
				<table border='0' width='50%' align='center'>
					<tr>
						<td>
							<br>
						</td>
					</tr>
					<tr>
						<td align='center'>
							<font size='3' face='Verdana'>
								<b>
									<u>
										DHCP Pool:
									</u>
								</b>
							</font>
						</td>
					</tr>
					<tr>
						<td>
							<br>
						</td>
					</tr>
					<tr>
						<td align='center'>
							<font size='2' face='Verdana'>
<?php
if ($dhcpb != ''){
	echo '<b>IP Range:</b> '.$dhcpb.' <b>thru</b> '.$dhcpe;
}
?>
							</font>
						</td>
					</tr>
					<tr>
						<td align='center'>
							<font size='2' face='Verdana'>
<?php
if (($dhcpmask != '') && ($dhcpb != '')){
	echo '<b>Subnet Mask:</b> '.$dhcpmask;
}
?>
							</font>
						</td>
					</tr>
					<tr>
						<td align='center'>
							<font size='2' face='Verdana'>
<?php
if (!empty($dhcpgate) && !empty($dhcpb)){
	echo '<b>Gateway:</b> '.$dhcpgate;
}
?>
							</font>
						</td>
					</tr>
				<?php
					if (!empty($dns1) && !empty($dhcpb)){
				?>
					<tr>
						<td align='center'>
							<font size='2' face='Verdana'>
								<?php echo '<b>Primary DNS:</b> <a href="'.$ping.$dns1.'" target="_blank">'.$dns1.'</a>';?>
							</font>
						</td>
					</tr>
				<?php
					}
				?>
				<?php
					if (!empty($dns2) && !empty($dhcpb)){
				?>
					<tr>
						<td align='center'>
							<font size='2' face='Verdana'>
								<?php echo '<b>Secondary DNS:</b> <a href="'.$ping.$dns2.'" target="_blank">'.$dns2.'</a>';?>
							</font>
						</td>
					</tr>
				<?php
					}
				?>
				<?php
					if (!empty($dns3) && !empty($dhcpb)){
				?>
					<tr>
						<td align='center'>
							<font size='2' face='Verdana'>
								<?php echo '<b>Tertiary DNS:</b> <a href="'.$ping.$dns3.'" target="_blank">'.$dns3.'</a>';?>
							</font>
						</td>
					</tr>
				<?php
					}
				?>
					<TR>
						<td align='center'>
							<BR>
						</td>
					</TR>
					<?php
						include($root.'/support_web/LANSupportProps/components/ISPInfo.php');
					?>
				</table>
			</td>
		</tr>
		<tr>
			<td align='center' valign='bottom'>
				<?php
					include($root.'/support_web/LANSupportProps/components/footer.php');
				?>
			</td>
		</tr>
	</table>
</table>
</body>

<!-- Created/Modified by Jacob Truman, Matthew "Stewart" -->