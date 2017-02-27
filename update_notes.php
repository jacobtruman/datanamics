<?php

require_once("config.php");

$title = 'Property Up-To-Date Notes';
$prop = $_REQUEST['prop'];
$property = new Property($prop);
$page_items = new PageItems($property);
$prop_info = $property->getPropertyInfo();

$level = 2;

echo $page_items->getHeader($title);

?>
<div id="content">
	<?php echo $page_items->getContactHeaderDiv($title, $level);?>

	<div style='margin-top: 10px;'>
		<form method='post' name='formname' action='OLD/forms/res.php'>
			<input type='hidden' name='table' value='prop'>
			<input type='hidden' name='prop' value='<?php echo $prop;?>'>
			<input type='hidden' name='mdate' value='<?php echo date('m/d/Y H:i');?>'>
			<div style='margin-top: 10px; height: 30px;'><?php echo $prop;?> Up-To-Date Notes</div>
			<div><textarea name='up2dnotes' rows='10' cols='60' wrap='physical' class='formfield'><?php echo $prop_info['up2dnotes'];?></textarea></div>
			<input type='submit' value='Update' class='formbutton'>
			<input type='reset' value='Reset' class='formbutton'>
		</form>
	</div>
	<div style='margin-top: 20px;'><?php echo nl2br($prop_info['up2dnotes']);?></div>

	<?php echo $page_items->getFooter();?>
</div>