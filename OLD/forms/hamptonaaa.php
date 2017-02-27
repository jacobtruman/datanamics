<?php
//ini_set ('display_errors', 'on');
$i = 0;
$p = 0;
while (!$res->EOF){
	if ($res->Fields['active']->value == 'Yes'){
		$i++;
	}
	$p++;
	$res->MoveNext();
}
$res = $link->Execute($sql);
?>
<table width='90%' border='1' cellpadding='0' cellspacing='0' bordercolor='C0C0C0' align='center'>
	<thead>
		<tr>
			<td align='center'>
				<b>
					#
				</b>
			</td>
			<td align='center'>
				<b>
					CTYHO
				</b>
			</td>
			<td align='center'>
				<b>
					USG IP
				</b>
			</td>
			<td align='center'>
				<b>
					USG Username
				</b>
			</td>
			<td align='center'>
				<b>
					USG Password
				</b>
			</td>
			<td align='center'>
				<b>
					Hotel Brand
				</b>
			</td>
			<td align='center'>
				<b>
					Property Name
				</b>
			</td>
		</tr>
	</thead>
<tbody>
<?php
$n = 0;
if (isset($res)){
	while (!$res->EOF){
		$prop = $res->Fields['prop']->Value;
		$htype = $res->Fields['htype']->Value;
		$name = $res->Fields['name']->Value;
		$active = $res->Fields['active']->Value;
		$lgn = $res->Fields['lgn']->Value;
		$pswd = $res->Fields['pswd']->Value;
		$gtway = $res->Fields['gateway']->Value;

		$link2 = ado_connect( $dsn );
		$sql2 = "SELECT csz FROM contact where (prop = '".$prop."')";
		$res2 = $link2->Execute($sql2);
		$csz = $res2->Fields['csz']->Value;
		ado_free_result( $res2 );
		ado_close( $link2 );
		$csz = explode(", ", $csz);
		$csz = explode(" ", $csz[1]);
		$zip = $csz[1];

		include $root."/support_web/components/imgs.php";
		echo "<tr>
			<td>
				".++$n."
			</td>
			<td align='center'>
				".$prop."
			</td>
			<td align='center'>
				<a href='http://".$lgn.":".$pswd."@".$gtway."' target='_blank'>".$gtway."</a>
			</td>
			<td align='center'>
				".$lgn."
			</td>
			<td align='center'>
				".$pswd."
			</td>
			<td align='center'>
				".$htype."
			</td>
			<td align='center'>
				".$name."
			</td>
		</tr>\n";
		if ($AAAFlag == "On"){
			//echo "On";
			echo "<iframe src='http://".$lgn.":".$pswd."@".$gtway."/config/aaa.htm?WINDWEB_URL=%2Ffs%2Fconfig%2Faaa.htm&usg_aaa_on=1&usg_aaa_xml_on=1&usg_xml_sender_ip=192.251.124.30&usg_xml_sender2_ip=0.0.0.0&usg_aaa_passthru_port=0&wAaaAuthRadio=1&usg_aaa_ssl_host_name=ssl.nomadix.com&usg_aaa_portal_page_on=1&usg_aaa_portal_page_url=http%3A%2F%2Fhsia.hamptoninn.com%2Fhsia%2Fservlet%2FAuthenticationRequest%3FGT%3DNOM%26PROP%3D".$prop."%26ZIP%3D".$zip."%26&usg_portal_page_parameters_on=1&usg_portal_xml_post_url=&usg_portal_post_port=80&usg_aaa_username_on=1&usg_aaa_new_subscribers_on=1&usg_aaa_credit_card_type_index=0&usg_credit_card_url=https%3A%2F%2Fsecure.authorize.net%2Fgateway%2Ftransact.dll&usg_aaa_credit_card_ip=64.94.118.66&usg_aaa_merchant_id=&wTransKey=&verify_trans_key=&usg_aaa_secret_key=bigbrowndog&usg_aaa_ews_ip=&usg_authorization_url=http%3A%2F%2Fusg.nomadix.com%2Fusg%2Fnewuserlogin.asp&usg_save_to_flash=0&usg_aaa_update_seconds=1200' border='0' frameborder='0' width='0' height='0'></iframe>";
		}elseif($AAAFlag == "Off"){
			//echo "Off";
			echo "<iframe src='http://".$lgn.":".$pswd."@".$gtway."/config/aaa.htm?WINDWEB_URL=%2Ffs%2Fconfig%2Faaa.htm&usg_aaa_on=0&usg_aaa_xml_on=1&usg_xml_sender_ip=192.251.124.30&usg_xml_sender2_ip=0.0.0.0&usg_aaa_passthru_port=0&wAaaAuthRadio=1&usg_aaa_ssl_host_name=ssl.nomadix.com&usg_aaa_portal_page_on=1&usg_aaa_portal_page_url=http%3A%2F%2Fhsia.hamptoninn.com%2Fhsia%2Fservlet%2FAuthenticationRequest%3FGT%3DNOM%26PROP%3D".$prop."%26ZIP%3D".$zip."%26&usg_portal_page_parameters_on=1&usg_portal_xml_post_url=&usg_portal_post_port=80&usg_aaa_username_on=1&usg_aaa_new_subscribers_on=1&usg_aaa_credit_card_type_index=0&usg_credit_card_url=https%3A%2F%2Fsecure.authorize.net%2Fgateway%2Ftransact.dll&usg_aaa_credit_card_ip=64.94.118.66&usg_aaa_merchant_id=&wTransKey=&verify_trans_key=&usg_aaa_secret_key=bigbrowndog&usg_aaa_ews_ip=&usg_authorization_url=http%3A%2F%2Fusg.nomadix.com%2Fusg%2Fnewuserlogin.asp&usg_save_to_flash=0&usg_aaa_update_seconds=1200' border='0' frameborder='0' width='0' height='0'></iframe>";
		}
		$gtway = '';
		$res->MoveNext();
	}
}
ado_free_result( $res );
ado_close( $link );
?>
</tbody></table>
		</td>
	</tr>
	<tr>
		<td height='50'>
			<BR>
		</td>
	</tr>
</table>
</body>