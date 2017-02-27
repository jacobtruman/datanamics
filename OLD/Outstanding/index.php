<?php
//ini_set ('display_errors', 'on');
$ptype = 'Oustanding Issues';
include ('header.php');
include ('vargen.php');

if(empty($orderby)){
	$orderby = 'ticket';
}

$colspan = 6;

if (empty($sqlWhere)){
	$sqlWhere = "(Active = 'True')";
}

if($flag == 'all'){
	$sqlWhere = "(Active IN ('True','False'))";
	$colspan = 7;
}elseif($flag == 'wap'){
	$sqlWhere = "(affected_devices = '2') AND (Active = 'True')";
}elseif($flag == 'mjr'){
	$sqlWhere = "(affected_devices = '1') AND (Active = 'True')";
}

$link = ado_connect( $dsn );

$list = 'ticket,property,comments,updated_date,updated_by,assigned_to,active';
$fields = explode(',', $list);

$sql = "SELECT * FROM OustandingIssues WHERE ".$sqlWhere." ORDER BY ".$orderby;
//echo $sql;
$res = $link->Execute($sql);


echo "<br>\n";
echo "<table width='100%' height='100%' align='center' border='0'>
	<tr>
		<td>
			<table width='35%' align='left' border='1' bordercolor='#000000' cellpadding='5' cellspacing='0'>
				<tr>
					<td>
						<b>
							Note:<br>
							* = Router not supported<br>
							** = Install was not done by Datanamics<br>
							*** = Router not supported and install was not done by Datanamics<br>
						</b>
					</td>
				</tr>
			</table>
			<br>
		</td>
	</tr>
	<tr>
		<td>
			<table width='95%' align='center' border='1' bordercolor='#000000' cellpadding='5' cellspacing='0'>
				<tr>
					<td colspan='".$colspan."' height='40' align='center'>
						<font size='4'>
							<b>
								Oustanding Issues ".date('m/d/Y g:i A')."
							</b>
						</font>
					</td>
				</tr>
				<tr>
		<td width='10%'>
			<b>
				<a href='index.php?orderby=ticket&flag=".$flag."'>
					Ticket #
				</a>
			</b>
		</td>
		<td width='23%'>
			<b>
				<a href='index.php?orderby=pname&flag=".$flag."'>
					Property
				</a>
			</b>
		</td>
		<td width='10%'>
			<b>
				<a href='index.php?orderby=updated_date&flag=".$flag."'>
					Last Update Date
				</a>
			</b>
		</td>
		<td width='11%'>
			<b>
				Last Updated by
			</b>
		</td>
		<td width='11%'>
			<b>
				<a href='index.php?orderby=assigned_to&flag=".$flag."'>
					Assigned to
				<a/>
			</b>
		</td>
		<td width='11%'>
			<b>
				Service Desk Ticket Status
			</b>
		</td>";
		
		if($flag == 'all'){
			echo "<td width='11%'>
				<b>
					<a href='index.php?orderby=active&flag=".$flag."'>
						Active
					<a/>
				</b>
			</td>";
		}
	echo "</tr>\n";
$j = 0;
if (isset($res)){
	while (!$res->EOF){
		for ($i = 0; $i < count($fields); $i++){
			$$fields[$i] = $res->Fields[$fields[$i]]->Value;
			if (empty($$fields[$i])){
				$$fields[$i] = "&nbsp;";
			}
		}
		if($j % 2 == 0){
			if($active == "Closed"){
				$bgColor = '#FF0000';
			}else{
				$bgColor = '#E0E0E0';
			}
		}else{
			if($active == "Closed"){
				$bgColor = '#FF5F5F';
			}else{
				$bgColor = '#FFFFFF';
			}
		}
		echo "<tr>
		<td width='10%' bgcolor='".$bgColor."'>";
			include ("rtrsupport.php");
			echo "<a href='update.php?ticket=".$ticket."' target='_blank' class='fing'>".$ticket."</a>
		</td>
		<td width='23%' bgcolor='".$bgColor."'>";
		include ("propname.php");
		echo $name." ".$htype;
		echo "</td>
		<td width='10%' bgcolor='".$bgColor."'>
			".$updated_date."
		</td>
		<td width='11%' bgcolor='".$bgColor."'>
			".$updated_by."
		</td>
		<td width='11%' bgcolor='".$bgColor."'>
			".$assigned_to."
		</td>
		<td width='11%' bgcolor='".$bgColor."'>";
		include ("sdstatus.php");
		echo "</td>";
		if($flag == 'all'){
			echo "<td width='11%' bgcolor='".$bgColor."'>
				".$active."
			</td>";
		}
	echo "</tr>
	<tr>
		<td width='35%' colspan='".$colspan."' bgcolor='".$bgColor."'>
			".nl2br($comments)."
		</td>
	</tr>\n";
	$j++;
	$res->MoveNext();
	}

	ado_free_result( $res );
	ado_close( $link );
}

echo "</table><br>\n";
echo "<table width='45%' align='center'>\n";
echo "<tr>
		<td align='center'>
			<form action='add.php' target='_blank' method='POST' name='addform'>
			<input type='submit' value='Add New' class='formbutton'>
			</form>
		</td>
		<td align='center'>
			<form action='index.php' method='POST' name='refresh'>
			<input type='submit' value='Refresh' class='formbutton'>
			</form>
		</td>
		<td align='center'>
			<form action='index.php' method='POST' name='ShowWAP'>
			<input type='submit' value='Show WAP' class='formbutton'>
				<input type='hidden' name='flag' value='wap'>
			</form>
		</td>
		<td align='center'>
			<form action='index.php' method='POST' name='mjrequip'>
			<input type='submit' value='Show Major Equip' class='formbutton'>
				<input type='hidden' name='flag' value='mjr'>
			</form>
		</td>
		<td align='center'>
			<form action='index.php' method='POST' name='Allinfo'>
			<input type='submit' value='Show All' class='formbutton'>
				<input type='hidden' name='flag' value='all'>
			</form>
		</td>
	</tr>";
echo "</table></td></tr></table>\n";
?>