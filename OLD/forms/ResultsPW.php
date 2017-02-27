<?php
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
					Profitable PW
				</b>
			</td>
		</tr>
	</thead>
	<tbody>
		<?php
			$fArr = array('prop', 'htype', 'name', 'proppw');
			if (isset($res)){
				while (!$res->EOF){
					for ($i = 0; $i < count($fArr); $i++){
						$$fArr[$i] = $res->Fields[$fArr[$i]]->Value;
						if (empty($$fArr[$i])){
							$$fArr[$i] = '&nbsp;';
						}
					}
				for ($i = 0; $i < 4; $i++){
					if (($prop[$i] == 'A') || ($prop[$i] == 'B') || ($prop[$i] == 'C')){
						$temp[$i] = 'r';
					}else if (($prop[$i] == 'D') || ($prop[$i] == 'E') || ($prop[$i] == 'F')){
						$temp[$i] = 'o';
					}else if (($prop[0] == 'G') || ($prop[$i] == 'H') || ($prop[$i] == 'I')){
						$temp[$i] = 'f';
					}else if (($prop[$i] == 'J') || ($prop[$i] == 'K') || ($prop[$i] == 'L')){
						$temp[$i] = 'i';
					}else if (($prop[$i] == 'M') || ($prop[$i] == 'N') || ($prop[$i] == 'O')){
						$temp[$i] = 't';
					}else if (($prop[$i] == 'P') || ($prop[$i] == 'Q') || ($prop[$i] == 'R') || ($prop[$i] == 'S')){
						$temp[$i] = 'a';
					}else if (($prop[$i] == 'T') || ($prop[$i] == 'U') || ($prop[$i] == 'V')){
						$temp[$i] = 'b';
					}else if (($prop[$i] == 'W') || ($prop[$i] == 'X') || ($prop[$i] == 'Y') || ($prop[$i] == 'Z')){
						$temp[$i] = 'l';
					}
				}
				$proppw = 'zinck'.$temp[0].$temp[1].$temp[2].$temp[3];
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
						".$proppw."
					</td>
				</tr>\n";
				
			/*$link2 = ado_connect( $dsn );
			$sql2 = "UPDATE prop SET proppw = '".$proppw."' WHERE prop = '".$prop."'";
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