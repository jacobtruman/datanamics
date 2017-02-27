<?php
require_once("config.php");
$title = 'Property Code Update';
$prop = $_REQUEST['prop'];
$property = new Property($prop);
$page_items = new PageItems($property);

echo $page_items->getHeader($title);

?>
<div id="content">
	<?php echo $page_items->getHeaderDiv($title);?>

	<form method='POST' name='formname' action='propentry/update/res.php'>
		<input type='hidden' name='oldprop' value='<?php echo $prop;?>'>

		<div class='table' style='width: 100%; margin-top: 50px; padding-bottom: 10px;'>
			<?php
			$records = array(
				array("type"=>"label", "title"=>"Property Code", "value"=>$prop),
				array("title"=>"New Property Code", "field"=>"prop", "value"=>$prop)
			);

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

	</form>
	<?php echo $page_items->getFooter();?>
</div>



<TABLE border='0' cellpadding='2' cellspacing='2' align='center' width='20%'>
	<TR>
		<TD ALIGN='center' colspan='2' class='alldotted'>
			<b>
				<?php echo $prop;?>
			</b>
		</TD>
	</TR>
	<?php
		if(!empty($error)){
			echo "<TR>
				<TD ALIGN='center' colspan='2'>
					<b>
						<font color='red'>
							".$error."
						</font>
					</b>
				</TD>
			</TR>";
		}
	?>
	<TR>
		<TD ALIGN='right' width='50%'>
			<b>
				New Prop Code
			</b>
		</TD>
		<TD>
			<INPUT NAME='prop' SIZE='10' VALUE='<?php echo $prop;?>' CLASS='formfield' style='text-transform: uppercase;'>
		</TD>
	</TR>
</TABLE>