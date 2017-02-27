<?php
//ini_set ('display_errors', 'on');
$ptype = 'Update Oustanding Issue';
include ('header.php');
include ('vargen.php');

$link = ado_connect( $dsn );

$list = 'ticket,property,comments,updated_date,updated_by,assigned_to,active,affected_devices';
$fields = explode(',', $list);

$sql = "SELECT * FROM OustandingIssues WHERE (ticket = '".$ticket."')";
//echo $sql;
$res = $link->Execute($sql);

	for ($i = 0; $i < count($fields); $i++){
		$$fields[$i] = $res->Fields[$fields[$i]]->Value;
	}

ado_free_result( $res );
ado_close( $link );

?>

	<form method='POST' name='formname' action='uresults.php'>
	<input type='hidden' name='Updated_date' value='<?php echo date('m/d/Y H:i');?>'>
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
			<!--<input type='text' name='Ticket' value='<?php echo $ticket;?>' class='formfield'>-->
			<input type='hidden' name='ticket' value='<?php echo $ticket;?>'>
			<?php echo $ticket;?>
		</td>
	</tr>
	<tr>
		<td>
			<b>
				Property Name:
			</b>
		</td>
		<td>
			<?php
			include ("propname.php");
			echo $name." ".$htype;
			?>
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
			<textarea name='Comments' rows='10' cols='60' wrap='PHYSICAL' class='formfield'><?php echo $comments;?></textarea>
		</td>
	</tr>
	<tr>
		<td>
			<b>
				Affected Device:
			</b>
		</td>
		<td>
			<?php
				if ($affected_devices == 1){
					echo "ISP, Server-Gateway, or Switch";
				}elseif($affected_devices == 2){
					echo "WAPs";
				}
			?>
		</td>
	</tr>
	<tr>
		<td>
			<b>
				Updated by:
			</b>
		</td>
		<td>

			<select name='Updated_by' class='formfield'>
				<option value='<?php echo $updated_by;?>' selected><?php echo $updated_by;?></option>
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
				<option value='<?php echo $assigned_to;?>' selected><?php echo $assigned_to;?></option>
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
		<td>
			<b>
				Issue Active:
			</b>
		</td>
		<td>
			<select name='active' class='formfield'>
				<option value='<?php echo $active;?>' selected><?php echo $active;?></option>
				<option value='True'>True</option>
				<option value='False'>False</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align='right'>
			<input type='submit' value='Update' class='formbutton'>
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