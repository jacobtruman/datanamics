<?php
$ptype = 'Add New Oustanding Issue';
include ('header.php');
?>

	<form method='POST' name='formname' action='results.php'>
	<input type='hidden' name='Updated_date' value='<?php echo date('m/d/Y H:i');?>'>
	<input type='hidden' name='Active' value='True'>
<blockquote>
<table border='2' cellpadding='2' cellspacing='2' align='center' width='40%' valign='center'>
	<tr>
		<td align='center' colspan='2'>
			<b>
				2nd and 3rd Level Outstanding Issues
			</b>
		</td>
	</tr>
	<tr>
		<td>
			<b>
				Ticket #:
			</b>
		</td>
		<td>
			<input type='text' name='Ticket' class='formfield'>
		</td>
	</tr>
	<tr>
		<td>
			<b>
				Property Name:
			</b>
		</td>
		<td>
			<select name='property' class='formfield' onchange="populate()">
				<?php include ('props.php');?>
			</select>
			<div id='myLayer' class='hidden'>
				<select name='pname' class='formfield'>
					<?php
						for ($i = 0; $i < count($pnames); $i++){
							echo "<option value='".$pnames[$i]."'></option>\n";
						}
					?>
				</select>
			</div>
		</td>
	</tr>
	<tr>
		<td align='center'colspan='2'>
			<b>
				Comments:
			</b>
		</td>
	</tr>

	<tr>
		<td align='center' colspan='2'>
			<textarea name='Comments' rows='10' cols='60' wrap='PHYSICAL' class='formfield'></textarea>
		</td>
	</tr>
	<tr>
		<td>
			<b>
				Affected Device:
			</b>
		</td>
		<td>
			<select name='affected_devices' class='formfield'>
				<option value='1'>ISP, Server-Gateway, or Switch</option>
				<option value='2'>WAPs</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			<b>
				Created by:
			</b>
		</td>
		<td>
			<select name='Updated_by' class='formfield'>
				<option></option>
				<?php
					include ("userList.php");
					for($i = 0; $i < count($names); $i++){
						echo "<option value='".$names[$i]."'>".$names[$i]."</option>\n";
					}
				?>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			<b>
				Ticket Assigned to:
			</b>
		</td>
		<td>
			<select name='Assigned_to' class='formfield'>
				<option></option>
				<?php
					for($i = 0; $i < count($names); $i++){
						echo "<option value='".$names[$i]."'>".$names[$i]."</option>\n";
					}
				?>
			</select>
		</td>
	</tr>
	<tr>
		<td align='right'>
			<input type='submit' value='Add' class='formbutton'>
		</td>
		<td>
			<input type='reset' value='Reset' class='formbutton'>
		</td>
	</tr>
</table>
</form>
</blockquote>
<hr>
</body>