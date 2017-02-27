<?php
require_once("config.php");
$title = 'Property Info Update';
$prop = $_REQUEST['prop'];
$property = new Property($prop);
$page_items = new PageItems($property);

$prop_info = $property->getPropertyInfo();
$gateways = $property->getGateways();
$router = $property->getRouter();

$label_fields = array(
	"prop"=>"Property Code",
	"created_by"=>"Property Created By",
	"last_updated"=>"Date Last Modified",
	"name"=>"Name",
	"fold"=>"Property Info Folder (relative to Z:/)"
);

$text_fields = array(
	"dbname"=>"Database Name (Prop type and Name, no spaces)"
);

$yesno_fields = array(
	"bypassed"=>"Gateway Bypassed",
	"level1"=>"Level 1 Support",
	"level2"=>"Level 2 Support",
	"level3"=>"Level 3 Support",
	"uptodate"=>"Up to Date",
	"active"=>"Property Active",
	"pnagios"=>"Property in Nagios",
	"poc"=>"Hilton Transitioned Property"
);

$dropdown_fields = array(
	"redir"=>"Redirect through ?",
	"installer"=>"Installer"
);

$date_fields = array(
	"disable_date"=>"Disable Date"
);

$options = array(
	"redir"=>array(
		"Router"=>"Router",
		"Gateway"=>"Gateway"
	),
	"installer"=>array(
		"Datanamics"=>"Datanamics",
		"Netopia"=>"Netopia",
		"CNR"=>"CNR",
		"AIC"=>"AIC",
		"VDCS"=>"VDCS"
	)
);

echo $page_items->getHeader($title);

?>
<div id="content">
	<?php echo $page_items->getHeaderDiv($title);?>

	<form method='POST' name='formname' action='propentry/update/res.php'>
		<input type='hidden' name='table' value='prop'>
		<input type='hidden' name='log' value='ulog'>
		<input type='hidden' name='prop' value='<?php echo $prop; ?>'>
		<input type='hidden' name='mdate' value='<?php echo date('Y/m/d H:i:s'); ?>'>
		<input type='hidden' name='proppw' value='<?php echo $proppw; ?>'>
		<input type='hidden' name='created_by' value='<?php echo $created_by; ?>'>
		<?php
		foreach($prop_info as $key => $value) {
			echo "<input type='hidden' name='OLD{$key}' value='{$value}'>" . PHP_EOL;
		}
		?>

		<div class='table' style='width: 100%; margin-top: 50px; padding-bottom: 10px;'>
			<?php
			$records = array();
			foreach($label_fields as $field=>$title) {
				$records[] = array($field, $prop_info[$field]);
			}
			$records[] = array("title"=>"Property Type", $property->getPropertyType());

			$records = array();
			foreach($text_fields as $field=>$title) {
				$records[] = array("title"=>$title, "field"=>$field, "value"=>$prop_info[$field]);
			}

			$i = 0;
			foreach($gateways as $gateway) {
				$i++;
				$records[] = array("title"=>"Gateway {$i} Address", "field"=>"gateway_{$i}_ip", "value"=>$gateway["ip"]);
				$records[] = array("title"=>"Gateway {$i} Username", "field"=>"gateway_{$i}_username", "value"=>$gateway["username"]);
				$records[] = array("title"=>"Gateway {$i} Password", "field"=>"gateway_{$i}_password", "value"=>$gateway["password"]);
			}

			$records[] = array("title"=>"Router Supported", "field"=>"router_supported", "value"=>$router["supported"]);

			foreach($yesno_fields as $field=>$title) {
				$records[] = array("title"=>$title, "field"=>$field, "value"=>$prop_info[$field]);
			}
			$records[] = array("title"=>"Up/Down", "field"=>"status", "value"=>$prop_info["status"], "options"=>array("Up", "Down"));

			foreach($dropdown_fields as $field=>$title) {
				$records[] = array("title"=>$title, "field"=>$field, "value"=>$prop_info[$field], "options"=>$options[$field]);
			}

			foreach($date_fields as $field=>$title) {
				$records[] = array("title"=>$title, "field"=>$field, "value"=>$prop_info[$field]);
			}

			echo $page_items->getSimpleFieldRows($records);
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
		<div id='date_div' style="visibility: hidden; position: absolute; background-color: #FFFFFF; layer-background-color: #FFFFFF;"></div>
	</form>

	<?php echo $page_items->getFooter(); ?>
</div>