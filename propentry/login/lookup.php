<?php
$root = 'D:/inetpub/support';
include ($root."/support_web/propentry/login/session.php");
?>
<HEAD>
	<Title>
		SupportWeb Profile Lookup
	</Title>
	<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<BR>
<form name='lookupform' method='POST' action='<?php echo $_SERVER['PHP_SELF'];?>'>
<input type='hidden' name='ptype' value='lookup'>
	<table width='30%' border='0' cellpadding='3' cellspacing='1' class='alldotted' align='center'>
		<tr>
			<td colspan='2' align='center'>
				<img src='/support_web/logos/Datanamics.png' border='0'>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<b>
					Search for a Profile
				</b>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<hr>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					Username:
				</b>
			</td>
			<td>
				<input type='text' name='a_lgn' value='<?php echo $_POST['a_lgn'];?>' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					Last Name:
				</b>
			</td>
			<td>
				<input type='text' name='a_lname' value='<?php echo $_POST['a_lname'];?>' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					First Name:
				</b>
			</td>
			<td>
				<input type='text' name='a_fname' value='<?php echo $_POST['a_fname'];?>' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					E-mail Address:
				</b>
			</td>
			<td>
				<input type='text' name='a_email' value='<?php echo $_POST['a_email'];?>' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					Permissions:
				</b>
			</td>
			<td>
				<select class='formfield' name='a_perm'>
					<?php
						if (!empty($_POST['a_perm'])){
							echo "<option value='".$_POST['a_perm']."' selected>".$_POST['a_perm']."</option>\n";
							echo "<option></option>\n";
						}else{
							echo "<option></option>\n";
						}
					?>
					<option value='staff'>staff</option>
					<option value='admin'>admin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<input type='submit' value='Search' class='formbutton'>
			</td>
			<td>
				<input type='reset' value='Reset' class='formbutton'>
			</td>
		</tr>
	</table>
</form>

<?php

if($_POST['ptype'] == 'lookup'){

$root = 'D:/inetpub/support';
include_once($root.'/support_web/components/dbcon.php');
$db_name = "propinfo";
$tbl_name = "admin";

$postkeys = array_keys($_POST);

for ($i = 0; $i < count($_POST); $i++){
//	if ($_POST[$postkeys[$i]] != $_SESSION[$postkeys[$i]]){
		if (($postkeys[$i] != 'ptype') && (!empty($_POST[$postkeys[$i]]))){
			$query .= "(".$postkeys[$i]." LIKE '%".$_POST[$postkeys[$i]]."%') AND ";
		}
//	}
}
$query = substr($query, 0, strlen($query) - 4);
//echo $query;

$sql = "SELECT a_lgn, a_fname, a_lname FROM [admin] WHERE ".$query;
$link = ado_connect( $dsn , $dtype);
$res = $link->Execute($sql);

if (!isset($res)){
}else{
$numFields = ado_num_fields($res);
$offset = $numFields + 1;
	echo "<table width='50%' border='0' cellpadding='3' cellspacing='1' class='alldotted' align='center'>
		<tr>
			<td colspan='".$offset."' align='center'>
				<b>
					Results
				</b>
			</td>
		</tr>
		<tr>
			<td colspan='".$offset."' align='center'>
				<hr>
			</td>
		</tr>
		<tr>
			<td align='center' width='". 100 / $offset."%' class='dotted'>
				<b>
					Update
				</b>
			</td>\n";
for ($i = 0; $i < $numFields; $i++){
	$fieldsArr[$i] = ado_field_name($res, $i);
	echo "<td align='center' width='". 100 / $offset."%' class='dotted'>
			<b>
				".$fieldsArr[$i]."
			</b>
		</td>\n";
}
	echo "</tr>\n";
/*
echo "<pre>";
print_r($fieldsArr);
echo "</pre>";
*/
	while (!$res->EOF){
		echo "<form name='none' method='POST' action='aprofile.php' target='_blank'>\n";
		echo "<tr>
				<td align='center'>
					<input type='Submit' value='Update' class='textbutton' style='color:#0000FF;'>
				</td>\n";
		for ($i = 0; $i < count($fieldsArr); $i++){
			$$fieldsArr[$i] = $res->Fields[$fieldsArr[$i]]->Value;

			echo "<td align='center'>
						".$$fieldsArr[$i]."
					</td>";
	}
	echo "</tr>";
	echo "<input type='hidden' name='a_lgn' value='".$a_lgn."'>\n";
	echo "</form>\n";

	$res->MoveNext();
	}

ado_free_result( $res );
ado_close( $link );
}
echo "</table>";
}
?>