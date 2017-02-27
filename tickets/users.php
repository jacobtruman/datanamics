<HEAD>
	<Title>
		No Service Type Check
	</Title>
	<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<BR>
<BR>
<?php
set_time_limit(900);
$numTot = 0;
$theCnt = 0;

$root = 'D:/inetpub/support';
include($root.'/support_web/components/dbcon.php');


$link = ado_connect( "AHD" , "SQL" );
	$sql = "SELECT count(ref_num) AS cntNum FROM call_req INNER JOIN ctct ON call_req.assignee = ctct.id WHERE (call_req.support_lev IS NULL)";
	//echo $sql;
	
	$res = $link->Execute($sql);
	if (!isset($res)){
	}else{
		while (!$res->EOF){
			$cntNum = $res->Fields['cntNum']->Value;
		$res->MoveNext();
		}
	}

	ado_free_result( $res );
	ado_close( $link );

	
echo "<table width='20%' align='center' class='alldotted'><tr><td align='center'>\n";
echo "<font size='2'><b>Total Tickets Without Service Type: ".$cntNum."</b></font>\n";
echo "</td></tr></table>\n";

$link = ado_connect( "AHD" , "SQL" );
	$sql = "SELECT DISTINCT c_userid, c_last_name, c_first_name, ctct.id FROM ctct INNER JOIN call_req ON ctct.id = call_req.assignee WHERE c_userid IS NOT NULL ORDER BY c_userid";
	//echo $sql;
	
	$i = 0;
	$res = $link->Execute($sql);
	echo "<table border='0' bordercolor='#000000' cellpadding='3' cellspacing='0' align='center' width='100%'>\n";
	if (!isset($res)){
	}else{
		while (!$res->EOF){
			$id = $res->Fields['id']->Value;
			$c_userid = $res->Fields['c_userid']->Value;
			$c_last_name = $res->Fields['c_last_name']->Value;
			$c_first_name = $res->Fields['c_first_name']->Value;
			//echo "<tr><td>".++$i."</td><td>".$c_userid."</td><td>".$c_last_name."</td><td>".$c_first_name."</td><td>".$id."</td></tr>";

			$link2 = ado_connect( "AHD" , "SQL" );
			$sql2 = "SELECT count(ref_num) AS numCnt FROM call_req WHERE (assignee = '".$id."') AND (support_lev IS NULL) GROUP BY assignee";
			//echo $sql2."<BR>";

			$numCnt = 0;
			$res2 = $link2->Execute($sql2);
			if (!isset($res2)){
			}else{
				while (!$res2->EOF){
					$numCnt = $res2->Fields['numCnt']->Value;
					$res2->MoveNext();
					$numTot += $numCnt;
			}
		}

		ado_free_result( $res2 );
		ado_close( $link2 );
	
		if($numCnt > 0){
			$link3 = ado_connect( "AHD" , "SQL" );
			$sql3 = "SELECT ref_num FROM call_req WHERE (assignee = '".$id."') AND (support_lev IS NULL) ORDER BY ref_num";
			//echo $sql3;

			echo "<tr><td><table width='20%' align='center' class='alldotted'>\n";
			echo "<tr>\n";
			echo "<td align='center' class='dottedul'>\n";
			echo "<b>\n";
			echo strtoupper($c_userid)." - ".$c_first_name." ".$c_last_name." - ".$numCnt;
			echo "</b>\n";
			echo "</td>\n";
			echo "</tr>\n";

			$res3 = $link3->Execute($sql3);

			if (!isset($res3)){
			}else{
				while (!$res3->EOF){
					//$id = $res->Fields['id']->Value;
					$ref_num = $res3->Fields['ref_num']->Value;
					echo "<tr><td align='center'>".$ref_num."</td></tr>";		
				$res3->MoveNext();
				}
			}
			ado_free_result( $res3 );
			ado_close( $link3 );
			echo "</table></td></tr>\n";
		}

		$res->MoveNext();
		}
	}
	ado_free_result( $res );
	ado_close( $link );
	echo "</table>\n";
?> 
</table>
<BR>
<BR>