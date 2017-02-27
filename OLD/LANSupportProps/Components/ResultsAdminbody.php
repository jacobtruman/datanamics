<?
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
echo "<BR><center>".$p." Record(s) Found</center><BR><center>".$i." Active Properties Found</center><BR>";

//
//	First Row - titles
//

?>
<table width='90%' border='0' cellpadding='1' cellspacing='2' align='center' class='alldashed'>
	<thead>
		<tr>
			<td class='alldotted' align='center'><b>Property Code</b></td>
			<td class='alldotted' align='center'><b>Property Name</b></td>
			<td class='alldotted' align='center'><b>Notes</b></td>
			<td class='alldotted' align='center'><b>Network Map</b></td>
			<td class='alldotted' align='center'><b>Supported</b></td>
			<td class='alldotted' align='center'><b>Not Supported</b></td>
			<td class='alldotted' align='center'><b>IP Info</b></td>
		</tr>
	</thead>
<tbody>
<script>
function formopen (subform)
{
  subform.submit() ;
}
</script>
<?php

if (!isset($res)){
}else{
	while (!$res->EOF){
		for ($i = 0; $i < ado_num_fields($res); $i++){
			$db_field = ado_field_name($res, $i);
			$$db_field = $res->Fields[$db_field]->Value;
		}

//
//	Next Row - regular buttons
//

		echo "<tr><td align='center' rowspan='2' class='alldotted'>\n";
		echo $prop;
	echo "</td><td class='alldotted' align='center'>\n";
	echo "<form name='contactform".$prop."' method='POST' action='/support_web/LANSupportProps/components/ContactInformation.php' target='_blank'>\n";
	echo "<input type='hidden' name='prop' value='".$prop."'>\n";
	echo "<input type='submit' name='submit' value='".$name."' class='textbutton' style='color: green'>";
	echo "</form>\n";
	echo "</td>\n";
	if ($notes != ''){
		echo "<td class='alldotted' align='center'>\n";
		echo "<form name='notes".$prop."' method='POST' action='/support_web/LANSupportProps/components/notes.php' target='_blank'>\n";
		echo "<input type='hidden' name='prop' value='".$prop."'>\n";
		echo "<input type='submit' name='submit' value='Notes' class='textbutton' style='color: #A000BD'>\n";
		echo "</form>\n";
	}else{
		echo "<td class='alldotted' align='center'>\n";
		echo "<font size='2' face='Verdana' color='#C0C0C0'>";
		echo "No Notes</font>\n";
	}
	echo "</td><td class='alldotted' align='center'>\n";
	echo "<form name='form2".$prop."' method='POST' action='/support_web/LANSupportProps/components/NetworkMap.php' target='_blank'>\n";
	echo "<input type='hidden' name='prop' value='".$prop."'>\n";
	echo "<input type='submit' name='submit' value='Network Map' class='textbutton' style='color: #0000FF'>";
	echo "</form>\n";
	echo "</td><td class='alldotted' align='center'>\n";
	
	echo "<form name='overform".$prop."' method='POST' action='/support_web/LANSupportProps/components/supported.php' target='_blank'>\n";
	echo "<input type='hidden' name='prop' value='".$prop."'>\n";
	echo "<input type='hidden' name='supp' value='Yes'>\n";
	echo "<input type='submit' name='submit' value='Supported' class='textbutton' style='color: green'>";
	echo "</form>\n";
	echo "</td><td class='alldotted' align='center'>\n";
	
	echo "<form name='overform".$prop."' method='POST' action='/support_web/LANSupportProps/components/supported.php' target='_blank'>\n";
	echo "<input type='hidden' name='prop' value='".$prop."'>\n";
	echo "<input type='hidden' name='supp' value='No'>\n";
	echo "<input type='submit' name='submit' value='Not Supported' class='textbutton' style='color: green'>";
	echo "</form>\n";
	echo "</td><td class='alldotted' align='center'>\n";
	
	echo "<form name='ipform".$prop."' method='POST' action='/support_web/LANSupportProps/components/ipinfo.php' target='_blank'>\n";
	echo "<input type='hidden' name='prop' value='".$prop."'>\n";
	echo "<input type='submit' name='submit' value='IP Info' class='textbutton' style='color: green'>";
	echo "</form>\n";
	echo "</td></tr>\n";

//
//	Next Row - modify buttons
//

		echo "<tr><td align='center' class='alldotted'>\n";
		echo "<form name='prop".$prop."' method='POST' action='/support_web/LANSupportProps/components/update_property.php' target='_blank'>\n";
		echo "<input type='hidden' name='prop' value='".$prop."'>\n";
		echo "<input type='submit' name='submit' value='General Info' class='textbutton' style='color: #A000BD'>\n";
		echo "</form>\n";
		

		echo "</td><td align='center' class='alldotted'>\n";
		echo "<form name='prop".$prop."' method='POST' action='/support_web/LANSupportProps/components/update_notes.php' target='_blank'>\n";
		echo "<input type='hidden' name='prop' value='".$prop."'>\n";
		echo "<input type='submit' name='submit' value='Notes' class='textbutton' style='color: #A000BD'>\n";
		echo "</form>\n";

		echo "</td><td colspan='1' align='center' class='alldotted'>\n";
		echo "<form name='prop".$prop."' method='POST' action='/support_web/LANSupportProps/components/update_contact.php' target='_blank'>\n";
		echo "<input type='hidden' name='prop' value='".$prop."'>\n";
		echo "<input type='submit' name='submit' value='Contact Info' class='textbutton' style='color: #FF0000'>\n";
		echo "</form>\n";
		
		echo "<td><br></td><td><br></td>";
		
		echo "</td><td align='center' class='alldotted'>\n";
		echo "<form name='prop".$prop."' method='POST' action='/support_web/LANSupportProps/components/iindex.php' target='_blank'>\n";
		echo "<input type='hidden' name='prop' value='".$prop."'>\n";
		echo "<input type='submit' name='submit' value='IP Info' class='textbutton' style='color: #0000FF'>\n";
		echo "</form>\n";
		echo "</td></tr>\n";
	$gtway_type = '';
	$res->MoveNext();
	}
ado_free_result( $res );
ado_close( $link );
}
echo "</tbody></table>
			</td>
		</tr>
		<tr>
			<td bgcolor='#F0F0F0'>
				<BR><BR><BR>
			</td>
			<td>
				<BR><BR><BR>
			</td>
		</tr>
	</table>
</body>";
//include("embed.php");