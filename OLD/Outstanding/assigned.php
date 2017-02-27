<?php
//ini_set ('display_errors', 'on');
$ptype = 'Assigned Oustanding Issues';
include ('header.php');
include ('vargen.php');

?>
<table width='100%'>
<tr>
<td>
<form action='assigned.php' method='POST' name='assigned_form'>
<table border='2' cellpadding='2' cellspacing='2' align='center' height='20' width='35%' valign='center'>
	<td align='center'>
		<b>
			Assigned To:
		</b>
	</td>
	<td align='center'>
		<select name='assigned_to' class='formfield'>
			<option></option>
				<?php
					include ("userList.php");
					for($i = 0; $i < count($names); $i++){
						echo "<option value='".$names[$i]."'>".$names[$i]."</option>\n";
					}
				?>
		</select>
	</td>
	<tr>
		<td colspan='2' align='center'>
			<input type='submit' value='Submit' class='formbutton'>
		</td>
	</tr>
</table>
</form>
</td>
</tr>
<tr>
<td valign='top'>

<?php

if(empty($orderby)){
	$orderby = 'ticket';
}

if (empty($sqlWhere)){
	$sqlWhere = "(Active = 'True')";
}

if(isset($assigned_to)){
	$sqlWhere = "(assigned_to = '".$assigned_to."') AND (Active = 'True')";
}

$link = ado_connect( $dsn );

$list = 'ticket,property,comments,updated_date,updated_by,assigned_to,active';
$fields = explode(',', $list);

$sql = "SELECT * FROM OustandingIssues WHERE ".$sqlWhere." ORDER BY ".$orderby;
//echo $sql;
$res = $link->Execute($sql);
$colspan = 5;

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
			$bgColor = '#E0E0E0';
		}else{
			$bgColor = '#FFFFFF';
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
		</td>";
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
?>
</td>
</td>
</table>