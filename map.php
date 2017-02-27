<?php
require_once("config.php");

$title = "Network Map";

if(isset($_REQUEST['prop'])) {
	$prop = $_REQUEST['prop'];
	$property = new Property($prop);
	$page_items = new PageItems($property);
	$property_info = $property->getPropertyInfo();
	$property_type = $property->getPropertyType();
	$gateway_type = $property->getGatewayType();
	$map = new NetworkMap($prop);

	$notes = array();

	if(strstr($property_info['billing_method'], 'Hampton CAS')){
		$notes[] = "<div class='row'><div class='cell' style='BACKGROUND-COLOR: #000000'><span style='font-weight: bold; color: #FF0000;'>NOTE:</span> <span style='color: #FFFFFF;'>The Number to call when the Hampton Inn Central Authentication Server is down is <span style='font-weight: bold;'>901-374-6461<!--800-847-8483 opt 8--></span></span></div></div>";
	}else if(strstr($property_info['billing_method'], 'Hilton CAS')){
		$notes[] = "<div class='row'><div class='cell' style='BACKGROUND-COLOR: #000000;'><span style='font-weight: bold; color: #FF0000;'>NOTE:</span> <span> style='color: #FFFFFF;'>The Number to call when the Hilton Inn Central Authentication Server is down is <span style='font-weight: bold;'>901-374-6461<!--800-847-8483 opt 8--></span></span></div></div>";
	}else if (($property_type == 'Conrad') && ($property_info['level2'] == "Yes")){
		$notes[] = "<div class='row'><div class='cell' style='color: #FF0000; font-size: 12pt;'>Do not change WAP configs</div></div>";
	}
	if(strstr($gateway_type, 'Solution IP')){
		$notes[] = "<div class='row'><div class='cell' style='color: #FF0000;'><span style='font-weight: bold;'>NOTE:</span> If you need to contact SolutionInc, the number is <span style='font-weight: bold;'>1-866-801-4861</span></div></div>";
	}
	if ($property_info['uptodate'] == 'No'){
		$notes[] = "<div class='row'><div class='cell' style='color: #008000; font-size: 11pt; font-weight: bold;'>This network map has yet to be updated; check the documentation if needed.</div></div>";
	}
	if ($property_info['installer'] == 'CNR'){
		$notes[] = "<div class='row'><div class='cell' style='font-size: 11pt; font-weight: bold;'>The Password at this Property is NOT set to our Standard - <span style='color: #FF0000;'>DO NOT CHANGE IT!</span></div></div>";
	}
	if (isset($property_info['map_notes'])){
		$note = nl2br($property_info['map_notes']);
		$notes[] = "<div class='row'><div class='cell' style='color: #FF0000; font-size: 12pt;'>{$note}</div></div>";
	}
	if ((isset($property_info['map_notes_level2'])) && ($property_info['level2'] == "Yes")){
		$note = nl2br($property_info['map_notes_level2']);
		$notes[] = "<div class='row'><div class='cell' style='color: #FF0000; font-size: 12pt;'>{$note}</div></div>";
	}
	if ($property_info['poc'] == 'Yes'){
		$notes[] = "<div class='row'><div class='cell' style='color: #800080; font-size: 16pt'><br />Calls from this property need to be entered in <a href='http://10.0.12.28/arsys/shared/login.jsp' target='_blank'>Remedy</a>, not Service Desk</div></div>";
	}
	if ($property_info['bypassed'] == 'Yes'){
		$notes[] = "<div class='row'><div class='cell' style='color: #008000; font-size: 16pt'><br />Gateway at this property is currently bypassed</div></div>";
	}
	$notes_string = implode(PHP_EOL, $notes);

	if(isset($_REQUEST['level']) && $_REQUEST['level'] == 2) {
		$level = $_REQUEST['level'];
	} else {
		$level = 1;
	}
} else {
	exit("prop not provided");
}

echo $page_items->getHeader($title);
?>

<div id="content">
	<?php
	echo $page_items->getContactHeaderDiv($title, $level);

	if(!empty($notes_string)) {
		echo "<div style='display: table-row; height: 30px;'>
		</div>

		<div class='table' style='width: 100%;'>
			{$notes_string}
		</div>";
	}
	?>

	<div style='display: table-row; height: 30px;'>
	</div>

	<div class='table' style='width: 100%;'>
		<div class='row'>
			<div class='cell'>
				<?php echo $map->getNetworkMap($level);?>
			</div>
		</div>
	</div>

	<?php echo $page_items->getFooter();?>
</div>
