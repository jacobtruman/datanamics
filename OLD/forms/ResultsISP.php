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
					Router IP
				</b>
			</td>
			<td align='center'>
				<b>
					Supported
				</b>
			</td>
			<td align='center'>
				<b>
					Hotel Brand
				</b>
			</td>
			<td align='center'>
				<b>
					Property Name
				</b>
			</td>
		</tr>
	</thead>
	<tbody>
		<?php
			$fArr = array('prop', 'htype', 'name', 'active', 'rtr', 'rtrsup', 'isp_name');
			if (isset($res)){
				while (!$res->EOF){
					for ($i = 0; $i < count($fArr); $i++){
						$$fArr[$i] = $res->Fields[$fArr[$i]]->Value;
						if (empty($$fArr[$i])){
							$$fArr[$i] = '&nbsp;';
						}
					}
					if ($active == "Yes"){
						echo "<tr>
							<td>
								".$prop."
							</td>
							<td>
								".$rtr."
							</td>
							<td>
								".$rtrsup."
							</td>
							<td>
								".$htype."
							</td>
							<td>
								".$name."
							</td>
						</tr>\n";
					}
				$res->MoveNext();
				}
			}
		?>
	</tbody>
</table>
</td>
</tr>
</table>
</body>