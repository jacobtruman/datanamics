<?
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
		$bmethod = $res->Fields['bmethod']->Value;
		if ($active == "Yes"){
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
				</td>\n";
				if ($EOSFlag == "On"){
					//echo "On";
					echo "<iframe src='http://".$lgn.":".$pswd."@".$gtway."/config/aaa.htm?WINDWEB_URL=%2Ffs%2Fconfig%2Faaa.htm&nse_wireless_wep_enable=error&nse_wireless_wep_auth_type=error&usg_aaa_dot1x_on_pre_val=0&nse_lpf_on=0&usg_aaa_xml_on=1&usg_xml_sender_ip=69.48.211.180&usg_xml_sender2_ip=0.0.0.0&usg_print_server_url=&usg_aaa_passthru_port=0&usg_os_encoding_on=1&wAaaAuthRadio=1&usg_aaa_ssl_host_name=ssl.nomadix.com&usg_aaa_portal_page_on=1&usg_aaa_portal_page_url=https%3A%2F%2Fsecure.elevenwireless.com%2FElevenOS%2FPortal&usg_portal_page_parameters_on=1&usg_portal_xml_post_url=http%3A%2F%2Fsecure.elevenwireless.com%2FElevenOS%2FPortal%2FNomadix_Post.aspx&usg_portal_post_port=80&usg_aaa_username_on=1&usg_aaa_new_subscribers_on=1&usg_aaa_credit_card_type_index=0&usg_credit_card_url=https%3A%2F%2Fsecure.authorize.net%2Fgateway%2Ftransact.dll&usg_aaa_credit_card_ip=64.94.118.66&usg_aaa_merchant_id=&wTransKey=&verify_trans_key=&usg_aaa_trans_duration=3&usg_aaa_secret_key=bigbrowndog&usg_aaa_ews_ip=&usg_authorization_url=http%3A%2F%2Fusg.nomadix.com%2Fusg%2Fnewuserlogin.asp&usg_roombillingpolicy_enabled=0&usg_save_to_flash=0&usg_aaa_on=1' border='0' frameborder='0' width='0' height='0'></iframe>";
				}elseif($EOSFlag == "Off"){
					//echo "Off";
					echo "<iframe src='http://".$lgn.":".$pswd."@".$gtway."/config/aaa.htm?WINDWEB_URL=%2Ffs%2Fconfig%2Faaa.htm&nse_wireless_wep_enable=error&nse_wireless_wep_auth_type=error&usg_aaa_dot1x_on_pre_val=0&nse_lpf_on=0&usg_aaa_xml_on=1&usg_xml_sender_ip=69.48.211.180&usg_xml_sender2_ip=0.0.0.0&usg_print_server_url=&usg_aaa_passthru_port=0&usg_os_encoding_on=1&wAaaAuthRadio=1&usg_aaa_ssl_host_name=ssl.nomadix.com&usg_aaa_portal_page_on=1&usg_aaa_portal_page_url=https%3A%2F%2Fsecure.elevenwireless.com%2FElevenOS%2FPortal&usg_portal_page_parameters_on=1&usg_portal_xml_post_url=http%3A%2F%2Fsecure.elevenwireless.com%2FElevenOS%2FPortal%2FNomadix_Post.aspx&usg_portal_post_port=80&usg_aaa_username_on=1&usg_aaa_new_subscribers_on=1&usg_aaa_credit_card_type_index=0&usg_credit_card_url=https%3A%2F%2Fsecure.authorize.net%2Fgateway%2Ftransact.dll&usg_aaa_credit_card_ip=64.94.118.66&usg_aaa_merchant_id=&wTransKey=&verify_trans_key=&usg_aaa_trans_duration=3&usg_aaa_secret_key=bigbrowndog&usg_aaa_ews_ip=&usg_authorization_url=http%3A%2F%2Fusg.nomadix.com%2Fusg%2Fnewuserlogin.asp&usg_roombillingpolicy_enabled=0&usg_save_to_flash=0' border='0' frameborder='0' width='0' height='0'></iframe>";
				}
			echo "</tr>\n";
			if ($gtway2 != ''){
				echo "<tr>
					<td>
						-
					</td>
					<td align='center'>
						".$prop."
					</td>
					<td align='center'>
						<a href='http://".$lgn2.":".$pswd2."@".$gtway2."' target='_blank'>".$gtway2."</a>
					</td>
					<td align='center'>
						".$lgn2."
					</td>
					<td align='center'>
						".$pswd2."
					</td>
					<td align='center'>
						".$htype."
					</td>
					<td align='center'>
						".$name."
					</td>\n";
					if ($EOSFlag == "On"){
						//echo "On";
						echo "<iframe src='http://".$lgn2.":".$pswd2."@".$gtway2."/config/aaa.htm?WINDWEB_URL=%2Ffs%2Fconfig%2Faaa.htm&nse_wireless_wep_enable=error&nse_wireless_wep_auth_type=error&usg_aaa_dot1x_on_pre_val=0&nse_lpf_on=0&usg_aaa_xml_on=1&usg_xml_sender_ip=69.30.42.70&usg_xml_sender2_ip=0.0.0.0&usg_print_server_url=&usg_aaa_passthru_port=0&usg_os_encoding_on=1&wAaaAuthRadio=1&usg_aaa_ssl_host_name=ssl.nomadix.com&usg_aaa_portal_page_on=1&usg_aaa_portal_page_url=https%3A%2F%2Fsecure.elevenwireless.com%2FElevenOS%2FPortal&usg_portal_page_parameters_on=1&usg_portal_xml_post_url=http%3A%2F%2Fsecure.elevenwireless.com%2FElevenOS%2FPortal%2FNomadix_Post.aspx&usg_portal_post_port=80&usg_aaa_username_on=1&usg_aaa_new_subscribers_on=1&usg_aaa_credit_card_type_index=0&usg_credit_card_url=https%3A%2F%2Fsecure.authorize.net%2Fgateway%2Ftransact.dll&usg_aaa_credit_card_ip=64.94.118.66&usg_aaa_merchant_id=&wTransKey=&verify_trans_key=&usg_aaa_trans_duration=3&usg_aaa_secret_key=bigbrowndog&usg_aaa_ews_ip=&usg_authorization_url=http%3A%2F%2Fusg.nomadix.com%2Fusg%2Fnewuserlogin.asp&usg_roombillingpolicy_enabled=0&usg_save_to_flash=0&usg_aaa_on=1' border='0' frameborder='0' width='0' height='0'></iframe>";
					}elseif($EOSFlag == "Off"){
						//echo "Off";
						echo "<iframe src='http://".$lgn2.":".$pswd2."@".$gtway2."/config/aaa.htm?WINDWEB_URL=%2Ffs%2Fconfig%2Faaa.htm&nse_wireless_wep_enable=error&nse_wireless_wep_auth_type=error&usg_aaa_dot1x_on_pre_val=0&nse_lpf_on=0&usg_aaa_xml_on=1&usg_xml_sender_ip=69.30.42.70&usg_xml_sender2_ip=0.0.0.0&usg_print_server_url=&usg_aaa_passthru_port=0&usg_os_encoding_on=1&wAaaAuthRadio=1&usg_aaa_ssl_host_name=ssl.nomadix.com&usg_aaa_portal_page_on=1&usg_aaa_portal_page_url=https%3A%2F%2Fsecure.elevenwireless.com%2FElevenOS%2FPortal&usg_portal_page_parameters_on=1&usg_portal_xml_post_url=http%3A%2F%2Fsecure.elevenwireless.com%2FElevenOS%2FPortal%2FNomadix_Post.aspx&usg_portal_post_port=80&usg_aaa_username_on=1&usg_aaa_new_subscribers_on=1&usg_aaa_credit_card_type_index=0&usg_credit_card_url=https%3A%2F%2Fsecure.authorize.net%2Fgateway%2Ftransact.dll&usg_aaa_credit_card_ip=64.94.118.66&usg_aaa_merchant_id=&wTransKey=&verify_trans_key=&usg_aaa_trans_duration=3&usg_aaa_secret_key=bigbrowndog&usg_aaa_ews_ip=&usg_authorization_url=http%3A%2F%2Fusg.nomadix.com%2Fusg%2Fnewuserlogin.asp&usg_roombillingpolicy_enabled=0&usg_save_to_flash=0' border='0' frameborder='0' width='0' height='0'></iframe>";
					}
				echo "</tr>\n";
			}
		}
	$res->MoveNext();
	}
}
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