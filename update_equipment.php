<?php
require_once("config.php");
$title = 'Equipment Summary Update';
$prop = $_REQUEST['prop'];
$property = new Property($prop);
$page_items = new PageItems($property);

$equipment_info = $property->getEquipmentInfo();

$bgcolor = "#C0C0C0";

$options = array(
	"rtrtype"=>array(
		"na"=>"na",
		"1700"=>"1700",
		"1841"=>"1841",
		"2600"=>"2600",
		"3700"=>"3700"
	),
	"interface"=>array(
		"web"=>"web",
		"telnet"=>"telnet"
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
			array("type"=>"text", "title"=>"IP Scope", "field"=>"ipscope"),
			array("type"=>"text", "title"=>"IP Scope Beginning", "field"=>"scopeb"),
			array("type"=>"dropdown", "title"=>"Router Type", "field"=>"rtrtype", "options"=>$options['rtrtype'])
		)
	),
	array(
		"records"=>array(
			array("type"=>"text", "title"=>"Number of Cisco Switches", "field"=>"ncsw"),
			array("type"=>"text", "title"=>"Cisco Switches Redir Port Beginning", "field"=>"ncswbport"),
		)
	),
	array(
		"bgcolor"=>$bgcolor,
		"records"=>array(
			array("type"=>"text", "title"=>"Number of Paradyne Switches", "field"=>"npsw"),
			array("type"=>"text", "title"=>"Paradyne Switches Redir Port Beginning", "field"=>"npswbport"),
			array("type"=>"dropdown", "title"=>"Paradyne Switches Interface", "field"=>"npswint", "options"=>$options['interface'])
		)
	),
	array(
		"records"=>array(
			array("type"=>"text", "title"=>"Number of Zyxel Switches", "field"=>"nzsw"),
			array("type"=>"text", "title"=>"Zyxel Switches Redir Port Beginning", "field"=>"nzswbport"),
			array("type"=>"dropdown", "title"=>"Zyxel Switches Interface", "field"=>"nzswint", "options"=>$options['interface'])
		)
	),
	array(
		"bgcolor"=>$bgcolor,
		"records"=>array(
			array("type"=>"text", "title"=>"Number of Cisco 1100 WAPs", "field"=>"n1100"),
			array("type"=>"text", "title"=>"Cisco 1100 WAPs Redir Port Beginning", "field"=>"n1100bport"),
			array("type"=>"dropdown", "title"=>"Cisco 1100 WAPs Interface", "field"=>"n1100int", "options"=>$options['interface'])
		)
	),
	array(
		"records"=>array(
			array("type"=>"text", "title"=>"Number of Cisco 1200 WAPs", "field"=>"n1200"),
			array("type"=>"text", "title"=>"Cisco 1200 WAPs Redir Port Beginning", "field"=>"n1200bport"),
			array("type"=>"dropdown", "title"=>"Cisco 1200 WAPs Interface", "field"=>"n1200int", "options"=>$options['interface'])
		)
	),
	array(
		"bgcolor"=>$bgcolor,
		"records"=>array(
			array("type"=>"text", "title"=>"Number of Paradyne WAPs", "field"=>"npw"),
			array("type"=>"text", "title"=>"Paradyne WAPs Redir Port Beginning", "field"=>"npwbport"),
			array("type"=>"dropdown", "title"=>"Paradyne WAPs Interface", "field"=>"npwint", "options"=>$options['interface'])
		)
	),
	array(
		"records"=>array(
			array("type"=>"text", "title"=>"Number of Netopia WAPs", "field"=>"ntw"),
			array("type"=>"text", "title"=>"Netopia WAPs Redir Port Beginning", "field"=>"ntwbport"),
			array("type"=>"dropdown", "title"=>"Netopia WAPs Interface", "field"=>"ntint", "options"=>$options['interface'])
		)
	)
);

echo $page_items->getHeader($title);

?>
<div id="content">
	<?php echo $page_items->getHeaderDiv($title);?>

	<form method='POST' name='formname' action='propentry/update/res.php'>
		<input type='hidden' name='table' value='equipment'>
		<input type='hidden' name='log' value='ulog'>
		<input type='hidden' name='prop' value='<?php echo $prop;?>'>
		<input type='hidden' name='last_updated' value='<?php echo date('Y/m/d/ H:i:s');?>'>
		<?php
		foreach($equipment_info as $field=>$value) {
			echo "<input type='hidden' name='OLD{$field}' value='{$value}'>" . PHP_EOL;
		}
		?>

		<div class='table' style='width: 100%; margin-top: 50px; padding-bottom: 10px;'>
			<?php
			foreach($field_groups as $field_group) {
				$records = array();
				foreach($field_group['records'] as $record) {
					if(isset($equipment_info[$record["field"]])) {
						$record["value"] = $equipment_info[$record["field"]];
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
						{$equipment_info['ulog']}
					</div>
				</div>
			</div>" . PHP_EOL;
	}
	?>
	<?php echo $page_items->getFooter();?>
</div>