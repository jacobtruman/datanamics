<?php
require_once("config.php");
$title = 'Notes Update';
$prop = $_REQUEST['prop'];
$property = new Property($prop);
$page_items = new PageItems($property);

$prop_info = $property->getPropertyInfo();

$field_groups = array(
	array(
		"records"=>array(
			array("type"=>"textarea", "title"=>"Notes", "field"=>"notes"),
			array("type"=>"textarea", "title"=>"2nd Level Notes", "field"=>"notes_level2"),
			array("type"=>"textarea", "title"=>"Map Notes", "field"=>"map_notes"),
			array("type"=>"textarea", "title"=>"2nd Level Map Notes", "field"=>"map_notes_level2")
		)
	)
);

echo $page_items->getHeader($title);

?>
<div id="content">
	<?php echo $page_items->getHeaderDiv($title);?>

	<form method='POST' name='formname' action='propentry/update/res.php'>
		<input type='hidden' name='table' value='prop'>
		<input type='hidden' name='log' value='nulog'>
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
						{$prop_info['nulog']}
					</div>
				</div>
			</div>" . PHP_EOL;
	}
	?>

	<?php echo $page_items->getFooter();?>
</div>
