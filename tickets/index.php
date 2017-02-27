<HEAD>
	<Title>
		No Service Type Check
	</Title>
	<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<body OnLoad='document.theform.uname.focus();'>
<BR>
<BR>
<BR>
<BR>
<form name='theform' action='<?php echo $_SERVER['PHP_SELF'];?>' method='POST'>
	<table width='300' height='150' align='center' class='alldotted'>
		<tr>
			<td colspan='2' align='center'>
				<img src='/support_web/logos/Datanamics.png' border='0'>
			</td>
		</tr>
		<tr>
			<td align='center' colspan='2' class='dottedul'>
				<b>
					No Service Type Check
				</b>
			</td>
		</tr>
		<tr>
			<td align='right' width='50%'>
				<b>
					Username:
				</b>
			</td>
			<td>
				<input type='text' name='uname' value='<?php echo $_POST['uname'];?>' class='formfield' size='10'>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<input type='submit' value='Submit'>
			</td>
			<td>
				<input type='reset' value='Reset'>
			</td>
		</tr>
	</table>
</form>
<?php

$root = 'D:/inetpub/support';
include($root.'/support_web/components/dbcon.php');


$link = ado_connect( "AHD" , "SQL" );
if(!empty($_POST['uname'])){
	$sql = "SELECT ctct.c_first_name, ctct.c_last_name FROM ctct WHERE (ctct.c_userid = '".$_POST['uname']."')";
	//echo $sql;
	
	$res = $link->Execute($sql);
	if (!isset($res)){
	}else{
		while (!$res->EOF){
			$c_fname = $res->Fields['c_first_name']->Value;
			$c_lname = $res->Fields['c_last_name']->Value;
		$res->MoveNext();
		}
	}

	ado_free_result( $res );
	ado_close( $link );
}


$link = ado_connect( "AHD" , "SQL" );
if(!empty($_POST['uname'])){
	$sql = "SELECT count(ref_num) AS cntNum FROM call_req INNER JOIN ctct ON call_req.assignee = ctct.id WHERE (call_req.support_lev IS NULL)";
	//echo $sql;
	
	$res = $link->Execute($sql);
	if (!isset($res)){
	}else{
		while (!$res->EOF){
			$cntNum = $res->Fields['cntNum']->Value;
		$res->MoveNext();
		}
	}

	ado_free_result( $res );
	ado_close( $link );
}


$link = ado_connect( "AHD" , "SQL" );
if(!empty($_POST['uname'])){
	$sql = "SELECT ref_num, assignee FROM call_req INNER JOIN ctct ON call_req.assignee = ctct.id WHERE (ctct.c_userid = '".$_POST['uname']."') AND (call_req.support_lev IS NULL) ORDER BY call_req.ref_num";
	//echo $sql;
	
	$res = $link->Execute($sql);
	$i = 0;
	if (!isset($res)){
	}else{
		while (!$res->EOF){
			$i++;
		$res->MoveNext();
		}
	}
	
	echo "<table width='20%' align='center' class='alldotted'>\n";
	echo "<tr>\n";
	echo "<td align='center' class='dottedul'>\n";
	echo "<b>\n";
	echo $c_fname." ".$c_lname;
	echo "</b>\n";
	echo "</td>\n";
	echo "</tr>\n";
	echo "<tr>\n";
	echo "<td align='center' class='dottedul'>\n";
	echo "<b>\n";
	echo $i." out of ".$cntNum." Ticket(s) Found\n";
	echo "</b>\n";
	echo "</td>\n";
	echo "</tr>\n";
	
	$res = $link->Execute($sql);
	
	if (!isset($res)){
	}else{
		while (!$res->EOF){
			//$id = $res->Fields['id']->Value;
			$ref_num = $res->Fields['ref_num']->Value;
			echo "<tr><td align='center'>".$ref_num."</td></tr>";		
		$res->MoveNext();
		}
	}
	ado_free_result( $res );
	ado_close( $link );
}
?> 
</table>