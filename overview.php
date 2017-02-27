<?php
require_once("config.php");

$title = "Property Overview";

$prop = $_REQUEST['prop'];
$property = new Property($prop);
$page_items = new PageItems($property);
$devices = new Devices();

$prop_info = $property->getPropertyInfo();
$cpe_link_map = $devices->getCPELinkMap();
$gad_link_map = $devices->getGADLinkMap();

$parameters = array(
	#'gtway_type' => 'Gateway',
	#'gtwayid'=> 'Gateway ID',
	#'gtwayver' => 'Gateway Version',
	#'gtwayserial' => 'Gateway Serial Number',
	'cabling_type' => 'Cabling Type',
	#'cpe' => 'CPE in Room',
	'cpe_type' => 'CPE Type',
	#'gad' => 'GADs Available',
	'gadtype' => 'GAD Type',
	'device_note' => 'CPE/GAD Note',
	#'bill' => 'Billing',
	'price' => 'Price',
	'bmethod' => 'Billing Method',
	'elevenos_portal_gr' => '11OS Guest Room Portal',
	'elevenos_portal_lobby' => '11OS Lobby Portal',
	'elevenos_portal_mr' => '11OS Meeting Room Portal',
	'elevenos_portal_mrwifi' => '11OS Meeting Room Wireless Portal',
	#'smtp' => 'SMTP Supported',
	'smtp_address' => 'SMTP Address',
	'vpn' => 'VPN Supported',
	'vlans' => 'VLANs',
	#'print' => 'Printing Available',
	'print_method' => 'Printing Provider',
	'print_link' => 'Printing Link',
	'print_support' => 'Printing Supported',
	'ssid' => 'SSID',
	#'wireless' => 'Wireless',
	'wifi_areas' => 'Supported WiFi Areas',
	'level1' => 'Support Level 1',
	'level2' => 'Support Level 2',
	'level3' => 'Support Level 3',
	'last_updated' => 'Date Last Modified'
);
echo $page_items->getHeader($title);

$level = 2;

?>
<div id="content">
	<?php echo $page_items->getContactHeaderDiv($title, $level);?>
	<div class='table' style='width: 100%; margin-top: 50px;'>
	<?php
	foreach($parameters as $field => $title) {
		if((!empty($prop_info[$field])) && ($field != 'last_updated')) {
			echo "<div class='row'>
		<div class='cell' style='text-align: right; font-size: 10pt; padding-right: 10px;'>
			{$title}:
		</div>
		<div class='cell' style='text-align: left; font-size: 10pt; color: #FF0000;'>" . PHP_EOL;
			if($field == 'cpe_type') {
				if(isset($cpe_link_map[$prop_info[$field]])) {
					echo "<a href='CPE/{$cpe_link_map[$prop_info[$field]]}' target='_blank'>{$prop_info[$field]}</a>" . PHP_EOL;
				}
			} else if($field == 'gad_type') {
				if(isset($cpe_link_map[$prop_info[$field]])) {
					echo "<a href='GAD/{$gad_link_map[$prop_info[$field]]}' target='_blank'>{$prop_info['gad_num']} {$prop_info[$field]} units available</a>" . PHP_EOL;
				}
			} else if($field == 'smtp_address') {
				echo "<a href='telnet://{$prop_info[$field]} 25'>{$prop_info[$field]}</a>" . PHP_EOL;
			} else if(strstr($field, 'elevenos_portal')) {
				echo "<a href='{$prop_info[$field]}' target='_blank'>View {$title}</a><br />" . PHP_EOL;
			} else if($field == 'print_method') {
				if($prop_info[$field] == 'PrinterOn.com') {
					echo "{$prop_info[$field]} <a href='1stlevel/PrinterOn/printeron.png' target='_blank'>Sample tent card</a><br />" . PHP_EOL;
				} else {
					echo $prop_info[$field];
				}
			} else if($field == 'device_note') {
				echo $devices->getDeviceLinkFromNote($prop_info[$field]) . PHP_EOL;
			} elseif($field == 'print_link') {
				echo "<a href='{$prop_info[$field]}' target='_blank'>{$prop_info[$field]}</a>" . PHP_EOL;
			} else if(in_array($field, array("vpn", "vlans", "level1", "level2", "level3", "print_support"))) {
				if(!empty($prop_info[$field])) {
					echo "Yes" . PHP_EOL;
				} else {
					echo "No" . PHP_EOL;
				}
			} else {
				echo $prop_info[$field];
			}
			echo "</div>
	</div>" . PHP_EOL;
		}
	}
	?>
	</div>
	<?php echo $page_items->getFooter();?>
</div>