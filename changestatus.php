<?php
require_once("config.php");
$prop = $_REQUEST['prop'];
$property = new Property($prop);
$bgColor = "FFFFFF";
echo "<body bgcolor='#{$bgColor}'>" . PHP_EOL;
if($property->isActive()) {
	if(isset($_REQUEST['toggle'])) {
		$property->toggleStatus();
	}
	echo "<form name='overform' method='POST' action='{$_SERVER["PHP_SELF"]}' target='updown'>
		<input type='hidden' name='prop' value='{$property->getPropCode()}'>
		<input type='hidden' name='toggle' value='true'>
		<input type='hidden' name='bgColor' value='{$bgColor}'>
		<input type='hidden' name='mail' value='send'>
		<input type='image' src='images/{$property->getUpDownImage()}'>
	</form>" . PHP_EOL;
} else {
	echo "<img src='images/{$property->getUpDownImage()}' border='0'>" . PHP_EOL;
}
echo "</body>" . PHP_EOL;