<?php
//ini_set ('display_errors', 'on');
set_time_limit(900);
$ptype = 'Property Search Page';
$root = 'D:/inetpub/support';
include ($root."/support_web/propentry/login/session.php");
include ($root."/support_web/style_vals.php");
include_once($root.'/support_web/components/dbcon.php');

$order = 'htype, name';
$link = ado_connect( $dsn );
$sql = "SELECT * FROM prop ORDER BY ".$order;
$res = $link->Execute($sql);

$i = 0;
$p = 0;
while (!$res->EOF){
	if ($res->Fields['active']->value == 'Yes'){
		$i++;
	}
	$p++;
	$res->MoveNext();
}
$res = $link->Execute($sql);
?>
<br>
<br>
<table width='90%' border='1' cellpadding='0' cellspacing='0' bordercolor='C0C0C0' align='center'>
	<thead>
		<tr>
			<td align='center'>
				<b>
					CTYHO
				</b>
			</td>
			<td align='center'>
				<b>
					Property Type
				</b>
			</td>
			<td align='center'>
				<b>
					Property Name
				</b>
			</td>
			<td align='center'>
				<b>
					Folder
				</b>
			</td>
		</tr>
	</thead>
	<tbody>
		<?php
			$fArr = array('prop', 'htype', 'name', 'fold');
			if (isset($res)){
				while (!$res->EOF){
					for ($i = 0; $i < count($fArr); $i++){
						$$fArr[$i] = $res->Fields[$fArr[$i]]->Value;
						if (empty($$fArr[$i])){
							$$fArr[$i] = '&nbsp;';
						}
					}
				include($root.'/support_web/components/oddprops.php');
				echo "<tr>
					<td>
						".$prop."
					</td>
					<td>
						".$htype."
					</td>
					<td>
						".$name."
					</td>
					<td>
						".$fold."
					</td>
				</tr>\n";
				
			/*$link2 = ado_connect( $dsn );
			$sql2 = "UPDATE prop SET fold = '".$thelink."' WHERE prop = '".$prop."'";
			$res2 = $link2->Execute($sql2);
			ado_free_result( $res2 );
			ado_close( $link2 );*/
			
	$res->MoveNext();
	}
ado_free_result( $res );
ado_close( $link );
}
	echo "</tbody>
</table>
<BR>
</table>
</body>";
?>
<!-- Created/Modified by Jacob Truman -->