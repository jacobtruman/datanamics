<?php
$root = 'D:/inetpub/support';
//include ($root."/support_web/propentry/login/session.php");

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
$tbl_name = "contactlist";

$sql = "SELECT * FROM [contactlist] WHERE Name = '".$Name."'";
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
		SupportWeb Contact List Update
	</Title>
	<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<BR>
<BR>
<BR>
<BR>

<form name='loginform' method='POST' action='/support_web/propentry/contacts/uacontact.php'>
<input type='hidden' name='Name' value='<?php echo $Name;?>' class='formfield'>
	<table width='40%' border='0' cellpadding='3' cellspacing='1' class='alldotted' align='center'>
		<tr>
			<td colspan='2' align='center'>
				<img src='/support_web/logos/Datanamics.png' border='0'>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<font size='4'>
					<b>
						<?php echo $Name;?>
					</b>
				</font>
			</td> 
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<hr>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<b>
					Main Phone:
				</b>
			</td>
			<td>
				<input type='text' name='Mainphone' value='<?php echo $Mainphone;?>' class='formfield'>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<b>
					Extension:
				</b>
			</td>
			<td>
				<input type='text' name='Extension' value='<?php echo $Extension;?>' class='formfield'>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<b>
					Cell Phone:
				</b>
			</td>
			<td>
				<input type='text' name='Cellphone' value='<?php echo $Cellphone;?>' class='formfield'>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<b>
					Contact Type:
				</b>
			</td>
			<td>
				<select class='formfield' name='Contacttype'>
					<option value='<?php echo $Contacttype;?>' selected><?php echo $Contacttype;?></option>
					<option value='Employee'>Employee</option>
					<option value='Company'>Company</option>				
				</select>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<b>
					Contact Status:
				</b>
			</td>
			<td>
				<select class='formfield' name='ContactStatus'>
					<option value='<?php echo $ContactStatus;?>' selected><?php echo $ContactStatus;?></option>
					<option value='Active'>Active</option>
					<option value='Inactive'>Inactive</option>				
				</select>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<input type='submit' value='Update' class='formbutton'>
			</td>
			<td>
				<form name='deleteform' method='POST' action='/support_web/propentry/contacts/uacontact.php'>
				<input type='hidden' name='Name' value='<?php echo $Name;?>' class='formfield'>
				<input type='hidden' name='Delete' value='Yes' class='formfield'>
				<br>
				<input type='submit' value='Delete' class='formbutton'>
				</form>
			</td>
		</tr>
	</table>
</form>

