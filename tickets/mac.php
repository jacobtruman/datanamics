<HEAD>
	<Title>
		Ticket Lookup by Description
	</Title>
	<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<body OnLoad='document.theform.mac.focus();'>
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
					Ticket Lookup by Description
				</b>
			</td>
		</tr>
		<tr>
			<td align='right' width='50%'>
				<b>
					Description:
				</b>
			</td>
			<td>
				<input type='text' name='mac' value='<?php echo $_POST['mac'];?>' class='formfield' size='20'>
			</td>
		</tr>
		<tr>
			<td align='right' width='50%'>
				<b>
					Days Previous
				</b>
			</td>
			<td>
				<input type='text' name='daysBack' value='<?php echo $_POST['daysBack'];?>' class='formfield' size='5'>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<input type='submit' value='Submit' class='formbutton'>
			</td>
			<td>
				<input type='reset' value='Reset' class='formbutton'>
			</td>
		</tr>
	</table>
</form>

<?php

$today = getdate();

$day = 86400;

if(empty($_POST['daysBack'])){
	$daysb = 5;
}else{
	$daysb = $_POST['daysBack'];
}

$difDate = $today[0] - ($day * $daysb);

$root = 'D:/inetpub/support';
include($root.'/support_web/components/dbcon.php');

$i = 0;
$link = ado_connect( "AHD" , "SQL" );
if(!empty($_POST['mac'])){
	$sql = "SELECT call_req_id, description, last_mod_dt FROM act_log WHERE (description LIKE '%".$_POST['mac']."%') AND (last_mod_dt >= '".$difDate."')";
//	echo $sql;
	
	$res = $link->Execute($sql);
	if (isset($res)){
		while (!$res->EOF){
			if($i % 2 == 0){
				$bgColor = "#E0E0E0";
			}else{
				$bgColor = "#FFFFFF";
			}
			$call_req_id = $res->Fields['call_req_id']->Value;
			$description = $res->Fields['description']->Value;
			$last_mod_dt = $res->Fields['last_mod_dt']->Value;

			$link2 = ado_connect( "AHD" , "SQL" );
			$sql2 = "SELECT ref_num FROM call_req WHERE (id = '".substr($call_req_id, 3)."')";
			//echo $sql2;

			$res2 = $link2->Execute($sql2);

			$ref_num = $res2->Fields['ref_num']->Value;

			ado_free_result( $res2 );
			ado_close( $link2 );

			echo "<table width='600' align='center' class='alldotted' style='margin: 20px;'>
				<tr>
					<td align='center' class='alldotted' bgcolor='".$bgColor."'>
						".$ref_num."
					</td>
					<td align='center' class='alldotted' bgcolor='".$bgColor."'>
						".$last_mod_dt."
					</td>
				</tr>
				<tr>
					<td align='center' colspan='2' class='alldotted' bgcolor='".$bgColor."'>
						".$description."
					</td>
				</tr>
			</table>";
		$res->MoveNext();
		$i++;
		}
	}
	ado_free_result( $res );
	ado_close( $link );
}
?>
