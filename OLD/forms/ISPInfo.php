<?php
if ($isp_name != ''){

	$link2 = ado_connect( $dsn );

	$sql2 = "SELECT * FROM isp where (isp_name = '".$isp_name."')";
	$res2 = $link2->Execute($sql2);
	
	$parr2 = array('isp_name', 'isp_number', 'isp_contact', 'isp_hours');

	$parrcnt2 = count($parr2);
	$i = 0;
	while ($i < $parrcnt2){
		//echo $res2->Fields["$parr2[$i]"]->Value;
		$$parr2[$i] = $res2->Fields["$parr2[$i]"]->Value;
		$i++;
	}

	ado_free_result( $res2 );
	ado_close( $link2 );

	if (($isp_name != '') && ($isp_name != ' ')){
		echo "<tr>
			<td colspan='2' align='center'>
				<font size='2' face='Verdana'>
					<B>
						ISP Information
					</B>
				</font>
			</td>
			<td width='50%'>
				<font size='2' face='Verdana'>
					<br>
				</font>
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<font size='2' face='Verdana'>
					<b>
						Name:
					</b>
					".$isp_name."
				</font>
			</td>
		</tr>\n";
	}
	if (!empty($isp_number)){
		echo "<tr>
			<td colspan='2'>
				<font size='2' face='Verdana'>
					<b>
						Phone Number:
					</b>
					".$isp_number."
				</font>
			</td>
		</tr>\n";
	}
	if (!empty($isp_contact)){
		echo "<tr>
			<td colspan='2'>
				<font size='2' face='Verdana'>
					<b>
						Contact:
					</b>
					".$isp_contact."
				</font>
			</td>
		</tr>\n";
	}
	if (!empty($isp_hours)){
		echo "<tr>
			<td colspan='2'>
				<font size='2' face='Verdana'>
					<b>
						Hours:
					</b>
					".$isp_hours."
				</font>
			</td>
		</tr>\n";
	}
	echo "<tr>
		<td colspan='2'>
			<font size='2' face='Verdana'>";
			if (($isp_circuit != '') && ($isp_circuit != ' ')){
				echo "<b>
					Account/PIN/Circuit/DSL #:
				</b>".$isp_circuit;
			}
			echo "</font>
		</td>
	</tr>\n";
}
?>