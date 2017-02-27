<?php
require_once("config.php");
$title = 'Overview Update';
$prop = $_REQUEST['prop'];
$property = new Property($prop);
$page_items = new PageItems($property);

$prop_info = $property->getPropertyInfo();

$bgcolor = "#C0C0C0";

$options = array(
	"cpe_type"=>array(
		"Netopia"=>"Netopia",
		"Gigalink"=>"Gigalink",
		"Cygnet"=>"Cygnet",
		"Elastic"=>"Elastic",
		"Paradyne A1-200"=>"Paradyne A1-200",
		"Paradyne 6210"=>"Paradyne 6210",
		"Cisco585"=>"Cisco585",
		"Cisco575"=>"Cisco575",
		"Turbocomm"=>"Turbocomm",
		"TUT"=>"TUT"
	),
	"gad_type"=>array(
		"3Com"=>"3Com",
		"WL-330"=>"Asus WL-330",
		"WET11"=>"Linksys WET11",
		"WUSB11"=>"Linksys WUSB11",
		"WE800"=>"Motorola WE800",
		"ME101"=>"Netgear ME101",
		"DWL120"=>"D-Link DWL120",
		"DWL810"=>"D-Link DWL810",
		"NL-2611CB3"=>"EnGenius",
		"OTC201"=>"OTC ACR-201",
		"SMCWEBT-G"=>"SMCWEBT-G",
		"SMC-2870W"=>"SMC 2870W",
		"Cisco"=>"Cisco"
	),
	"billing_method"=>array(
		"Eleven Wireless (2-Way PMS and Credit Card)"=>"Eleven Wireless (2-Way PMS and Credit Card)",
		"Access Code from front desk (XML PC)"=>"Access Code from front desk (XML PC)",
		"Access Code from front desk (IP3)"=>"Access Code from front desk (IP3)",
		"Access Code from front desk (USG)"=>"Access Code from front desk (USG)",
		"Access Code from front desk (Hampton CAS)"=>"Access Code from front desk (Hampton CAS)",
		"Access Code from front desk (Hilton CAS)"=>"Access Code from front desk (Hilton CAS)",
		"Bill to room (1-Way PMS)"=>"Bill to room (1-Way PMS)",
		"Bill to room (2-Way PMS)"=>"Bill to room (2-Way PMS)",
		"Credit Card (authorize.net)"=>"Credit Card (authorize.net)",
		"None (AAA off)"=>"None (AAA off)",
		"None (Free Access)"=>"None (Free Access)",
		"None (Free Access with portal)"=>"None (Free Access with portal)"
	)
);

$field_groups = array(
	array(
		"records"=>array(
			array("type"=>"label", "title"=>"Property Code", "field"=>"prop")
		)
	),
	array(
		"bgcolor"=>$bgcolor,
		"records"=>array(
			array("type"=>"text", "title"=>"Cabling Type", "field"=>"cabling_type"),
			array("type"=>"yesno", "title"=>"CPE in Room", "field"=>"cpe"),
			array("type"=>"dropdown", "title"=>"CPE Type", "field"=>"cpe_type", "options"=>$options['cpe_type']),
			array("type"=>"yesno", "title"=>"GADs Available", "field"=>"gad"),
			array("type"=>"dropdown", "title"=>"GAD Type", "field"=>"gad_type", "options"=>$options['gad_type']),
			array("type"=>"text", "title"=>"Number of GADs Available", "field"=>"gad_num"),
			array("type"=>"text", "title"=>"CPE/GAD Note", "field"=>"cpegad_note")
		)
	),
	array(
		"records"=>array(
			array("type"=>"text", "title"=>"Price", "field"=>"price"),
			array("type"=>"dropdown", "title"=>"Billing Method", "field"=>"billing_method", "options"=>$options['billing_method'])
		)
	),
	array(
		"bgcolor"=>$bgcolor,
		"records"=>array(
			array("type"=>"text", "title"=>"11OS Guest Room Portal", "field"=>"elevenos_portal_gr"),
			array("type"=>"text", "title"=>"11OS Lobby Portal", "field"=>"elevenos_portal_lobby"),
			array("type"=>"text", "title"=>"11OS Meeting Room Portal", "field"=>"elevenos_portal_mr"),
			array("type"=>"text", "title"=>"11OS Meeting Room Wireless Portal", "field"=>"elevenos_portal_mrwifi")
		)
	),
	array(
		"records"=>array(
			array("type"=>"yesno", "title"=>"VPN Supported", "field"=>"vpn"),
			array("type"=>"yesno", "title"=>"VLANs", "field"=>"vlans"),
			array("type"=>"text", "title"=>"SMTP Server Address", "field"=>"smtp_address")
		)
	),
	array(
		"bgcolor"=>$bgcolor,
		"records"=>array(
			array("type"=>"text", "title"=>"Printing Provider", "field"=>"print_method"),
			array("type"=>"text", "title"=>"Printing Link", "field"=>"print_link"),
			array("type"=>"yesno", "title"=>"Printing Supported", "field"=>"print_support")
		)
	),
	array(
		"records"=>array(
			array("type"=>"text", "title"=>"SSID", "field"=>"ssid"),
			array("type"=>"text", "title"=>"Supported WiFi Areas", "field"=>"wifi_areas")
		)
	)
);

echo $page_items->getHeader($title);

?>
<div id="content">
	<?php echo $page_items->getHeaderDiv($title);?>

	<form method='POST' name='formname' action='propentry/update/res.php'>
		<input type='hidden' name='table' value='prop'>
		<input type='hidden' name='log' value='ulog'>
		<input type='hidden' name='prop' value='<?php echo $prop;?>'>
		<input type='hidden' name='last_updated' value='<?php echo date('Y/m/d/ H:i:s');?>'>
		<?php
		foreach($prop_info as $field=>$value) {
			echo "<input type='hidden' name='OLD{$field}' value='{$value}'>" . PHP_EOL;
		}
		?>

		<div class='table' style='width: 100%; margin-top: 50px; padding-bottom: 10px;'>
			<?php
			foreach($field_groups as $field_group) {
				$records = array();
				foreach($field_group['records'] as $record) {
					if(isset($prop_info[$record["field"]])) {
						$record["value"] = $prop_info[$record["field"]];
					}
					$records[] = $record;
				}
				if(isset($field_group['bgcolor'])) {
					echo $page_items->getSimpleFieldRows($records, $field_group['bgcolor']);
				} else {
					echo $page_items->getSimpleFieldRows($records);
				}
			}
			?>

			<div class='row' style='padding-top: 10px;'>
				<div class='cell' style='padding-top: 10px; padding-right: 5px; text-align: right;'>
					<input type='submit' value='Update' class='formbutton'>
				</div>
				<div class='cell' style='padding-top: 10px; padding-left: 5px; text-align: left;'>
					<input type='reset' value='Reset' class='formbutton'>
				</div>
			</div>
		</div>

	</form>
	<?php
	if(in_array($user->getPermissions(), array('admin'))) {
		echo "<div class='table' style='width: 100%; margin-top: 10px; padding-bottom: 10px;'>
				<div class='row'>
					<div class='cell' style='font-weight: bold; font-size: 12pt;'>
						Log
					</div>
				</div>
				<div class='row'>
					<div class='cell' style='font-size: 10pt;'>
						{$prop_info['ulog']}
					</div>
				</div>
			</div>" . PHP_EOL;
	}
	?>
	<?php echo $page_items->getFooter();?>
</div>