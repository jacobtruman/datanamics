<?php
require_once("config.php");

$title = "IP Information";

$prop = $_REQUEST['prop'];
$property = new Property($prop);
$page_items = new PageItems($property);
$devices = new Devices();

$prop_info = $property->getPropertyInfo();
$cpe_link_map = $devices->getCPELinkMap();
$gad_link_map = $devices->getGADLinkMap();

$ip_info = $property->getIPInfo();
$isp_info = $property->getISPInfo();

echo $page_items->getHeader($title);

?>
<div class='content'>
	<?php echo $page_items->getContactHeaderDiv($title, $level); ?>

	<div class='table' style='width: 100%;'>
		<?php

		echo "<div class='row'>
		<div class='cell' style='font-size: 10pt; font-weight: bold;'>" . PHP_EOL;
		$scope1 = false;
		if(!empty($ip_info['privtitle']) && !empty($ip_info['privb'])) {
			$scope1 = true;
			echo $ip_info['privtitle'];
		}
		echo "</div>
		<div class='cell' style='font-size: 10pt; font-weight: bold;'>" . PHP_EOL;
		$scope2 = false;
		if(!empty($ip_info['pubtitle']) && !empty($ip_info['pubb'])) {
			$scope2 = true;
			echo $ip_info['pubtitle'];
		}
		echo "</div>
		</div>" . PHP_EOL;
		$records = array();
		if($scope1) {
			$records[] = array("IP Range", "{$ip_info['privb']} thru {$ip_info['prive']}");
		}
		if($scope2) {
			$records[] = array("IP Range", "{$ip_info['pubb']} thru {$ip_info['pube']}");
		}
		echo $page_items->getDualRows($records);

		$records = array();
		if($scope1) {
			$records[] = array("Subnet Mask", $ip_info['privmask']);
		}
		if($scope2) {
			$records[] = array("Subnet Mask", $ip_info['pubmask']);
		}
		echo $page_items->getDualRows($records);

		$records = array();
		if($scope1) {
			$records[] = array("Gateway", $ip_info['privgate']);
		}
		if($scope2) {
			$records[] = array("Gateway", $ip_info['pubgate']);
		}
		echo $page_items->getDualRows($records);

		$records = array();
		if($scope1) {
			$records[] = array("Primary DNS", "<a href='{$devices->ping}{$ip_info['dns1']} target='_blank'>{$ip_info['dns1']}</a>");
		}
		if($scope2) {
			$records[] = array("Primary DNS", "<a href='{$devices->ping}{$ip_info['dns1']} target='_blank'>{$ip_info['dns1']}</a>");
		}
		echo $page_items->getDualRows($records);

		$records = array();
		if($scope1) {
			$records[] = array("Secondary DNS", "<a href='{$devices->ping}{$ip_info['dns2']} target='_blank'>{$ip_info['dns2']}</a>");
		}
		if($scope2) {
			$records[] = array("Secondary DNS", "<a href='{$devices->ping}{$ip_info['dns2']} target='_blank'>{$ip_info['dns2']}</a>");
		}
		echo $page_items->getDualRows($records);

		$records = array();
		if($scope1) {
			$records[] = array("Tertiary DNS", "<a href='{$devices->ping}{$ip_info['dns3']} target='_blank'>{$ip_info['dns3']}</a>");
		}
		if($scope2) {
			$records[] = array("Tertiary DNS", "<a href='{$devices->ping}{$ip_info['dns3']} target='_blank'>{$ip_info['dns3']}</a>");
		}
		echo $page_items->getDualRows($records);

		echo "<div class='row'>
			<div class='cell'>
				<br />
				<br />
			</div>
		</div>" . PHP_EOL;

		echo "<div class='row'>
		<div class='cell' style='font-size: 10pt; font-weight: bold;'>" . PHP_EOL;
		$scope3 = false;
		if(!empty($ip_info['priv2title']) && !empty($ip_info['priv2b'])) {
			$scope3 = true;
			echo $ip_info['priv2title'];
		}
		echo "</div>
		<div class='cell' style='font-size: 10pt; font-weight: bold;'>" . PHP_EOL;
		$scope4 = false;
		if(!empty($ip_info['pub2title']) && !empty($ip_info['pub2b'])) {
			$scope4 = true;
			echo $ip_info['pub2title'];
		}
		echo "</div>
		</div>" . PHP_EOL;

		$records = array();
		if($scope3) {
			$records[] = array("IP Range", "{$ip_info['priv2b']} thru {$ip_info['priv2e']}");
		}
		if($scope4) {
			$records[] = array("IP Range", "{$ip_info['pub2b']} thru {$ip_info['pub2e']}");
		}
		echo $page_items->getDualRows($records);

		$records = array();
		if($scope3) {
			$records[] = array("Subnet Mask", $ip_info['priv2mask']);
		}
		if($scope4) {
			$records[] = array("Subnet Mask", $ip_info['pub2mask']);
		}
		echo $page_items->getDualRows($records);

		$records = array();
		if($scope3) {
			$records[] = array("Gateway", $ip_info['priv2gate']);
		}
		if($scope4) {
			$records[] = array("Gateway", $ip_info['pub2gate']);
		}
		echo $page_items->getDualRows($records);

		$records = array();
		if($scope3) {
			$records[] = array("Primary DNS", "<a href='{$devices->ping}{$ip_info['dns1']} target='_blank'>{$ip_info['dns1']}</a>");
		}
		if($scope4) {
			$records[] = array("Primary DNS", "<a href='{$devices->ping}{$ip_info['dns1']} target='_blank'>{$ip_info['dns1']}</a>");
		}
		echo $page_items->getDualRows($records);

		$records = array();
		if($scope3) {
			$records[] = array("Secondary DNS", "<a href='{$devices->ping}{$ip_info['dns2']} target='_blank'>{$ip_info['dns2']}</a>");
		}
		if($scope4) {
			$records[] = array("Secondary DNS", "<a href='{$devices->ping}{$ip_info['dns2']} target='_blank'>{$ip_info['dns2']}</a>");
		}
		echo $page_items->getDualRows($records);

		$records = array();
		if($scope3) {
			$records[] = array("Tertiary DNS", "<a href='{$devices->ping}{$ip_info['dns3']} target='_blank'>{$ip_info['dns3']}</a>");
		}
		if($scope4) {
			$records[] = array("Tertiary DNS", "<a href='{$devices->ping}{$ip_info['dns3']} target='_blank'>{$ip_info['dns3']}</a>");
		}
		echo $page_items->getDualRows($records);

		echo "<div class='row'>
			<div class='cell' style='font-size: 10px; font-weight: bold;'>
				ISP Information
			</div>
		</div>" . PHP_EOL;
		echo $page_items->getSimpleCell2("Name", $isp_info['name']);
		echo $page_items->getSimpleCell2("Phone Number", $isp_info['phone']);
		echo $page_items->getSimpleCell2("Contact", $isp_info['contact']);
		echo $page_items->getSimpleCell2("Hours", $isp_info['hours']);
		echo $page_items->getSimpleCell2("Account/PIN/Circuit/DSL #", $ip_info['isp_circuit']);
		?>
	</div>

	<?php echo $page_items->getFooter();?>
</div>