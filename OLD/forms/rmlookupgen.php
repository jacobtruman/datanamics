<?php
$root = 'D:/inetpub/support';
include($root.'/support_web/components/dbcon.php');
$dsn = $root."/support_web/fpdb/propinfo.mdb";

if (isset($_POST['who'])){
	$who = $_POST['who'];
}else if (isset($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);
	$who = $vars['who'];
}

if($who == 'jtruman'){
	$table = 'myrmlookgen';
}else{
	$table = 'rmlookgen';
}

$dtype = "Access";
$link = ado_connect( $dsn, $dtype );
$order = 'd_ip';
$sql = "SELECT * FROM ".$table." ORDER BY ".$order;
//echo $sql;
$res = ado_query( $link, $sql );

echo "<table border='1' bordercolor='#000000' cellpadding='0' cellspacing='0' width='85%' align='center'>\n";
while (!$res->EOF){
	for ($i = 0; $i < ado_num_fields($res); $i++){
		$db_field = ado_field_name($res, $i);
		$$db_field = $res->Fields[$db_field]->Value;
	}

$chars = split(",", $rms);
for($i = 0; $i < count($chars); $i++){

// if a list, generate all numbers in list

	if (strpos($chars[$i], "-")){
		$chars2 = split("-", $chars[$i]);

// Put in numeric order (smallest to largest) if it is not already

		if ($chars2[0] > $chars2[1]){
//			echo $chars2[0]." ".$chars2[1]."<BR>";
			$temp = $chars2[0];
			$chars2[0] = $chars2[1];
			$chars2[1] = $temp;
//			echo $chars2[0]." ".$chars2[1]."<BR>";
		}
		for ($j = $chars2[0]; $j <= $chars2[1]; $j++){
			echo "<tr>
				<td>
					".$j."
				</td>
				<td>
					".$d_name."
				</td>
				<td>
					".$d_ip."
				</td>
				<td>
					".$port."
				</td>
				<td>
					".$vlan."
				</td>
				<td>
					".$c_type."
				</td>
				<td>
					".$c_port."
				</td>
				<td>
					".$gtway."
				</td>
			</tr>\n";
		}

// If a single room, generate just that room

	}else{
		echo "<tr>
			<td>
				".$chars[$i]."
			</td>
			<td>
				".$d_name."
			</td>
			<td>
				".$d_ip."
			</td>
			<td>
				".$port."
			</td>
			<td>
				".$vlan."
			</td>
			<td>
				".$c_type."
			</td>
			<td>
				".$c_port."
			</td>
			<td>
				".$gtway."
			</td>
		</tr>\n";
	}
}

$res->MoveNext();
}
echo "</table>\n";
ado_free_result( $res );
ado_close( $link );

?>