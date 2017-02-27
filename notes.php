<?php
require_once("config.php");
$title = 'Notes Page';
$prop = $_REQUEST['prop'];
$property = new Property($prop);
$page_items = new PageItems($property);

echo $page_items->getHeader($title);

?>
<div id="content">
	<?php echo $page_items->getContactHeaderDiv($title, $level);?>

	<div class='table' style='width: 100%; margin-top: 50px;'>
		<div class='row' style='height: 50px;'>
			<div class='cell' style='font-family: verdana, sans-serif; font-size: 13pt; color: #858585; font-weight: bold; text-decoration: underline;'>
				Notes
			</div>
		</div>
		<div class='row'>
			<div class='cell' style='font-size: 10pt;'>
				<?php
				echo $property->getNotes("notes") . PHP_EOL;
				if($level == '2') {
					echo $property->getNotes("notes_level2") . "<br />" . PHP_EOL;
				}
				?>
			</div>
		</div>

		<div class='row' style='height: 30px;'>
		</div>

		<div class='row' style='height: 50px;'>
			<div class='cell' style='font-family: verdana, sans-serif; font-size: 13pt; color: #858585; font-weight: bold; text-decoration: underline;'>
				Special Notes
			</div>
		</div>
		<div class='row'>
			<div class='cell' style='font-size: 10pt;'>
				<?php
				echo $property->getNotes("map_notes") . PHP_EOL;
				if($level == '2') {
					echo $property->getNotes("map_notes_level2") . PHP_EOL;
				}
				?>
			</div>
		</div>
	</div>

	<?php echo $page_items->getFooter();?>
</div>