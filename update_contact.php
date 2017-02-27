<?php
require_once("config.php");
$title = 'Contact Info Update';
$prop = $_REQUEST['prop'];
$property = new Property($prop);
$page_items = new PageItems($property);

$contact_info = $property->getContactInfo();

$bgcolor = "#C0C0C0";

$field_groups = array(
	array(
		"records"=>array(
			array("type"=>"label", "title"=>"Property Code", "field"=>"prop")
		)
	),
	array(
		"bgcolor"=>$bgcolor,
		"records"=>array(
			array("type"=>"text", "title"=>"Name", "field"=>"name"),
			array("type"=>"text", "title"=>"Email", "field"=>"email"),
			array("type"=>"text", "title"=>"Contact Phone", "field"=>"phone")
		)
	),
	array(
		"records"=>array(
			array("type"=>"text", "title"=>"Front Desk Phone", "field"=>"fphone"),
			array("type"=>"text", "title"=>"Cell", "field"=>"cell"),
			array("type"=>"text", "title"=>"Fax", "field"=>"fax"),
			array("type"=>"text", "title"=>"Street Address", "field"=>"staddr"),
			array("type"=>"text", "title"=>"City, State Zip", "field"=>"csz")
		)
	),
	array(
		"bgcolor"=>$bgcolor,
		"records"=>array(
			array("type"=>"text", "title"=>"Name 2", "field"=>"name2"),
			array("type"=>"text", "title"=>"Email 2", "field"=>"email2"),
			array("type"=>"text", "title"=>"Phone 2", "field"=>"phone2"),
			array("type"=>"text", "title"=>"Cell 2", "field"=>"cell2")
		)
	),
	array(
		"records"=>array(
			array("type"=>"text", "title"=>"Latitude", "field"=>"lat"),
			array("type"=>"text", "title"=>"Longitude", "field"=>"lon"),
			array("type"=>"textarea", "title"=>"Notes", "field"=>"notes")
		)
	)
);

echo $page_items->getHeader($title);

?>
<div id="content">
	<?php echo $page_items->getHeaderDiv($title);?>

	<form method='POST' name='formname' action='propentry/update/res.php'>
		<input type='hidden' name='table' value='contact'>
		<input type='hidden' name='log' value='ulog'>
		<input type='hidden' name='prop' value='<?php echo $prop;?>'>
		<input type='hidden' name='last_updated' value='<?php echo date('Y/m/d/ H:i:s');?>'>

		<input type='hidden' name='proppw' value='<?php echo $proppw;?>'>
		<?php
		foreach($contact_info as $field=>$value) {
			echo "<input type='hidden' name='OLD{$field}' value='{$value}'>" . PHP_EOL;
		}
		?>

		<div class='table' style='width: 100%; margin-top: 50px; padding-bottom: 10px;'>
			<?php
			foreach($field_groups as $field_group) {
				$records = array();
				foreach($field_group['records'] as $record) {
					if(isset($contact_info[$record["field"]])) {
						$record["value"] = $contact_info[$record["field"]];
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
						{$contact_info['ulog']}
					</div>
				</div>
			</div>" . PHP_EOL;
	}
	?>
	<?php echo $page_items->getFooter();?>
</div>