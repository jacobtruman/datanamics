<?php
//ini_set ('display_errors', 'on');
$i = 0;
$p = 0;
while (!$res->EOF){
	if ($res->Fields['active']->value == 'Yes'){
		$i++;
	}
	$p++;
	$res->MoveNext();
}
ado_free_result( $res );
$res = $link->Execute($sql);
?>
<BR>
<BR>
<table width='90%' border='1' cellpadding='0' cellspacing='0' bordercolor='C0C0C0' align='center'>
	<thead>
		<tr>
			<td align='center'>
				<b>
					CTYHO
				</b>
			</td>
			<?php
				if(((strtolower($_SESSION['a_lgn']) == 'jtruman') || (strtolower($_SESSION['a_lgn']) == 'mstewart')) && ($gtype == 'Nomadix')){
					echo "<td align='center'>
						<b>
							Clear Unlimited
						</b>
					</td>";
				}
			?>
			<td align='center'>
				<b>
					<?php
						echo $gtype." IP\n";
					?>
				</b>
			</td>
			<td align='center'>
				<b>
					<?php
						echo $gtype." Username\n";
					?>
				</b>
			</td>
			<td align='center'>
				<b>
					<?php
						echo $gtype." Password\n";
					?>
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
			<td align='center'>
				<b>
					Gateway Version
				</b>
			</td>
			<td align='center'>
				<b>
					Gateway ID
				</b>
			</td>
		</tr>
	</thead>
<tbody>
<?php
$j = 0;
$fArr = array('prop', 'htype', 'name', 'active', 'gateway', 'lgn', 'pswd', 'gateway2', 'lgn2', 'pswd2', 'gtway_type', 'gtwayid', 'gtwayver');
if (isset($res)){
	while (!$res->EOF){
		if($j % 2 == 0){
			$bgColor = '#C0C0C0';
		}else{
			$bgColor = '#FFFFFF';
		}
		for ($i = 0; $i < count($fArr); $i++){
			$$fArr[$i] = $res->Fields[$fArr[$i]]->Value;
			if (empty($$fArr[$i])){
				$$fArr[$i] = '&nbsp;';
			}
		}
		include ($root.'/support_web/components/gLinkGen.php');
		if ($active == "Yes"){
			$j++;
			echo "<tr>
				<td bgcolor='".$bgColor."'>
					".$prop."
				</td>";
				if(((strtolower($_SESSION['a_lgn']) == 'jtruman') || (strtolower($_SESSION['a_lgn']) == 'mstewart')) && ($gtype == 'Nomadix')){
					echo "<td bgcolor='".$bgColor."'>
						<form name='unlim".$prop."' method='POST' action='/support_web/components/clearUnlimited.php' target='_blank'>
							<input type='hidden' name='prop' value='".$prop."'>
							<input type='hidden' name='lgn' value='".$lgn."'>
							<input type='hidden' name='pswd' value='".$pswd."'>
							<input type='hidden' name='ip' value='".$gateway."'>
							<input type='submit' name='submit' value='Clear Unlimited' class='textbutton' style='color: green'>
						</form>
					</td>\n";
				}
				echo "<td bgcolor='".$bgColor."'>
					<a href='".$cStr."' target='_blank'>".$gateway."</a>
				</td>
				<td bgcolor='".$bgColor."'>
					".$lgn."
				</td>
				<td bgcolor='".$bgColor."'>
					".$pswd."
				</td>
				<td bgcolor='".$bgColor."'>
					".$htype."
				</td>
				<td bgcolor='".$bgColor."'>
					".$name."
				</td>
				<td bgcolor='".$bgColor."'>
					".$gtwayver."
				</td>
				<td bgcolor='".$bgColor."'>
					".$gtwayid."
				</td>
			</tr>\n";
			for($n = 2; $n <= 4; $n++){
				if($n == 1){
					$gn[$n] = "gateway";
					$ln[$n] = "lgn";
					$pn[$n] = "pswd";
					$ncStr = "cStr";
				}else{
					$gn[$n] = "gateway".$n;
					$ln[$n] = "lgn".$n;
					$pn[$n] = "pswd".$n;
					$ncStr = "cStr".$n;
				}
				if(($$gn[$n] != '&nbsp;') && (!empty($$gn[$n]))){

				echo "<tr>
					<td bgcolor='".$bgColor."'>
						".$prop."
					</td>\n";
					if(((strtolower($_SESSION['a_lgn']) == 'jtruman') || (strtolower($_SESSION['a_lgn']) == 'mstewart')) && ($gtype == 'Nomadix')){
						echo "<td bgcolor='".$bgColor."'>
							<form name='unlim".$prop."' method='POST' action='/support_web/components/clearUnlimited.php' target='_blank'>
								<input type='hidden' name='prop' value='".$prop."'>
								<input type='hidden' name='lgn' value='".$$ln[$n]."'>
								<input type='hidden' name='pswd' value='".$$pn[$n]."'>
								<input type='hidden' name='ip' value='".$$gn[$n]."'>
								<input type='submit' name='submit' value='Clear Unlimited' class='textbutton' style='color: green'>
							</form>
						</td>\n";
					}
					echo "<td bgcolor='".$bgColor."'>
						<a href='".$$ncStr."' target='_blank'>".$$gn[$n]."</a>
					</td>
					<td bgcolor='".$bgColor."'>
						".$$ln[$n]."
					</td>
					<td bgcolor='".$bgColor."'>
						".$$pn[$n]."
					</td>
					<td bgcolor='".$bgColor."'>
						".$htype."
					</td>
					<td bgcolor='".$bgColor."'>
						".$name."
					</td bgcolor='".$bgColor."'>
					<td colspan='2' align='center' bgcolor='".$bgColor."'>
						Check above
					</td>\n";
				}
			}
		}
	$res->MoveNext();
	}
ado_free_result( $res );
ado_close( $link );
}
?>
</tbody></table>
		</td>
		</tr>
		<tr>
		<td height='30'>
		<BR>
		</td>
		</tr>
	</table>
</body>