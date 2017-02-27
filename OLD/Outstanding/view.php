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
	$sqlWhere = "(affected_devices = '2')";
}elseif($flag == 'mjr'){
	$sqlWhere = "(affected_devices = '1')";
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
				<a href='view.php?orderby=ticket&flag=".$flag."'>
					Ticket #
				</a>
			</b>
		</td>
		<td width='23%'>
			<b>
				<a href='view.php?orderby=pname&flag=".$flag."'>
					Property
				</a>
			</b>
		</td>
		<td width='35%'>
			<b>
				Comments
			</b>
		</td>
		<td width='10%'>
			<b>
				<a href='view.php?orderby=updated_date&flag=".$flag."'>
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
				<a href='view.php?orderby=assigned_to&flag=".$flag."'>
					Assigned to
				<a/>
			</b>
		</td>";
		
		if($flag == 'all'){
			echo "<td width='11%'>
				<b>
					<a href='view.php?orderby=active&flag=".$flag."'>
						Active
					<a/>
				</b>
			</td>";
		}
	echo "</tr>\n";
if (isset($res)){
	while (!$res->EOF){

		for ($i = 0; $i < count($fields); $i++){
			$$fields[$i] = $res->Fields[$fields[$i]]->Value;
			if (empty($$fields[$i])){
				$$fields[$i] = "&nbsp;";
			}
		}
		echo "<tr>
		<td width='10%'>";
			include ("rtrsupport.php");
			//echo "<a href='update.php?ticket=".$ticket."' target='_blank' class='fing'>".$ticket."</a>
			echo $ticket."
		</td>
		<td width='23%'>";
		include ("propname.php");
		echo $name." ".$htype;
		echo "</td>
		<td width='35%'>
			".nl2br($comments)."
		</td>
		<td width='10%'>
			".$updated_date."
		</td>
		<td width='11%'>
			".$updated_by."
		</td>
		<td width='11%'>
			".$assigned_to."
		</td>";
		if($flag == 'all'){
			echo "<td width='11%'>
				".$active."
			</td>";
		}
	echo "</tr>\n";
	$res->MoveNext();
	}

	ado_free_result( $res );
	ado_close( $link );
}

echo "</table><br></td></tr></table>\n";
?>