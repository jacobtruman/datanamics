<?php
require_once("config.php");
$title = 'Devices Update';
$prop = $_REQUEST['prop'];
$property = new Property($prop);
$devices = new Devices();
$page_items = new PageItems($property);

$property_devices = $devices->getDevices($prop);

$bgcolor = "#C0C0C0";

$options = array(
	"type"=>$devices->getTypes(),
	"connection_type"=>$devices->getConnectionTypes()
);



$device_fields = array(
	array("type"=>"text", "title"=>"Name", "field"=>"name"),
	array("type"=>"dropdown", "title"=>"Device Type", "field"=>"type", "options"=>$options['type']),
	array("type"=>"text", "title"=>"Model", "field"=>"model"),
	array("type"=>"text", "title"=>"Version", "field"=>"version"),
	array("type"=>"text", "title"=>"ID", "field"=>"id"),
	array("type"=>"text", "title"=>"Serial", "field"=>"serial"),
	array("type"=>"date", "title"=>"Install Date", "field"=>"inst_date"),
	array("type"=>"date", "title"=>"Modified Date", "field"=>"mod_date"),
	array("type"=>"text", "title"=>"Connects To", "field"=>"con_to"),
	array("type"=>"text", "title"=>"Connection Port", "field"=>"con_port"),
	array("type"=>"dropdown", "title"=>"Connection Type", "field"=>"connection_type", "options"=>$options['connection_type']),
	array("type"=>"text", "title"=>"Username", "field"=>"username"),
	array("type"=>"text", "title"=>"Password", "field"=>"password"),
	array("type"=>"text", "title"=>"Port", "field"=>"port"),
	array("type"=>"yesno", "title"=>"Supported", "field"=>"supported"),
	array("type"=>"yesno", "title"=>"Status", "field"=>"status", array("Up", "Down")),
	array("type"=>"text", "title"=>"Notes", "field"=>"notes"),
	array("type"=>"text", "title"=>"Image Map Coordinates", "field"=>"coords")
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
		foreach($property_devices as $device) {
			foreach($device as $field => $value) {
				echo "<input type='hidden' name='OLD{$field}' value='{$value}'>" . PHP_EOL;
			}
		}
		?>

		<div class='table' style='width: 100%; margin-top: 50px; padding-bottom: 10px;'>
			<?php
			$records = array(array("type"=>"label", "title"=>"Property Code", "field"=>"prop", "value"=>$prop));
			echo $page_items->getSimpleFieldRows($records);

			foreach($property_devices as $key=>$device) {
				foreach($device_fields as $fields) {
					$records = array();
					if(isset($device[$fields["field"]])) {
						$fields["value"] = $device[$fields["field"]];
					}
					$records[] = $fields;
					if($key % 2 === 0) {
						echo $page_items->getSimpleFieldRows($records, $bgcolor);
					} else {
						echo $page_items->getSimpleFieldRows($records);
					}
				}
			}
			?>
		</div>

	</form>

	<?php echo $page_items->getFooter();?>
</div>