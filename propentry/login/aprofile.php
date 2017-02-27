<?php
$root = 'D:/inetpub/support';
include ($root."/support_web/propentry/login/session.php");

if (!empty($_POST)){

	$postkeys = array_keys($_POST);
	for ($i = 0; $i < count($_POST); $i++){
		$$postkeys[$i] = $_POST[$postkeys[$i]];
	}

}else if (!empty($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);

	$varkeys = array_keys($vars);
	for ($i = 0; $i < count($varkeys); $i++){
		$$varkeys[$i] = $vars[$varkeys[$i]];
	}
}

$root = 'D:/inetpub/support';
include_once($root.'/support_web/components/dbcon.php');
$db_name = "propinfo";
$tbl_name = "admin";

$sql = "SELECT * FROM [admin] WHERE a_lgn = '".$a_lgn."'";
$link = ado_connect( $dsn , $dtype);
$res = $link->Execute($sql);

if (!isset($res)){
}else{

	$numFields = ado_num_fields($res);

	for ($i = 0; $i < $numFields; $i++){
		$fieldsArr[$i] = ado_field_name($res, $i);
	}

	while (!$res->EOF){
		for ($i = 0; $i < count($fieldsArr); $i++){
			$$fieldsArr[$i] = $res->Fields[$fieldsArr[$i]]->Value;
		}
		$res->MoveNext();
	}
}

ado_free_result( $res );
ado_close( $link );

?>
<HEAD>
	<Title>
		SupportWeb Admin Profile Change
	</Title>
	<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<BR>
<BR>
<BR>
<BR>

<form name='loginform' method='POST' action='/support_web/propentry/login/uaprofile.php'>
<input type='hidden' name='a_lgn' value='<?php echo $a_lgn;?>' class='formfield'>
	<table width='30%' border='0' cellpadding='3' cellspacing='1' class='alldotted' align='center'>
		<tr>
			<td colspan='2' align='center'>
				<img src='/support_web/logos/Datanamics.png' border='0'>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<b>
					<?php echo $a_lgn;?>'s Profile
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
					Permissions:
				</b>
			</td>
			<td>
				<select class='formfield' name='a_perm'>
					<option value='<?php echo $a_perm;?>' selected><?php echo $a_perm;?></option>
					<option value='admin'>Admin</option>
					<option value='mgr'>Managerr</option>
					<option value='3rd'>3rd Level</option>
					<option value='2nd'>2nd Level</option>				
				</select>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					Last Name:
				</b>
			</td>
			<td>
				<input type='text' name='a_lname' value='<?php echo $a_lname;?>' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					First Name:
				</b>
			</td>
			<td>
				<input type='text' name='a_fname' value='<?php echo $a_fname;?>' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					E-mail Address:
				</b>
			</td>
			<td>
				<input type='text' name='a_email' value='<?php echo $a_email;?>' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					Status:
				</b>
			</td>
			<td>
				<select class='formfield' name='a_status'>
					<option value='<?php echo $a_status;?>' selected><?php echo $a_status;?></option>
					<option value='Active'>Active</option>
					<option value='Inactive'>Inactive</option>
				</select>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<b>
					New Password:
				</b>
			</td>
			<td>
				<input type='password' name='n_pswd' class='formfield'>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<b>
					Confirm New Password:
				</b>
			</td>
			<td>
				<input type='password' name='c_pswd' class='formfield'>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				* To leave password unchanged, leave blank.
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