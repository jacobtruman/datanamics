<?php
$ptype = 'Support Web Update Request';
include('header.php');
?>

	<form method='POST' name='formname' action='results.php'>
	<input type='hidden' name='Updated_date' value='<?php echo date('m/d/Y H:i');?>'>
<blockquote>
<table border='2' cellpadding='2' cellspacing='2' align='center' width='40%' valign='center'>
	<tr>
		<td align='center' colspan='2'>
			<b>
				Support Web Update Requests
			</b>
		</td>
	</tr>
	<tr>
		<td>
			<b>
				Requested by:
			</b>
		</td>
		<td>
			<input type='text' name='Name' class='formfield'>
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
				<option selected></option>
				<?php include('props.php');?>
			</select>
			<div id='myLayer' class='hidden'>
				<select name='pname' class='formfield'>
					<option selected></option>
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
		<td>
			<b>
				Problem Area:
			</b>
		</td>
		<td>
			<select name='affected_devices' class='formfield'>
				<option selected></option>
				<option value='IP Info'>IP Info</option>
				<option value='Overview'>Overview</option>
				<option value='Notes'>Notes</option>
				<option value='Support Map'>Support Map</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align='center'colspan='2'>
			<b>
				Problem:
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
				Send to:
			</b>
		</td>
		<td>
			<select name='sendto' class='formfield'>
				<option selected></option>
				<option value='tsonoda'>Terri Sonoda</option>
				<option value='jharold'>John Harold</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align='right'>
			<input type='submit' value='Send' class='formbutton'>
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