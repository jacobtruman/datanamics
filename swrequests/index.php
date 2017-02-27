<?php
$ptype = 'Support Web Update Request';
include('header.php');

/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/
$keys = array_keys($_POST);
$flag = 0;
if(empty($_POST)){
	$flag = 1;
}
for($i = 0; $i < count($_POST); $i++){
	if(empty($_POST[$keys[$i]])){
		$flag = 1;
	}
}
//echo $flag;
if($flag == 1){
echo "<form method='POST' name='formname' action='index.php'>
	<input type='hidden' name='Updated_date' value='".date('m/d/Y H:i')."'>
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
			<input type='text' value='".$_POST['name']."' name='name' class='formfield'>
			(Enter in your usernmame i.e. mstewart)
		</td>
	</tr>
	<tr>
		<td>
			<b>
				Property Name:
			</b>
		</td>
		<td>
			<select name='pname' class='formfield'>
				<option value='".$_POST['pname']."' selected>".$_POST['pname']."</option>\n";
				include('props.php');
			echo "</select>

		</td>
	</tr>
	<tr>
		<td>
			<b>
				Problem Area:
			</b>
		</td>
		<td>
			<select name='area' class='formfield'>
				<option value='".$_POST['area']."' selected>".$_POST['area']."</option>
				<option value='IP Info'>IP Info</option>
				<option value='Overview'>Overview</option>
				<option value='Notes'>Notes</option>
				<option value='Contact Info'>Contact Info</option>
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
			<textarea name='problem' rows='10' cols='60' wrap='PHYSICAL' class='formfield'>".$_POST['problem']."</textarea>
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
	<tr>
		<td align='center' colspan='2'>
			<b>
				<font color='red'>
					<b>
						ALL FIELDS ARE REQUIRED
					</b>
				</font>
			</b>
		</td>
	</tr>
</table>
</form>
</blockquote>
<hr>
</body>\n";
}else{
	include("mail.php");
	$_POST['name'] = '';
?>
<script>
setTimeout("window.close()", 1000);
</script>
<?php
}
?>